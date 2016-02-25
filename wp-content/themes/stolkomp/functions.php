<?php
/**
 *  Vet Shop functions and definitions
 *
 *
 * @package vetshop
 * @subpackage Vet_Shop
 * @since Vet Shop 1.0
 */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Define PHP file constants.
define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'New Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));


// Load library files.
require_once( TEMPLATEINC . '/shortcodes.php' );
require_once( TEMPLATEINC . '/cpt.php' );
require_once( TEMPLATEINC . '/template.php' );
require_once( TEMPLATEINC . '/actions.php' );
require_once( TEMPLATEINC . '/widget.php' );
require_once( TEMPLATEINC . '/wc-functions.php' );