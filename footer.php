<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dotdev
 */

?>

	</div><!-- #content -->
</div><!-- #page -->

    <div class="flex flex-wrap bg-white pb-12 footer">
        <div class="w-full md:w-1/3 text-xs text-gray-700 p-2 px-8">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
        <div class="w-full md:w-1/3 text-sm text-gray-700 p-2 px-8">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
        <div class="w-full md:w-1/3 text-xs text-gray-700 p-2 px-8">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <p>
                <b>Follow Us:</b>
                <a href="https://twitter.com/dotdevco">Twitter</a> | 
                <a href="https://www.facebook.com/dotdevco">Facebook</a> |
                <a href="https://dotdev.co/feed/">RSS</a> |
                <a href="http://eepurl.com/gqPc59">Email</a>
            </p>
            <p class="text-gray-600">&copy; 2015 - <?= date("Y"); ?> dotdev inc.</p>
        </div>
    </div>
    
<?php wp_footer(); ?>

</body>
</html>
