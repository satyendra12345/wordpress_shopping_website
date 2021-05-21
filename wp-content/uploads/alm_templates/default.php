<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

// do_action( 'woocommerce_shop_loop' );

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
// echo '<pre>'; print_r($product); die;
?>
<div class="col-xl-2 col-lg-3 col-md-4 col-6 product-list-item-col">
    <div class="list-info">
        <a href="javascript:void(0);" data-toggle="modal" data-target="#ProductDetails<?php echo $product->get_id() ?>" class="product-list" data-product-id="<?php echo $product->get_id() ?>">
          <div class="frntre-image">
            <div class="discount-label"><i class="fa fa-circle-o-notch fa-spin"></i></div>
            <!-- <img src="/wp-content/uploads/2020/05/product2.jpg" alt="Grofers Mother's Choice Refined Sunflower Oil (Pouch)"> -->
            <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
          </div>
        </a>
          <div class="product-info">
            <!-- <h2 class="product-title"><?php // do_action( 'woocommerce_shop_loop_item_title' ); ?></h2> -->
            <?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
            <div class="form-group">   
              <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
            </div>
            <!-- <div class="select-quantity">
              <div class="row align-items-center">
                <div class="col-5">
                  <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                  <h3 class="product-price"><?php echo $product->get_sale_price() ?> <span><?php echo $product->get_regular_price(); ?></span></h3>
                </div>
                <div class="col-7 textright">
                  
                </div>
              </div>
            </div> -->
          </div>
    </div>
          <!-- Modal popup of the product -->
    <div class="modal modal-product-detail fade" id="ProductDetails<?php echo $product->get_id() ?>">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="product-detail-wrap" data-product-id="<?php echo $product->get_id() ?>">
              <div class="row">
                <div class="col-md-6">
                <?php // do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
                <img src="<?php echo get_product_image_url($product->get_id(), 500, 500) ?>" alt="<?php echo $product->get_name() ?>">
                </div>
                <div class="col-md-6">
                  <div class="product-detail-inner">
                    <div class="discount-label">20% OFF</div>
                    <h2 class="product-title"> <?php do_action( 'woocommerce_shop_loop_item_title' ); ?></h2>
                    <h3 class="product-price">
                        <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                    </h3>
                    <!-- <h3 class="product-price discounted-price">Discounted price: <span>$108</span> <img src="assets/images/lowest-price.png" alt="Lowest Price" width="100"></h3> -->
                    <div class="form-group">
                      <label for="AvailableIn">Available in:</label>  
                      <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                    </div>
                    <div class="furniture-shop">
                      <h4>Why shop from Zopnow?</h4>
                      <div class="shop-benefit">
                        <div class="icon-wrap">
                          <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icons8-return-purchase-24.png" alt="Easy returns & refunds"></div>
                        </div>
                        <div class="shop-info">
                          <h5>Easy returns & refunds</h5>
                          <p>Return products at doorstep and get refund in seconds.</p>
                        </div>
                      </div>
                      <div class="shop-benefit">
                        <div class="icon-wrap">
                          <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icons8-money-bag-rupee-80.png" alt="Lowest price guaranteed"></div>
                        </div>
                        <div class="shop-info">
                          <h5>Lower price than your supermarket.</h5>
                          <p>At least 30% or more discount available on M.R.P. on all FMCG products from top brands.</p>
                        </div>
                      </div>
                      <div class="shop-benefit">
                        <div class="icon-wrap">
                          <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icons8-ask-question-16.png" alt="Lowest price guaranteed"></div>
                        </div>
                        <div class="shop-info">
                          <h5>No question asked return policy. </h5>
                          <p>We are confidence about our quality, still didn’t like it? Raise request and get exchanged or return without any question asked. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>