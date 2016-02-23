<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see        http://docs.woothemes.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
global $product;
// Ensure visibility
if (!$product || !$product->is_visible()) {
    return;
}
?>

<?php
/**
 * woocommerce_before_single_product hook.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form();
    return;
}
?>


<div class="row">
    <div class="col-sm-6">
        <div class="product-slider-small">
            <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
                <li><a href="#" rel='img/big-product.jpg'><img src="img/big-product.jpg" alt=""/></a></li>
                <li><a href="#" rel='img/small-product01.jpg'><img src="img/small-product01.jpg"/></a></li>
                <li><a href="#" rel='img/small-product02.jpg'><img src="img/small-product02.jpg"/></a></li>
                <li><a href="#" rel='img/small-product03.jpg'><img src="img/small-product03.jpg"/></a></li>
                <li><a href="#" rel='img/product06.jpg'><img src="img/product06.jpg"/></a></li>
            </ul>
        </div>
        <div class="product-image-big" style="background-image: url('img/big-product.jpg');"></div>
    </div>
    <div class="col-sm-6">
        <div class="product-details">
            <h1><?php echo $product->get_title(); ?></h1>
            <hr/>
            <div class="rating-line">
                <div class="stars" data-number="5" data-score="4"></div>
                <div class="review-count"><a href="#">5 review(s)</a></div>
                |
                <div class="review-count"><a href="#">Add Your Review</a></div>
            </div>
            <hr/>
            <div class="details">
				<span class="detail-line"><strong>Availability:</strong>
                    <?php if ($product->is_in_stock()) {
                        echo 'In Stock';
                    }else{
                        echo 'Нема його';
                    } ?></span>
                <span class="detail-line"><strong>Product Code:</strong> <?php echo $product->get_sku(); ?></span>
                <span class="detail-line"><strong>Brand:</strong> Apple</span>
            </div>
            <div class="description">
                <?php echo apply_filters('woocommerce_description', $post->post_content) ?>
            </div>
            <div class="buttons">
                <div class="row">
                    <div class="col-sm-4">
                        <?php
                        $attr_colors = wc_get_product_terms( $product->id, 'pa_color', array( 'fields' => 'names' ) );
                        if (!empty($attr_colors)) {
                            echo '<select name="color" class="chosen-select"><option value="default">Select Color</option>';

                            foreach($attr_colors as $key=>$attr_color){
                                echo '<option value="'.$key.'">'.$attr_color.'</option>';
                            }
                            echo '</select>';
                        }
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $attr_sizes = wc_get_product_terms( $product->id, 'pa_size', array( 'fields' => 'names' ) );
                        if (!empty($attr_sizes)) {
                            echo '<select name="size" class="chosen-select"><option value="default">Select Size</option>';

                            foreach($attr_sizes as $key=>$attr_size){
                                echo '<option value="'.$key.'">'.$attr_size.'</option>';
                            }
                            echo '</select>';
                        }
                        ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" class="form-control" value="1" placeholder="Quantity"/>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i
                                                    class="glyphicon glyphicon-plus"></i></button>
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-line">
                <div class="price">
                    <?php
                    $sale_price = $product->get_sale_price();
                    if (!empty($sale_price)) {
                        echo sprintf(get_woocommerce_currency_symbol()) . ' ' . $sale_price;
                    } else {
                        echo sprintf(get_woocommerce_currency_symbol()) . ' ' . $product->get_regular_price();
                    } ?>
                </div>
                <button class="btn btn-default custom-button custom-button-inverted">Add to bag</button>
                <div class="small-buttons">
                    <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span> Add to whislist</a>
                    <br/>
                    <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span> Add to compare</a>
                </div>
            </div>

        </div>
    </div>
</div>