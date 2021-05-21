
var current_clicked_list_item = null;
jQuery(document).ready(function() {
  "use strict";
  //Frntre Autocomplete Script
  var src = {
    'Bootstrap 4 Autocomplete example': 1,
    'Best example in the world': 2,
    'Bootstrap 4 Autocomplete is very nice': 3,
    'It contains neatly arranged example items': 4,
    'With many autocomplete values': 5,
    'And it uses default Bootstrap 4 components': 6,
    'You can use this example to test': 7,
  }
  var pQuantity = 0;

  $('#FindAnything').autocomplete ({
    source: src,
    highlightClass: 'strong',
  });
  $('#DetectCity').autocomplete ({
    source: src,
    highlightClass: 'strong',
  });

  //Frntre Slick Slider Script
  $('.frntre-banner').slick ({
    dots: true,
    autoplay: true,
    infinite: false,
    autoplaySpeed: 5000,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
  });

  //Frntre Slick Thumb Slider Script
  $('.frntre-main-slider').slick ({
    infinite: false,
    asNavFor: '.frntre-thumb-slider',
    responsive: [{
      breakpoint: 992,
      settings: {
        dots: false,
      }
    }],
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
  });
  $('.frntre-thumb-slider').slick ({
    dots: false,
    vertical: true,
    customPaging: 0,
    slidesToShow: 9,
    infinite: false,
    focusOnSelect: true,
    asNavFor: '.frntre-main-slider',
    responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 6,
      },
    },
    {
      breakpoint: 1200,
      settings: {
        vertical: false,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 10,
        vertical: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 8,
        vertical: false,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 7,
        vertical: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 6,
        vertical: false,
      },
    },
    {
      breakpoint: 360,
      settings: {
        slidesToShow: 5,
        vertical: false,
      },
    }],
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
  });

  //Frntre On Checked Add And Remove Class Script
  $('.frequently-products input:checkbox').change(function() {
    if($(this).is(':checked')) {
      $(this).parents('.product-list').addClass('selected');
    }
    else {
      $(this).parents('.product-list').removeClass('selected');
    }
  });

  //Frntre On Hover Attract Text Script
  $('.product-colors ul li a').hover(function() {
    var DataColor = $(this).attr('data-color');
    $(this).data('', DataColor).removeAttr('data-color');
    $(this).addClass('active');
    $('.product-color-name').text(DataColor);
  },
  function() {
    $(this).attr('data-color', $(this).data(''));
    $(this).removeClass('active');
  });

  //Frntre Tooltip Script
  $('[data-toggle="tooltip"]').tooltip();

  //Frntre Popover Script
  $('[data-toggle="popover"]').popover ({
    content: function () {
      var clone = $($(this).data('popover-content')).clone(true).removeClass('d-none');
      return clone;
    }
  })
  $('[data-toggle="popover"]').popover();
  $('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
      if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
        $(this).popover('hide');
      }
    });
  });

  //Frntre Get Inline CSS Script
  $(window).resize(function() {
    if (screen.width >= 768) {
      //Frntre Custom Popup Script
      $('[data-hover]').hover (
        function() {
          var dataHoverPopup = $(this).attr('data-hover');
          $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeIn('fast').addClass('open');
          $('.frntre-hover-overlay').first().stop(false, false).fadeIn();
        },
        function() {
          var dataHoverPopup = $(this).attr('data-hover');
          $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeOut('fast').removeClass('open');
          $('.frntre-hover-overlay').first().stop(false, false).fadeOut();
        }
      );
    }
    else {
      //Frntre Custom Popup Script
      $('[data-hover] > a').on('click', function() {
        var element = $(this).parent('[data-hover]');
        if (element.hasClass('open')) {
          element.removeClass('open');
          element.find('[data-hover]').removeClass('open');
          element.find('[data-hover-popup]').slideToggle();
        }
        else {
          element.addClass('open');
          element.children('[data-hover-popup]').slideDown();
          element.siblings('[data-hover]').children('[data-hover-popup]').slideUp();
          element.siblings('[data-hover]').removeClass('open');
          element.siblings('[data-hover]').find('[data-hover]').removeClass('open');
          element.siblings('[data-hover]').find('[data-hover-popup]').slideUp();
        }
      });
      //Frntre Outside Click Remove Class Script
      $(document).on('click', function(e) {
        if ($(e.target).is('[data-hover] > a, [data-hover] > a *, [data-hover-popup], [data-hover-popup] *') === false) {
          $('html').removeClass('nav-open');
          $('[data-hover]').removeClass('open');
          $('[data-hover-popup]').slideUp();
        }
      });
      //Frntre Add And Remove Class Script
      $('.frntre-nav [data-hover]').on('click', function () {
        $('html').addClass('nav-open');
        $('.frntre-hover-overlay').fadeIn();
      });
    }
    if (screen.width >= 1500) {
      $('.frntre-scroll').css('height', $('.frequently-wrap').outerHeight());
    };
    if (screen.width <= 991) {
      $('.frequently-products').insertAfter('.product-info-wrap');
    };
    $('.sidebar-popup-body').css('padding-top', $('.sidebar-popup-header').outerHeight()+20);
    if (screen.width >= 1200) {
      //Frntre Elevate Zoom Image Script
      $('.frntre-zoom').elevateZoom ({
        easingAmount: 20,
        zoomWindowWidth: 500,
        zoomWindowHeight: 500,
        zoomWindowBgColour: '#ebebeb',
        zoomWindowPosition: 'zoomWindow',
      });
    }
    else if (screen.width >= 992) {
      //Frntre Elevate Zoom Image Script
      $('.frntre-zoom').elevateZoom ({
        easingAmount: 20,
        zoomWindowWidth: 400,
        zoomWindowHeight: 400,
        zoomWindowBgColour: '#ebebeb',
        zoomWindowPosition: 'zoomWindow',
      });
    }
    else {
      //Frntre Elevate Zoom Image Script
      $('.frntre-zoom').elevateZoom ({
        zoomType : 'inner',
        cursor: 'crosshair',
      });
    }
  });
  $(window).trigger('resize');

  //Frntre Malihu Custom Scrollbar Script
  $('.frntre-scroll').mCustomScrollbar ({
    mouseWheelPixels: 150,
    scrollInertia: 500,
  });

  //Frntre Slick Product Slider Script
  $('.related-products').slick ({
    dots: false,
    infinite: false,
    slidesToShow: 5,
    responsive: [{
      breakpoint: 1640,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      },
    }],
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><svg viewBox="0 0 28 28"><path d="M11.3 8.9c-.4.4-.4 1-.1 1.4l3.5 3.8-3.4 3.8c-.4.4-.3 1 .1 1.4.4.4 1 .3 1.4-.1l4-4.5c.2-.2.3-.4.3-.7s-.1-.5-.3-.7l-4-4.5c-.4-.3-1.1-.3-1.5.1z"></path></svg></button>',
  });

  //Frntre Add And Remove Class Script
  $('.filters-toggle').on('click', function () {
    $(this).toggleClass('active');
    $('.account-filters').slideToggle();
  });
  $('.zip-toggle').on('click', function () {
    $(this).toggleClass('active');
    $(this).next('.zip-update').slideToggle();
  });
  $('.frntre-hover-overlay').on('click', function () {
    $(this).fadeOut();
  });
  $('.select-quantity .btn').on('click', function () {
    $(this).parents('.select-quantity').addClass('open');
  });

  //Frntre Custom Sidebar Popup Script
  $('[data-sidebar]').click(function () {
    var dataSidebarPopup = $(this).attr('data-sidebar');
    var dataSidebarBackdrop = $(this).attr('data-sidebar');
    $('[data-sidebar-popup = '+dataSidebarPopup+']').addClass('open');
    $('[data-sidebar-backdrop = '+dataSidebarBackdrop+']').fadeIn();
    $('html').addClass('sidebar-popup-open');
  });
  $('[data-sidebar-closer]').click(function () {
    var dataSidebarPopup = $(this).attr('data-sidebar-closer');
    var dataSidebarBackdrop = $(this).attr('data-sidebar-closer');
    $('[data-sidebar-popup = '+dataSidebarPopup+']').removeClass('open');
    $('[data-sidebar-backdrop = '+dataSidebarBackdrop+']').fadeOut();
    $('html').removeClass('sidebar-popup-open');
  });
  $('[data-sidebar-backdrop]').click(function () {
    var dataSidebarPopup = $(this).attr('data-sidebar-backdrop');
    var dataSidebarBackdrop = $(this).attr('data-sidebar-backdrop');
    $('[data-sidebar-popup = '+dataSidebarPopup+']').removeClass('open');
    $('[data-sidebar-backdrop = '+dataSidebarBackdrop+']').fadeOut();
    $('html').removeClass('sidebar-popup-open');
  });

  //Frntre StopPropagation Script
  $('.select-quantity, .product-info .form-group').click(function (event) {
    event.stopPropagation();
  });

  //Frntre Number Input Modify Script
  $('.quantity_buttons').each(function() {
    var spinner = jQuery(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find('.up'),
    btnDown = spinner.find('.down'),
    min = input.attr('min'),
    max = input.attr('max');
    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      }
      else {
        var newVal = oldValue + 1;
      }
      spinner.find('input').val(newVal);
      spinner.find('input').trigger('change');
    });
    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      }
      else {
        var newVal = oldValue - 1;
      }
      spinner.find('input').val(newVal);
      spinner.find('input').trigger('change');
    });
  });

  //Frntre Add And Remove Class On Zero Value Script
  $('.quantity-controler').on('click', function () {
    if ($(this).parents('.select-quantity').find('input').val() == 0) {
      $(this).parents('.select-quantity').removeClass('open');
    }
    else {
      $(this).parents('.select-quantity').addClass('open');
    }
  });


  // checkout button
  if (typeof $('#CheckoutForm').accWizard != 'undefined') {

    $('#CheckoutForm').accWizard ({
      autoButtonsNextClass: 'btn btn-dark',
      autoButtonsSubmitText: 'Place Order',
    });
  }

  // modal open
  $('#ProductDetail').on('shown.bs.modal', function (e) {
    console.log("Modal");

    $("#ProductDetail").find('.modal-body .product-detail-wrap').html('<div class="loader"><img src="/wp-content/uploads/2020/05/ajax-loader.gif"></div>');

    current_clicked_list_item = $(e.relatedTarget);
    var product_id = $(e.relatedTarget).attr('data-product-id');
    var modal = $(e.relatedTarget);
    var element = $(this);

    console.log(product_id);

    jQuery.ajax({
      type : "post",
      dataType : "json",
      url : wayfair_ajax.ajaxurl,
      data : {action: "quick_view_product_details", product_id : product_id},
      success: function(response) {
        console.log(response);

        if ( response.content ) {

          $("#ProductDetail").find('.modal-body .product-detail-wrap').html(response.content);

          //
          if ( response.in_cart ) {

            $(element).find('.variations_button').hide();
            $(element).find('.select-quantity > .quantity').show();
            $(element).find('.select-quantity > .quantity input[name="AddToCart"]').val(response.in_cart);
          }
        }
      },
      error: function(err) {
        console.log(err.responseText);
      }
    });

    // close modal
    $('#ProductDetail').on('hidden.bs.modal', function (e) {

      $("#ProductDetail").find('.modal-body .product-detail-wrap').html('<div class="loader"><img src="/wp-content/uploads/2020/05/ajax-loader.gif"></div>');
    });
  });


  

  jQuery(document).ready(function($) {
    
        $(".woocommerce-variation-add-to-cart > .single_add_to_cart_button").click(function(e) {
    
            e.preventDefault();

            // alert($(this).parent().attr('class'));

            if ( $(this).parent().hasClass('woocommerce-variation-add-to-cart-enabled') ) {

              var element = $(this);

              // add variant
              // $(this).parents('.single_variation_wrap').prev().find('tr').each(function(index, element) {

              //   $(element).find('td.value > select')
              // });
      
              update_cart(element);     
      
              console.log('clicked'); 
            }     
        });

        // for modal
        $(document).on("click", "#ProductDetail .single_add_to_cart_button", function(e) {
    
          e.preventDefault();

          var element = $(this);
    
            update_cart(element, $(this).parents('.form-group').attr('data-product-id'));     
    
            console.log('from modal clicked');
      });




        // down 
        $(".select-quantity.open .btn, .quantity_buttons > .down").click(function(e) {

          console.log("DOWN");

          var $thisbutton = $(this).parent();
          var product_qty = $thisbutton.find('input[name=ProductNumberOne]').val();
          var cart_item_key = $(this).parent().parent().find('input[name=cart_item_key]').val(); 
          var product_id = $thisbutton.attr('data-product-id');   

          if ( product_qty < 1 ) {

            update_cart_qty(product_id, cart_item_key, 0);

            $thisbutton.parent().find('.single_add_to_cart_button').show();

            // remove cart key
            $thisbutton.parent().find('input[name="cart_item_key"]').remove();

            $thisbutton.hide();
          } else {

            console.log(product_qty);

            // $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').find('input[name=quantity]').remove();
            // $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').append('<input type="hidden" name="quantity" value="' + product_qty + '">');

            // $thisbutton.parents('.select-quantity').prev().find(".single_add_to_cart_button").trigger('click');

            $thisbutton.find('input[name=quantity]').remove();
            $thisbutton.append('<input type="hidden" name="quantity" value="' + product_qty + '">');

            update_cart_qty(product_id, cart_item_key, product_qty);
          }

          pQuantity = product_qty;
        });


        // up 
        $(".select-quantity.open .btn, .quantity_buttons > .up").click(function(e) {

          console.log("UP");

          var $thisbutton = $(this).parent();
          var product_qty = $thisbutton.find('input[name=ProductNumberOne]').val();    
          var cart_item_key = $thisbutton.next().val();  
          var product_id = $thisbutton.attr('data-product-id');   

          console.log(cart_item_key, product_qty);

          $thisbutton.find('input[name=quantity]').remove();
          $thisbutton.append('<input type="hidden" name="quantity" value="' + product_qty + '">');

          // $thisbutton.parents('.select-quantity').prev().find(".single_add_to_cart_button").trigger('click');

          update_cart_qty(product_id, cart_item_key, product_qty);

          pQuantity = product_qty;
        });
    
    });   

    /* -------------- Modal ------------ */
    // down 
    $(document).on("click", ".select-quantity .quantity > .down", function(e) {

      console.log("DOWN");

      // minus
      var qty = $(this).parent().find('input').val();
      $(this).parent().find('input').val(eval(qty) - 1);

      var $thisbutton = $(this).parent();
      var product_qty = $thisbutton.find('input[name=AddToCart]').val();
      var cart_item_key = $(this).parent().parent().find('input[name=cart_item_key]').val(); 
      var product_id = $thisbutton.attr('data-product-id');


      if ( product_qty < 1 ) {

        $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').show();
        $thisbutton.hide();
      } else {

        console.log(product_qty);

        $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').find('input[name=quantity]').remove();
        $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').append('<input type="hidden" name="quantity" value="' + product_qty + '">');

        // $thisbutton.parents('.select-quantity').prev().find(".single_add_to_cart_button").trigger('click');

        update_cart_qty(product_id, cart_item_key, product_qty, true);

        pQuantity = product_qty;
      }
    });


    // up 
    $(document).on("click", ".select-quantity .quantity > .up", function(e) {

      console.log("UP");   

      // plus
      var qty = $(this).parent().find('input').val();
      $(this).parent().find('input').val(eval(qty) + 1);

      var $thisbutton = $(this).parent();
      var product_qty = $thisbutton.find('input[name=AddToCart]').val();    
      var cart_item_key = $(this).parent().parent().find('input[name=cart_item_key]').val();  
      var product_id = $thisbutton.attr('data-product-id');

      console.log(product_qty);

      $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').find('input[name=quantity]').remove();
      $thisbutton.parents('.select-quantity').prev().find('form.cart .variations_button').append('<input type="hidden" name="quantity" value="' + product_qty + '">');

      // $thisbutton.parents('.select-quantity').prev().find(".single_add_to_cart_button").trigger('click');

      update_cart_qty(product_id, cart_item_key, product_qty, true);

      console.log(event.relatedTarget);

      pQuantity = product_qty;
    });
  

    // variation change
    $(document).on('click', 'table.variations select',function(e) {

      update_price_on_variation_change();
    });

    // update cart on cart page
    $('body.woocommerce-cart .quantity-selector select').change(function(e) {

      $(this).parent().next().attr('disabled', false).trigger('click');
      // console.log($(this).parent().next().attr('name'));

    });

    // mini cart delete item
    $(document).on('click', '.frntre-header .cart-popup .woocommerce-mini-cart .woocommerce-mini-cart-item .remove_from_cart_button', function(e) {

      var row = $(this).parent();
      var item_key = $(this).attr('data-cart_item_key');

      // pause the action for 2 sec to complete the deletion operation
      // as the remove button on mini cart is not working, this way it can be solved temporarly
      setTimeout(refresh_mini_cart, 2000);

      //
      $('.frntre-product-listings .row > div').each(function(index, element) {

        console.log($(element).find('.product-info .single_variation_wrap input[name="cart_item_key"]').attr('name'));

        if ( typeof $(element).find('.product-info .single_variation_wrap input[name="cart_item_key"]') !== 'undefined' ) {

          // this action only happen when matching key will found on any listing
          if ( item_key === $(element).find('.product-info .single_variation_wrap input[name="cart_item_key"]').val() ) {

            // remove cart key if exists
            $(element).find('.product-info .single_variation_wrap input[name="cart_item_key"]').remove();

            // hide the - and + buttons and reset the counter
            $(element).find('.product-info .single_variation_wrap .quantity_buttons input').val(1)
            $(element).find('.product-info .single_variation_wrap .quantity_buttons').hide();

            pQuantity = 0;

            // show the Add To Cart button
            $(element).find('.product-info .single_add_to_cart_button').show();
          }
        }
      });
    });


    /* --------- CHECKOUT FORM ---------- */
    $(document).on('click', '#CheckoutForm .list-group > .list-group-item:first-child a.btn-dark', function(e) {

      var html = '';

      $(this).parent().parent().find('.woocommerce-billing-fields__field-wrapper .form-group').each(function(index, element) {        

        console.info($(element).find('input').val());

        if ( $(element).find('input').val() ) {
          html += '<p>' + $(element).find('input').val() + '</p>';
        } else if ( $(element).find('select').val() ) {
          html += '<p>' + $(element).find('select').val() + '</p>';
        }
      });

      // console.info(html);

      $('#CheckoutForm .list-group .list-group-item .account-info-wrap').html(html);
    });
});



function update_cart_qty(product_id, cart_item_key, product_qty, modal=false)
{

  console.log({action : 'update_item_from_cart', 'cart_item_key' : cart_item_key, 'qty' : product_qty, product_id: product_id});

  jQuery.ajax({
    type: 'POST',
    // dataType: 'json',
    url: wc_add_to_cart_params.ajax_url,
    data: {action : 'update_item_from_cart', 'cart_item_key' : cart_item_key, 'qty' : product_qty, product_id: product_id},
    success: function (data) {
      console.log(data);
      console.info('Cart updated successfully.');

      if (modal) {

        //woocommerce-variation-add-to-cart
        var actions = $(current_clicked_list_item).next().find('.woocommerce-variation-add-to-cart');
        console.log($(current_clicked_list_item));

        if ( !$(actions).find('.quantity_buttons').is(':hidden') ) {

          $(actions).find('.quantity_buttons').find("input[name='ProductNumberOne']").val(product_qty);
        } else {

          if ( product_qty > 0 ) {

            $(actions).find('.single_add_to_cart_button').hide();
            $(actions).find('.quantity_buttons').show();
            $(actions).find('.quantity_buttons').find("input[name='ProductNumberOne']").val(product_qty);
          }
        }        
      }
        
       // repopulate the mini cart
       refresh_mini_cart();
    }

  });
}



function update_cart(element, modal_add_to_cart_button=null)
{
  var $thisbutton = $(element),
                      $form = $thisbutton.closest('form.cart'),
                      id = $thisbutton.val(),
                      product_qty = $form.parent().parent().find('input[name=ProductNumberOne]').val() || 1,
                      product_id = $form.find('input[name=product_id]').val() || id,
                      variation_id = $form.find('input[name=variation_id]').val() || 0;
                      variations = $form.find('select[name=attribute_pa_weight]').val() || '';

                      // alert(variations);
          
              var data = {
                  action: 'woocommerce_ajax_add_to_cart',
                  product_id: product_id,
                  product_sku: '',
                  quantity: product_qty,
                  variation_id: variation_id,
                  variation: {
                    attribute_pa_weight: variations
                  }
              };
          
              console.log(data);
          
              $(document.body).trigger('adding_to_cart', [$thisbutton, data]);
          
              $.ajax({
                  type: 'post',
                  url: wc_add_to_cart_params.ajax_url,
                  data: data,
                  beforeSend: function (response) {
                      $thisbutton.removeClass('added').addClass('loading');
                  },
                  complete: function (response) {
                    console.log(response);
                      $thisbutton.addClass('added').removeClass('loading');

                    //   console.log(response.responseText);

                    // var json = JSON.parse(response.responseText);
                    // console.log(json.item_key);
                  },
                  success: function (response) {
                    console.log(response);

                    var json = JSON.parse(response);
                    // console.log(json.item_key);                    
          
                      if (response.error & response.product_url) {

                        console.error(response.error);
                          window.location = response.product_url;
                          return;
                      } else {
                          // $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
                          console.log(json.item_key);     

                          if ( json.item_key ) {

                            if ( modal_add_to_cart_button ) {


                            } else {


                            }

                            $(element).parent().find('.quantity_buttons').after('<input type="hidden" name="cart_item_key" value="' + json.item_key + '">');

                              // $(element).closest('form.cart').parent().next().find('.quantity').after('<input type="hidden" name="cart_item_key" value="' + json.item_key + '">');
                            
                              // repopulate the mini cart
                              refresh_mini_cart();

                              // hide the Add To Cart button
                              $(element).hide();

                              // show the update counter (- and +)
                              $(element).parent().find('.quantity_buttons').show();
                          }                          
                      }
                  },
              });
}


// refresh mini cart
function refresh_mini_cart()
{

  // Define the PHP function to call from here
  // var data = {
  //   'action': 'update_mini_cart_by_ajax',
  //   'dataType': 'json',
  // };
  // $.post(
  //   woocommerce_params.ajax_url, // The AJAX URL
  //   data, // Send our PHP function
  //   function(response){
  //     // $('#mode-mini-cart').html(response); // Repopulate the specific element with the new content
  //     console.log(response);

  //     //update the badeg
  //     $('#mini_cart').find('.cart-badge').html(response.count);

  //     $('#mini_cart').find('.cart-popup').html(response.contents);
  //   }
  // );

  jQuery.ajax({
    type: 'GET',
    dataType: 'json',
    url: wc_add_to_cart_params.ajax_url,
    data: {action : 'update_mini_cart_by_ajax'},
    success: function (data) {

      console.log(data);
      $('#mini_cart').find('.cart-popup').html(data.contents);

      //update the badeg
      $('#mini_cart').find('.cart-badge').html(data.count);
    },
    error: function(err) {

      console.error(err.responseText);
    }

  });
}


// update price on variations change
function update_price_on_variation_change()
{
  jQuery.ajax({
    type: 'GET',
    // dataType: 'json',
    url: wc_add_to_cart_params.ajax_url,
    data: {action : 'func_option_valgt'},
    success: function (data) {

      console.log(data);      
    }
  });
}