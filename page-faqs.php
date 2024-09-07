
<?php get_header(); ?>
<?php  if( have_rows('faqs') ): while( have_rows('faqs') ) : the_row(); ?>
<section class="relative h-[290px] overflow-hidden">
		<?php get_template_part( 'template-parts/header-banner', 'page' ); ?>

		<div class="container z-10 relative pt-[25px] h-full">
			<p class="text-[15px] leading-[17px] hidden md:block uppercase">
				<span class="text-tertiary font-bold">> FAQs</span>

			</p>
			<p class="z-10 absolute bottom-[90px] left-[25px] right-0 m-[auto] text-[45px] leading-[45px] md:text-[60px] md:leading-[60px] font-semibold text-white ">
				<?php the_title();?>
			</p>
		</div>

	</section>

<section class="relative bg-gray faqs py-[50px]">
	<div class="container relative">
		<div class="absolute top-[-107px] left-[25px] md:left-0">
			<?php get_template_part( 'template-parts/svg/icono-header-faqs', 'page' ); ?>
		</div>
		<section class="flex md:justify-between items-center">
			<h2 class="text-[14px] text-tertiary !font-black uppercase relative w-full w-[50%]">
				<?php the_field('titulo'); ?>
			</h2>
			<div class="actions flex flex-col md:flex-row md:gap-[10px] w-[50%] justify-end shrink-0">
				<a id="expandir" class="btn btn-primary md:mt-0 shrink-0" href="">Expandir todos  (+)</a>
				<a id="cerrar" class="btn btn-primary md:mt-0 shrink-0" href="">Cerrar todos  (-)</a>
			</div>
		</section>
		<?php get_template_part( 'template-parts/eyebrow', 'page' );?>
		<div class="grid">
		<?php  if( have_rows('item') ): while( have_rows('item') ) : the_row(); ?>
			<div class="grid-item relative">
				<p class="titulo text-primary"><?php the_sub_field('titulo')?></p>
				<p class="contenido"><?php the_sub_field('contenido')?></p>
				<div class="icon absolute top-[10px] right-[10px]">
					<span class="plus">
						<?php get_template_part( 'template-parts/svg/icono-plus', 'page' );?>
					</span>
					<span class="minus hidden">
						<?php get_template_part( 'template-parts/svg/icono-minus', 'page' );?>
					</span>
				</div>
			</div>
			<?php endwhile;endif; ?>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>

<?php
	get_template_part( 'template-parts/section-blog-faqs-audio', 'page' );

 	if( have_rows('home',14) ): while( have_rows('home',14) ) : the_row();
		get_template_part( 'template-parts/slider-procedimientos', 'page' );
	endwhile;endif;
?>


<?php  get_footer(); ?>
