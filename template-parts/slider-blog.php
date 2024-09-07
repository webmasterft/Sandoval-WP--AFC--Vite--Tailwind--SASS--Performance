<?php
	$args = array(
			'category_name' => 'blog',
			'posts_per_page' => 5,
			'post_status' => 'publish', // Ensure only published posts are retrieved
    	'orderby' => 'date', // Order by published date
    	'order' => 'DESC' // Descending order (newest first)
	);
	$query = new WP_Query( $args );
?>

		<?php if ( $query->have_posts() ) :?>
			<section class="mt-[30px] md:mt-0 flex mb-[20px]">
				<div class="shrink-0">
					<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
				</div>
				<h2 class="text-secondary text-[20px] leading-[24px] font-medium pl-[20px] uppercase max-w-[235px] md:max-w-full">
				Encuentra las noticias <span class="font-black">  más recientes:</span></>
			</section>
					<section class="splide blog-splide" aria-label="Slider procedimientos">
						<?php get_template_part( './template-parts/svg/splide-arrows', 'page' ); ?>
						<div class="splide__track">
							<ul class="splide__list">

							<?php	while ( $query->have_posts() ) : $query->the_post();?>
								<li class="splide__slide relative">
									<?php get_template_part( 'template-parts/eyebrow', 'page' );?>
									<h2 class="text-primary text-[22px] leading-[24px] md:text-[25px] md:leading-[28px] font-semibold mb-[10px] overflow-hidden md:h-[87px]   ellipsis-3">
										<a href="<?php the_permalink();?>">
											<?php the_title(); ?>
										</a>
									</h2>

									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink();?>">
            				<?php the_post_thumbnail('medium');?>
										</a>
        					<?php endif; ?>
									<p class="text-secondary text-[17px] font-bold leading-[18px] mt-[10px]">
										> <?php echo get_the_date('F j, Y')?>
									</p>
									<div class="content mt-[10px]">
										<?php echo wp_trim_words( get_the_excerpt(), 30, '...' );?>
									</div>
									<a class="btn btn-primary" href="<?php the_permalink();?>">> Leer más</a>
								</li>
							<?php endwhile; ?>
					</ul>
				</div>
			</section>

			<?php wp_reset_postdata(); endif; ?>


	<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.blog-splide', {
			type   : 'loop',
			perPage: 2,
			perMove: 1,
			pagination: false,
			autoHeight: false,
			gap: 20,
			breakpoints: {
				1080: {
					perPage: 1,
				},
  		}
		} );
    splide.mount();
  } );
</script>


