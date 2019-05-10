<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

get_header();
get_sidebar();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="mb-6">
				<?php
                    dotdev_the_archive_title('<h1 class="mb-2">', '</h1>');
                    the_archive_description('<div class="text-gray-800">', '</div>');
                ?>
			</header><!-- .page-header -->

        <div class="mb-4">
            <?php $count = 0; ?>
            <?php while (have_posts()) : ?>
                <div class="w-full">
                <?php 
                the_post();
                if ($count == 1) {
                    echo '<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7ICKJN&placement=dotdevco" id="_carbonads_js"></script>';
                }
                get_template_part('template-parts/content', 'grid');
                $count++;
                ?>
                </div>
            <?php endwhile; ?>
        </div>
		
        	<div class="py-4 px-8 mb-8 bg-white shadow-md">
                <?php
                the_posts_navigation([
                    'prev_text' => __( '&larr; Older Posts', 'textdomain' ),
                    'next_text' => __( 'Newer Posts &rarr;', 'textdomain' ),
                ]);
                ?>
            </div>
		<?php

        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
