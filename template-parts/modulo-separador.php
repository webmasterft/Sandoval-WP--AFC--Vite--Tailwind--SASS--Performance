

<?php
		if( get_row_layout() == 'modulo_separador' ):
		$imgFondo = get_sub_field("imagen_de_fondo");
		$gradient = get_sub_field("gradiente")

?>

		<section class="relative bg-primary py-[30px] md:py-[48px] parallax" style="background-image:url('<?php echo $imgFondo["url"]?>')">
			<img loading="lazy" class="gradient z-[1] absolute top-0 left-0 object-cover h-full w-full" src="<?php echo $gradient['url']; ?>" alt="" width="1227" height="170">
			<div class="container md:flex md:justify-between md:items-center z-[10]">
				<div class="flex  md:items-center">
					<div class="mt-[10px] md:mt-0">
						<?php get_template_part( './template-parts/svg/triangulo-blanco-desktop', 'page' ); ?>
					</div>
					<p class="ml-[10px] font-extrabold text-[30px] leading-[34px]  md:text-[40px] leading-[44px] text-white md:max-w-[419px]">

					<?php the_sub_field('titulo'); ?>
				</p>
				</div>

				<?php $link = get_sub_field('boton');
					if($link): ?>
					<a class="btn btn-tertiary ml-[32px] md:ml-0"
						href="<?php echo $link['url']; ?>"
						target="<?php echo $link_target = $link['target'] ? $link['target'] : '_self';?>">
						<span class="mr-[5px]">></span>
						<?php echo $link['title'] ?>
					</a>
					<?php endif; ?>
			</div>
		</section>

	<?php endif;?>



