<?php
/**
 * Template Name: Home Categories
 */
?>
<?php get_header(); ?>


<h1 class="page-title"><?php the_title(); ?></h1>
<?php woocommerce_content(); ?>
<p><?php the_content(); ?></p>
<p><?php do_shortcode("[product_categories number='10' parent='0']"); ?></p>


<?php ?>
<?php get_footer(); ?>
