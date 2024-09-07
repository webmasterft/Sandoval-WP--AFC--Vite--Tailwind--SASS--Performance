
<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
			'category_name' => 'blog',
			'paged' => $paged,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 3,
			'post_status' => 'publish', // Ensure only published posts are retrieved
    	'orderby' => 'date', // Order by published date
    	'order' => 'DESC' // Descending order (newest first)
	);
	$query = new WP_Query( $args );
?>

	<h3 class="section-title">Historial de Artículos:</h3>
	<div class="grid md:grid-cols-3 gap-[20px]">
	<?php
		while ( $query->have_posts() ) : $query->the_post();?>
		<div>
			<?php get_template_part( 'template-parts/loop-blog-item', 'page' ); ?>
		</div>
		<?php endwhile;?>
		</div>

		<?php
			$big = 999999999; // Need an unlikely integer
			$pagination_args = array(
				'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'format'  => '?paged=%#%',
				'current' => max(1, get_query_var('paged')),
				'total'   => $query->max_num_pages,
				'prev_text' => __('<span><svg xmlns="http://www.w3.org/2000/svg" width="11.115" height="18" viewBox="0 0 11.115 18">
  					<path id="Icon_material-last-page" data-name="Icon material-last-page" d="M8.385,11.115,15.27,18,8.385,24.885,10.5,27l9-9-9-9Z" transform="translate(19.5 27) rotate(180)" fill="#0071b9"/></svg></span>Previous'), // Custom previous button text
        'next_text' => __('Next <span><svg xmlns="http://www.w3.org/2000/svg" width="11.115" height="18" viewBox="0 0 11.115 18">
  <path id="Icon_material-last-page" data-name="Icon material-last-page" d="M8.385,11.115,15.27,18,8.385,24.885,10.5,27l9-9-9-9Z" transform="translate(-8.385 -9)" fill="#0071b9 </span>"/>
</svg>
')
		);

		echo '<div class="pagination">';
		echo paginate_links($pagination_args);
		echo '</div>';

		// Restore original post data
		wp_reset_postdata();
?>







