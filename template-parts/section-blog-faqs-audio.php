<section class="container py-[30px] md:py-[60px]">
	<section class="md:flex md:gap-[100px] <?php echo $class = is_page('audiovisual') ? 'md:flex-row-reverse' : null; ?> ">
		<div class="md:w-[60%] shrink-0 mb-[50px] md:mb-0">
			<?php get_template_part( 'template-parts/slider-blog', 'page' ); ?>
		</div>
		<div class="md:w-[30%]">
			<?php if(!is_page('blog') && !is_page('audiovisual')): ?>
			<?php get_template_part( 'template-parts/sidebar-biblioteca-audiovisual', 'page' ); ?>
			<?php endif;?>
			<section class="<?php echo $class = !is_page('blog') && !is_page('audiovisual') ? 'mt-[50px]' : null; ?> flex mb-[20px]">
				<?php if(!is_page( 'blog' )):?>
					<div class="shrink-0">
						<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
					</div>
				<h2 class="text-secondary text-[20px] leading-[24px] font-medium pl-[20px] uppercase">
					Todo lo que necesitas saber acerca de las <span class="font-black"> cirugías</span>
				</h2>
				<?php else:?>
					<h3 class="section-title">También te puede interesar:</h3>
				<?php endif;?>
			</section>
			<section class="<?php echo $class = !is_page('blog') ? 'ml-[43px]' : null; ?>">
				<?php get_template_part( 'template-parts/botones-interes', 'page' ); ?>
			</section>
		</div>
	</section>
</section>
