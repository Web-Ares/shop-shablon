<?php
/**
 * Template Name: Home Categories
 */
?>
<?php get_header(); ?>
<h1 class=page-title><?php the_title();?></h1>
<?php if (have_posts()) :
while (have_posts()) : the_post();


     echo do_shortcode("[product_categories number='20' parent='0']");



 endwhile;
endif; ?>


<?php get_footer(); ?>
