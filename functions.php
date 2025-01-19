<?php
/**
 * Bathe functions
 *
 * @package Bathe
 */

/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */

 function allow_html_in_title($title, $id = null) {
	// Define allowed HTML tags
	$allowed_tags = array(
			'a'      => array(
					'href' => array(),
					'title' => array()
			),
			'br'     => array(),
			'em'     => array(),
			'strong' => array(),
			'span'   => array(
					'class' => array()
			),
	);

	// Check if we're in the main query, to avoid filtering everywhere
	if (is_main_query() && in_the_loop() && !is_admin()) {
			// Use wp_kses to allow only the defined HTML tags
			return wp_kses($title, $allowed_tags);
	}

	return $title;
}
add_filter('the_title', 'allow_html_in_title', 10, 2);





 function custom_excerpt_length( $length ) {
	return 30; // Change 20 to the desired number of words
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_action(
	'after_setup_theme',
	function () {
		load_theme_textdomain( 'bathe', get_theme_file_uri( 'languages' ) );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'bathe_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 200,
				'width'       => 50,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'bathe' ),
			)
		);
	}
);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action(
	'after_setup_theme',
	function () {
		$GLOBALS['content_width'] = apply_filters( 'bathe_content_width', 960 );
	},
	0
);

/**
 * Register widget area.
 */
add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'bathe' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
);

/**
 * Enqueue scripts and styles.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
	
		wp_enqueue_style( 'bathe', get_theme_file_uri( 'assets/css/main.css' ), array());
		wp_enqueue_style( 'tailwind', get_theme_file_uri( 'assets/css/tailwind.css' ), array());
		wp_enqueue_style( 'lightboxCSS', get_theme_file_uri( 'assets/css/lightbox.min.css' ), array());
		wp_enqueue_style( 'splideCSS', get_theme_file_uri( 'assets/css/splide.min.css' ), array());
	}
);



// Enqueue scripts with defer attribute
function custom_enqueue_scripts() {
	// Register and enqueue scripts
	wp_enqueue_script( 'jquery', get_theme_file_uri( 'assets/js/jquery.min.js' ));
	wp_enqueue_script('splide', get_theme_file_uri('assets/js/splide.js'), array('jquery'), '3.0.1', true);
	wp_enqueue_script('lightbox', get_theme_file_uri('assets/js/lightbox.js'), array('jquery'), '3.0.1', true);
	wp_enqueue_script( 'mainJS', get_theme_file_uri( 'assets/js/main.js' ), array('jquery'), '3.0.1', true );

	// Add defer attribute to specific scripts
	add_filter('script_loader_tag', function($tag, $handle, $src) {
			// List of handles to defer
			$defer_scripts = ['jquery', 'splide', 'lightbox', 'mainJS'];
			
			if (in_array($handle, $defer_scripts, true)) {
					// Add defer attribute
					return str_replace(' src', ' defer src', $tag);
			}

			return $tag;
	}, 10, 3);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');


// Function to track post views
function set_post_views(){
  if ( is_singular('post') ) {
    $post_ID = get_the_ID();
    $post_views = (int) get_post_meta( $post_ID, 'post_views', true );
    if ( !is_user_logged_in() ) {
      $post_views = ( empty( $post_views ) ? 0 : $post_views );
      $post_views++;
      update_post_meta( $post_ID, 'post_views', $post_views );
    }
  }
}
add_action( 'wp_head', 'set_post_views');

// Function to retrieve post views
function get_post_views(){
  $post_ID = get_the_ID();
  $views = (int) get_post_meta( $post_ID, 'post_views', true );
  return $views;
}

/*PERFORMANCE*/
function remove_admin_bar() {
	return false;
}
add_filter( 'show_admin_bar', 'remove_admin_bar' );



// Add lazy loading to the_post_thumbnail
add_filter( 'wp_get_attachment_image_attributes', 'add_lazy_loading_to_thumbnail', 10, 3 );

function add_lazy_loading_to_thumbnail( $attr, $attachment, $size ) {
    // Check if 'loading' attribute already exists
    if ( !isset( $attr['loading'] ) ) {
        $attr['loading'] = 'lazy'; // Add lazy loading attribute
    }
    return $attr;
}

// remove dashicons in frontend to non-admin
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
			return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );


function enqueue_admin_css() {
	if ( is_admin() ) { 
			wp_enqueue_style( 
					'block-library-admin', 
					get_template_directory_uri() . '/wp-includes/css/dist/block-library/style.min.css', 
					array(), 
					'6.7.1' 
			);
	}
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_css' );





function agregar_encabezados_cache() {
	if ( !is_admin() ) {
			header("Cache-Control: public, max-age=31557600");
			header("Expires: " . gmdate('D, d M Y H:i:s', time() + 31557600 ) . ' GMT');
	}
}
add_action('send_headers', 'agregar_encabezados_cache');