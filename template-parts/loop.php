<?php if ( have_posts() ) : ?>
	<h3 class="section-title mt-[50px]">
		Encontramos los siguientes resultados
	</h3>
	<?php get_template_part( 'template-parts/eyebrow', 'page' ); ?>
	<ul class="grid md:grid-cols-3 gap-[20px] mb-[50px]">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<li class="border-solid border-2 border-primary p-[20px] rounded-[10px] flex flex-col justify-between">

					<a class="font-bold underline block text-[25px] mb-[15px]" href="<?php the_permalink(); ?>">
						<?php echo wp_trim_words( get_the_title(), 5, '...' ); ?>

					</a>
				<div class="font-medium">
				<?php
					if( 'post' === get_post_type()) {

						echo wp_trim_words( get_the_excerpt(), 20, '...' );
					} else{
						echo wp_trim_words( get_the_content(), 20, '...' );
					}
				?>
				</div>
				<div class="w-full">
					<a class="btn btn-primary" href="<?php the_permalink(); ?>">
						> Leer más
					</a>
				</div>
			</li>


		<?php endwhile; ?>

	</ul>

	<?php
endif;
