

<?php if( get_row_layout() == 'testimonios' ): ?>
	<section class="relative pt-[40px] md:pt-[72px]">
		<div class="container md:flex md:gap-[100px]">
			<section class="w-[30%] flex shrink-0">
				<div class="hidden md:block">
				<?php get_template_part( './template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
				</div>
				<p class="text-secondary text-[20px] leading-[24px] hidden md:block ml-[10px] md:max-w-[250px] uppercase">
					<?php the_sub_field('titulo'); ?>
				</p>
			</section>

			<section class="md:w-[56%] shrink-0">
				<p class="text-tertiary font-black text-[14px] leading-[17px] uppercase">Testimonios</p>
				<?php get_template_part( 'template-parts/slider-testimonios', 'page' );?>
			</section>
		</div>
	</section>
<?php endif;?>


