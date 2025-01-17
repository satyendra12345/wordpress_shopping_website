<?php
$cart_total= WC()->cart->total;
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

// echo get_option('timezone_string');
$current_hour 				= current_time('H');
$day_next 					= date('D', strtotime(date('l') . " +1 days"));
$day_next_day				= date('j M', strtotime(date('l') . " +1 days"));
$day_next_next 				= date('D', strtotime(date('l') . " +2 days"));
$day_next_next_day 			= date('j M', strtotime(date('l') . " +2 days"));
$day_next_next_next 		= date('D', strtotime(date('l') . " +3 days"));
$day_next_next_next_day 	= date('j M', strtotime(date('l') . " +3 days"));

// echo $day_next_next_day;

// echo $day_next . ', ' . $day_next_next;
?>

<!-- Frntre Mid Wrap -->
<section class="frntre-mid-wrap">
  <div class="container process-container">
    <div class="frntre-account-wrap process-wrap">
      <div class="frntre-columns-row">
        <div class="frntre-secondary">

			<form name="checkout" method="post" class="checkout woocommerce-checkout" id="CheckoutForm" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

				<div class="list-group">		

					<!-- Address -->
					<?php if ( $checkout->get_checkout_fields() ) : ?>

						<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>											
						
						<div class="list-group-item" data-acc-step>
							<?php do_action( 'woocommerce_checkout_billing' ); ?>							
						</div>	
						
						<!-- Available Delivery Slot -->
						<div class="list-group-item" id="ava_slot_box" data-acc-step>
							<h2 data-acc-title><?php esc_html_e( 'Available Delivery Slot', 'wayfair' ); ?></h2>
							<div data-acc-content>
								<div data-acc-content-list>
									<div class="whitebox">
									<div class="whitebox-wrap">
										<div class="account-info-wrap">
											<!-- <p>Jason Carter</p>
											<p>Demo street name <br> demo city name, Alabama, 90909 <br> United States</p>
											<p>T: 9090909090</p> -->
										</div>
										<div class="action">
											<button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Edit</button> 
										</div>
									</div>
									</div>
								</div>
								<h2 data-acc-title><?php esc_html_e( 'Available Delivery Slot', 'wayfair' ); ?></h2>
								<div class="whitebox">
        							<div class="whitebox-wrap">
										<?php if ( $current_hour < 12 ): ?>
											<div class="row available-slots">
												<div class="col-xl-4 col-md-6 col-sm-12">
													<div class="wrapper active-checkout-box">
														<div class="custom-control custom-radio">
															<input id="Tomorrow_<?php echo $day_next_day ?>" type="radio" class="input-radio custom-control-input" name="available_delivery_slot" value="Tomorrow <?php echo $day_next_day ?> 06AM - 09PM" checked />
															<label for="Tomorrow_<?php echo $day_next_day ?>" class="custom-control-label">
																<div class="content">
																	<h6>Tomorrow <?php echo $day_next_day ?></h6>
																	<span>06PM - 09PM</span>
																</div>
															</label>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6 col-sm-12">												

													<div class="wrapper">
														<div class="custom-control custom-radio">
															<input id="Tomorrow_<?php echo $day_next_next_day ?>1" type="radio" class="input-radio custom-control-input" name="available_delivery_slot" value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 06AM – 09AM" />
															<label for="Tomorrow_<?php echo $day_next_next_day ?>1" class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>06AM – 09AM</span>
																</div>
															</label>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6 col-sm-12">
													<div class="wrapper">
														<div class="custom-control custom-radio">
															<input id="Tomorrow_<?php echo $day_next_next_day ?>2" type="radio" class="input-radio custom-control-input" name="available_delivery_slot" value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 10AM – 1PM" />
															<label for="Tomorrow_<?php echo $day_next_next_day ?>2" class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>10AM – 1PM</span>
																</div>
															</label>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6 col-sm-12">
												<div class="wrapper">
														<div class="custom-control custom-radio">
															<input id="Tomorrow_<?php echo $day_next_next_day ?>3" type="radio" class="input-radio custom-control-input" name="available_delivery_slot" value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 06PM - 09PM" />
															<label for="Tomorrow_<?php echo $day_next_next_day ?>3" class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>06PM - 09PM</span>
																</div>
															</label>
														</div>
													</div>
												</div>
											</div>
										<?php else: ?>
											
											<div class="row available-slots">
												<div class="col-xl-4 col-md-6 col-sm-6">
													<div class="wrapper active-checkout-box">
														<div class="custom-control custom-radio">

															<input id="Tomorrow_<?php echo $day_next_day ?>" 
															type="radio" 
															class="input-radio custom-control-input" 
															name="available_delivery_slot" 
															value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 06AM – 09AM" 
															checked />

															<label for="Tomorrow_<?php echo $day_next_day ?>" 
															class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>06AM – 09AM</span>
																</div>
															</label>

														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6 col-sm-6">
													<div class="wrapper">
														<div class="custom-control custom-radio">

															<input id="Tomorrow_<?php echo $day_next_next_day ?>1" 
															type="radio" 
															class="input-radio custom-control-input" 
															name="available_delivery_slot" 
															value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 10AM – 1PM" />

															<label for="Tomorrow_<?php echo $day_next_next_day ?>1" 
															class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>10AM – 1PM</span>
																</div>
															</label>
															
														</div>
													</div>
												</div>
												<!-- <div class="col-xl-4 col-md-6 col-sm-6">
													<div class="wrapper">
														<div class="custom-control custom-radio">

															<input id="Tomorrow_<?php echo $day_next_next_day ?>2" 
															type="radio" 
															class="input-radio custom-control-input" 
															name="available_delivery_slot" 
															value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 06AM - 09PM" />

															<label for="Tomorrow_<?php echo $day_next_next_day ?>2" 
															class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>06PM - 09PM</span>
																</div>
															</label>
															
														</div>
													</div>
												</div> -->
												<div class="col-xl-4 col-md-6 col-sm-6">
													<div class="wrapper">
														<div class="custom-control custom-radio">

															<input id="Tomorrow_<?php echo $day_next_next_day ?>3" 
															type="radio" 
															class="input-radio custom-control-input" 
															name="available_delivery_slot" 
															value="<?php echo $day_next_next ?> <?php echo $day_next_next_day ?> 06PM - 09PM" />

															<label 
															for="Tomorrow_<?php echo $day_next_next_day ?>3" 
															class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next ?> <?php echo $day_next_next_day ?></h6>
																	<span>06PM - 09PM</span>
																</div>
															</label>
															
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6 col-sm-6">
													<div class="wrapper">
														<div class="custom-control custom-radio">

															<input id="Tomorrow_<?php echo $day_next_next_next_day ?>5" 
															type="radio" 
															class="input-radio custom-control-input" 
															name="available_delivery_slot" 
															value="<?php echo $day_next_next_next ?> <?php echo $day_next_next_next_day ?> 06AM - 09AM" />

															<label 
															for="Tomorrow_<?php echo $day_next_next_next_day ?>5" 
															class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next_next ?> <?php echo $day_next_next_next_day ?></h6>
																	<span>06AM - 09AM</span>
																</div>
															</label>
															
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-md-6 col-sm-6">
													<div class="wrapper">
														<div class="custom-control custom-radio">

															<input id="Tomorrow_<?php echo $day_next_next_next_day ?>6" 
															type="radio" 
															class="input-radio custom-control-input" 
															name="available_delivery_slot" 
															value="<?php echo $day_next_next_next ?> <?php echo $day_next_next_next_day ?> 10AM – 1PM" />

															<label 
															for="Tomorrow_<?php echo $day_next_next_next_day ?>6" 
															class="custom-control-label">
																<div class="content">
																	<h6><?php echo $day_next_next_next ?> <?php echo $day_next_next_next_day ?></h6>
																	<span>10AM – 1PM</span>
																</div>
															</label>
															
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>

					<?php endif; ?>	

					
					<!-- Payment -->
					<div id="payment_method_section">
					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
                    <input type="button" onclick="PlaceOrder();" style="display:none;background-color:#ffd223;border-color:#ffd223;color:#222;" class="btn btn-dark upi_place_order" value="Place Order"/>
					</div>

					<!-- Review Order -->
					<div class="list-group-item review-order" data-acc-steps>

						<h2 id="order_review_heading" data-acc-title><?php esc_html_e( '4. Order confirmation', 'wayfair' ); ?></h2>
						
						<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
						
						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

						<div id="order_review" class="woocommerce-checkout-review-order">
							<?php do_action( 'woocommerce_checkout_order_review' ); ?>
						</div>

						<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

					</div>

				</div>

			</form>

		</div>

		<div class="frntre-primary col-dsktp-tblt">
          <div class="checkout-step">
            <h2 class="checkout-step-title">Order Summary</h2>
            <div class="whitebox total-amount-wrap">
              <div class="whitebox-wrap">
			  	<?php echo get_cart_summary(); ?>
              </div>
            </div>
          </div>
        </div>

	  </div>
	</div>
  </div>
</section>
<script>
function checkorderplace(){
	var payment_methodd = $("input[name='payment_methodd']").val();
	if(payment_methodd == 'razorpayupi'){
		var vpa_address = $('#vpa_address').val();
		if(vpa_address.split(" ").join("") == ''){
			$('#vpa_address').addClass('error-input');
			$('#vpa_address').focus();
		}else{
			$('#vpa_address').removeClass('error-input');
			PlaceOrder();
		}
	}else{
	   PlaceOrder();
	}
}
fbq('track');
fbq('track', 'Checkout', {currency: "INR", value: '<?php echo $cart_total; ?>'});
</script>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
