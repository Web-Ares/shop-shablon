<?php
/**
 * Template Name: Page Shop
 */
get_header(); ?>

<?php if ( ! defined( 'ABSPATH' ) ) {
exit;
}

global $woocommerce_loop;
 woocommerce_content(); ?>


<?php get_footer();
?>
