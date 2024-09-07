<?php get_header(); ?>
	<section class="py-[50px] bg-gray">
		<div class="container">
			<p class="text-tertiary text-[15px] leading-[17px] underline underline-offset-2  decoration-inherit md:pb-[40px] hidden md:block">
			<span class="font-bold">
			> BLOG	>
			</span>
			<span class="text-">
				<?php the_title(); ?>
			</span>
		</p>
		</div>
		<div class="container grid md:grid-cols-[55%_40%] gap-[5%]">
			<section class="flex justify-between flex-col">
				<div>
					<div class="bg-primary w-[36px] h-[5px] mt-[10px] mb-[30px]"></div>
					<h1 class="text-[34px] leading-[38px] md:text-[46px] md:leading-[46px] text-primary mb-[15px]">
							<?php the_title(); ?>
					</h1>

					<p class="text-secondary font-bold text-[17px] leading-[18px]">> Quito, <?php echo get_the_date( 'F j, Y' ); ?></p>
					<p class="text-primary font-medium text-[14px] leading-[18px] pt-[10px]"><?php the_excerpt(); ?></p>
				</div>
				<div class="flex gap-[30px] flex-col md:flex-row justify-between items-start mt-[35px]">
					<div class="flex flex-col md:flex-row items-center gap-[15px]">
						<p class="text-secondary uppercase text-[15px] leading-[15px] font-medium flex items-center gap-[11px]">
						<?php get_template_part( 'template-parts/svg/triangulo-verde-vacio', 'page' ); ?>
						<span>Comparte este <br> artículo en:</span>
						</p>
						<!-- AddToAny BEGIN -->
						<div class="a2a_kit a2a_kit_size_32 a2a_default_style" a2a_config.icon_color = "transparent,midnightblue";>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_x"></a>
						<a class="a2a_button_threads"></a>
						<a class="a2a_button_linkedin"></a>
						</div>
						<script async src="https://static.addtoany.com/menu/page.js"></script>
						<!-- AddToAny END -->
					</div>

					<a href="contactos" class="btn btn-primary !mt-0">
					> contáctame
					</a>
				</div>
			</section>
			<section>
				<?php if ( has_post_thumbnail() ) :
						the_post_thumbnail();
					endif;
					?>
					<p class="flex gap-[15px] mt-[30px]">
					<span>
					<svg xmlns="http://www.w3.org/2000/svg" width="23.984" height="21.586" viewBox="0 0 23.984 21.586">
						<g id="Icon_material-photo-camera" data-name="Icon material-photo-camera" transform="translate(-3 -3)">
							<path id="Trazado_137" data-name="Trazado 137" d="M20.875,17.038A3.838,3.838,0,1,1,17.038,13.2,3.838,3.838,0,0,1,20.875,17.038Z" transform="translate(-2.045 -2.045)" fill="#0071b9"/>
							<path id="Trazado_138" data-name="Trazado 138" d="M11.395,3,9.2,5.4H5.4A2.406,2.406,0,0,0,3,7.8V22.188a2.406,2.406,0,0,0,2.4,2.4H24.586a2.406,2.406,0,0,0,2.4-2.4V7.8a2.406,2.406,0,0,0-2.4-2.4h-3.8L18.59,3Zm3.6,17.988a6,6,0,1,1,6-6A6,6,0,0,1,14.992,20.988Z" fill="#0071b9"/>
						</g>
					</svg>
					</span>
					<span class="text-[14px] leading-[16px] text-primary font-medium">
					Imagen de referencia. Archivo general de cirugías del Dr. Bernardo Sandoval. Créditos: Anónimo.</span>
					</p>
			</section>
		</div>
	</section>
	<article class="py-[50px]">
		<div class="container grid gap-[30px] md:grid-cols-[65%_30%] md:gap-[5%] ">
			<section class="newspaper">
				<?php the_content();?>

				<?php if(get_field('texto_cita')):?>
				<p class="text-[15px] pt-[20px]">
					<span class="text-tertiary font-bold">> FUENTE:</span>
					<span class="font-semibold"><?php the_field('texto_cita') ?></span>
					<?php if(get_field('link')):?>
					<a class="underline font-semibold" href="<?php the_field('link') ?>">> Link</a>
					<?php endif;?>
				</p>
				<?php endif;?>


			</section>
			<?php if(get_field('imagen')):?>
			<aside>
				<p class="md:text-[20px] md:leading-[24px] font-medium text-primary  flex gap-[5px]">
					<span class="shrink-0 w-[30px]">
						<?php get_template_part( './template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
					</span>
					<span class="uppercase">
						Conoce más <span class="font-black"> a fondo:</span>
					</span>
				</p>
				<a class="mt-[16px] mb-[23px] block" href="<?php the_field('video') ?>" data-lightbox>
					<img class="" src="<?php the_field('imagen');?>" alt="Video">
				</a>
				<h3 class="text-[18px] leading-[22px] font-black mb-[10px] uppercase">
					<?php the_field('titulo');?>
				</h3>

				<div>
					<?php the_field('texto');?>
				</div>
			</aside>
			<?php endif; ?>
		</div>
	</article>


<?php
	if( have_rows('home', 14) ): while( have_rows('home', 14) ) : the_row();
		get_template_part( 'template-parts/slider-procedimientos', 'page' );
	endwhile;endif;
?>

<section class="bg-white py-[50px]">
	<div class="container">
		<?php get_template_part( 'template-parts/loop-blog-historial', 'page' ); ?>
	</div>
</section>


<?php get_footer(); ?>




