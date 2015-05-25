<?php
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

        
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION

/*Alert on Staging Site*/
/*http://stackoverflow.com/questions/6522023/php-if-domain*/
$host = $_SERVER['HTTP_HOST'];
if ($host === 'staging.eatingrichly.flywheelsites.com') {
    function staging_admin_error_notice()
    {
        $class   = "error";
        $message = "You are on the staging site.";
        echo "<div class=\"$class\"> <p>$message</p></div>";
    }
    add_action('admin_notices', 'staging_admin_error_notice');
}
/*End Alert on Staging Site*/
/*Override Parent Functions*/
/*http://code.tutsplus.com/tutorials/a-guide-to-overriding-parent-theme-functions-in-your-child-theme--cms-22623*/
function child_function()
{
    // Contents for your function here.
    /*Set Content Width*/
    if (!isset($content_width)) {
        $content_width = 800; //Orig = 474
    }
    /*Increase Thumbnail Image Size*/
    /* EatingRichly Edit http://themeforest.net/item/pluto-clean-personal-wordpress-masonry-blog-theme/7950280/comments#comment_9890985 */
    add_image_size('pluto-index-width', 550, 963, false);
}
add_action('init', 'child_function', 15);
/*End Override Parent Functions*/
