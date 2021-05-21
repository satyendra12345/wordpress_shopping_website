<?php

/**
 * Template Name: Upi Payment
 *
 */

get_header();
?>
<script src="<?php echo site_url(); ?>/wp-includes/js/upi/js/easy.qrcode.min.js"></script>
<script src="<?php echo site_url(); ?>/wp-includes/js/upi/js/upi.min.js"></script>
<script src="<?php echo site_url(); ?>/wp-includes/js/upi/js/jquery-confirm.min.js"></script>
<?php
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $link);
$indexNo = count($link_array) - 2;
$orderID = $link_array[$indexNo];

/*if(!is_numeric($orderID)){
	echo "<script>window.location.href='".site_url()."';</script>";
}*/

$available_gateways = WC()->payment_gateways->get_available_payment_gateways();

$gateway = $available_gateways;
die;

global $wpdb;
$orderRow = $wpdb->get_results("select * from wp_wc_order_upi_data where order_id = " . $orderID, OBJECT);
/*if(count($orderRow) <= 0){
	echo "<script>window.location.href='".site_url()."';</script>";
}*/
$orderPrice = $orderRow[0]->amount;
$optionValue = get_option("woocommerce_wc-upi_settings");
$vpa = $optionValue['vpa'];
$payee = $orderRow[0]->customer_name;

$url = "upi://pay?pa=" . $vpa . "&pn=" . $payee . "&am=" . $orderPrice . "&tr=" . $orderID . "&tn=" . $orderID . "&mode=01";
$mobileUrl = "upi://pay?pa=" . $vpa . "&pn=" . $payee . "&am=" . $orderPrice . "&tr=" . $orderID . "&tn=" . $orderID . "&mode=04";

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<!-- Frntre Mid Wrap -->
		<section class="frntre-mid-wrap">
			<div class="container">
				<div class="frntre-account-wrap">
					<div class="frntre-columns-row">
						<div class="col-xs-12 col-md-6 offset-md-3 offset-lg-3">
							<div style="text-align:center" class="tt-item">
								<h1 style="font-size:23px;">Google Pay / Phone Pe / Bank UPI/ BHIM UPI</h1>
								<h5 style="padding-bottom:0px;">Sacn This QR Code</h5><br />
								<input type="hidden" id="data-qr-code" data-width="140" data-height="140" data-link="<?php echo $url; ?>">
								<div id="upiwc-qrcode"></div> <br />
								<span style="font-weight:bold">Amount to be Paid: ₹<?php echo $orderPrice; ?></span><br />
								<a class="d-block d-sm-none" href="<?php echo $mobileUrl; ?>" id="mobile-pay-api"><img src="<?php echo site_url(); ?>/wp-includes/images/nit/upi-popup.png" width="250" /></a><br />
								<div class="progress text-center">
									<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" id="progressbar" style="width:0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
									</div>
								</div>
								<ul id="countdown">
									<li> <span class="hours">00</span></li>
									<li> :</li>
									<li> <span class="minutes">00</span></li>
								</ul>
								<br />
								<p>Scan the QR Code with any UPI apps like BHIM, Paytm, Google Pay, PhonePe or any Banking UPI app to make payment for this order.</p>

							</div>
						</div>



					</div>
				</div>
			</div>
		</section>
		<iframe style="visibility:hidden !important" id="ifrmMsg" src="<?= site_url(); ?>/wp-content/themes/zopnow/ifremfie.html" title="W3Schools Free Online Web Tutorials"></iframe>
	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
?>
<script>
	function getMobileOperatingSystem() {
		var userAgent = navigator.userAgent || navigator.vendor || window.opera;
		if (/windows phone/i.test(userAgent)) {
			return "Windows Phone";
		}
		if (/android/i.test(userAgent)) {
			return "Android";
		}
		if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
			return "iOS";
		}
		return "unknown";
	}

	var timer2 = "5:00";
	var interval = setInterval(function() {
		var timer = timer2.split(':');
		//by parsing integer, I avoid all extra string processing
		var minutes = parseInt(timer[0], 10);
		var seconds = parseInt(timer[1], 10);
		--seconds;
		minutes = (seconds < 0) ? --minutes : minutes;
		if (minutes < 0) clearInterval(interval);
		seconds = (seconds < 0) ? 59 : seconds;
		seconds = (seconds < 10) ? '0' + seconds : seconds;
		//minutes = (minutes < 10) ?  minutes : minutes;
		$('.hours').html(minutes);
		$('.minutes').html(seconds);
		timer2 = minutes + ':' + seconds;

	}, 1000);

	$(document).ready(function(e) {
		startProcessing();
		if (screen.width <= 768) {
			//$('#mobile-pay-api').show();
			var upiurl = '<?= $mobileUrl; ?>';
			$('html, body').animate({
				'scrollTop': 50
			});
			setTimeout(function() {
				var mobiledevice = getMobileOperatingSystem();
				if (mobiledevice == 'iOS') {
					window.location = upiurl;
				} else {
					var iframe = document.getElementById("ifrmMsg");
					var elmnt = iframe.contentWindow.document.getElementsByTagName("a")[0];
					elmnt.href = upiurl;
					elmnt.click();
				}
			}, 1000);
		}


	});

	function startProcessing() {
		$('#progressbar').css('width', '1%').attr('aria-valuenow', 1);
		var currentTime = 1;
		var setTimeVal = 2;
		var order_id = '{{ $orderID }}';
		setInterval(function() {
			currentTime = $('#progressbar').attr('aria-valuenow');
			setTimeVal = parseInt(currentTime) + 1;
			$('#progressbar').css('width', setTimeVal + '%').attr('aria-valuenow', setTimeVal);

		}, 3500);
		setTimeout(function() {
			window.location.href = "<?php echo site_url(); ?>/checkout-complete/";
		}, 300000);
	}
</script>
<style>
	#countdown {
		display: inline-block;
		list-style: none;
		margin-top: 10px;
	}

	#countdown li {
		display: inline-block;
		list-style: none;
		color: #33691e;
		font-weight: 500;
		font-size: 20px;
	}

	#countdown li .minutes {
		display: inline-block;
		width: 26px;
		text-align: left;
		text-align: center;
	}
</style>