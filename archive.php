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

        <div class="flex flex-col">
			<?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_type());

            endwhile;

        ?>
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
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
