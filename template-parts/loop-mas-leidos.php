<?php
$most_read_args = array(
  'posts_per_page' => 2, // Number of most read articles to show
  'meta_key' => 'post_views', // Custom meta field for views
  'orderby' => 'meta_value_num', // Order by view count (numerical)
  'order' => 'DESC' // Order in descending order (most viewed first)
);

$query = new WP_Query($most_read_args);
?>
<section>
	<div class="pb-[50px] md:pb-0">
	<p class="uppercase flex gap-[10px]">
		<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
		NOTICIAS <strong> Más leídas</strong>
	</p>
	<div class="pb-[30px] md:pb-0">
	<?php	while ( $query->have_posts() ) : $query->the_post();?>

	<a class="block pl-[35px] text-[14px] leading-[16px] hover:text-primary my-[10px] relative" href="<?php the_permalink(); ?>">
		<span class="w-[85%] block">
			<?php the_title(); ?>
		</span>
		<span class="absolute top-0 right-0">
			<?php get_template_part( 'template-parts/svg/icono-plus', 'page' ); ?>
		</span>
	</a>

	<?php endwhile; wp_reset_postdata(); ?>
	</div>
	</div>
	<?php get_template_part( 'template-parts/sidebar-biblioteca-audiovisual', 'page' ); ?>
</section>


