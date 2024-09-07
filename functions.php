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
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', false );

		wp_enqueue_style( 'bathe', get_theme_file_uri( 'assets/css/main.css' ), array(), '3.0.1' );
		wp_enqueue_style( 'tailwind', get_theme_file_uri( 'assets/css/tailwind.css' ), array(), '3.3.2' );
		wp_enqueue_style( 'lightboxCSS', get_theme_file_uri( 'assets/css/lightbox.min.css' ), array(), '3.3.2' );

		wp_enqueue_script( 'jquery', get_theme_file_uri( 'assets/js/jquery.js' ), array(), '3.0.1', true );
		wp_enqueue_script( 'lightbox', get_theme_file_uri( 'assets/js/lightbox.js' ), array(), '3.0.1', true );

		wp_enqueue_script( 'splide', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js",  false );

		wp_enqueue_script( 'bathe', get_theme_file_uri( 'assets/js/main.js' ), array(), '3.0.1', true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
);


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

