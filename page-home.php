<?php
	get_header();

	if( have_rows('home') ): while( have_rows('home') ) : the_row();
		get_template_part( 'template-parts/slider-jumbo', 'page' );
		get_template_part( 'template-parts/slider-procedimientos', 'page' );
	endwhile;endif;
	?>

	<?php get_template_part( 'template-parts/section-blog-faqs-audio', 'page' ); ?>

	<?php if( have_rows('home') ): while( have_rows('home') ) : the_row();
		get_template_part( 'template-parts/modulo-separador', 'page' );
		get_template_part( 'template-parts/testimonios', 'page' );
	endwhile;endif;
	?>
	<section class="py-[50px] md:py-0">
		<div class="container">
			<?php get_template_part( 'template-parts/formulario-informacion', 'page' ); ?>
		</div>
	</section>
	<?php get_footer();?>



