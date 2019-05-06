<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dotdev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6559534/7591412/css/fonts.css" />

	<?php wp_head(); ?>
</head>

<body class="relative">
	<div id="page" class="font-sans text-base text-gray-700 max-w-6xl mx-auto pt-8 lg:pt-20 px-4 lg:px-8">
		<header class="absolute top-0 left-0 mt-8 lg:mt-20 ml-4 lg:ml-8">
			<a
				href="<?php echo esc_url(home_url('/')); ?>"
				rel="home">
				<svg class="logo" fill="none" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h150v150h-150z" fill="currentColor"/><path d="m20.023 92.486c-2.769 0-5.041 2.272-5.041 5.183 0 2.769 2.272 5.041 5.041 5.041 2.84 0 5.183-2.272 5.183-5.041 0-2.911-2.343-5.183-5.183-5.183zm43.4954-45.653h-7.952v23.146c-2.059-3.053-6.39-5.041-11.573-5.041s-9.372 1.704-12.638 5.183c-3.266 3.408-4.899 7.952-4.899 13.703s1.633 10.295 4.899 13.774c3.266 3.408 7.455 5.112 12.638 5.112 5.467 0 9.94-2.343 11.999-5.751v5.041h7.526zm-18.247 24.921c6.177 0 10.295 4.047 10.295 11.076v1.917c0 7.029-4.118 11.076-10.295 11.076-6.319 0-10.721-4.402-10.721-11.999s4.402-12.07 10.721-12.07zm57.6086 11.147c0-5.538-1.562-9.94-4.6147-13.135-3.053-3.195-7.242-4.828-12.425-4.828-5.396 0-9.798 1.704-13.135 5.112-3.337 3.337-5.041 7.952-5.041 13.774s1.704 10.437 5.112 13.845c3.408 3.337 7.81 5.041 13.277 5.041 4.118 0 7.739-1.136 10.792-3.337s4.9697-4.97 5.6797-8.307l-8.0227-.426c-1.065 3.479-3.905 5.183-8.662 5.183-5.609 0-9.372-3.55-9.727-9.017h26.7667zm-17.1107-11.147c5.751 0 8.875 3.408 9.088 8.804h-18.673c.355-5.609 4.118-8.804 9.585-8.804zm52.5577-6.177h-9.017l-9.869 20.164-9.94-20.164h-9.017l18.957 37.204z" fill="#fff"/></svg>
			</a>
		</header>

		<div id="content" class="site-content lg:w-3/4 mx-auto mt-20 md:mt-40 lg:mt-0 lg:px-2">
