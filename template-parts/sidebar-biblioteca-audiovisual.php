			<section class="mb-[15px] flex <?php echo $class = is_page('blog') ? 'md:mt-[50px]' : null; ?>">
					<div class="shrink-0">
						<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
					</div>
					<h2 class="text-secondary text-[20px] leading-[24px] font-medium pl-[20px] uppercase">
						<a href="<?php echo home_url(); ?>/audiovisual">
							Biblioteca  <span class="font-black"> audiovisual</span>
						</a>
					</h2>
			</section>

			<?php if( have_rows('side_bar',14) ): while( have_rows('side_bar',14) ) : the_row();?>
				<a href="<?php the_sub_field('video_url') ?>" data-lightbox>
					<img width="430" height="243" loading="lazy" class="w-full" src="<?php the_sub_field('video_imagen');?>" alt="Video">
				</a>
			<?php endwhile;endif;?>

			<section class="mt-[15px] mb-[15px] flex ">
				<div class="shrink-0">
					<?php get_template_part( 'template-parts/svg/icono-videos', 'page' ); ?>
				</div>
				<p class="text-secondary text-[14px] leading-[16px] font-medium pl-[20px]">
				En este repositorio, escucha al Dr. Bernardo <span class="font-black text-primary"> extender explicaciones </span>acerca de cada una de las cirugías.</p>
			</section>
