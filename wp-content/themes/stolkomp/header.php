<?php
/**
 * The header for our theme.
 *
 * @package vetshop
 */
?>
    <!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Stolkomp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo TEMPLATEURI ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo TEMPLATEURI ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo TEMPLATEURI ?>/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo TEMPLATEURI ?>/css/chosen.css">
        <link rel="stylesheet" href="<?php echo TEMPLATEURI ?>/css/slider.css">
        <link rel="stylesheet" href="<?php echo TEMPLATEURI ?>/css/style.css">

        <script src="<?php echo TEMPLATEURI ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

<body <?php body_class(); ?>>
<?php //if (is_page() || is_single() || is_singular() || is_404()) {
//    the_post();
//} ?>
<div class="site">

    <div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo get_site_url(); ?>"><span
                                class='glyphicon glyphicon-home'></span> Home</a></li>
                    <li><a href="/my-account/"><span class='glyphicon glyphicon-user'></span> Account</a></li>
                    <li><a href="/cart/"><span class='glyphicon glyphicon-briefcase'></span> Shopping cart</a>
                    </li>
                    <li><a href="checkout.html"><span class='glyphicon glyphicon-ok'></span> Checkout</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown nav-bar-dropdown">
                        <ul class="dropdown-menu">
                            <li>
                                <div class="nav-bar-item">
                                    <p>Recently added item(s)</p>
                                </div>
                            </li>
                            <li>
                                <div class="nav-bar-item">
                                    <figure>
                                        <img src="img/product01.jpg" alt=""/>
                                    </figure>
                                    <button class="btn btn-default custom-button no-border"><i
                                            class="glyphicon glyphicon-remove"></i></button>
                                    <div class="text">
                                        <h2><a href="#">Mustard yellow ruffle dress</a></h2>
                                        <div class="price-line">
                                            <div class="new-price">$478.00</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="nav-bar-item">
                                    <figure>
                                        <img src="img/product02.jpg" alt=""/>
                                    </figure>
                                    <button class="btn btn-default custom-button no-border"><i
                                            class="glyphicon glyphicon-remove"></i></button>
                                    <div class="text">
                                        <h2><a href="#">Navy Blue Silk Pleated Shift Dress</a></h2>
                                        <div class="price-line">
                                            <div class="old-price">$250.00</div>
                                            <div class="new-price">$180.00</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php
                        $cart = WC()->cart;

                        $cart_url = $cart->get_cart_url();
                        $count_products = count($cart->get_cart_item_quantities());
                        ?>
                        <a href="<?php echo $cart_url; ?>"><span class='glyphicon glyphicon-shopping-cart'></span> My
                            Bag: <?php echo $count_products; ?>
                            item(s)</a>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </div>

<?php
get_template_part('templates/header');
?>