<?php
/**
 * Template part for displaying page content in page.php
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
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="post-content mb-8">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dotdev' ),
				'after'  => '</div>',
			) );
			?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
