<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

?>

<article id="post-<?php the_ID(); ?>" class="post bg-white shadow-md mb-12">
	<?php dotdev_post_thumbnail(); ?>

	<div class="py-12 px-8">
		<header class="mb-4">
			<?php
            if (is_singular()) :
                the_title('<h1 class="text-gray-900 text-2xl font-bold mt-0">', '</h1>');
            else :
                the_title('<h2 class="text-gray-900 text-2xl font-bold mt-0"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;
            ?>
		</header><!-- .entry-header -->

		<div class="post-content mb-8">
			<?php
            the_content(sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'dotdev'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'dotdev'),
                'after'  => '</div>',
            ));
            ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php
                if ('post' === get_post_type()) :
            ?>
				<div class="entry-meta flex items-center text-sm text-gray-600">
					<?php
                    dotdev_posted_on();
                    echo '<span class="font-bold -mb-2 mx-2">&dot;</span>';
                    dotdev_posted_by();
                    ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			<!-- <?php dotdev_entry_footer(); ?> -->
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
