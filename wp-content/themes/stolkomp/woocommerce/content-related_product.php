<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if (empty($woocommerce_loop['loop'])) {
    $woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if (empty($woocommerce_loop['columns'])) {
    $woocommerce_loop['columns'] = apply_filters('loop_shop_columns', 4);
}

// Ensure visibility
if (!$product || !$product->is_visible()) {
    return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if (0 === ($woocommerce_loop['loop'] - 1) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns']) {
    $classes[] = 'first';
}
if (0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns']) {
    $classes[] = 'last';
}
?>

<article class="category-article category-grid col-sm-3">
    <figure>
        <?php
        $percent = $product->get_attribute('pa_percent');
        if (!empty($percent)) {
            echo '<div class="corner-sign red">'.$percent.'</div>';
        }
        $percent = $product->get_attribute('pa_percent');
        if (!empty($percent)) {
            echo '<div class="corner-sign red">'.$percent.'</div>';
        }
        echo $product->get_image('full'); ?>
        <div class="figure-overlay">
            <div class="rating-line">
                <div class="stars-white" data-number="5" data-score="2"></div>
            </div>
            <div class="excerpt">
                <p>
                    <?php echo apply_filters('woocommerce_short_description', $post->post_excerpt) ?>
                </p>
            </div>
            <button class="btn btn-default custom-button">Add to Bag</button>
        </div>
    </figure>
    <div class="figcaption">

    </div>
    <div class="text">
        <h2><a href="<?php echo $product->get_permalink(); ?>"><?php echo $product->get_title(); ?></a></h2>
        <div class="price">
            <span
                class="old-price"><?php echo sprintf(get_woocommerce_currency_symbol()) . ' ' . $product->get_regular_price(); ?></span>
            <?php
            $sale_price = $product->get_sale_price();
            if (!empty($sale_price)) {
                echo '<span class="new-price">' . sprintf(get_woocommerce_currency_symbol()) . ' ' . $sale_price . '</span>';
            } ?>


        </div>
    </div>
</article>
