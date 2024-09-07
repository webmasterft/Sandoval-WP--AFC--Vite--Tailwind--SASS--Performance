<?php
	$args = array(
			'category_name' => $args['category'], // Get current category slug
			'posts_per_page' => $args['quantity'],
			'post_status' => 'publish', // Ensure only published posts are retrieved
    	'orderby' => 'date', // Order by published date
    	'order' => 'DESC' // Descending order (newest first)
	);
	$query = new WP_Query( $args );
?>
