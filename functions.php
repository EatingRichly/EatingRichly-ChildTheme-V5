<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:


if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION

/*Set Content Width*/
if ( ! isset( $content_width ) ) {
  $content_width = 800; //Orig = 474
}
/*Increase Thumbnail Image Size*/
/* EatingRichly Edit http://themeforest.net/item/pluto-clean-personal-wordpress-masonry-blog-theme/7950280/comments#comment_9890985 */
  add_image_size( 'pluto-index-width', 550, 963, false );
