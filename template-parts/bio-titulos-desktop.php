<?php $count = 0; if( have_rows('titulos') ): ?>
<div class="hidden md:block">
	<div class="w-[36px] h-[5px] my-[30px]"></div>
	<?php
		while( have_rows('titulos') ) : the_row();
		if($count > 0):
	?>
	<div class="mb-[20px]">
		<p class="text-[20px] leading-[24px] font-medium text-secondary mb-[10px] uppercase"><?php the_sub_field('titulo'); ?></p>
		<p class="text-[14px] leading-[16px] font-semibold text-primary flex gap-[5px]">
			<span class="shrink-0 w-[30px]">
				<?php get_template_part( './template-parts/svg/triangulo-verde-vacio', 'page' ); ?>
			</span>
			<span>
				<?php the_sub_field('credenciales'); ?>
			</span>
		</p>
	</div>
	<?php endif; $count++; endwhile;?>
</div>
<?php endif;?>
