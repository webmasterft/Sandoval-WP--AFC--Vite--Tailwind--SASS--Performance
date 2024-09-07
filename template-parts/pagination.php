<?php
			$big = 999999999; // Need an unlikely integer
			$pagination_args = array(
				'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'format'  => '?paged=%#%',
				'current' => max(1, get_query_var('paged')),
				'total'   => $query->max_num_pages,
				'prev_text' => __('< Previous'), // Custom previous button text
        'next_text' => __('Next >')
		);

		echo '<div class="pagination">';
		echo paginate_links($pagination_args);
		echo '</div>';

		// Restore original post data
		wp_reset_postdata();
?>
