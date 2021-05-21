<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'user_registration_before_account_navigation' );

/* use this variable to put the logout as the very last menu item */
$endpoint_logout = array();
?>
<nav class="user-registration-MyAccount-navigation">
	<ul>
		<?php foreach ( ur_get_account_menu_items() as $endpoint => $label ) : ?>
			<?php if ( $endpoint === 'user-logout' ): ?>
				<?php $endpoint_logout = array($endpoint, $label); ?>
			<?php else: ?>
				<li class="<?php echo ur_get_account_menu_item_classes( $endpoint ); ?>">
					<a href="<?php echo esc_url( ur_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
				</li>
			<?php endif; ?>
			
		<?php endforeach; ?>
		<li class="user-registration-MyAccount-navigation-link user-registration-MyAccount-navigation-link--orders">
			<a href="<?php echo wc_get_account_endpoint_url( 'orders' ) ?>"><?php echo _e("Orders"); ?></a>
		</li>

		<!-- Logout -->
		<li class="<?php echo ur_get_account_menu_item_classes( $endpoint_logout[0] ); ?>">
			<a href="<?php echo esc_url( ur_get_account_endpoint_url( $endpoint_logout[0] ) ); ?>"><?php echo esc_html( $endpoint_logout[1] ); ?></a>
		</li>
	</ul>
</nav>

<?php do_action( 'user_registration_after_account_navigation' ); ?>
