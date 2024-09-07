<?php if( have_rows('titulos') ): ?>
	<div class="md:hidden">
		<?php
			while( have_rows('titulos') ) : the_row();
		?>
		<div class="mb-[31px]">
			<p class="text-[16px] leading-[18px] font-medium text-secondary mb-[10px] uppercase"><?php the_sub_field('titulo'); ?></p>
			<p class="text-[14px] leading-[16px] font-semibold text-primary flex gap-[5px]">
				<span class="shrink-0 w-[30px]">
					<?php get_template_part( './template-parts/svg/triangulo-verde-vacio', 'page' ); ?>
				</span>
				<span>
					<?php the_sub_field('credenciales'); ?>
				</span>
			</p>
		</div>
		<?php endwhile;?>
	</div>
<?php endif;?>
