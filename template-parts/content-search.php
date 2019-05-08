<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

?>
<article id="post-<?php the_ID(); ?>" class="post bg-white shadow-md mb-12">
	<?php dotdev_post_thumbnail(); ?>

	<div class="p-3 sm:p-8">
		<header class="mb-4">
			<?php
            if (is_singular()) :
                the_title('<h1 class="entry-title text-gray-900 font-bold mt-0 lg:text-4xl text-2xl">', '</h1>');
            else :
                the_title('<h2 class="entry-title text-gray-900 font-bold mt-0 lg:text-4xl text-2xl"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            endif;
            ?>
            <div class="text-sm text-gray-600 mb-6">
                <p class="leading-none">
                    <span class="text-grey-dark"><?= dotdev_posted_on(); ?></span>
                    by <a href="<?= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?= get_the_author(); ?></a>
                </p>
            </div>
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
					<?php dotdev_entry_footer(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
