<?php
/**
 * The footer
 *
 * @package Bathe
 */

?>
</main>

	<?php //get_sidebar(); ?>


<footer class="footer bg-secondary py-[50px] relative">
	<div class="absolute top-[-2px] left-0 right-0 m-[auto] md:hidden w-[27px]">
		<?php get_template_part( './template-parts/svg/triangulo-blanco-abajo', 'page' ); ?>
	</div>
	<div class="container grid md:grid-cols-3 gap-[50px]">
		<div>
			<?php if( get_field('footer', 14) ): $footer = get_field('footer',14);?>
			<section class="pt-[25px] pb-[55px] md:pt-0 md:pb-0 w-[221px] m-[auto] md:hidden">
				<?php get_template_part( './template-parts/svg/logo-blanco-footer', 'page' ); ?>
			</section>
			<?php endif; ?>

			<div id="boletin" class="contact-form text-center md:text-left">
			<p class="text-primary uppercase text-sm mb-[15px] font-bold">Recibe nuestro boletín:</p>
			
			<div class="ninja-form-container-1">
				<?php  echo do_shortcode('[ninja_form id=1]'); ?>
			</div>
			
			</div>
			<p class="text-white text-[12px] font-medium uppercase hidden md:block ">Copyright 2024®  | Powered by Gestion.agency</p>
		</div>

		<?php if( get_field('footer', 14) ): $footer = get_field('footer',14);?>
		<section class="my-[0] mx-[auto] hidden md:block">
			<?php get_template_part( './template-parts/svg/logo-blanco-footer', 'page' ); ?>
		</section>

		<section class="flex flex-col md:items-end">
			<div class="redes flex flex-col md:flex-row items-center gap-[10px] mb-[35px] md:mb-[80px]">
				<p class="text-[14px] font-black mb-[10px] uppercase text-primary pt-[10px]">Síguenos:</p>
				<div class="flex gap-[10px]">
					<a href="<?php echo $footer['facebook']; ?>" target="_blank">
						<?php get_template_part( './template-parts/svg/facebook-blanco', 'page' ); ?>
					</a>
					<a href="<?php echo $footer['youtube']; ?>" target="_blank">
						<?php get_template_part( './template-parts/svg/youtube-blanco', 'page' ); ?>
					</a>
				</div>
			</div>
			<div class="text-center md:text-right">
				<p class="text-[14px] font-black mb-[10px] uppercase text-primary">Más información:</p>
				<a href="tel:+593<?php echo $footer['telefono']; ?>" class="text-white text-[13px] font-medium mb-[5px] block w-full">
					<?php echo $footer['telefono']; ?>
				</a>
				<a class="text-white text-[13px] font-medium mb-[5px] block w-full" href="mailto:<?php echo $footer['correo']; ?>" target="_blank">
					<?php echo $footer['correo']; ?>
				</a>
				<p class="text-white text-[13px] font-medium"><?php echo $footer['direccion']; ?></p>
			</div>
			<?php endif; ?>
		</section>

		<p class="text-white text-[12px] font-medium uppercase text-center md:hidden">Copyright 2024®  | Powered by Gestion.agency</p>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
