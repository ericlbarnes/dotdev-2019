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

		<?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

        ?>

        <div class="py-4 px-8 mb-8 bg-white shadow-md">
            <div id="jp-relatedposts" class="jp-relatedposts" style="display: block;">
                <h3 class="jp-relatedposts-headline"><em>Related</em></h3>
            <div class="jp-relatedposts-items jp-relatedposts-items-visual jp-relatedposts-grid "><div class="jp-relatedposts-post jp-relatedposts-post0 jp-relatedposts-post-thumbs" data-post-id="8533" data-post-format="false"><a class="jp-relatedposts-post-a" href="https://dotdev.co/winds-rss-reader/" title="Winds RSS Reader

            Winds is an RSS feed reader that goes beyond simply providing a list view of your subscriptions. With machine learning, you’ll get a highly personalized feed tailored to you. It’s open source and powered by Sails, React, and Redux, and the machine learning is powered by Stream’s personalization API. Since…" rel="nofollow" data-origin="9041" data-position="0"><img class="jp-relatedposts-post-img" src="https://i2.wp.com/dotdev.co/wp-content/uploads/2017/04/c071d-winds-rss.jpg?fit=1024%2C576&amp;ssl=1&amp;resize=350%2C200" alt="Winds RSS Reader" scale="0" width="350"></a><h4 class="jp-relatedposts-post-title"><a class="jp-relatedposts-post-a" href="https://dotdev.co/winds-rss-reader/" title="Winds RSS Reader

            Winds is an RSS feed reader that goes beyond simply providing a list view of your subscriptions. With machine learning, you’ll get a highly personalized feed tailored to you. It’s open source and powered by Sails, React, and Redux, and the machine learning is powered by Stream’s personalization API. Since…" rel="nofollow" data-origin="9041" data-position="0">Winds RSS Reader</a></h4><p class="jp-relatedposts-post-excerpt">Winds is an RSS feed reader that goes beyond simply providing a list view of your subscriptions. With machine learning, you’ll get a highly personalized feed tailored to you. It’s open source and powered by Sails, React, and Redux, and the machine learning is powered by Stream’s personalization API. Since…</p><p class="jp-relatedposts-post-date" style="display: block;">November 13, 2016</p><p class="jp-relatedposts-post-context">In "Developer Tools"</p></div><div class="jp-relatedposts-post jp-relatedposts-post1 jp-relatedposts-post-thumbs" data-post-id="8987" data-post-format="false"><a class="jp-relatedposts-post-a" href="https://dotdev.co/modern-javascript-web-dev/" title="A Spell-book of Modern Web Development Resources

            Dexter Yang has created a Github project called, Spellbook of Modern Web Dev, that is a massive resource of links for learning modern JavaScript web development. &quot;This document originated from a bunch of most commonly used links and learning resources I sent to every new web developer on our full-stack…" rel="nofollow" data-origin="9041" data-position="1"><img class="jp-relatedposts-post-img" src="https://i2.wp.com/dotdev.co/wp-content/uploads/2017/06/81360-modern-dev-spell-book.png?fit=1024%2C576&amp;ssl=1&amp;resize=350%2C200" alt="A Spell-book of Modern Web Development Resources" scale="0" width="350"></a><h4 class="jp-relatedposts-post-title"><a class="jp-relatedposts-post-a" href="https://dotdev.co/modern-javascript-web-dev/" title="A Spell-book of Modern Web Development Resources

            Dexter Yang has created a Github project called, Spellbook of Modern Web Dev, that is a massive resource of links for learning modern JavaScript web development. &quot;This document originated from a bunch of most commonly used links and learning resources I sent to every new web developer on our full-stack…" rel="nofollow" data-origin="9041" data-position="1">A Spell-book of Modern Web Development Resources</a></h4><p class="jp-relatedposts-post-excerpt">Dexter Yang has created a Github project called, Spellbook of Modern Web Dev, that is a massive resource of links for learning modern JavaScript web development. "This document originated from a bunch of most commonly used links and learning resources I sent to every new web developer on our full-stack…</p><p class="jp-relatedposts-post-date" style="display: block;">June 14, 2017</p><p class="jp-relatedposts-post-context">In "News"</p></div><div class="jp-relatedposts-post jp-relatedposts-post2 jp-relatedposts-post-thumbs" data-post-id="8729" data-post-format="false"><a class="jp-relatedposts-post-a" href="https://dotdev.co/vue-loop/" title="Vue Loop - Infinite Content Looping for Vue.js

            Vue Loop is a component for Vue.js that allows you to create an infinite content loop for your site. It features full page content looping, a contained content loop, and horizontal &amp; vertical options." rel="nofollow" data-origin="9041" data-position="2"><img class="jp-relatedposts-post-img" src="https://i1.wp.com/dotdev.co/wp-content/uploads/2017/04/vueloop-animated.gif?resize=350%2C200&amp;ssl=1" alt="Vue Loop - Infinite Content Looping for Vue.js" scale="0" width="350"></a><h4 class="jp-relatedposts-post-title"><a class="jp-relatedposts-post-a" href="https://dotdev.co/vue-loop/" title="Vue Loop - Infinite Content Looping for Vue.js

            Vue Loop is a component for Vue.js that allows you to create an infinite content loop for your site. It features full page content looping, a contained content loop, and horizontal &amp; vertical options." rel="nofollow" data-origin="9041" data-position="2">Vue Loop - Infinite Content Looping for Vue.js</a></h4><p class="jp-relatedposts-post-excerpt">Vue Loop is a component for Vue.js that allows you to create an infinite content loop for your site. It features full page content looping, a contained content loop, and horizontal &amp; vertical options.</p><p class="jp-relatedposts-post-date" style="display: block;">April 30, 2017</p><p class="jp-relatedposts-post-context">In "Developer Tools"</p></div></div></div>
        </div>
        
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
