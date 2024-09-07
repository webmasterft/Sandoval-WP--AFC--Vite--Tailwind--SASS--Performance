
<?php get_header(); ?>

<?php  if( have_rows('contactos') ): while( have_rows('contactos') ) : the_row(); ?>

<section class="relative h-[300px] overflow-hidden">
	<?php get_template_part( 'template-parts/header-banner', 'page' ); ?>
	<div class="container relative">
		<p class="text-[15px] leading-[17px] hidden md:block uppercase pt-[25px]">
			<span class="text-tertiary font-bold ">> <?php the_title();?></span>
		</p>
	</div>

	<p class="z-10 absolute bottom-[45px] left-0 right-0 m-[auto] text-center text-[45px] leading-[45px] md:text-[60px] md:leading-[60px] font-semibold text-white">
		Contáctame
	</p>
</section>


<section class="bg-white pt-[0] pb-[50px] md:pt-[50px]  relative bg-effect" style="background-image:url('<?php the_sub_field('imagen_doctor');?>)'";>
	<div class="container md:flex md:gap-[100px]">
		<section class="relative md:w-[35%]">
			<?php get_template_part( 'template-parts/eyebrow', 'page' ); ?>
			<h1 class="text-[34px] leading-[38px] md:text-[44px] md:leading-[48px] text-primary">
				<?php the_sub_field('titulo') ?>
			</h1>
		</section>
		<section class="pt-[20px] md:pt-0 md:w-[65%]">
			<p class="flex flex-row gap-[15px] mb-[20px] md:max-w-[360px] uppercase">
				<span class="block">
					<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
				</span>
				<span class="block">
					<?php the_sub_field('subtitulo') ?>
				</span>
			</p>
			<?php get_template_part( 'template-parts/formulario-informacion', 'page' ); ?>
		</section>
	</div>
</section>

<section class="bg-gray">
	<div class="py-[50px] container grid md:grid-cols-[35%_65%] md:gap-[60px] relative">
		<img class="hidden md:block z-[1] absolute bottom-0 left-0" src="<?php echo get_template_directory_uri() . '/assets/images/src/images/IMG_Contactos.webp';?>" alt="">
		<section>
			<p class="flex gap-[10px] uppercase text-tertiary text-[14px] leading-[14px] font-black items-center pb-[15px]">
				<?php get_template_part( 'template-parts/svg/triangulo-verde-vacio', 'page' ); ?>
				<span>contáctame:</span>
			</p>
			<?php if( have_rows('footer', 14) ): while( have_rows('footer',14) ) : the_row();?>
				<p class="text-[30px] font-bold text-primary">
					<?php the_sub_field('telefono') ?>
				</p>
				<a href="_mailto:<?php the_sub_field('correo') ?>" class="text-[20px] font-bold text-primary">
					<?php the_sub_field('correo') ?>
				</a>
			<?php endwhile;endif;?>

			<div class="relative pt-[57px] flex flex-col items-center md:items-end">
				<p class="text-[14px] leadind-[17px] text-tertiary font-black pb-[20px] uppercase">También te puede  interesar:</p>
				<section class="flex flex-col items-end">
					<?php get_template_part( 'template-parts/botones-interes', 'page' ); ?>
				</section>
			</div>
		</section>
		<section class="mt-[50px] md:mt-0">
			<p class="md:flex gap-[10px] pb-[30px] text-center md:text-left">
				<span class="block md:inherit text-tertiary text-[14px] leading-[17px] font-black shrink-0 mb-[20px] md:mb-0">¿Cómo llegar a mi consultorio?</span>

				<?php if( have_rows('footer', 14) ): while( have_rows('footer',14) ) : the_row();?>
				<span class="text-[13px] leading-[17px]">
					<?php the_sub_field('direccion') ?>
				</span>
				<?php endwhile;endif;?>
			</p>
			<div class="mx-[-35px] md:mx-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.798101289745!2d-78.50532523281862!3d-0.18240706827522699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59af5fceebd41%3A0x34cdbdda2ae47eca!2sCentro%20M%C3%A9dico%20Meditr%C3%B3poli!5e0!3m2!1sen!2sec!4v1718155904198!5m2!1sen!2sec" width="100%" height="385" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
				<a href="<?php the_sub_field('link_mapa') ?>" class="btn btn-primary" target="_blank">
			> Link google maps
			</a>
		</section>
	</div>
</section>

<?php endwhile;endif; ?>



<?php  get_footer(); ?>
