<?php get_template_part( 'template-parts/eyebrow', 'page' );?>
	<h2 class="text-primary text-[22px] leading-[24px] md:text-[25px] md:leading-[28px] font-semibold mb-[10px] overflow-hidden md:h-[87px]   ellipsis-3">
		<a href="<?php the_permalink();?>">
			<?php the_title(); ?>
		</a>
	</h2>

	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('medium'); ?>
		</a>
	<?php endif; ?>
	<p class="text-secondary text-[17px] font-bold leading-[18px] mt-[10px]">
		> Quito, <?php echo get_the_date('F j, Y')?>
	</p>
	<div class="content mt-[10px]">
		<?php echo wp_trim_words( get_the_excerpt(), 30, '...' );?>
	</div>
	<a class="btn btn-primary" href="<?php the_permalink();?>">> Leer más</a>
