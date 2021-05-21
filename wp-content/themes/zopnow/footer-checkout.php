<!-- Frntre Copyright, Copyright Style Two -->
<section class="frntre-copyright copyright-style-two">
	<div class="container">
		<ul>
			<li><a href="<?php echo home_url() . '/terms-of-use/' ?>" target="_blank">Terms Of Use</a></li>
			<li>
				<a href="<?php echo home_url() . '/privacy-policy/' ?>" target="_blank">
					<!-- <svg viewBox="0 0 28 28" class="frntre-icon">
            <path d="M21.3 16.7l-2.4-1.9a1.8 1.8 0 0 0-2.6.4l-.6.8a7.8 7.8 0 0 1-3.9-3.4l.8-.9a1.8 1.8 0 0 0 .2-2.1l-1.6-2.8A1.7 1.7 0 0 0 10 6a2.1 2.1 0 0 0-1.7.7L6.5 8.5a1.8 1.8 0 0 0-.5 1.6C8.1 20.7 16.6 21.9 18.3 22h.1a1.8 1.8 0 0 0 1.4-.6l1.8-2a1.8 1.8 0 0 0-.3-2.7zm-3 3.3C16.2 19.8 9.7 18.5 8 9.9l1.7-1.8 1.4 2.4-.8.9a1.8 1.8 0 0 0-.3 2.1 9.8 9.8 0 0 0 5.1 4.5 1.8 1.8 0 0 0 2-.6l.7-.8 2.1 1.6z"></path>
          </svg>Call Us -->
					Privacy Policy
				</a>
			</li>
		</ul>
		<ul>
			<!-- <li><a href="#0">Privacy</a></li>
      <li><a href="#0">Terms of Use</a></li> -->
			<li>&copy; 2011 – <?php echo date('Y') ?> by Zopnow Retail Pvt. Ltd.</li>
		</ul>
	</div>
</section>

<!--==============================================================================
				=            THIS IS FOR DEBUGGING.           =
				===============================================================================-->

<!-- <div style="color: blck"><strong>Current template:</strong>
        <?php // echo get_current_template( true ); 
		?>
				</div> -->

<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

<!-- Frntre Hover Overlay -->
<div class="frntre-hover-overlay">&nbsp;</div>
<!-- Frntre Modal, Fade -->
<div class="modal fade" id="LoginSignup">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body frntre-login">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<ul class="nav nav-tabs nav-justified justify-content-center">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#Login">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#Signup">Signup</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="Login">

						<?php echo do_shortcode('[user_registration_my_account]'); ?>
						<div class="account-option">
							<p><span>or login using</span></p>
							<a href="http://tecachievers.com/wayfair/wp-login.php?loginSocial=facebook" class="facebook" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175">
								<span>
									<svg viewBox="0 0 154 322" class="frntre-icon">
										<path d="M101.81 105.86L101.81 78.29C101.81 74.15 102 70.94 102.39 68.68C102.78 66.41 103.66 64.18 105.03 61.98C106.4 59.78 108.61 58.26 111.67 57.41C114.73 56.57 118.81 56.15 123.89 56.15L151.62 56.15L151.62 1.01L107.28 1.01C81.62 1.01 63.2 7.06 52 19.16C40.8 31.27 35.2 49.09 35.2 72.65L35.2 105.86L1.99 105.86L1.99 161L35.2 161L35.2 320.99L101.81 320.99L101.81 161L146.15 161L152.01 105.86L101.81 105.86Z" />
									</svg>
									Facebook
								</span>
							</a>
							<a href="http://tecachievers.com/wayfair/wp-login.php?loginSocial=google" class="google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">
								<span>
									<svg viewBox="0 0 322 322" class="frntre-icon">
										<path d="M161 129L161 193L251.53 193C238.31 230.25 202.73 257 161 257C108.07 257 65 213.93 65 161C65 108.07 108.07 65 161 65C183.94 65 206.02 73.22 223.18 88.17L265.22 39.91C236.42 14.82 199.43 1 161 1C72.78 1 1 72.78 1 161C1 249.22 72.78 321 161 321C249.22 321 321 249.22 321 161L321 129L161 129Z" />
									</svg>
									Google
								</span>
							</a>
						</div>
					</div>
					<div class="tab-pane" id="Signup">

						<?php echo do_shortcode('[user_registration_form id="95"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer() ?>

<?php $ajaxurl = admin_url('admin-ajax.php'); ?>
<?php $currency = get_option('woocommerce_currency'); ?>
<?php $cart_total = WC()->cart->total;

?>
<script type="text/javascript">
	var ajaxurl = "<?php echo $ajaxurl; ?>";
	var currency = "<?php echo $currency; ?>";
	var amount = "<?php echo $cart_total; ?>";
</script>

<script type="text/javascript">
	$(document).ready(function(e) {
		$('#ava_slot_box .place_order_woo').click(function(e) {
			$('#vpaAddressDiv').show();
			$('#payment_method_section .upi_place_order').show();
			$('#payment_method_section .place_order_woo').hide();
		});
	});

	jQuery(function($) {
		$("#payment_method_section .place_order_woo").attr('disabled', true);

		$('input:radio[name="payment_methodd"]').change(function() {

			var SelePayMethod = $('input[name="payment_methodd"]:checked').val();

			// if (SelePayMethod == "razorpayupi") {
			// 	$('#vpaAddressDiv').show();
			// 	$('.upi_place_order').show();
			// 	$('.place_order_woo').hide();
			// 	$('.place_order_woo').prop('disabled', false);
			// } else {
			// 	$('.ajax_loader').show();
			// 	$('#vpaAddressDiv').hide();
			// 	$('.upi_place_order').hide();
			// 	$('.place_order_woo').show();
			// 	$('.place_order_woo').prop('disabled', true);
			// }
			var billing_first_name = $("input[name=billing_first_name]").val();
			var billing_last_name = $("input[name=billing_last_name]").val();
			var billing_country = $("input[name=billing_country]").val();
			var billing_address_1 = $("textarea[name=billing_address_1]").val();
			billing_address_1 = encodeURIComponent(billing_address_1);
			var billing_postcode = $("input[name=billing_postcode]").val();
			var billing_phone = $("input[name=billing_phone]").val();
			var billing_email = $("input[name=billing_email]").val();
			var shipping_first_name = $("input[name=shipping_first_name]").val();
			var shipping_last_name = $("input[name=shipping_last_name]").val();
			var shipping_country = $("input[name=shipping_country]").val();
			var shipping_address_1 = $("input[name=shipping_address_1]").val();
			var shipping_postcode = $("input[name=shipping_postcode]").val();
			var payment_method = $("input[name='payment_methodd']:checked").val();
			var available_delivery_slot = $("input[name='available_delivery_slot']:checked").val();
			var vpa_address = $("input[name=vpa_address]").val();

			//var values='billing_first_name='+billing_first_name+'&billing_last_name='+billing_last_name+'&billing_country='+billing_country+'&billing_address_1='+billing_address_1+'&billing_postcode='+billing_postcode+'&billing_phone='+billing_phone+'&billing_email='+billing_email+'&shipping_first_name='+shipping_first_name+'&shipping_last_name='+shipping_last_name+'&shipping_country='+shipping_country+'&shipping_address_1='+shipping_address_1+'&shipping_postcode='+shipping_postcode+'&amount='+amount+'&currency='+currency;

			var values = 'billing_first_name=' + billing_first_name + '&billing_last_name=' + billing_last_name + '&billing_country=' + billing_country + '&billing_address_1=' + billing_address_1 + '&billing_postcode=' + billing_postcode + '&billing_phone=' + billing_phone + '&billing_email=' + billing_email + '&amount=' + amount + '&currency=' + currency + '&payment_method=' + payment_method;

			var shipping_values = 'shipping_first_name=' + shipping_first_name + '&shipping_last_name=' + shipping_last_name + '&shipping_country=' + shipping_country + '&shipping_address_1=' + shipping_address_1 + '&shipping_postcode=' + shipping_postcode;

			var data = {
				'action': 'my_action',
				'formdata': values
			};

			if (SelePayMethod == "razorpaycard" || SelePayMethod == "razorpaybank") {
				$.ajax({
					type: 'POST',
					url: wc_checkout_params.ajax_url,
					contentType: "application/x-www-form-urlencoded; charset=UTF-8",
					enctype: 'multipart/form-data',
					data: {
						'action': 'ajax_order',
						'fields': values,
						'user_id': <?php echo get_current_user_id(); ?>,
						'available_delivery_slot': available_delivery_slot,
						'shipping_fields': shipping_values,
					},
					success: function(result) {
						console.log(result);
						if (SelePayMethod == "razorpaycard" || SelePayMethod == "razorpaybank") {
							var callback_url = '<?php echo site_url(); ?>/roz/verify.php?oid=' + result;
							var cancel_url = '<?php echo site_url(); ?>/thankyou';
							values += '&callback_url=' + callback_url + '&cancel_url=' + cancel_url;
							values += '&receipt=' + result;
							window.location.href = "http://onlinegift.host/roz/pay.php/?" + values;
						}
						if (SelePayMethod == "razorpayupi") {

						}
					},
					error: function(error) {
						console.log(error); // For testing (to be removed)
					}
				});
			}

		});
	});

	function PlaceOrder() {
		var SelePayMethod = $('input[name="payment_methodd"]:checked').val();
		/*
		if($.trim($('#vpa_address').val()) == ''){
			//$('#vpa_address').focus();
			//$('#vpaError').html('Please enter your VPA address');
			return false;
		}else{
		*/
		$(".upi_place_order").val('Processing...');

		var billing_first_name = $("input[name=billing_first_name]").val();
		var billing_last_name = $("input[name=billing_last_name]").val();
		var billing_country = $("input[name=billing_country]").val();
		var billing_address_1 = $("textarea[name=billing_address_1]").val();
		billing_address_1 = encodeURIComponent(billing_address_1);
		var billing_postcode = $("input[name=billing_postcode]").val();
		var billing_phone = $("input[name=billing_phone]").val();
		var billing_email = $("input[name=billing_email]").val();
		var shipping_first_name = $("input[name=shipping_first_name]").val();
		var shipping_last_name = $("input[name=shipping_last_name]").val();
		var shipping_country = $("input[name=shipping_country]").val();
		var shipping_address_1 = $("input[name=shipping_address_1]").val();
		var shipping_postcode = $("input[name=shipping_postcode]").val();
		var payment_method = $("input[name='payment_methodd']:checked").val();
		var available_delivery_slot = $("input[name='available_delivery_slot']:checked").val();
		var vpa_address = $("input[name=vpa_address]").val();

		var values = 'billing_first_name=' + billing_first_name + '&billing_last_name=' + billing_last_name + '&billing_country=' + billing_country + '&billing_address_1=' + billing_address_1 + '&billing_postcode=' + billing_postcode + '&billing_phone=' + billing_phone + '&billing_email=' + billing_email + '&amount=' + amount + '&currency=' + currency + '&payment_method=' + payment_method;

		var shipping_values = 'shipping_first_name=' + shipping_first_name + '&shipping_last_name=' + shipping_last_name + '&shipping_country=' + shipping_country + '&shipping_address_1=' + shipping_address_1 + '&shipping_postcode=' + shipping_postcode;

		var data = {
			'action': 'my_action',
			'formdata': values
		};

		$.ajax({
			type: 'POST',
			url: wc_checkout_params.ajax_url,
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
			enctype: 'multipart/form-data',
			data: {
				'action': 'ajax_order',
				'fields': values,
				'user_id': <?php echo get_current_user_id(); ?>,
				'available_delivery_slot': available_delivery_slot,
				'shipping_fields': shipping_values,
			},
			success: function(result) {

				// console.log(result);
				if (SelePayMethod == 'stranger') {
					BankTransfer(result, 'bank_transfer', amount, billing_first_name);
				} else {
					saveUpiAddress(result, vpa_address, amount, billing_first_name);
				}
			},
			error: function(error) {
				console.log(error); // For testing (to be removed)
			}
		});
		//}
	}


	function BankTransfer(order_id, VPA_address, amount, billing_first_name) {
		var saveUrl = "<?php echo site_url(); ?>/store-vpa.php";
		$.ajax({
			type: 'POST',
			url: saveUrl,
			data: {
				order_id: order_id,
				VPA_address: VPA_address,
				amount: amount,
				billing_first_name: billing_first_name,

			},
			success: function(result) {
				window.location.href = "<?php echo site_url(); ?>/bank-transfer/" + order_id;
			},
			error: function(error) {
				console.log(error); // For testing (to be removed)
			}
		});
	}

	function saveUpiAddress(order_id, VPA_address, amount, billing_first_name) {
		var saveUrl = "<?php echo site_url(); ?>/store-vpa.php";
		$.ajax({
			type: 'POST',
			url: saveUrl,
			data: {
				order_id: order_id,
				VPA_address: VPA_address,
				amount: amount,
				billing_first_name: billing_first_name
			},
			success: function(result) {
				window.location.href = "<?php echo site_url(); ?>/upi-payment/" + order_id;
			},
			error: function(error) {
				console.log(error); // For testing (to be removed)
			}
		});
	}
</script>


</body>

</html>