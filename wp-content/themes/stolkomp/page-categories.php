<?php
/**
 * Template Name: Home Categories
 */
?>
<?php get_header(); ?>
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>

<?php


if (have_posts()) :
    while (have_posts()) : the_post();


        echo wb_products(array('number'=>20,'parent'=>'0'),'<div class="presentation-boxes">','</div>');



    endwhile;
endif; ?>





<?php get_footer(); ?>
