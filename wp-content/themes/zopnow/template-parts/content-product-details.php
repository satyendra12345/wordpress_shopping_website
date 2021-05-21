<?php
global $product;

// Get $product object from product ID  
$product = wc_get_product( $_REQUEST['product_id'] );
// echo '<pre>'; print_r($product); die;
?>


<div class="row">
            <div class="col-md-6">
            <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
            </div>
            <div class="col-md-6">
              <div class="product-detail-inner">
                <div class="discount-label">20% OFF</div>
                <h2 class="product-title"><?php echo $product->get_title() ?></h2>
                <h3 class="product-price">
                    <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
                </h3>
                <!-- <h3 class="product-price discounted-price">Discounted price: <span>$108</span> <img src="assets/images/lowest-price.png" alt="Lowest Price" width="100"></h3> -->
                <div class="form-group">
                  <label for="AvailableIn">Available in:</label>  
                  <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                </div>
                <div class="select-quantity">
                  <!-- <span class="btn btn-warning">Add To Cart</span> -->
                  <div class="quantity" data-product-id="<?php echo $_REQUEST['product_id']; ?>">
                    <input type="number" name="AddToCart" value="1" min="0" max="10" readonly="readonly" inputmode="numeric" class="form-control" id="AddToCart">
                    <span class="quantity-controler down">-</span>
                    <span class="quantity-controler up">+</span>
                  </div>
                </div>
                <div class="furniture-shop">
                  <h4>Why shop from Wayfair?</h4>
                  <div class="shop-benefit">
                    <div class="icon-wrap">
                      <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icon9.png" alt="Easy returns &amp; refunds"></div>
                    </div>
                    <div class="shop-info">
                      <h5>Easy returns &amp; refunds</h5>
                      <p>Return products at doorstep and get refund in seconds.</p>
                    </div>
                  </div>
                  <div class="shop-benefit">
                    <div class="icon-wrap">
                      <div class="icon-inner"><img src="/wp-content/uploads/2020/05/icon10.png" alt="Lowest price guaranteed"></div>
                    </div>
                    <div class="shop-info">
                      <h5>Lowest price guaranteed</h5>
                      <p>Get difference refunded if you find it cheaper anywhere else.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>