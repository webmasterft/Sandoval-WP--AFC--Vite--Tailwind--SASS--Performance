
	<a href="<?php echo home_url(); ?>/faqs" class="btn-faqs">
		<?php get_template_part( 'template-parts/svg/icono-faqs', 'page' ); ?>
		<span>
			Las preguntas  más frecuentes
		</span>
	</a>
	<?php if(!is_page( 'blog' )):?>
		<a href="<?php echo home_url(); ?>/blog" class="btn-blogs">
		<?php get_template_part( 'template-parts/svg/icono-blogs', 'page' ); ?>
		<span class="">
		Más artículos de Blog aquí
		</span>
	</a>
		<?php else:?>
			<a href="<?php echo home_url(); ?>/contactos" class="btn-blogs">
		<?php get_template_part( 'template-parts/svg/icono-agenda', 'page' ); ?>
		<span class="">
		Agenda una <br> cita aquí
		</span>
	</a>

<?php endif;?>
