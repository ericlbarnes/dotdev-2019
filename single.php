<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dotdev
 */

get_header();
get_sidebar();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

        ?>
			<div class="bg-white py-12 px-8 shadow-md mb-8">
				<?php
                    the_post_navigation();
                ?>
			</div>
		<?php

            // If comments are open or we have at least one comment, load up the comment template.
            // if (comments_open() || get_comments_number()) :
            //     comments_template();
            // endif;

        endwhile; // End of the loop.
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
