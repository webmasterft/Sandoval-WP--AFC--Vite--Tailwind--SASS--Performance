

<?php

		if( get_row_layout() == 'slider_procedimientos' ): ?>
		<!-- SLIDER PROCEDIMIENTOS -->
		<section class="relative bg-gray overflow-hidden">

			<div class="container">
				<h3 class="section-title text-center pt-[25px]">Mis servicios:</h3>
				<section class="splide procedimientos-splide h-[143px] md:h-[300px]" aria-label="Slider procedimientos">
					<?php get_template_part( './template-parts/svg/splide-arrows', 'page' ); ?>
					<div class="splide__track">
						<ul class="splide__list">
							<?php if( have_rows('slide') ): while( have_rows('slide') ) : the_row();?>
							<?php $link = get_sub_field('boton');
										$imagen = get_sub_field('imagen');
									if($link): ?>

								<li class="splide__slide relative md:h-[410px] relative">
									<a class="flex flex-col items-center max-w-[122px] text-center hover:text-tertiary"
										href="<?php echo $link['url']; ?>"
										target="<?php echo $link_target = $link['target'] ? $link['target'] : '_self';?>">

										<?php get_template_part( './template-parts/svg/mas', 'page' ); ?>

										<?php if(get_sub_field('titulo')): ?>
										<p class="text-primary text-[16px] leading-[18px] md:text-[18px] md:leading-[20px] font-bold mb-[10px] -mt-[5px] uppercase h-[60px] overflow-hidden">
											<?php the_sub_field('titulo'); ?>
										</p>
										<?php endif; ?>

										<?php if($imagen): ?>
										<img loading="lazy" class="hidden md:block" src="<?php echo esc_url($imagen['url']); ?>" alt="">
										<?php endif; ?>
									</a>
								</li>
							<?php endif; endwhile; endif;?>
						</ul>
					</div>
				</section>
			</div>

		</section>
	<!-- FIN SLIDER PROCEDIMIENTOS -->
	<?php endif;?>

	<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.procedimientos-splide', {
			type   : 'loop',
			perPage: 6,
			perMove: 1,
			pagination: false,
			breakpoints: {
				1080: {
					perPage: 3,
				},
  		}
		} );
    splide.mount();
  } );
</script>


