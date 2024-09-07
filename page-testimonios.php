<?php get_header(); ?>

<?php  if( have_rows('testimonios') ): while( have_rows('testimonios') ) : the_row(); ?>
	<section class="relative h-[300px] overflow-hidden">
		<?php get_template_part( 'template-parts/header-banner', 'page' ); ?>

		<div class="container z-10 relative pt-[25px] h-full">
			<p class="text-[15px] leading-[17px] hidden md:block uppercase">
				<span class="text-tertiary font-bold">> Testimonios</span>
			</p>
			<p class="z-10 absolute bottom-[45px] left-0 right-0 m-[auto] text-center text-[45px] leading-[45px] md:text-[60px] md:leading-[60px] font-semibold text-white">
				<?php the_title();?>
			</p>
		</div>
	</section>



	<section class="bg-gray">
			<section class="relative pt-[30px] md:pt-[50px]">
				<div class="container md:flex md:gap-[50px]">
					<section class="md:w-[40%] shrink-0">
						<div class="bg-primary w-[36px] h-[5px] mb-[30px]"></div>
						<h2 class="text-[34px] leading-[38px] md:text-[44px] md:leading-[48px] font-medium">
							<?php the_sub_field('texto'); ?>
						</h2>
						<p class="text-[17px] leading-[18px] font-bold mt-[30px]">
							>  <?php the_sub_field('nombre'); ?>
						</p>
						<a class="btn btn-primary mt-[20px]" href="<?php the_sub_field('video');?>" data-lightbox="">
							<span class="mr-[5px]">> ver testimonio</span>
						</a>
					</section>
<?php endwhile; endif; ?>

					<?php if( have_rows('home', 14) ): while( have_rows('home', 14) ) : the_row();?>
					<?php if( get_row_layout() == 'testimonios' ): ?>
					<section class="md:w-[50%] shrink-0">
						<section class="w-[69%] flex shrink-0 mb-[50px]">
							<div class="hidden md:block">
							<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' );?>
							</div>
							<p class="text-secondary text-[20px] leading-[24px] hidden md:block ml-[10px] md:max-w-[250] uppercase">
								Nuestros pacientes tienen un <strong>espacio para expresarse</strong>				</p>
						</section>
						<p class="text-tertiary font-black text-[14px] leading-[17px] uppercase">Testimonios</p>
						<?php get_template_part( 'template-parts/slider-testimonios', 'page' );?>
					</section>
					<?php endif;?>
					<?php endwhile;endif;?>
				</div>
			</section>

	</section>


	<?php get_template_part( 'template-parts/section-blog-faqs-audio', 'page' ); ?>
<?php
	if( have_rows('home', 14) ): while( have_rows('home', 14) ) : the_row();?>
	<?php get_template_part( 'template-parts/slider-procedimientos', 'page' );
	endwhile;endif;?>
<?php get_footer();?>



