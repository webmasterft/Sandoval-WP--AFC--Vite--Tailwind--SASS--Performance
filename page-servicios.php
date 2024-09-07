
<?php /* Template Name: Servicios */?>
<?php get_header(); ?>

<?php  if( have_rows('servicios') ): while( have_rows('servicios') ) : the_row(); ?>

	<section class="relative h-[300px] overflow-hidden">
		<?php get_template_part( 'template-parts/header-banner', 'page' ); ?>

		<div class="container z-10 relative pt-[25px]">
			<p class="text-[15px] leading-[17px] hidden md:block uppercase">
				<span class="text-tertiary font-bold">> Servicios</span>
				<span class="text-white font-medium">| <?php the_title();?></span>
			</p>
		</div>
	</section>

	<section class="bg-gray py-[50px] relative">
		<section class="w-[352px] absolute m-[auto] top-[-100px] left-0 right-0 ">
			<a href="<?php the_sub_field('video') ?>" data-lightbox>
				<img class="w-full object-cover w-[352px]" src="<?php the_sub_field('thumbnail') ?>" alt="">
				<p class="md:absolute md:bottom-0 md:right-[-278px] md:w-[260px] overflow-hidden text-[14px] leading-[16px] flex gap-[10px] md:block mt-[15px] md:mt-0">
					<span class="pb-[10px] md:block">
						<?php get_template_part( 'template-parts/svg/icono-videos', 'page' ); ?>
					</span>
					<span>
						<?php the_sub_field('caption') ?>
					</span>
				</p>
			</a>
		</section>
		<div class="container grid md:grid-cols-3 gap-[30px] relative pt-[100px] md:pt-[50px]">
			<div>
				<?php get_template_part( 'template-parts/eyebrow', 'page' ); ?>
				<h1 class="text-[34px] leading-[38px] md:text-[44px] md:leading-[48px] text-primary font-bold">
					<?php the_title();?>
				</h1>
			</div>
			<div>
				<p class="md:pt-[70px] text-[14px] leading-[16px] md:text-[18px] md:leading-[22px] font-extrabold mb-[15px] text-primary">
					<?php the_sub_field('subtitulo');?>
				</p>
				<a class="btn btn-primary" href="#info-form">
					> Agenda una cita
				</a>
			</div>
			<div>
				<p class="md:pt-[70px] text-[14px] leading-[16px] md:leading-[20px] text-primary">
					<?php the_sub_field('descripcion');?>
				</p>
			</div>
		</div>
	</section>

	<section class="bg-white pb-[50px]">
		<div class="container">
			<?php get_template_part( 'template-parts/svg/triangulo-verde-abajo', 'page' ); ?>
			<?php  if(get_sub_field('titulo_contenido')):?>
				<p class="!text-[20px] !leading-[24px] !font-medium pt-[25px] pb-[25px] md:pb-[44px] md:max-w-[250px] uppercase">
					<?php the_sub_field('titulo_contenido');?>
				</p>
			<?php endif; ?>
			<div class="content newspaper text-[14px]">
				<?php the_content(); ?>
			</div>
		</div>
	</section>




<?php
	endwhile; endif;
	get_template_part( 'template-parts/section-blog-faqs-audio', 'page' );
	if( have_rows('home', 14) ): while( have_rows('home', 14) ) : the_row();?>
	<div class="pt-[50px]">
	<?php get_template_part( 'template-parts/slider-procedimientos', 'page' );
	endwhile;endif;?>
	</div>
	<div class="container">
	<?php
		get_template_part( 'template-parts/formulario-informacion', 'page' );
	?>
	</div>
	<?php get_footer();?>



