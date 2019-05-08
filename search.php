<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package dotdev
 */

get_header();
get_sidebar();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'dotdev'), '<span>' . get_search_query() . '</span>');
                    ?>
				</h1>
			</header><!-- .page-header -->

			<?php
            /* Start the Loop */
            while (have_posts()) :
                the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part('template-parts/content', 'search');

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

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
