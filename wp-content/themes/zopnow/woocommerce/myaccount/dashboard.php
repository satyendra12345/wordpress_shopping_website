<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$orders = wc_get_customer_orders();

$customer_id = get_current_user_id();

// Get an instance of the WC_Customer Object from the user ID
$customer = new WC_Customer( $customer_id );
?>


<div class="page-title">My Account</div>
          <div class="whitebox">
            <div class="whitebox-wrap">
              <h5 class="border-title">Account Information</h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="account-info-wrap">
                    <h6>Contact Information</h6>
                    <p><?php echo WC()->customer->get_first_name() ?> <?php echo WC()->customer->get_last_name() ?></p>
                    <p><?php echo WC()->customer->get_email() ?></p>
					<p class="pt-1"><a href="<?php echo wc_get_endpoint_url( 'edit-account', '', wc_get_page_permalink( 'myaccount' ) ); ?>">Edit</a> &nbsp;|&nbsp; 
					<a href="<?php echo wc_get_endpoint_url( 'edit-account', '', wc_get_page_permalink( 'myaccount' ) ); ?>">Change Password</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="whitebox">
            <div class="whitebox-wrap">
              <h5 class="border-title">Address Book <a href="<?php echo wc_get_endpoint_url( 'edit-address', '', wc_get_page_permalink( 'myaccount' ) ); ?>">Manage Addresses &raquo;</a></h5>
              <div class="row">
                <div class="col-md-6">
                  <div class="account-info-wrap">
					<h6>Default Billing Address</h6>					
					<?php echo get_woo_customer_address(); ?>
					<p><?php echo $customer->get_billing_first_name(); ?>&nbsp;<?php echo $customer->get_billing_last_name(); ?></p>
					<p>
						<p><?php echo $customer->get_billing_address_1() ?></p>
						<p><?php echo $customer->get_billing_city() ?>, <?php echo $customer->get_billing_state() ?>, <?php echo $customer->get_billing_postcode() ?></p>
						<p><?php echo $customer->get_billing_country() ?></p>
						<p><?php echo _e('T:') ?>&nbsp;<a href="tel:<?php echo $customer->get_billing_phone() ?>"><?php echo $customer->get_billing_phone() ?></a></p>
					</p>
                    <p class="pt-1"><a href="<?php echo wc_get_endpoint_url( 'edit-address/billing', '', wc_get_page_permalink( 'myaccount' ) ); ?>">Edit Address</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="whitebox">
            <div class="whitebox-wrap">
              <h5 class="border-title">Recent Orders <a href="<?php echo wc_get_endpoint_url( 'orders', '', wc_get_page_permalink( 'myaccount' ) ); ?>">View All &raquo;</a></h5>
              <div class="account-info-wrap">
                <table class="table table-has-data-th">
					<?php if ( !empty($orders) ): ?>
						<thead>
							<tr>
							<th>Order #</th>
							<th>Date</th>
							<th>Ship To</th>
							<th>Order Total</th>
							<th>Status</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ( $orders as $order ) : ?>
								<?php $orderDetails = wc_get_order( $order->ID )->get_data(); ?>																
								<tr>
									<td data-th="Order #"><?php echo $orderDetails['id']; ?></td>
									<td data-th="Date"><?php echo $orderDetails['date_created']->date('m/d/Y'); ?></td>
									<td data-th="Ship To"><?php echo $orderDetails['shipping']['first_name']; ?>&nbsp;<?php echo $orderDetails['shipping']['last_name']; ?></td>
									<td data-th="Order Total"><?php echo WF_CURRENCY . $orderDetails['total']; ?></td>
									<td data-th="Status"><?php echo $orderDetails['status']; ?></td>
									<td data-th="Action">
										<a href="<?php echo wc_get_endpoint_url( 'view-order/' . $orderDetails['id'], '', wc_get_page_permalink( 'myaccount' ) ); ?>">View</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					<?php else: ?>
						<tbody>
							<tr>
								<td colspan="6"><?php echo _e('No order has been made yet.') ?></td>
							</tr>
						</tbody>
					<?php endif; ?>
                </table>
              </div>
			</div>
			
          </div>


<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
