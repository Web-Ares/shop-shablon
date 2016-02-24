<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce_loop;

// Store loop count we're currently on.
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid.
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count.
$woocommerce_loop['loop']++;
?>


<div class="col-sm-6">
	<figure class="big-image center-content">

		<?php
		$thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
		$image_link  = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0]; ?>


		<img src="<?php echo $image_link?>" alt="<?php echo $category->slug; ?>"/>
		<figcaption>
			<div class="content">

				<h2><?php woocommerce_template_loop_category_link_open( $category ); ?><?php echo $category->name; woocommerce_template_loop_category_link_close();?></h2>
				<?php echo '<a href="' . get_term_link( $category->slug, 'product_cat' ) . '" class='."image-link".'>'; ?>Show all in category: <?php echo $category->name; woocommerce_template_loop_category_link_close();?>
			</div>
		</figcaption>

	</figure>
</div>
