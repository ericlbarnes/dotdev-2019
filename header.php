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

<body <?php body_class(); ?>>
	<header class="logo mx-auto block">
		<a
			href="<?php echo esc_url(home_url('/')); ?>"
			rel="home">
			<svg class="logo" width="301px" height="150px" viewBox="0 0 301 150" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			        <g id="dotdev-grey">
			            <rect id="_changed_per_issue_" fill="#7D818A" fill-rule="nonzero" x="0" y="0" width="300" height="150"></rect>
			            <path d="M300,48 L266.581,114.217 L228,38 L247,38 L266.581,79.167 L287,38 L300,38 C300.134,41.824 300,48 300,48 Z M231,81 L175,81 C175.73,92.246 184.351,99.905 195.889,99.905 C205.674,99.905 211.516,96.4 213.706,89.243 L230.206,90.119 C228.745,96.983 224.806,102.679 218.522,107.206 C212.047928,111.812188 204.266092,114.218247 196.322,114.07 C185.076,114.07 176.022,110.57 169.011,103.701 C162.003667,96.691 158.5,87.1983333 158.5,75.223 C158.5,63.247 162,53.754 168.869,46.89 C175.733,39.88 184.788,36.375 195.888,36.375 C206.549,36.375 215.166,39.734 221.446,46.306 C227.726,52.878 230.939,61.933 230.939,73.325 L231,81 Z M195.743,50.4 C184.5,50.392 176.73,57.463 176,69 L215.04,69.021 C214.621,57.938 207.576,50.4 195.743,50.395 L195.743,50.4 Z M137,102 C132.765,109.01 123.151,114.071 111.906,114.071 C101.244,114.071 92.628,110.571 85.906,103.556 C79.188,96.4 75.829,87.056 75.829,75.223 C75.829,63.39 79.188,54.046 85.906,47.036 C92.624,39.88 101.241,36.375 111.906,36.375 C122.571,36.375 131.765,40.72 136,47 L136,0 L152,0 L152,113 L137,113 L137,102 Z M135.711,73.178 C135.711,58.719 127.241,50.395 114.535,50.395 C101.535,50.395 92.482,59.595 92.482,75.223 C92.482,90.851 101.537,99.9 114.535,99.9 C127.241,99.9 135.711,91.576 135.711,77.117 L135.711,73.178 L135.711,73.178 Z M63.564,114.071 C57.8132758,113.991687 53.1930207,109.307271 53.1930207,103.556 C53.1930207,97.8047289 57.8132758,93.1203128 63.564,93.041 C67.3552074,92.9887125 70.8810183,94.9813458 72.7918768,98.2561905 C74.7027353,101.531035 74.7027353,105.580965 72.7918768,108.855809 C70.8810183,112.130654 67.3552074,114.123288 63.564,114.071 L63.564,114.071 Z" id="logo-dotdev-primary" fill="#FFFFFF"></path>
			        </g>
			    </g>
			</svg>
		</a>
	</header>
	<div id="page" class="max-w-3xl mx-auto p-6 pt-12 mx-auto">
		<div id="content" class="site-content font-sans text-base text-gray-700 mx-4">
