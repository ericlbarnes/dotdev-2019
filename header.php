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
			<svg class="logo -mt-px" viewBox="0 0 301 150" width="301" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="m0 0h300v150h-300z" fill="#7d818a" fill-rule="nonzero"/><path d="m300 48-33.419 66.217-38.581-76.217h19l19.581 41.167 20.419-41.167h13c.134 3.824 0 10 0 10zm-69 33h-56c.73 11.246 9.351 18.905 20.889 18.905 9.785 0 15.627-3.505 17.817-10.662l16.5.876c-1.461 6.864-5.4 12.56-11.684 17.087-6.474072 4.606188-14.255908 7.012247-22.2 6.864-11.246 0-20.3-3.5-27.311-10.369-7.007333-7.01-10.511-16.5026667-10.511-28.478 0-11.976 3.5-21.469 10.369-28.333 6.864-7.01 15.919-10.515 27.019-10.515 10.661 0 19.278 3.359 25.558 9.931s9.493 15.627 9.493 27.019zm-35.257-30.6c-11.243-.008-19.013 7.063-19.743 18.6l39.04.021c-.419-11.083-7.464-18.621-19.297-18.626zm-58.743 51.6c-4.235 7.01-13.849 12.071-25.094 12.071-10.662 0-19.278-3.5-26-10.515-6.718-7.156-10.077-16.5-10.077-28.333s3.359-21.177 10.077-28.187c6.718-7.156 15.335-10.661 26-10.661s19.859 4.345 24.094 10.625v-47h16v113h-15zm-1.289-28.822c0-14.459-8.47-22.783-21.176-22.783-13 0-22.053 9.2-22.053 24.828s9.055 24.677 22.053 24.677c12.706 0 21.176-8.324 21.176-22.783zm-72.147 40.893c-5.7507242-.079313-10.3709793-4.763729-10.3709793-10.515 0-5.7512711 4.6202551-10.4356872 10.3709793-10.515 3.7912074-.0522875 7.3170183 1.9403458 9.2278768 5.2151905 1.9108585 3.2748445 1.9108585 7.3247745 0 10.5996185-1.9108585 3.274845-5.4366694 5.267479-9.2278768 5.215191z" fill="#fff"/></g></svg>
		</a>
	</header>
	<div id="page" class="max-w-3xl mx-auto p-6 pt-12 mx-auto">
		<div id="content" class="site-content font-sans text-base text-gray-700 mx-4">
