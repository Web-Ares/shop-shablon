<?php
/**
 * Created by PhpStorm.
 * User: iutin
 * Date: 16.02.16
 * Time: 15:59
 */
/**
 * Template Name: Home Page
 */
?>
<?php get_header(); ?>

<section class="homepage-slider typeOne hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sliderTypeOne flexslider">
                    <div class="slider-controls sliderTypeOne-controls">
                        <button class="next"><i class="glyphicon glyphicon-chevron-left"></i></button>
                        <button class="prev"><i class="glyphicon glyphicon-chevron-right"></i></button>
                    </div>
                    <ul class="slides">


                        <?php  if( have_rows('slider_info') ):

                            while ( have_rows('slider_info') ) : the_row();

                                ?>


                                <li style="background-image: url('<?php the_sub_field('img_slider'); ?>');">
                                    <div class="slide-content all-white">
                                        <div class="inner">
                                            <h1><?php the_sub_field('title_slider'); ?></h1>
                                            <div class="clearfix"></div>
                                            <div class="small-separator"></div>
                                            <div class="clearfix"></div>
                                            <p><?php the_sub_field('slider_excerpt'); ?></p>
                                            <div class="clearfix"></div>
                                            <a href="<?php the_permalink(27); ?>" class='btn btn-default btn-lg custom-button'>Take a Look</a>
                                        </div>
                                    </div>
                                </li>


                                <?php  endwhile;

                        endif;

                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section id='main'>
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="homepage-products">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#new-arrivals" data-toggle="tab">New Arrivals</a></li>
                        <li><a href="#featured" data-toggle="tab">Featured</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="new-arrivals">
                            <div class="slider-controls new-arrivals-controls">
                                <button class="next"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                <button class="prev"><i class="glyphicon glyphicon-chevron-right"></i></button>
                            </div>
                            <div class="new-arrivals-slider">
                                <ul class="slides">
                                    <li>
                                        <div class="row">

                                            <?php echo do_shortcode('[recent_products per_page="4" columns="4"]');?>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <?php echo do_shortcode('[recent_products per_page="4" columns="4"]');?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>





                        <div class="tab-pane fade" id="featured">

                                <ul class="slides">
                                    <li>
                                        <div class="row">
                                            <?php echo do_shortcode('[featured_products per_page="12" columns="4"]'); ?>
                                        </div>
                                    </li>

                                </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="separator middle"></div>
        </div>


        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h1>BestSellers</h1>
                        </div>
                    </div>


                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 3,
                        'meta_key' => 'total_sales',
                        'orderby' => 'meta_value_num',
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post();
                            woocommerce_get_template_part( 'content', 'product' );
                        endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();
                    ?>

                    <div style="clear: both"></div>
                </div>

            </div>
            <aside class="col-sm-4">
                <div class="newsletter-widget">
                    <h2>Newsletter</h2>
                    <div class="small-separator"></div>
                    <p> Sing up to get exclusive offers from your favoritebrands.</p>
                    <input type="email" class="form-control" placeholder="Enter your email address"/>
                    <input type="submit" value="Sign up" class="btn btn-default custom-button btn-lg" />
                </div>

            </aside>
        </div>

    </div>
</section>

<?php the_widget('widget_price_filter'); echo '111' ?>

<?php dynamic_sidebar( 'New Sidebar' ); ?>

<?php get_footer(); ?>
