<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/user-registration/myaccount/form-login.php.
 *
 * HOWEVER, on occasion UserRegistration will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.wpeverest.com/user-registration/template-structure/
 * @author  WPEverest
 * @package UserRegistration/Templates
 * @version 1.4.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$form_template  = get_option( 'user_registration_login_options_form_template', 'default' );
$template_class = '';

if ( 'bordered' === $form_template ) {
	$template_class = 'ur-frontend-form--bordered';

} elseif ( 'flat' === $form_template ) {
	$template_class = 'ur-frontend-form--flat';

} elseif ( 'rounded' === $form_template ) {
	$template_class = 'ur-frontend-form--rounded';

} elseif ( 'rounded_edge' === $form_template ) {
	$template_class = 'ur-frontend-form--rounded ur-frontend-form--rounded-edge';
}

?>

<?php apply_filters( 'user_registration_login_form_before_notice', ur_print_notices() ); ?>

<?php do_action( 'user_registration_before_customer_login_form' ); ?>

<div class="<?php echo $template_class; ?>" id="ur-frontend-form">

	<form class="user-registration-form user-registration-form-login login" method="post">

		<div class="ur-form-row">
			<div class="ur-form-grid">
					<?php do_action( 'user_registration_login_form_start' ); ?>

					<div class="form-group">
						<div class="control-icon">
						<svg viewBox="0 0 514 514" class="frntre-icon">
							<path d="M438.02 331.98C410.14 304.1 376.95 283.46 340.74 270.96C379.52 244.25 405 199.55 405 149C405 67.39 338.61 1 257 1C175.39 1 109 67.39 109 149C109 199.55 134.48 244.25 173.26 270.96C137.05 283.46 103.86 304.1 75.98 331.98C27.63 380.33 1 444.62 1 513L41 513C41 393.9 137.9 297 257 297C376.1 297 473 393.9 473 513L513 513C513 444.62 486.37 380.33 438.02 331.98ZM257 257C197.45 257 149 208.55 149 149C149 89.45 197.45 41 257 41C316.55 41 365 89.45 365 149C365 208.55 316.55 257 257 257Z" />
						</svg>
						</div>
						<!-- <input type="text" name="UsernameEmail" placeholder="Username / Email" class="form-control" id="UsernameEmail"> -->
						<input type="email" class="user-registration-Input user-registration-Input--text input-text form-control" placeholder="Email" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" required />
					</div>

					<div class="form-group">
						<div class="control-icon">
							<svg viewBox="0 0 450 514" class="frntre-icon">
								<path d="M339 327C350.05 327 359 335.95 359 347C359 358.05 350.05 367 339 367C327.95 367 319 358.05 319 347C319 335.95 327.95 327 339 327ZM429 453C440.05 453 449 444.05 449 433L449 269C449 224.89 413.11 189 369 189L344.96 189L344.96 118.47C344.96 53.69 291.13 1 224.96 1C158.79 1 104.96 53.69 104.96 118.47L104.96 189L81 189C36.89 189 1 224.89 1 269L1 433C1 477.11 36.89 513 81 513L369 513C413.11 513 449 477.11 449 433C449 421.95 440.05 413 429 413C417.95 413 409 421.95 409 433C409 455.06 391.06 473 369 473L81 473C58.94 473 41 455.06 41 433L41 269C41 246.94 58.94 229 81 229L369 229C391.06 229 409 246.94 409 269L409 433C409 444.05 417.95 453 429 453ZM304.96 189L144.96 189L144.96 118.47C144.96 75.75 180.85 41 224.96 41C269.07 41 304.96 75.75 304.96 118.47L304.96 189ZM188 327C199.05 327 208 335.95 208 347C208 358.05 199.05 367 188 367C176.95 367 168 358.05 168 347C168 335.95 176.95 327 188 327ZM113 327C124.05 327 133 335.95 133 347C133 358.05 124.05 367 113 367C101.95 367 93 358.05 93 347C93 335.95 101.95 327 113 327ZM263 327C274.05 327 283 335.95 283 347C283 358.05 274.05 367 263 367C251.95 367 243 358.05 243 347C243 335.95 251.95 327 263 327Z" />
							</svg>
						</div>						
						<input class="user-registration-Input user-registration-Input--text input-text form-control" placeholder="Password" type="password" name="password" id="password" required />
						<?php
						if ( 'yes' === get_option( 'user_registration_login_option_hide_show_password', 'no' ) ) {
							?>
							<a href="javaScript:void(0)" class="password_preview dashicons dashicons-hidden" title="<?php echo __( 'Show password', 'user-registration' ); ?>"></a>
							<?php
						}
						?>
					</div>					

					<?php
					if ( ! empty( $recaptcha_node ) ) {
						echo '<div id="ur-recaptcha-node" style="width:100px;max-width: 100px;"> ' . $recaptcha_node . '</div>';
					}
					?>

					<?php do_action( 'user_registration_login_form' ); ?>

					<div class="clearfix">
						<div class="row">
							<div class="col-6">
								<div class="custom-control custom-checkbox" style="padding-left: 0!important">

									<?php
										$remember_me_enabled = get_option( 'user_registration_login_options_remember_me', 'yes' );

										if ( 'yes' === $remember_me_enabled ) {
											?>
											
											
											<label class="custom-control-labels" for="RememberMe"><?php _e( 'Remember me', 'user-registration' ); ?>
												<input class="user-registration-form__input" name="rememberme" type="checkbox" id="RememberMe" value="forever" />
											</label>
											
											<?php
										}
									?>
									
								</div>
							</div>	
							<div class="col-6 textright">
								<?php
									$lost_password_enabled = get_option( 'user_registration_login_options_lost_password', 'yes' );

									if ( 'yes' === $lost_password_enabled ) {
										?>
										<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" target="_blank"><?php _e( 'Lost your password?', 'user-registration' ); ?></a>
										<?php
									}
								?>
							</div>		
						</div>
					</div>

					<div class="form-group">
						<!-- <button type="submit" class="btn btn-warning">Sign In</button> -->
						<?php wp_nonce_field( 'user-registration-login', 'user-registration-login-nonce' ); ?>
						<input type="submit" class="user-registration-Button button btn btn-warning" name="login" value="<?php esc_attr_e( 'Sign In', 'user-registration' ); ?>" />
						<input type="hidden" name="redirect" value="<?php echo isset( $redirect ) ? $redirect : the_permalink(); ?>" />
					</div>

					
					<?php do_action( 'user_registration_login_form_end' ); ?>
			</div>
		</div>
	</form>

</div>

<?php do_action( 'user_registration_after_login_form' ); ?>
