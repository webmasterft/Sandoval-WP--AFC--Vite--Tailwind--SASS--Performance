<?php
	$sticky_posts = get_option('sticky_posts');
	$args = array(
			'category_name' => 'blogs',
			'post__not_in' => $sticky_posts,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 5,
			'post_status' => 'publish', // Ensure only published posts are retrieved
    	'orderby' => 'date', // Order by published date
    	'order' => 'DESC' // Descending order (newest first)
	);
	$query = new WP_Query( $args );
?>



	<h2 class="text-[26px] leading-[30px] uppercase font-bold font-saira">Artículos Recientes</h2>
	<?php
		get_template_part( 'template-parts/eyebrow', 'page' );
		while ( $query->have_posts() ) : $query->the_post();
			get_template_part( 'template-parts/loop-blog-item', 'page' );
		endwhile; wp_reset_postdata();
	?>



