<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<div class="frntre-primary">
          <a href="javascript:void(0);" class="filters-toggle">            
            <?php echo _e('Account Filters') ?></h5>
            <svg viewBox="0 0 442 516" class="frntre-icon">
              <path d="M423.72 2L18.28 2C8.74 2 1 9.73 1 19.26L1 92.32C1 96.62 2.61 100.76 5.5 103.94L159.38 272.74L159.38 496.74C159.38 502.89 162.65 508.58 167.98 511.67C170.66 513.22 173.66 514 176.66 514C179.61 514 182.57 513.24 185.22 511.72L273.92 461.1C279.3 458.03 282.62 452.31 282.62 446.12L282.62 272.74L436.49 103.94C439.4 100.76 441 96.62 441 92.32L441 19.26C441 9.73 433.26 2 423.72 2ZM406.44 85.64L252.57 254.43C249.67 257.61 248.07 261.76 248.07 266.05L248.07 436.1L193.93 467L193.93 266.05C193.93 261.76 192.32 257.61 189.43 254.43L35.56 85.64L35.56 36.52L406.44 36.52L406.44 85.64Z" />
            </svg>
          </a>
          <div class="account-filters">
            <div class="whitebox">
              <div class="whitebox-wrap">
                <h5 class="whitebox-title"><?php echo _e('Account Dashboard') ?></h5>                
                <ul class="dashboard-menus">
                  <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
                    <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                      <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

          <!-- <div class="related-menu">
            <div class="account-filters">
              <div class="whitebox">
                <div class="whitebox-wrap">
                <?php if ( is_active_sidebar( 'custom-side-bar1' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-side-bar1' ); ?>
                <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="account-filters">
              <div class="whitebox">
                <div class="whitebox-wrap">
                <?php if ( is_active_sidebar( 'custom-side-bar2' ) ) : ?>
                  <?php dynamic_sidebar( 'custom-side-bar2' ); ?>
                <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="account-filters">
                <div class="whitebox">
                  <div class="whitebox-wrap">
                  <?php if ( is_active_sidebar( 'custom-side-bar3' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-side-bar3' ); ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="account-filters">
              <div class="whitebox">
                <div class="whitebox-wrap">
                <?php if ( is_active_sidebar( 'custom-side-bar4' ) ) : ?>
                  <?php dynamic_sidebar( 'custom-side-bar4' ); ?>
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div> -->
</div>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
