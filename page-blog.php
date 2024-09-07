

<?php get_header(); ?>

<?php  if( have_rows('blog') ): while( have_rows('blog') ) : the_row(); ?>

	<section class="relative h-[300px] overflow-hidden">
		<?php get_template_part( 'template-parts/header-banner', 'page' ); ?>

		<div class="container z-10 relative pt-[25px] h-full">
			<p class="text-[15px] leading-[17px] hidden md:block uppercase">
				<span class="text-tertiary font-bold">> Blog</span>
			</p>
			<p class="z-10 absolute bottom-[45px] left-0 right-0 m-[auto] text-center text-[45px] leading-[45px] md:text-[60px] md:leading-[60px] font-semibold text-white">
				<?php the_title();?>
			</p>
		</div>
	</section>
<?php	endwhile; endif; ?>

<section class="bg-sp pt-[50px] md:py-[50px] relative">
	<div class="container">
		<section class="md:grid md:grid-cols-[60%_30%] md:gap-[10%]">
				<?php get_template_part( 'template-parts/loop-blog-sticky', 'page' ); ?>
				<?php get_template_part( 'template-parts/loop-mas-leidos', 'page' ); ?>
		</section>
	</div>
	<?php get_template_part( './template-parts/svg/icono-arrow-down', 'page' ); ?>
</section>

<?php get_template_part( 'template-parts/section-blog-faqs-audio', 'page' ); ?>

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



