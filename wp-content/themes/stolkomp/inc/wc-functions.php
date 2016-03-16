<?php
/**
 * Created by PhpStorm.
 * User: iutin
 * Date: 18.02.16
 * Time: 11:33
 */
add_action( 'init', 'ie_remove_woo_wrappers' );
function ie_remove_woo_wrappers() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
}

add_filter( 'woocommerce_breadcrumb_defaults', 'ie_woocommerce_breadcrumbs' );
function ie_woocommerce_breadcrumbs() {
    return array(
        'delimiter'   => false,
        'wrap_before' => '<ol class="breadcrumb">',
        'wrap_after'  => '</ol>',
        'before'      => '',
        'after'       => '',
        'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
    );
}

add_filter('woocommerce_product_subcategories', 'vasya_woocommerce_product_subcategories');

function vasya_woocommerce_product_subcategories(){

}
add_filter('woocommerce_subcategory_count_html','vasya_woocommerce_subcategory_count_html');

function vasya_woocommerce_subcategory_count_html($count){
   return '';
}


function wb_products ($atts,$before,$after){
    global $woocommerce_loop;

    $atts = shortcode_atts( array(
        'number'     => null,
        'orderby'    => 'name',
        'order'      => 'ASC',
        'columns'    => '4',
        'hide_empty' => 1,
        'parent'     => '',
        'ids'        => ''
    ), $atts );

    if ( isset( $atts['ids'] ) ) {
        $ids = explode( ',', $atts['ids'] );
        $ids = array_map( 'trim', $ids );
    } else {
        $ids = array();
    }

    $hide_empty = ( $atts['hide_empty'] == true || $atts['hide_empty'] == 1 ) ? 1 : 0;

    // get terms and workaround WP bug with parents/pad counts
    $args = array(
        'orderby'    => $atts['orderby'],
        'order'      => $atts['order'],
        'hide_empty' => $hide_empty,
        'include'    => $ids,
        'pad_counts' => true,
        'child_of'   => $atts['parent']
    );

    $product_categories = get_terms( 'product_cat', $args );

    if ( '' !== $atts['parent'] ) {
        $product_categories = wp_list_filter( $product_categories, array( 'parent' => $atts['parent'] ) );
    }

    if ( $hide_empty ) {
        foreach ( $product_categories as $key => $category ) {
            if ( $category->count == 0 ) {
                unset( $product_categories[ $key ] );
            }
        }
    }

    if ( $atts['number'] ) {
        $product_categories = array_slice( $product_categories, 0, $atts['number'] );
    }

    $columns = absint( $atts['columns'] );
    $woocommerce_loop['columns'] = $columns;

    ob_start();

    // Reset loop/columns globals when starting a new loop
    $woocommerce_loop['loop'] = $woocommerce_loop['column'] = '';

    if ( $product_categories ) {
        echo $before;

        foreach ( $product_categories as $category ) {
            wc_get_template( 'content-product_cat.php', array(
                'category' => $category
            ) );
        }

        echo $after;
    }

    woocommerce_reset_loop();

    return  ob_get_clean();
}
