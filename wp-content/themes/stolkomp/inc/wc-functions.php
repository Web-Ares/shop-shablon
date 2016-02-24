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
//add_filter( 'woocommerce_get_price_html', 'custom_price_html', 100, 2 );
//function custom_price_html( $price, $product ){
//    $price = '';
//    $sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
//    if(!empty($sale_price)) {
//        $price .= '<span class="old-price">' . sprintf(get_woocommerce_currency_symbol()) . ' ' . get_post_meta(get_the_ID(), '_sale_price', true) . '</span> ';
//    }
//    $price .= '<span class="new-price">'.sprintf(get_woocommerce_currency_symbol() ) .' '. get_post_meta( get_the_ID(), '_regular_price', true).'</span>';
//    return apply_filters( 'woocommerce_get_price', $price );
//}