<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<?php do_action( 'woocommerce_before_cart_totals' ); ?>

<dl class="row <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
								<dt class="col-8"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></dt>
								<dd class="col-4"><?php wc_cart_totals_subtotal_html(); ?></dd>

								<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

									<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

									<?php wc_cart_totals_shipping_html(); ?>

									<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

								<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

									<tr class="shipping">
										<th><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></th>
										<td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
									</tr>

								<?php endif; ?>


								<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
									<!-- <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?> "> -->
										<dt class="col-8"><?php wc_cart_totals_coupon_label( $coupon ); ?></dt>
										<dd data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>" class="col-4">
											<?php wc_cart_totals_coupon_html( $coupon ); ?>
										</dd>
									<!-- </tr> -->
								<?php endforeach; ?>
								

								<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
										<tr class="fee">
											<th><?php echo esc_html( $fee->name ); ?></th>
											<td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
										</tr>
									<?php endforeach; ?>

									<dt class="col-8"><?php esc_html_e( 'Tax', 'wayfair' ); ?></dt>
									<dd class="col-4"><?php _e('All Tax Included') ?></dd>

									

								<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
								<dt class="col-8 total"><?php esc_html_e( 'Total', 'woocommerce' ); ?></dt>
								<dd class="col-4 total"><?php wc_cart_totals_order_total_html(); ?></dd>
								<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
								<div class="wc-proceed-to-checkout">
									<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
								</div>
								<!-- <dt class="col-8">You Save:</dt>
								<dd class="col-4"><?php echo WC()->cart->get_cart_total() ?></dd> -->
</dl>

<?php do_action( 'woocommerce_after_cart_totals' ); ?>
