<?php

/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.0
 */

if (!defined('ABSPATH')) {
	exit;
}
// echo '<pre>'; print_r($gateway); die;
?>

<?php if ($gateway->id === 'stranger') : ?>

	<div class="payment-method">
		<div class="custom-control custom-radio">
			<input id="payment_method_<?php echo esc_attr($gateway->id); ?>" checked="checked" type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>" data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
			<label for="payment_method_<?php echo esc_attr($gateway->id); ?>" class="custom-control-label">
				<img src="https://villagehypermarket.com/images/upi.jpg" style="width:150px" alt="UPI">
				<?php echo $gateway->get_title(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?> <?php echo $gateway->get_icon(); /* phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped */ ?>
				<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
					<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>">
						<?php echo $gateway->payment_fields(); ?>
					</div>
				<?php endif; ?>
			</label>
		</div>
	</div>


	<div class="payment-method">
		<div class="custom-control custom-radio">

			<input id="payment_method_<?php echo esc_attr($gateway->id); ?>bank" type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>bank" disabled data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
			<label for="payment_method_<?php echo esc_attr($gateway->id); ?>bank" class="custom-control-label">
				<?php echo _e('Net Banking') ?>
				<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
					<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;" <?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
						<img src="https://villagehypermarket.com/images/unavailable.png" alt="Unavailable" style="width: 24px;height: 24px; margin-right:10px;"><span>Unavailable for new users, please use UPI payment options</span><br />
						<img src="https://villagehypermarket.com/images/banks.jpg"  alt="Net Banking">
						<span>and many more</span>
					</div>
				<?php endif; ?>



			</label>

		</div>
	</div>


	<div class="payment-method">
		<div class="ajax_loader" style="display: none;"> <img src="<?php echo site_url(); ?>/img/ajax-loader.gif"> </div>
		<div class="custom-control custom-radio">

			<input id="payment_method_<?php echo esc_attr($gateway->id); ?>card" disabled type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>card" <?php //checked( $gateway->chosen, true ); 
																																																								?> data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
			<label for="payment_method_<?php echo esc_attr($gateway->id); ?>card" class="custom-control-label">
				<?php echo _e('Credit / Debit / ATM Card') ?>
				<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
					<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;" <?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
						<img src="https://villagehypermarket.com/images/unavailable.png" alt="Unavailable" style="width: 24px;height: 24px; margin-right:10px;"><span>Unavailable for new users, please use UPI payment options</span><br />
						<img src="https://villagehypermarket.com/images/cards.jpg" style="width: 25%;" alt="Credit / Debit / ATM Card">
					</div>
				<?php endif; ?>
			</label>

		</div>
	</div>

	<div class="payment-method">
		<div class="ajax_loader" style="display: none;"> <img src="<?php echo site_url(); ?>/img/ajax-loader.gif"> </div>
		<div class="custom-control custom-radio">

			<input id="payment_method_<?php echo esc_attr($gateway->id); ?>card" disabled type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>card" <?php //checked( $gateway->chosen, true ); 
																																																								?> data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
			<label for="payment_method_<?php echo esc_attr($gateway->id); ?>card" class="custom-control-label">
				<?php echo _e('Cash on Delivery') ?>
				<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
					<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;" <?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
						<img src="https://villagehypermarket.com/images/unavailable.png" alt="Unavailable" style="width: 24px;height: 24px; margin-right:10px;"><span>Due to high demand ,We are not accepting any order  Cash On Delivery</span><br />
					</div>
				<?php endif; ?>
			</label>

		</div>
	</div>

	<?php else : ?>

	


<?php endif; ?>



<?php if ($gateway->id === 'wc-upi') : ?>

	<div class="payment-method">
	<div class="custom-control custom-radio">

        <input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>upi" checked="checked" type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr( $gateway->id ); ?>upi" data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
        <label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>upi" class="custom-control-label">
            <?php echo _e('UPI') ?>
            <?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
                <div class="payment_box payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;"<?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
                    <img src="https://villagehypermarket.com/images/upi.jpg" style="width:150px" alt="UPI">
                    <span>Enter your UPI Id</span>
                </div>
            <?php endif; ?>
            <div id="vpaAddressDiv">
            <br />
            <input onkeyup="$('#vpaError').html('');" style=" width:250px;" name="vpa_address" id="vpa_address" placeholder="e.g. mobilenumber@paytm" class="input-text form-control" type="text" />
            <span id="vpaError" style="color:#F00"></span>
            </div>
        </label>

	</div>
</div>

<div class="payment-method">
	<div class="custom-control custom-radio">

		<input id="payment_method_<?php echo esc_attr($gateway->id); ?>bank" type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>bank" disabled data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
		<label for="payment_method_<?php echo esc_attr($gateway->id); ?>bank" class="custom-control-label">
			<?php echo _e('Net Banking') ?>
			<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
				<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;" <?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
					<img src="https://villagehypermarket.com/images/unavailable.png" alt="Unavailable" style="width: 24px;height: 24px; margin-right:10px;"><span>Unavailable for new users, please use UPI payment options</span><br />
					<img src="https://villagehypermarket.com/images/banks.jpg" style="width:25%" alt="Net Banking">
					<span>and many more</span>
				</div>
			<?php endif; ?>



		</label>

	</div>
</div>


<div class="payment-method">
	<div class="ajax_loader" style="display: none;"> <img src="<?php echo site_url(); ?>/img/ajax-loader.gif"> </div>
	<div class="custom-control custom-radio">

		<input id="payment_method_<?php echo esc_attr($gateway->id); ?>card" disabled type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>card" <?php //checked( $gateway->chosen, true ); 
																																																							?> data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
		<label for="payment_method_<?php echo esc_attr($gateway->id); ?>card" class="custom-control-label">
			<?php echo _e('Credit / Debit / ATM Card') ?>
			<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
				<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;" <?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
					<img src="https://villagehypermarket.com/images/unavailable.png" alt="Unavailable" style="width: 24px;height: 24px; margin-right:10px;"><span>Unavailable for new users, please use UPI payment options</span><br />
					<img src="https://villagehypermarket.com/images/cards.jpg" style="width: 25%;" alt="Credit / Debit / ATM Card">
				</div>
			<?php endif; ?>
		</label>

	</div>
</div>

<div class="payment-method">
	<div class="ajax_loader" style="display: none;"> <img src="<?php echo site_url(); ?>/img/ajax-loader.gif"> </div>
	<div class="custom-control custom-radio">

		<input id="payment_method_<?php echo esc_attr($gateway->id); ?>card" disabled type="radio" class="input-radio custom-control-input" name="payment_methodd" value="<?php echo esc_attr($gateway->id); ?>card" <?php //checked( $gateway->chosen, true ); 
																																																							?> data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
		<label for="payment_method_<?php echo esc_attr($gateway->id); ?>card" class="custom-control-label">
			<?php echo _e('Cash on Delivery') ?>
			<?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
				<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;" <?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
					<img src="https://villagehypermarket.com/images/unavailable.png" alt="Unavailable" style="width: 24px;height: 24px; margin-right:10px;"><span>Due to high demand ,We are not accepting any order  Cash On Delivery</span><br />
				</div>
			<?php endif; ?>
		</label>

	</div>
</div>

<?php else : ?>




<?php endif; ?>

