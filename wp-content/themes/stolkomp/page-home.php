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

<?php get_footer(); ?>
