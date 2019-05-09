<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

?>

<article id="post-<?php the_ID(); ?>" class="post bg-white shadow-md mx-2 truncate-post">
    <?php dotdev_post_thumbnail(); ?>
    <div class="p-3 sm:p-8">
        <header class="">
            <?php
            the_title('<h2 class="entry-title text-gray-900 font-bold mt-0 text-lg"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            ?>
        </header>
    </div>
</article>
