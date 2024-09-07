<?php if( get_field('footer', 14) ): $footer = get_field('footer',14);?>
	<a href="<?php echo $footer['facebook']; ?>" target="_blank">
		<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Facebook">
	</a>
	<a href="<?php echo $footer['youtube']; ?>" target="_blank">
		<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" 	alt="YouTube">
	</a>
<?php endif; ?>
