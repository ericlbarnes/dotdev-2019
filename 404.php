<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dotdev
 */

get_header();
get_sidebar();
?>

<div>
	<main>
		<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7ICKJN&placement=dotdevco" id="_carbonads_js"></script>
			<section class="error-404 not-found post bg-white shadow-md mb-12 p-3 sm:p-8">
				<header class="page-header mb-4">
					<h1 class="page-title text-gray-900 font-bold mt-0 lg:text-4xl text-2xl"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dotdev' ); ?></h1>
				</header><!-- .page-header -->

				<div class="post-content mb-8">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dotdev' ); ?></p>

					<?php
					get_search_form();
					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dotdev' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$dotdev_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'dotdev' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$dotdev_archive_content" );
					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
