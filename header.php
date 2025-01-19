<?php
/**
 * The header
 *
 * @package Bathe
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


<link rel="preload" href="<?php echo plugins_url( 'add-search-to-menu/public/css/ivory-search.min.css?ver=5.5.8' );?>" as="style">
<link rel="preload" href="<?php echo get_theme_file_uri( 'assets/css/splide.min.css?ver=6.7.1' );?>" as="style">
<link rel="preload" href="<?php echo get_theme_file_uri( 'assets/css/lightbox.min.css?ver=3.3.2' );?>" as="style">
<link rel="preload" href="<?php echo get_theme_file_uri( 'assets/css/tailwind.css?ver=3.3.2' );?>" as="style">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<script defer src="https://www.googletagmanager.com/gtag/js?id=G-PKF1F4DS7K"></script>

<script>
// Function to log LCP details and initialize gtag
function handleLCP(entry) {
    console.log('LCP element:', entry.element);
    console.log('LCP time:', entry.startTime, 'ms');
    console.log('LCP size:', entry.size);
    console.log('LCP URL:', entry.url || 'N/A');

    // Insert the gtag code after LCP is detected
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-PKF1F4DS7K');

    console.log('gtag initialized after LCP.');
}

// Create a PerformanceObserver to observe LCP
const observer = new PerformanceObserver((list) => {
    const entries = list.getEntries();
    const lcpEntry = entries[entries.length - 1]; // Get the latest LCP entry

    // Handle LCP and initialize gtag
    handleLCP(lcpEntry);

    // Disconnect the observer after LCP is detected
    observer.disconnect();
});

// Start observing LCP
observer.observe({ type: 'largest-contentful-paint', buffered: true });

// Optional: Log a message if LCP is not detected within a certain time
setTimeout(() => {
    if (!observer.takeRecords().length) {
        console.log('LCP not detected within the timeout period.');
    }
}, 10000); // 10-second timeout

</script>


<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen font-["Raleway"]' ); ?> >
<?php wp_body_open(); ?>

<header class="header bg-primary fixed top-0 left-0 w-full z-[99999]">

	<section class="container mx-auto z-10 py-[10px] md:py-[15px] flex justify-between items-center">
		<a class="logo" href="<?php echo home_url(); ?>">
			<?php get_template_part( 'template-parts/svg/logo-blanco', 'page' ); ?>
		</a>
		<div id="hamburguer" class="block md:hidden">
				<?php get_template_part( 'template-parts/svg/hamburger', 'page' ); ?>
		</div>
		<div class="main-nav">
			<a class="flex justify-end mb-[10px] md:hidden" href="<?php echo home_url(); ?>">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-menu-mobile.webp" alt="Logo">
			</a>

			<div class="py-[20px] md:hidden">
				<?php echo do_shortcode('[ivory-search id="307" title="AJAX Search Form"]') ?>
			</div>

			<span class="!grid justify-end mb-[20px] w-full md:!hidden">
				<?php get_template_part( 'template-parts/svg/triangulo-verde-abajo', 'page' );?>
			</span>
			<?php
				wp_nav_menu(array(
						'theme_location' => 'primary', // This matches the location registered in functions.php
						'menu_class'     => 'nav-menu', // CSS class for the menu
						'container'      => 'nav', // The container element for the menu
						'container_class'=> '' // CSS class for the container
				));
			?>
			<div class="md:hidden flex gap-[10px] justify-end mt-[25px]">
				<?php get_template_part( 'template-parts/botones-redes', 'page' );?>
			</div>
		</div>

		<div class="hidden md:flex">
			<?php echo do_shortcode('[ivory-search id="307" title="AJAX Search Form"]') ?>

			<div class="redes">
				<?php get_template_part( 'template-parts/botones-redes', 'page' );?>
			</div>

		</div>



	</section>

</header>

<style>
	.splide__arrow{
		background: none;
		transform: none;
	}
	.splide__arrow--prev{
		transform: rotate(180deg);
		left:-2em;
		@media screen and (min-width:1080px) {
			left: -3em;
		}
	}
	.splide__arrow--next{
		right: -2em;
		@media screen and (min-width:1080px) {
			right: -3em;
		}
	}
</style>
	<main id="primary"  role="main" class="mt-[70px] md:mt-[104px] overflow-hidden">
