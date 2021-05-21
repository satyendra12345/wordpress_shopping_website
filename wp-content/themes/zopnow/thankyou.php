<?php 
/* Template Name: Thankyou */ 

// Start the session
session_start();
get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="frntre-mid-wrap">

				<div class="container">

					<div class="frntre-account-wrap">

						<div class="frntre-columns-row">

							<?php
							//$razorpay_payment_id=$_REQUEST['rpid'];
							//$order_id=$_REQUEST['oid'];
							$razorpay_order_id=$_SESSION["razorpay_order_id"];
							$razorpay_payment_id=$_SESSION["razorpay_payment_id"];
							$razorpay_signature=$_SESSION["razorpay_signature"];
							$order_id=$_SESSION["order_id"];
							if(isset($razorpay_payment_id) && isset($order_id)  ){

								$order = wc_get_order( $order_id );

							if($order){
							   $note = __("razorpay_order_id: ".$razorpay_order_id."  razorpay_payment_id: ".$razorpay_payment_id."  razorpay_signature: ".$razorpay_signature);
								// Add the note
								$order->add_order_note( $note );								

							   $order->update_status( 'completed', '', true );

							}
							//echo "<pre>";
							//print_r($order);
							$order_number=$order->get_order_number();
							echo $message="<h1>Your order # $order_number placed successfully</h1>";
							}
							else{
							echo $message="<h1>Your order unsuccessfull</h1>";
							}

							unset($_SESSION["razorpay_order_id"]);
							unset($_SESSION["razorpay_payment_id"]);
							unset($_SESSION["razorpay_signature"]);
							unset($_SESSION["order_id"]);
						
							?>

						</div>

					</div>

				</div>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
