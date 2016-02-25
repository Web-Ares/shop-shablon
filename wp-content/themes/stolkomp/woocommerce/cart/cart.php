<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

wc_print_notices();

//do_action( 'woocommerce_before_cart' );

echo '<section id=\'main\'>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">';
?>

<form action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">

    <?php do_action('woocommerce_before_cart_table'); ?>

    <div class="table-responsive shopping-cart">
        <table class="table">
            <thead>
            <tr>
                <th width="41%">
                    <div class="title-wrap">Product Name</div>
                </th>
                <th width="14%">
                    <div class="title-wrap">Product Code</div>
                </th>
                <th width="14%">
                    <div class="title-wrap">Unit Price</div>
                </th>
                <th width="14%">
                    <div class="title-wrap">Quantity</div>
                </th>
                <th width="14%">
                    <div class="title-wrap">Subtotal</div>
                </th>
                <th width="3%">
                    <div class="title-wrap"><i class="glyphicon glyphicon-remove"></i></div>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                var_dump($cart_item['data']);



                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                    ?>
                    <tr>



                        <td class="product-thumbnail">
                            <?php
                            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                            if (!$_product->is_visible()) {
                                $title = $_product->get_title();
                            } else {
                                $title = sprintf('<a href="%s">%s</a>', esc_url($_product->get_permalink($cart_item)), $_product->get_title());
                            }
                            // Meta data
                            echo WC()->cart->get_item_data( $cart_item );
                            echo '<div class="cart-product">
                                        <figure>
                                            '.$thumbnail.'
                                        </figure>
                                        <div class="text">
                                            <h2>'.$title.'</h2>
                                            <div class="details">
                                                <span class="detail-line">
                                                    <strong>Color: </strong> Blue
                                                </span>
                                                <span class="detail-line">
                                                    <strong>Size: </strong> XS
                                                </span>
                                            </div>
                                        </div>
                                    </div>'
                            ?>
                        </td>

                        <td>
                            <div class="product-code"><?php echo $_product->get_sku() ;?></div>

                        </td>

                        <td>
                            <div class="price"><?php echo WC()->cart->get_product_price($_product);?></div>
                        </td>

                        <td>
                            <div class="quantity">
                                <?php
                                if ($_product->is_sold_individually()) {
                                    $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                } else {
                                    $product_quantity = woocommerce_quantity_input(array(
                                        'input_name' => "cart[{$cart_item_key}][qty]",
                                        'input_value' => $cart_item['quantity'],
                                        'max_value' => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
                                        'min_value' => '0'
                                    ), $_product, false);
                                }

                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item);
                                ?>
                            </div>
                        </td>

                        <td class="product-subtotal" data-title="<?php _e('Total', 'woocommerce'); ?>">
                            <?php
                            echo '<div class="subtotal">' . WC()->cart->get_product_subtotal($_product, $cart_item['quantity']) . '</div>';
                            ?>
                        </td>
                        <td class="product-remove">
                            <?php
                            echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                '<a href="%s" class="btn btn-default custom-button" title="%s" data-product_id="%s" data-product_sku="%s"><i class="glyphicon glyphicon-remove"></i></a>',
                                esc_url(WC()->cart->get_remove_url($cart_item_key)),
                                __('Remove this item', 'woocommerce'),
                                esc_attr($product_id),
                                esc_attr($_product->get_sku())
                            ), $cart_item_key);
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            }

            do_action('woocommerce_cart_contents');
            ?>
            <tr>
                <td colspan="6" class="actions">
                    <input type="submit" class="btn btn-default btn-lg custom-button pull-left" name="update_cart"
                           value="<?php esc_attr_e('Update Cart', 'woocommerce'); ?>"/>

                    <?php do_action('woocommerce_cart_actions'); ?>

                    <?php wp_nonce_field('woocommerce-cart'); ?>
                </td>
            </tr>

            <?php do_action('woocommerce_after_cart_contents'); ?>
            </tbody>
        </table>


</form>
<?php echo '</div>
</div>
</div>
</section>'; ?>
