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

        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7ICKJN&placement=dotdevco" id="_carbonads_js"></script>
		<?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

        ?>

        <?php if ( class_exists( 'Jetpack RelatedPosts' ) ): ?>
            <div class="py-4 px-8 mb-8 bg-white shadow-md">
                <?= do_shortcode( '[jetpack-related-posts]' ); ?>
            </div>
        <?php endif; ?>

			<div class="py-4 px-8 mb-8 bg-white shadow-md">
				<?php
                    the_post_navigation([
                        'prev_text' => '&larr; %title',
                        'next_text' => '%title &rarr;',
                    ]);
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
