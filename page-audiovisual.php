

<?php get_header();?>
<?php if( have_rows('audiovisual') ): while( have_rows('audiovisual') ) : the_row();?>
	<section class="bg-black">
		<div class="container z-10 relative pt-[25px]">
			<p class="text-[15px] leading-[17px] hidden md:block uppercase pb-[20px]">
				<span class="text-[#A2A2A2] font-bold">> BIBLIOTECA AUDIOVISUAL</span>
			</p>
			<section class="grid md:grid-cols-[54%_44%] gap-[15px]">
				<div>
					<?php get_template_part( 'template-parts/eyebrow', 'page' ); ?>
					<h1 class="text-white md:text-primary text-[44px] leading-[46px] md:text-[44px] md:leading-[46px] flex flex-col md:flex-row items-center gap-[20px]">
						<svg xmlns="http://www.w3.org/2000/svg" width="55.678" height="55.678" viewBox="0 0 55.678 55.678">
							<g id="Grupo_245" data-name="Grupo 245" transform="translate(-783 -144.321)">
								<g id="Grupo_244" data-name="Grupo 244" transform="translate(783 144.321)">
									<g id="Grupo_243" data-name="Grupo 243">
										<g id="Grupo_242" data-name="Grupo 242">
											<g id="Grupo_241" data-name="Grupo 241">
												<g id="Grupo_94" data-name="Grupo 94" transform="translate(0 0)">
													<path id="Icon_material-subscriptions" data-name="Icon material-subscriptions" d="M53.111,19.7H8.568V14.136H53.111ZM47.543,3H14.136V8.568H47.543ZM58.678,30.839V53.111a5.584,5.584,0,0,1-5.568,5.568H8.568A5.584,5.584,0,0,1,3,53.111V30.839a5.584,5.584,0,0,1,5.568-5.568H53.111A5.584,5.584,0,0,1,58.678,30.839Zm-16.7,11.136-16.7-9.1V51.05Z" transform="translate(-3 -3)" fill="#0071b9"/>
												</g>
											</g>
										</g>
									</g>
								</g>
							</g>
						</svg>
						<div class="w-[200px]">
								<span>Biblioteca</span>
								<span class="font-semibold"> Audiovisual</span>
						</div>
					</h1>
					<div class="grid md:grid-cols-[40%_60%] gap-[5px] mt-[30px] md:mt-[50px]">
						<img class="self-end hidden md:block" src="<?php the_sub_field('foto_dr') ?> " alt="">
						<div>
							<p class="text-white text-[14px] leading-[18px] font-medium text-center md:text-left">
								<?php the_sub_field('texto') ?>
							</p>
							<div class="w-fulll block mt-[30px] md:mt-[50px] md:mb-[70px] flex flex-col md:flex-row md:gap-[5px] items-center ">
								<p class="text-[15px] leading-[17px] text-[#A2A2A2] font-medium text-center md:text-left flex uppercase gap-[5px] max-w-[148px] mb-[20px] md:mb-0">
									<?php get_template_part( 'template-parts/svg/triangulo-verde-vacio', 'page' ); ?>
									<span class="text-left">
										Comparte este canal en:
									</span>
								</p>
								<?php get_template_part( 'template-parts/share-buttons', 'page' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="self-end pb-[60px] pt-[30px] md:pt-0">
						<a class="video" href="<?php the_sub_field('url_video') ?>" data-lightbox="">
							<img class="object-cover rounded-[15px]" src="<?php the_sub_field('thumbmail') ?>" alt="Video">
						</a>
						<p class="flex gap-[10px] pt-[20px]">
							<span class="shrink-0">
								<svg xmlns="http://www.w3.org/2000/svg" width="23.525" height="23.525" viewBox="0 0 23.525 23.525">
									<g id="Grupo_246" data-name="Grupo 246" transform="translate(-152 -2046.134)">
										<g id="Grupo_94" data-name="Grupo 94" transform="translate(152 2046.134)">
											<path id="Icon_material-subscriptions" data-name="Icon material-subscriptions" d="M24.173,10.058H5.353V7.705h18.82ZM21.82,3H7.705V5.353H21.82Zm4.705,11.763v9.41a2.359,2.359,0,0,1-2.353,2.353H5.353A2.359,2.359,0,0,1,3,24.173v-9.41A2.359,2.359,0,0,1,5.353,12.41h18.82A2.359,2.359,0,0,1,26.525,14.763Zm-7.058,4.705L12.41,15.621V23.3Z" transform="translate(-3 -3)" fill="#a2a2a2"/>
										</g>
									</g>
								</svg>
							</span>

							<span class="text-[14px] leading-[16px] font-medium text-white">
								<?php the_sub_field('caption') ?>
							</span>
						</p>
				</div>
			</section>
		</div>
	</section>

	<section>
		<div class="container">
			<section class="mt-[30px] md:mt-[50px] mb-[15px] flex ">
					<div class="shrink-0">
						<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
					</div>
					<h2 class="text-secondary text-[20px] leading-[24px] font-medium pl-[20px] uppercase">
					Mira nuestros <span class="font-black"> videos más recientes:</span></h2>
			</section>
			<section class="my-[30px] md:my-[50px] grid md:grid-cols-3 gap-[20px]">

				<?php if( have_rows('videos') ): while( have_rows('videos') ) : the_row();?>
					<?php get_template_part( 'template-parts/items-video', 'page' ); ?>
				<?php endwhile;endif;?>
			</section>
		</div>
	</section>

	<section>
		<div class="container">
			<section class="md:mt-[30px] mb-[15px] flex ">
					<div class="shrink-0">
						<?php get_template_part( 'template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
					</div>
					<h2 class="text-secondary text-[20px] leading-[24px] font-medium pl-[20px] uppercase">
					Mira nuestros <span class="font-black"> testimonios más recientes:</span></h2>
			</section>
			<section class="my-[50px] grid md:grid-cols-3 gap-[20px]">

				<?php if( have_rows('testimonios') ): while( have_rows('testimonios') ) : the_row();?>
					<?php get_template_part( 'template-parts/items-video', 'page' ); ?>
				<?php endwhile;endif;?>
			</section>
		</div>
	</section>


	<?php endwhile;endif;?>


	<?php if( have_rows('home',14) ): while( have_rows('home',14) ) : the_row();
		get_template_part( 'template-parts/slider-procedimientos', 'page' );
	endwhile;endif;
	?>
	<?php get_template_part( 'template-parts/section-blog-faqs-audio', 'page' ); ?>

	<?php get_footer();?>



