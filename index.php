<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

get_header();
get_sidebar();
?>
	<div>
		<main>

            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7ICKJN&placement=dotdevco" id="_carbonads_js"></script>
		<?php
        if (have_posts()) :
            
            if (is_home() && ! is_front_page()) :
                ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
            endif;

            // echo '<div class="flex flex-col">';

            /* Start the Loop */
            $count = 0;
            while (have_posts()) :
                the_post();
                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_type());
                $count++;
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
	</div><!-- #primary -->

<?php
get_footer();
