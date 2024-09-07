<section class="splide testimonios-splide" aria-label="Home slider">

	<?php get_template_part( './template-parts/svg/splide-arrows', 'page' ); ?>
	<div class="splide__track">
		<ul class="splide__list">
			<?php if( have_rows('testimonio') ): while( have_rows('testimonio') ) : the_row();?>


			<li class="splide__slide relative md:h-[410px] relative md:max-w-[352px]">
					<?php get_template_part( 'template-parts/eyebrow', 'page' );?>
					<?php if(get_sub_field('nombre')): ?>
						<p class="text-secondary text-[17px] leading-[18px] font-bold mb-[15px]">
						> <?php the_sub_field('nombre'); ?>
						</p>
					<?php endif; ?>

					<div class="flex gap-[25px] md:w-[352px]">
						<img class="shrink-0 rounded w-[131px] h-[131px]" src="<?php the_sub_field('foto'); ?>" alt=""/>
						<p class="text-primary text-[22px] leading-[24px] md:text-[25px] md:leading-[28px] font-semibold">
							<?php the_sub_field('quote'); ?>
						</p>
					</div>


					<?php $link = get_sub_field('boton');
					if($link && !is_page('testimonios')): ?>
					<a class="btn btn-primary mt-[20px]"
						href="<?php echo home_url(); ?>/testimonios"
						target="<?php echo $link_target = $link['target'] ? $link['target'] : '_self';?>">
						<span class="mr-[5px]">></span>
						Leer más
					</a>
					<?php endif; ?>


			</li>

			<?php endwhile; endif;?>
		</ul>
	</div>
</section>
<style>
	.testimonios-splide .splide__arrow{
		top:38%;
	}

</style>


<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.testimonios-splide', {
			perPage: 1,
			perMove: 1,
			pagination: false,
			breakpoints: {
			1080: {
					perPage: 1,
				},
  		}
		} );
    splide.mount();
  	} );
</script>
