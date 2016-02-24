<?php
/**
 * Template Name: Cart Page
 */
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb text-right">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li class="active"><?php the_title();?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <?php
    wc_get_template('cart/cart.php');
    ?>
<?php endwhile; // end of the loop. ?>


<?php get_footer();
?>
