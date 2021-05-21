<?php

if ( WC()->cart->get_cart_contents_count()  > 0 ) {

    dynamic_sidebar('smartslider_area_1');
} else {

    ?>
        <h2>Your cart is empty. Something missing?</h2>
          <p>Sign in to see items you may have added or saved during a previous visit.</p>
          <a href="javascript:void(0);" class="btn btn-danger btn-block" data-toggle="modal" data-target="#LoginSignup">Sign In</a>
    <?php
}