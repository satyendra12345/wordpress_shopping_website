
<!-- Frntre Footer -->
<footer class="frntre-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        <?php if ( is_active_sidebar( 'custom-side-bar1' ) ) : ?>
            <?php dynamic_sidebar( 'custom-side-bar1' ); ?>
        <?php endif; ?>
      </div>
      <div class="col-md-3 col-6">
        <?php if ( is_active_sidebar( 'custom-side-bar2' ) ) : ?>
            <?php dynamic_sidebar( 'custom-side-bar2' ); ?>
        <?php endif; ?>
      </div>
      <div class="col-md-3 col-6">
        <?php if ( is_active_sidebar( 'custom-side-bar3' ) ) : ?>
            <?php dynamic_sidebar( 'custom-side-bar3' ); ?>
        <?php endif; ?>
      </div>
      <div class="col-md-3 col-6">
        <?php if ( is_active_sidebar( 'custom-side-bar4' ) ) : ?>
            <?php dynamic_sidebar( 'custom-side-bar4' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<!-- Frntre Copyright -->
<section class="frntre-copyright">
  <div class="container">    
    <p><?php echo sprintf(get_field('footer_bottom_text', 'option'), date('Y')) ?></p>
    <!-- <p>&copy; 2002 - <?php echo date('Y') ?> by Wayfair LLC, 4 Copley Place, 7th Floor, Boston, MA 02116</p> -->
  </div>
</section>

<!-- Frntre Hover Overlay -->
<div class="frntre-hover-overlay">&nbsp;</div>


<!-- Frntre Modal, Fade -->
<div class="modal fade" id="ShippingReturns">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-header">
          <h4 class="modal-title">Simple Shipping and Returns</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="row shipping-returns">
          <div class="col-lg-4">
            <div class="retirn-item">
              <div class="icon-wrap">
                <div class="icon-inner">
                  <svg viewBox="0 0 989 762" class="frntre-icon">
                    <path d="M1 1L1 649.46L66.46 649.46C78.57 712.9 134.45 761 201.37 761C268.28 761 324.16 712.9 336.28 649.46L617.97 649.46C630.09 712.9 685.97 761 752.88 761C819.8 761 875.68 712.9 887.79 649.46L988 649.46L988 289.98L758.11 1L1 1ZM822.21 623.64C822.21 632.76 820.43 641.47 817.21 649.46C806.95 674.93 781.99 692.97 752.88 692.97C723.78 692.97 698.82 674.93 688.56 649.46C685.34 641.47 683.55 632.76 683.55 623.64C683.55 620.87 683.74 618.14 684.05 615.44C685.56 602.74 690.5 591.09 697.94 581.43C710.62 564.96 730.53 554.31 752.88 554.31C775.24 554.31 795.14 564.96 807.83 581.43C815.26 591.09 820.21 602.74 821.71 615.44C822.03 618.14 822.21 620.87 822.21 623.64ZM270.7 623.64C270.7 632.76 268.91 641.47 265.69 649.46C255.43 674.93 230.47 692.97 201.37 692.97C172.26 692.97 147.3 674.93 137.04 649.46C133.83 641.47 132.04 632.76 132.04 623.64C132.04 620.87 132.22 618.14 132.54 615.44C134.04 602.74 138.99 591.09 146.42 581.43C159.11 564.96 179.01 554.31 201.37 554.31C223.72 554.31 243.63 564.96 256.31 581.43C263.75 591.09 268.69 602.74 270.2 615.44C270.52 618.14 270.7 620.87 270.7 623.64ZM919.98 581.43L883.59 581.43C865.74 526.28 813.9 486.28 752.88 486.28C691.87 486.28 640.02 526.28 622.17 581.43L332.08 581.43C314.23 526.28 262.38 486.28 201.37 486.28C140.35 486.28 88.51 526.28 70.66 581.43L69.02 581.43L69.02 69.03L707.69 69.03L707.69 335.88L919.98 335.88L919.98 581.43L919.98 581.43ZM775.72 267.85L775.72 132.4L883.47 267.85L775.72 267.85L775.72 267.85ZM411.51 399.15L534.65 399.15L534.65 334.12L476.53 334.12L476.53 316.4L534.65 316.4L534.65 251.37L476.53 251.37L476.53 235.42L534.65 235.42L534.65 170.39L411.51 170.39L411.51 399.15ZM557.23 399.15L680.37 399.15L680.37 334.12L622.25 334.12L622.25 316.4L680.37 316.4L680.37 251.37L622.25 251.37L622.25 235.42L680.37 235.42L680.37 170.39L557.23 170.39L557.23 399.15ZM90.74 396.65L155.76 396.65L155.76 332.21L213.88 332.21L213.88 267.18L155.76 267.18L155.76 235.25L213.88 235.25L213.88 170.22L90.74 170.22L90.74 396.65ZM385.44 338.4L385.44 170.39L229.78 170.39L229.78 396.48L294.81 396.48L294.81 371.97L365.5 423.9L385.63 396.48L405.77 369.07L364.01 338.4L385.44 338.4ZM294.81 235.42L320.41 235.42L320.41 273.37L294.81 273.37L294.81 235.42Z" />
                  </svg>
                </div>
              </div>
              <div class="return-info">
                <h2>FREE Shipping over ₹599</h2>
                <p>and ₹75 flat-rate shipping for orders under ₹599</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="retirn-item">
              <div class="icon-wrap">
                <div class="icon-inner">
                  <svg viewBox="0 0 908 910" class="frntre-icon">
                    <path d="M906 113.62L725.56 113.62L725.56 1L564.58 1L564.58 113.62L343.42 113.62L343.42 1L182.44 1L182.44 113.62L2 113.62L2 909L906 909L906 113.62L906 113.62ZM629.57 113.62L629.57 66.01L660.57 66.01L660.57 113.62L660.57 178.63L660.57 190.02L629.57 190.02L629.57 178.63L629.57 113.62ZM247.43 113.62L247.43 66.01L278.43 66.01L278.43 113.62L278.43 178.63L278.43 190.02L247.43 190.02L247.43 178.63L247.43 113.62ZM66.99 178.63L182.44 178.63L182.44 255.03L343.42 255.03L343.42 178.63L564.58 178.63L564.58 255.03L725.56 255.03L725.56 178.63L841.01 178.63L841.01 298.45L66.99 298.45L66.99 178.63ZM841.01 843.99L66.99 843.99L66.99 363.46L841.01 363.46L841.01 843.99L841.01 843.99ZM120.94 571.98L188.94 571.98L188.94 639.99L120.94 639.99L120.94 571.98ZM270.47 571.98L338.47 571.98L338.47 639.99L270.47 639.99L270.47 571.98ZM420 571.98L488 571.98L488 639.99L420 639.99L420 571.98ZM569.53 571.98L637.53 571.98L637.53 639.99L569.53 639.99L569.53 571.98ZM719.06 571.98L787.06 571.98L787.06 639.99L719.06 639.99L719.06 571.98ZM120.94 714.59L188.94 714.59L188.94 782.6L120.94 782.6L120.94 714.59ZM270.47 714.59L338.47 714.59L338.47 782.6L270.47 782.6L270.47 714.59ZM569.53 430.55L637.53 430.55L637.53 498.56L569.53 498.56L569.53 430.55ZM719.06 430.55L787.06 430.55L787.06 498.56L719.06 498.56L719.06 430.55Z" />
                  </svg>
                </div>
              </div>
              <div class="return-info">
                <h2>FAST 24 hours shipping</h2>
                <p>on thousands of items—from Potato to Pampers</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="retirn-item">
              <div class="icon-wrap">
                <div class="icon-inner">
                  <svg viewBox="0 0 953 689" class="frntre-icon">
                    <path d="M951 94.01L363.93 94.23L372.23 1L202.18 1L202.18 66.01L252.04 66.01L301.21 66.01L298.52 96.3L284.52 253.44L2 253.44L2 318.45L278.72 318.45L274.44 366.51L145.46 366.51L145.46 431.52L268.65 431.52L265.98 461.47L819.62 461.47L951 94.01ZM337 396.46L343.95 318.45L397.12 318.45L397.12 253.44L349.74 253.44L358.14 159.25L858.74 159.06L773.86 396.46L337 396.46ZM628.71 656.8C645.44 676.63 670.74 688 698.12 688C751.79 688 800.95 646.11 810.06 592.63C814.76 565 807.74 537.63 790.79 517.55C774.07 497.71 748.77 486.34 721.38 486.34L347.1 486.34C293.44 486.34 244.27 528.23 235.17 581.71C230.47 609.34 237.49 636.71 254.43 656.8C271.16 676.63 296.46 688 323.84 688C377.51 688 426.67 646.11 435.78 592.63C438.18 578.49 437.51 564.42 434.02 551.35L619.39 551.35C614.67 560.85 611.26 571.05 609.45 581.71C604.75 609.34 611.77 636.71 628.71 656.8ZM366.87 559.48C371.51 564.98 373.24 572.88 371.73 581.71C367.99 603.7 345.61 622.99 323.84 622.99C315.4 622.99 308.57 620.18 304.08 614.86C299.44 609.36 297.71 601.46 299.22 592.63C302.96 570.64 325.34 551.35 347.1 551.35C355.55 551.35 362.38 554.16 366.87 559.48ZM741.15 559.48C745.79 564.98 747.51 572.88 746.01 581.71C742.27 603.7 719.89 622.99 698.12 622.99C689.68 622.99 682.85 620.18 678.36 614.86C673.72 609.36 671.99 601.46 673.5 592.63C677.24 570.64 699.62 551.35 721.38 551.35C729.83 551.35 736.66 554.16 741.15 559.48ZM80.91 144.65L255.56 144.65L255.56 209.66L80.91 209.66L80.91 144.65Z" />
                  </svg>
                </div>
              </div>
              <div class="return-info">
                <h2>EASY returns</h2>
                <p>on most orders if something's not quite right NO QUESTIONS ASKED</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pt-1">
          <p>FREE & FAST SHIPPING AND RETURNS Covering More Than 180 PinCode Covering Zopnow The Same Name But With Refreshed Customer Service And Lightning Fast Delivery.</p>
        </div>
      </div>
    </div>
  </div>
</div>

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
            
            <?php echo do_shortcode( '[user_registration_my_account]' ); ?>
            <!-- <div class="account-option">
              <p><span>or login using</span></p>              
              <a href="https://zopnow.net.in/d/wp-login.php?loginSocial=facebook" class="facebook" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175">
                <span>
                  <svg viewBox="0 0 154 322" class="frntre-icon">
                    <path d="M101.81 105.86L101.81 78.29C101.81 74.15 102 70.94 102.39 68.68C102.78 66.41 103.66 64.18 105.03 61.98C106.4 59.78 108.61 58.26 111.67 57.41C114.73 56.57 118.81 56.15 123.89 56.15L151.62 56.15L151.62 1.01L107.28 1.01C81.62 1.01 63.2 7.06 52 19.16C40.8 31.27 35.2 49.09 35.2 72.65L35.2 105.86L1.99 105.86L1.99 161L35.2 161L35.2 320.99L101.81 320.99L101.81 161L146.15 161L152.01 105.86L101.81 105.86Z" />
                  </svg>
                  Facebook
                </span>
              </a>
              <a href="https://zopnow.net.in/d/wp-login.php?loginSocial=google" class="google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">
            	  <span>
                  <svg viewBox="0 0 322 322" class="frntre-icon">
                    <path d="M161 129L161 193L251.53 193C238.31 230.25 202.73 257 161 257C108.07 257 65 213.93 65 161C65 108.07 108.07 65 161 65C183.94 65 206.02 73.22 223.18 88.17L265.22 39.91C236.42 14.82 199.43 1 161 1C72.78 1 1 72.78 1 161C1 249.22 72.78 321 161 321C249.22 321 321 249.22 321 161L321 129L161 129Z" />
                  </svg>
                  Google
                </span>
             </a>
            </div> -->
          </div>
          <div class="tab-pane" id="Signup">
           
            <?php echo do_shortcode( '[user_registration_form id="95"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Cart Popup -->
<div id="footer_cart_popup" style="display: <?php echo (WC()->cart->get_cart_contents_count() > 0) ? 'block' : 'none' ?>">
  <div class="wrapper">
    <div class="row">
      <div class="col-md-7 col-left">

      <?php if( WC()->cart->subtotal < floatval(MINIMUM_CHECKOUT_AMOUNT) ) : ?>
        <?php echo _e('Add ' . WF_CURRENCY . (MINIMUM_CHECKOUT_AMOUNT - WC()->cart->subtotal) . ' more to place order') ?>
      <?php elseif ( WC()->cart->subtotal < AMOUNT_FREE_SHIPPING ): ?>
        <?php echo _e('Add ' . WF_CURRENCY . (AMOUNT_FREE_SHIPPING - WC()->cart->subtotal) . ' more to get free shipping') ?>
      <?php elseif ( WC()->cart->subtotal < AMOUNT_5_PERCENT_DISCOUNT ): ?>
        <?php echo _e('Add ' . WF_CURRENCY . (AMOUNT_5_PERCENT_DISCOUNT - WC()->cart->subtotal) . ' more to get 5% flat discount') ?>
      <?php elseif ( WC()->cart->subtotal < AMOUNT_10_PERCENT_DISCOUNT ): ?>
        <?php echo _e('Add ' . WF_CURRENCY . (AMOUNT_10_PERCENT_DISCOUNT - WC()->cart->subtotal) . ' more to get 10% flat discount') ?> 
      <?php else: ?>  
        <?php echo _e('All discount applied. Checkout NOW!') ?> 
      <?php endif; ?>
      </div>
      <div class="col-md-5 pl-0 col-right">
        <a href="<?php echo home_url() . '/cart/' ?>">
          <svg viewBox="0 0 28 28" class="frntre-icon">
                  <path d="M20.86 18.14H10.19l.91-1.31h9.76a1 1 0 0 0 1-.83L23 9.38a1 1 0 0 0-.23-.81 1 1 0 0 0-.77-.36H9.63l-.38-1.46a1 1 0 0 0-1-.75H6a1 1 0 1 0 0 2h1.51l2 7.64-2 2.93a1 1 0 0 0-.06 1 1 1 0 0 0 .89.53h.46a1.38 1.38 0 1 0 2.4 0h6.74a1.47 1.47 0 0 0-.17.66 1.38 1.38 0 1 0 2.57-.66h.52a1 1 0 1 0 0-2v.04zm-.05-7.93L20 14.83h-8.65l-1.2-4.62h10.66z"></path>
                </svg>
          <?php echo WC()->cart->get_cart_subtotal() ?>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Quantity limit popup -->
<!-- Cart Popup -->
<div id="footer_quantity_limit_popup" style="display: none">
  <div class="wrapper">
      <div class="icon">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
      </div>
      <div class="content">We're sorry! Only <strong> 10 </strong> unit(s) for each customer</div>
  </div>
</div>
<input type="hidden" id="activeProductId" />
<?php wp_footer() ?>

<script>
$(document).ready(function(e) {
    $('.product_div_model,#pa_weight').change(function(e) {
        var variants = $(this).val();
		var res = variants.split("-");
		var productID = $('#activeProductId').val();
		var productSlug= $('#pro_slug_'+productID).val();
		var fullProductUrl = productID+'-'+productSlug+'-'+res[0]+'-'+res[1];
		var title = 'a';
		var url = fullProductUrl;
		if (typeof (history.pushState) != "undefined") {
			var obj = { Title: title, Url: url };
			history.pushState(obj, obj.Title, obj.Url);
		} else {
			alert("Browser does not support HTML5.");
		}
    });
});
</script>
<?php 
add_action('init', 'start_session', 1);
//print_r($_SESSION['product_slug']);
//if(isset($_SESSION['product_slug'])){
	if($_SESSION['product_slug'] != ""){
?>
	<script>
    $(document).ready(function(e){
        $('#product_det_pop_<?php echo $_SESSION['product_slug'];?>').trigger('click');
    });
    </script>
<?php 
	//unset($_SESSION['product_slug']);
	} 
//}
?>
</body>
</html>