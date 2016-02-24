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
        <?php
        wc_get_template('single-product/product-image.php');
        ?>
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
                    } else {
                        echo 'Нема його';
                    } ?></span>
                    <span class="detail-line"><strong>Product Code:</strong> <?php echo $product->get_sku(); ?></span>
                    <span class="detail-line"><strong>Brand:</strong> Apple</span>
                </div>
                <div class="description">
                    <?php echo apply_filters('woocommerce_short_description', $post->post_excerpt) ?>

                </div>
                <div class="buttons">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php
                            $attr_colors = wc_get_product_terms($product->id, 'pa_color', array('fields' => 'names'));
                            if (!empty($attr_colors)) {
                                echo '<select name="color" class="chosen-select"><option value="default">Select Color</option>';

                                foreach ($attr_colors as $key => $attr_color) {
                                    echo '<option value="' . $key . '">' . $attr_color . '</option>';
                                }
                                echo '</select>';
                            }
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <?php
                            $attr_sizes = wc_get_product_terms($product->id, 'pa_size', array('fields' => 'names'));
                            if (!empty($attr_sizes)) {
                                echo '<select name="size" class="chosen-select"><option value="default">Select Size</option>';

                                foreach ($attr_sizes as $key => $attr_size) {
                                    echo '<option value="' . $key . '">' . $attr_size . '</option>';
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
                        <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-heart'></i></span> Add to
                            whislist</a>
                        <br/>
                        <a href="#"><span class="wrap-icon"><i class='glyphicon glyphicon-ok'></i></span> Add to compare</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="spacer"></div>
    <div class="row">
        <div class="col-sm-6">
            <div class="product-collapse">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne">
                                    Description
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo">
                                    Details
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>The perfect mix of portability and performance in a slim 1" form factor:</p>
                                <ul>
                                    <li>3rd gen Intel® Core™ i7 quad core processor available;</li>
                                    <li>Windows 8 Pro available;</li>
                                    <li>13.3" and 15.5" screen sizes available;</li>
                                    <li>Double your battery life with available sheet battery;</li>
                                    <li>4th gen Intel® Core™ i7 processor available;</li>
                                    <li>Windows 8 Pro available;</li>
                                    <li>Full HD TRILUMINOS IPS touchscreen (1920 x 1080);</li>
                                    <li>Super fast 512GB PCIe SSD available;</li>
                                    <li>Ultra-light at just 2.34 lbs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree">
                                    Accessories
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <article class="category-article category-list">
                                    <figure>
                                        <img src="img/product01.jpg" alt=""/>
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                    <div class="text-wrap">
                                        <div class="right visible-lg">
                                            <div class="price">
                                                <span class="old-price">$250.00</span>
                                                <span class="new-price">$201.00</span>
                                            </div>
                                            <button class="btn btn-default custom-button">Add to Bag</button>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product.html">Pale pink and black buttoned dress</a></h2>
                                            <div class="rating-line">
                                                <div class="stars" data-number="5" data-score="3"></div>
                                                <div class="review-count"><a href="#">2 review(s)</a></div>
                                            </div>
                                            <div class="excerpt">
                                                <p>
                                                    Donec in lobortis massa. Donec aliquet dictum gravida. Sed purus
                                                    mauris, scelerisque sed egestas vel, semper dictum leo. Nulla
                                                    pulvinar id lacus sed porttitor. Etiam gravida eleifend velit,
                                                    seddapibus.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right hidden-lg">
                                            <div class="price">
                                                <span class="old-price">$250.00</span>
                                                <span class="new-price">$201.00</span>
                                            </div>
                                            <button class="btn btn-default custom-button">Add to Bag</button>
                                        </div>
                                    </div>
                                </article>
                                <article class="category-article category-list">
                                    <figure>
                                        <img src="img/product02.jpg" alt=""/>
                                        <figcaption>

                                        </figcaption>
                                    </figure>
                                    <div class="text-wrap">
                                        <div class="right visible-lg">
                                            <div class="price">
                                                <span class="old-price">$250.00</span>
                                                <span class="new-price">$201.00</span>
                                            </div>
                                            <button class="btn btn-default custom-button">Add to Bag</button>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product.html">Pale pink and black buttoned dress</a></h2>
                                            <div class="rating-line">
                                                <div class="stars" data-number="5" data-score="3"></div>
                                                <div class="review-count"><a href="#">2 review(s)</a></div>
                                            </div>
                                            <div class="excerpt">
                                                <p>
                                                    Donec in lobortis massa. Donec aliquet dictum gravida. Sed purus
                                                    mauris, scelerisque sed egestas vel, semper dictum leo. Nulla
                                                    pulvinar id lacus sed porttitor. Etiam gravida eleifend velit,
                                                    seddapibus.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right hidden-lg">
                                            <div class="price">
                                                <span class="old-price">$250.00</span>
                                                <span class="new-price">$201.00</span>
                                            </div>
                                            <button class="btn btn-default custom-button">Add to Bag</button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFour">
                                    Video
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="latest-video">
                                    <iframe src="http://www.youtube.com/embed/ukJjdIIqU0s" frameborder="0"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php woocommerce_output_related_products(); ?>