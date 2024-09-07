<?php
	$sticky_posts = get_option('sticky_posts');
	if ($sticky_posts) :
	$args = array(
			'category_name' => 'blog',
			'post__in' => $sticky_posts,  // Specify the sticky posts
      'ignore_sticky_posts' => 1,   // Ignore sticky posts in the main query
			'posts_per_page' => 1,
			'post_status' => 'publish', // Ensure only published posts are retrieved
    	'orderby' => 'date', // Order by published date
    	'order' => 'DESC' // Descending order (newest first)
	);
	$query = new WP_Query( $args );
?>
<section class="pb-[30px] md:pb-0 relative">
			<h3 class="section-title">Artículo destacado:
				<?php get_template_part( 'template-parts/eyebrow', 'page' ); ?>
			</h3>
			<?php	while ( $query->have_posts() ) : $query->the_post();?>
			<article class="destacado">
				<h3 class="text-[34px] leading-[38px] md:text-[44px] md:leading-[46px] hover:text-primary mb-[15px]">
					<a target="_self" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<div class="grid md:grid-cols-2 gap-[15px]">
					<a href="<?php the_permalink(); ?>" class="shrink-0 w-full">
						<?php if ( has_post_thumbnail() ) :
							the_post_thumbnail('full');
						endif;
						?>
					</a>
					<div class="content">
							<p class="meta text-secondart text-[17px] leading-[18px] pb-[10px] font-bold">
								> Quito, <?php echo get_the_date('F j, Y'); ?>
							</p>
							<div class="text-secondary text-[14px] leading-[18px] font-medium">
								<?php echo wp_trim_words( get_the_excerpt(), 25, '...' );?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">
								> Leer más
							</a>
					</div>
				</div>

			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</section>
<?php endif;?>
