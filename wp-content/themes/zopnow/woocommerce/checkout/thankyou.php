<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- Frntre Mid Wrap -->
<section class="frntre-mid-wrap">
  <div class="container">
    <div class="frntre-success-wrap">
      <svg viewBox="0 0 514 514" class="frntre-icon">
        <path d="M384.84 172.84C376.96 164.53 363.82 164.16 355.5 172.06L222.99 297.73L159.78 232.84C151.78 224.63 138.65 224.45 130.43 232.45C122.22 240.45 122.05 253.59 130.04 261.8L207.54 341.36C211.6 345.53 216.99 347.64 222.41 347.64C227.54 347.64 232.67 345.74 236.69 341.94L384.07 202.18C392.38 194.29 392.73 181.15 384.84 172.84ZM257 1C115.84 1 1 115.84 1 257C1 398.16 115.84 513 257 513C398.16 513 513 398.16 513 257C513 115.84 398.16 1 257 1ZM257 471.49C138.73 471.49 42.51 375.27 42.51 257C42.51 138.73 138.73 42.51 257 42.51C375.27 42.51 471.49 138.73 471.49 257C471.49 375.27 375.27 471.49 257 471.49Z" />
      </svg>
      <h1><?php echo esc_html_e('Thank you!', 'wayfair'); ?></h1>
	  <p><?php echo esc_html_e('Your order number is:', 'wayfair'); ?>&nbsp;
    <!-- http://wayfair-dev.local/my-account/view-order/102/ -->
    
    <?php
      if ( is_user_logged_in() ) :
    ?>
      <a href="<?php echo wc_get_endpoint_url( 'view-order/' . $order->get_id() . '/', '', wc_get_page_permalink( 'myaccount' ) ); ?>"><strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong></a>.
      <?php else: ?>
      <a href="javascript:void(0);" data-toggle="modal" data-target="#LoginSignup">
        <strong><?php echo $order->get_order_number(); ?></strong>
      </a>.
      <?php endif; ?>
	  </p>
      <p><?php echo esc_html_e('We\'ll email you an order confirmation with details and tracking info.', 'wayfair'); ?></p>
      <a href="<?php echo home_url() ?>" class="btn btn-danger btn-lg"><?php echo esc_html_e('Continue Shopping', 'wayfair'); ?></a>
    </div>
  </div>
</section>
