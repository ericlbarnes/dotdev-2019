<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

?>

<article id="post-<?php the_ID(); ?>" class="post bg-white shadow-md mx-2 mb-8">
    <?php dotdev_post_thumbnail(); ?>
    <div class="p-5 sm:p-8">
        <header class="">
            <?php
            the_title('<h2 class="entry-title text-gray-900 font-bold mt-0 text-lg"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            ?>
        </header>
        <!-- <div class="post-content mb-8">
            <?php the_excerpt(); ?>
        </div> -->
    </div>
</article>
