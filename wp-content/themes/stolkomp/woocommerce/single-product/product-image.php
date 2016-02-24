<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see        http://docs.woothemes.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.0.14
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>

<div class="col-sm-6">
    <?php
    if (has_post_thumbnail()) {
        $image_link    = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0];

        $attachment_images = $product->get_gallery_attachment_ids();

        if (count($attachment_images) > 0) {

            echo '<div class="product-slider-small"><ul id="mycarousel" class="jcarousel jcarousel-skin-tango">';

            foreach($attachment_images as $image_id){
                $image_link = wp_get_attachment_url($image_id);
                echo '<li><a href="#" rel="'.$image_link.'"><img src="'.$image_link.'" alt=""/></a></li>';
            }
            echo '</ul></div>';
        }

            echo '<div class="product-image-big" style="background-image: url(' . $image_link . ');"></div>';
    } else {
        echo apply_filters('woocommerce_single_product_image_html', sprintf('<img src="%s" alt="%s" />', wc_placeholder_img_src(), __('Placeholder', 'woocommerce')), $post->ID);

    }
    ?>

</div>
