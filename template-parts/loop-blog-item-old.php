
<section class="mt-[50px] blogs">
	<h1>HEllo</h1>
			<article class="grid grid-cols-[35%_60%] gap-[5%] mb-[30px]">
				<a href="<?php the_permalink(); ?>" class="shrink-0">
					<?php if ( has_post_thumbnail() ) :
						the_post_thumbnail();
					endif;
					?>
				</a>
				<div class="content">
						<h3 class="font-bold text-[22px] leading-[30px] hover:text-primary font-saira ellipsis">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="meta text-grayDark text-[12px] leading-[18px] pt-[5px] pb-[15px]">
							<span class="text-black font-semibold">
								<?php echo get_the_author_meta( 'nicename');?>
							</span>
							<span class="px-[3px]">-</span>
							<span>
								<?php echo get_the_date('F j, Y'); ?>
							</span>
						</div>

						<div>
							<span class="w-full block">
								<?php echo wp_trim_words( get_the_excerpt(), 15, '...' );?>
							</span>
							<a href="<?php the_permalink(); ?>" class="btn btn-secondary">
								Leer más
							</a>
						</div>

				</div>

			</article>

		</section>
