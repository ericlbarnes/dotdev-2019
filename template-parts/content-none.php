<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dotdev
 */

?>

<section class="no-results not-found post bg-white shadow-md mb-12">
	<div class="p-3 sm:p-8">
		<header class="page-header mb-4">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'dotdev' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content post-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dotdev' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dotdev' ); ?></p>
				<?php
				get_search_form();

			else :
				?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dotdev' ); ?></p>
				<?php
				get_search_form();

			endif;
			?>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->
