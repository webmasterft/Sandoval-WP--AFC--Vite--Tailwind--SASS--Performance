

<?php get_header();

if( have_rows('bio') ): while( have_rows('bio') ) : the_row();
?>
	<section class="bg-gray relative md:h-[100vh] overflow-hidden">
		<div class="container relative md:pt-[25px] md:pb-[70px] h-full">
			<img class="absolute md:fixed bottom-0 right-[-55px] md:right-0 z-[1] w-[279px] md:w-[414px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/src/images/Photo-DrBernardo.webp" alt="">
			<div class="hidden md:block absolute right-0 bottom-0 z-0">
				<?php get_template_part( 'template-parts/svg/svg-blanco', 'page' );?>
			</div>
			<p class="text-tertiary font-bold text-[15px] leading-[17px] underline underline-offset-2 uppercase decoration-inherit md:pb-[40px] hidden md:block">
				> <?php the_title();?>
			</p>
			<section class="content grid gap-[30px] md:grid-cols-2 md:gap-[60px] md:px-[50px]">
				<div>
					<?php get_template_part( 'template-parts/eyebrow', 'page' );?>
					<p class="text-[34px] leading-[38px] md:text-[44px] md:leading-[48px] mb-[25px] text-primary">
						<?php the_sub_field('titulo'); ?>
					</p>
					<p class="text-[14px] leading-[16px] md:text-[18px] md:leading-[22px] font-extrabold text-primary"><?php the_sub_field('subtitulo'); ?></p>

					<?php $count = 0; if( have_rows('titulos') ): while( have_rows('titulos') ) : the_row();
					if($count == 0):
					?>

					<div class="hidden md:block mt-[35px] md:mt-[25px] mb-[35px]  ">
						<p class="text-[16px] leading-[18px] md:text-[20px] md:leading-[24px] font-medium text-secondary mb-[10px] uppercase"><?php the_sub_field('titulo'); ?></p>
						<p class="md:text-[14px] md:leading-[16px] font-semibold text-primary  flex gap-[5px]">
							<span class="shrink-0 w-[30px]">
								<?php get_template_part( './template-parts/svg/triangulo-verde-vacio', 'page' ); ?>
							</span>
							<span>
								<?php the_sub_field('credenciales'); ?>
							</span>
						</p>
					</div>
					<?php endif; $count++; endwhile; endif;?>
					<div class="hidden md:flex gap-[10px]">
						<?php get_template_part( './template-parts/bio-botones', 'page' ); ?>
					</div>
				</div>
				<?php get_template_part( './template-parts/bio-titulos-mobile', 'page' ); ?>
				<?php get_template_part( './template-parts/bio-titulos-desktop', 'page' ); ?>

				<div class="block md:hidden pb-[50px]">
						<?php get_template_part( './template-parts/bio-botones', 'page' ); ?>
				</div>
			</section>
		</div>
	</section>

	<section class="bg-white">
		<div class="container relative pb-[50px]">
			<div class="absolute right-0 bottom-0 z-0">
				<?php get_template_part( 'template-parts/svg/svg-gris', 'page' );?>
			</div>
			<div class="mt-[10px]">
				<?php get_template_part( './template-parts/svg/triangulo-verde-abajo', 'page' ); ?>
			</div>
			<p class="font-black text-[20px] leading-[24px] py-[20px] uppercase">mi formación:</p>
			<section class="grid md:grid-cols-[60%_40%] gap-[60px] z-10 relative">
				<div class="newspaper md:max-w-[700px] text-[14px]">
					<?php the_sub_field('informacion'); ?>
				</div>
				<div class="hidden md:block">
				</div>
			</section>
		</div>
	</section>



	<?php
		if( have_rows('home',14) ): while( have_rows('home',14) ) : the_row();
			get_template_part( 'template-parts/slider-procedimientos', 'page' );
		endwhile;endif;

		get_template_part( 'template-parts/section-blog-faqs-audio', 'page' );
	?>




<?php endwhile;endif;	get_footer(); ?>



