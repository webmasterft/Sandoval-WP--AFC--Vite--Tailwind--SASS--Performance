
	<div id="info-form" class="contact-form relative md:min-h-[344px] flex justify-center">
		<div class="absolute top-[-4px] bottom-0 right-0 left-0 m-[auto] w-[27px]">
			<?php get_template_part( './template-parts/svg/triangulo-verde-abajo', 'page' ); ?>
		</div>

		<?php if(!is_page('contactos')): ?>
			<img class="hidden md:block z-[1] absolute top-0 left-[-50px]" src="<?php echo get_template_directory_uri() . '/assets/images/src/images/IMG_Contactos.webp';?>" alt="">
		<?php else :?>
			<!-- <img class="hidden md:block z-[1] absolute top-[90px] left-[-220px]" src="<?php the_sub_field('imagen_doctor');?>" alt=""> -->
		<?php endif;?>

		<?php  echo do_shortcode('[contact-form-7 id="7ff62d4" title="Formulario de contacto"]'); ?>
	</div>

