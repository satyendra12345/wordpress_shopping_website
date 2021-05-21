
var current_clicked_list_item = null;
var cookie_has_location_pincode = false;

const USER_PIN_NAME = 'user-location-pin';
const SERVING_AREAS = [40, 23, 42, 44, 41, 44, 43, 38, 32, 39, 30, 38, 60, 11, 12, 13, 20, 30, 34, 32, 46, 45, 48, 22, 28, 25, 70, 71, 74, 50, 53, 51, 52, 14, 16, 50, 53, 56, 63, 57, 59, 58, 80, 68, 69, 75];

jQuery(document).ready(function() {
  "use strict";

  /* Function to call wc_variation_form on jquery selector.
  */
//  $.fn.wc_variation_form = function() {
//    new VariationForm( this );
//    return this;
//  };


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

  console.log(getCookie(USER_PIN_NAME));

  // check cookie
  if ( getCookie(USER_PIN_NAME) !== null ) {

    cookie_has_location_pincode = true; 

    // hide footer component
    $('.header-middle .header-right, #site_search').css('opacity', '1');
    $('.header-middle .header-right, #site_search').attr('disabled', false);
    $('.aws-search-field').attr('disabled', false);
  } else {

    cookie_has_location_pincode = false; 

    // hide footer component
    $('.header-middle .header-right, #site_search').css('opacity', '.05');
    $('.header-middle .header-right, #site_search').attr('disabled', true);
    $('.aws-search-field').attr('disabled', true);
  }

  // if ( typeof $.cookie(USER_PIN_NAME) !== 'undefined' ) {

  //   cookie_has_location_pincode = true; 
  //   $('#DetectCity').val($.cookie(USER_PIN_NAME));
  //   $('#DetectCity').parent().find('.search-results').html('<p>&nbsp;</p>');

  //   // change text
  //   $('#SelectCity > h2').text('Where do you want the delivery ?');
  //   $('#SelectCity > p > small').text('Zopnow is available in selected cities');
  // }

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

    // console.log('RESIZED');

    if (screen.width >= 768) {
      
      //Frntre Custom Popup Script
      $('[data-hover]').hover (
        function() {
          var dataHoverPopup = $(this).attr('data-hover');
          $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeIn('fast').addClass('open');
          $('.frntre-hover-overlay').first().stop(false, false).fadeIn();

          // console.log(dataHoverPopup);
          
        },
        function() {
          var dataHoverPopup = $(this).attr('data-hover');
          console.log(cookie_has_location_pincode);

          // $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeOut('fast').removeClass('open');
          //   $('.frntre-hover-overlay').first().stop(false, false).fadeOut();

          if ( dataHoverPopup !== 'SelectCity' ) {

            $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeOut('fast').removeClass('open');
            $('.frntre-hover-overlay').first().stop(false, false).fadeOut();
          } else {

            if (cookie_has_location_pincode) {

              $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeOut('fast').removeClass('open');
              $('.frntre-hover-overlay').first().stop(false, false).fadeOut();
            }
          }
        }
      );
    }
    else {
      //Frntre Custom Popup Script
      $('[data-hover] > a').on('click', function() {
        var element = $(this).parent('[data-hover]');

        console.log(element);

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

  
  // all the dropdown only works if pincode is present on cookie
  if ( cookie_has_location_pincode ) {
    
    $(window).trigger('resize');
  }

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

    // only disable the overaly when pin is present
    if ( cookie_has_location_pincode ) {
      
      $(this).fadeOut();
    }
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
      beforeNextStep: function( currentStep ) {

        var flag = true;

        console.log(currentStep);

        var block = $('#CheckoutForm > .list-group > .list-group-item').get(currentStep - 1);
        // console.log($(block).html());

        $(block).find('input').each(function(index, element) {

          if ( !$(element).is(':hidden') ) {

            console.log($(element).val());

            if ( $(element).val().length === 0 ) {

              $(element).addClass('error-input');
              flag = false;
            } else {
              $(element).removeClass('error-input');
            }
          }
          
        });        

        return flag; 
      }

    });
  }

  // modal open
  $('.modal-product-detail').on('shown.bs.modal', function (e) {
    console.log("Modal");

    // $("#ProductDetail").find('.modal-body .product-detail-wrap').html('<div class="loader"><img src="/wp-content/uploads/2020/05/ajax-loader.gif"></div>');

    current_clicked_list_item = $(e.relatedTarget);
    var product_id = $(e.relatedTarget).attr('data-product-id');
    var modal = $(e.relatedTarget);
    var element = $(this);

    // update quantity on modal
    // update_quantity_reacted(modal, element, true);

    // $(this).find('.single_variation_wrap')

    // console.log($(e.relatedTarget).parent().find('.single_variation_wrap .single_add_to_cart_button').is(':hidden'));

    // show add to cart button on modal
    if ( !$(e.relatedTarget).parent().find('.single_variation_wrap .single_add_to_cart_button').is(':hidden') ) {

      // console.log("Show add to cart on modal");

      $(e.relatedTarget).parent().next().find('.modal-product-detail .single_variation_wrap .single_add_to_cart_button').show();
      $(e.relatedTarget).parent().next().find('.modal-product-detail .single_variation_wrap .quantity_buttons').hide();
    }

    // console.log(product_id);
  });


  

  jQuery(document).ready(function($) {       


        // validate the pincode while typing
        $('#frntre-search').submit(function(e) {

          e.preventDefault();

          if ( $(this).find('#DetectCity').val().length === 6 ) {

              if ( !isNaN($(this).find('#DetectCity').val()) ) {

                var pin = eval($(this).find('#DetectCity').val().substr(0, 2));
                // console.log(jQuery.inArray(pin, SERVING_AREAS));
                
                // if match found
                if ( jQuery.inArray(pin, SERVING_AREAS) > 0 ) {

                  // do                
                  $(this).find('.search-results').html('<p class="success-code"><i class="fa fa-circle-o-notch fa-spin"></i><span class=""> checking...</span></p>');
                  
                
                  setCookie(USER_PIN_NAME, $(this).find('#DetectCity').val(), 365);

                  // enable the page
                  var popup = $('.select-city');
                  close_popup(popup);

                  //
                  cookie_has_location_pincode = true;

                  $(this).find('.search-results').html('<p class="success-code">&nbsp;</p>');

                  // change text
                  $('#SelectCity > h2').text('Where do you want the delivery ?');
                  $('#SelectCity > p > small').text('WayFair is available in selected cities');

                } else {

                  $(this).find('.search-results').html('<p class="invalid-code">Sorry! Currently not available in your pincode</p>');
                }
              } else {
                
                $(this).find('.search-results').html('<p class="invalid-code">Invalid Pincode</p>');
              }

          } else {

            $(this).find('.search-results').html('<p class="invalid-code">Invalid Pincode</p>');
          }
        });


        $(this).find('#DetectCity').keyup(function(e) {

          if ( $(this).val().length === 0 ) {

            $(this).parent().find('#DetectSubmit').attr('disabled', true).addClass('disabled');
          } else {
            $(this).parent().find('#DetectSubmit').attr('disabled', false).removeClass('disabled');
          }

          if ( e.keyCode !== 13 ) {

            if ( !isNaN($(this).val()) ) {

              if ($(this).val().length < 6) {

                $(this).parent().find('.search-results').html('<p class="invalid-code">Invalid Pincode</p>');
              } else {

                $(this).parent().find('.search-results').html('<p class="success-code">click Continue to check for the avaibility</p>');
              }
            } else {

              $(this).parent().find('.search-results').html('<p class="invalid-code">Invalid Pincode</p>');
            }
          }
        });


        // $('#DetectSubmit').click(function(e) {

        //   e.preventDefault();

        //   getLocation();

        //   $(this).parent().find('.search-results').html('<p class="success-code"><i class="fa fa-circle-o-notch fa-spin"></i><span class=""> checking...</span></p>');
        // });

    
        // Add To Cart button click
        $(document).on("click", ".woocommerce-variation-add-to-cart > .single_add_to_cart_button", function(e) {
    
            e.preventDefault();

            // alert($(this).parent().attr('class'));

            if ( $(this).parent().hasClass('woocommerce-variation-add-to-cart') ) { // 

              var element = $(this);   

              if ( typeof $(element).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

                console.log('MODAL');
                

                // call from modal
                update_cart(element, true);
              } else {

                console.log('LISTING');

                // call from listing
                update_cart(element, false);
              }
      
            }     
        });

        //
        $(".woocommerce-variation-add-to-cart > .single_add_to_cart_button").click(function(e) {
    
          e.preventDefault();

          // alert($(this).parent().attr('class'));

          if ( $(this).parent().hasClass('woocommerce-variation-add-to-cart-enabled') ) { // 

            var element = $(this);   

            if ( typeof $(element).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

              console.log('MODAL');
              

              // call from modal
              update_cart(element, true);
            } else {

              console.log('LISTING');

              // call from listing
              update_cart(element, false);
            }
    
          }     
      });

        
        // down 
        $(".select-quantity.open .btn, .quantity_buttons > .down").click(function(e) {

          // console.log("DOWN");

          var $thisbutton = $(this).parent();
          var product_qty = $thisbutton.find('input[name=ProductNumberOne]').val();
          var cart_item_key = $(this).parent().parent().find('input[name=cart_item_key]').val(); 
          var product_id = $thisbutton.attr('data-product-id');   

          if ( product_qty < 1 ) {

            if ( typeof $(this).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

              update_cart_qty(product_id, cart_item_key, 0, $(this), true);
            } else {

              update_cart_qty(product_id, cart_item_key, 0, $(this));
            }

            $thisbutton.parent().find('.single_add_to_cart_button').show();

            // remove cart key
            $thisbutton.parent().find('input[name="cart_item_key"]').remove();

            $thisbutton.hide();
          } else {            

            $thisbutton.find('input[name=quantity]').remove();
            $thisbutton.append('<input type="hidden" name="quantity" value="' + product_qty + '">');

            

            // update_cart_qty(product_id, cart_item_key, product_qty);

            if ( typeof $(this).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

              // call from modal
              // update_cart(element, true);
              // console.log('FROM MODAL');
              update_cart_qty(product_id, cart_item_key, product_qty, $(this), true);
            } else {

              // call from listing
              // console.log('FROM LIST');
              update_cart_qty(product_id, cart_item_key, product_qty, $(this));
            }
          }

          pQuantity = product_qty;
        });

        //
        $(document).on("click", ".select-quantity.open .btn, .quantity_buttons > .down", function(e) {

          // console.log("DOWN");

          var $thisbutton = $(this).parent();
          var product_qty = $thisbutton.find('input[name=ProductNumberOne]').val();
          var cart_item_key = $(this).parent().parent().find('input[name=cart_item_key]').val(); 
          var product_id = $thisbutton.attr('data-product-id');   

          if ( product_qty <=1 ) {

            if ( typeof $(this).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

              update_cart_qty(product_id, cart_item_key, 0, $(this), true);
            } else {

              update_cart_qty(product_id, cart_item_key, 0, $(this));
            }

            $thisbutton.parent().find('.single_add_to_cart_button').show();

            // remove cart key
            $thisbutton.parent().find('input[name="cart_item_key"]').remove();

            $thisbutton.hide();
          } else {            
            
            product_qty = eval(product_qty) - 1;
            $thisbutton.find('input[name=ProductNumberOne]').val(product_qty);

            $thisbutton.find('input[name=quantity]').remove();
            $thisbutton.append('<input type="hidden" name="quantity" value="' + product_qty + '">');

            

            // update_cart_qty(product_id, cart_item_key, product_qty);

            if ( typeof $(this).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

              // call from modal
              // update_cart(element, true);
              // console.log('FROM MODAL');
              update_cart_qty(product_id, cart_item_key, product_qty, $(this), true);
            } else {

              // call from listing
              // console.log('FROM LIST');
              update_cart_qty(product_id, cart_item_key, product_qty, $(this));
            }
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

          // if ( product_qty > 10 ) {

          //     $('#footer_quantity_limit_popup').slideDown(function(){
          //       $('#footer_quantity_limit_popup').delay(5000).slideUp('fast'); 
          //    });

          //    return false;
          // }

          if ( product_qty >= 10 ) {

            $('#footer_quantity_limit_popup').slideDown(function(){
              $('#footer_quantity_limit_popup').find('strong').html('&nbsp;10&nbsp;');
              $('#footer_quantity_limit_popup').delay(5000).slideUp('fast'); 
           });

             return false;
          } else {

              $thisbutton.find('input[name=quantity]').remove();
              $thisbutton.append('<input type="hidden" name="quantity" value="' + product_qty + '">');

              console.log($(this).parents('.modal-product-detail').attr('id'));

                if ( typeof $(this).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

                    // call from modal
                    // update_cart(element, true);
                  update_cart_qty(product_id, cart_item_key, product_qty, $(this), true);
                } else {

                    // call from listing
                  update_cart_qty(product_id, cart_item_key, product_qty, $(this));
                }          
                  
                pQuantity = product_qty;
            }
        });

        //
        $(document).on("click", ".select-quantity.open .btn, .quantity_buttons > .up", function(e) {

          console.log("UP");

          var $thisbutton = $(this).parent();
          var product_qty = $thisbutton.find('input[name=ProductNumberOne]').val();    
          var cart_item_key = $thisbutton.next().val();  
          var product_id = $thisbutton.attr('data-product-id');   

          console.log(cart_item_key, product_qty);

          if ( product_qty >= 10 ) {

            //   $('#footer_quantity_limit_popup').slideDown(function(){
            //     $('#footer_quantity_limit_popup').delay(5000).slideUp('fast'); 
            //  });

            $('#footer_quantity_limit_popup').slideDown(function(){
              $('#footer_quantity_limit_popup').find('strong').html('&nbsp;10&nbsp;');
              $('#footer_quantity_limit_popup').delay(5000).slideUp('fast'); 
           });

             return false;
          } else {
            product_qty = eval(product_qty) + 1
            $thisbutton.find('input[name=ProductNumberOne]').val(product_qty);
          }

          $thisbutton.find('input[name=quantity]').remove();
          $thisbutton.append('<input type="hidden" name="quantity" value="' + product_qty + '">');

          console.log($(this).parents('.modal-product-detail').attr('id'));

              if ( typeof $(this).parents('.modal-product-detail').attr('id') !== 'undefined' ) {

                // call from modal
                // update_cart(element, true);
                update_cart_qty(product_id, cart_item_key, product_qty, $(this), true);
              } else {

                // call from listing
                update_cart_qty(product_id, cart_item_key, product_qty, $(this));
              }

          

          pQuantity = product_qty;
        });
    
    });   

    //
    



  

    // variation change
    $(document).on('click', 'table.variations select',function(e) {

      update_price_on_variation_change();
    });

    // update cart on cart page
    $('body.woocommerce-cart .quantity-selector input').change(function(e) {

      $(this).parent().next().attr('disabled', false).trigger('click');
      // console.log($(this).parent().next().attr('name'));

    });

    // mini cart delete item
    $(document).on('click', '.frntre-header .cart-popup .woocommerce-mini-cart .woocommerce-mini-cart-item .remove_from_cart_button', function(e) {

      var row = $(this).parent();
      var item_key = $(this).attr('data-cart_item_key');

      // pause the action for 2 sec to complete the deletion operation
      // as the remove button on mini cart is not working, this way it can be solved temporarly
      // setTimeout(refresh_mini_cart, 2000);

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

        // console.info($(element).find('input').val());

        if ( $(element).find('input').val() ) {
          html += '<p>' + $(element).find('input').val() + '</p>';
        } else if ( $(element).find('select').val() ) {
          html += '<p>' + $(element).find('select').val() + '</p>';
        } else if ( $(element).find('textarea').val() ) {
          html += '<p>' + $(element).find('textarea').val() + '</p>';
        }
      });

      // console.info(html);

      $('#CheckoutForm .list-group .list-group-item .account-info-wrap').html(html);
    });

    $('#CheckoutForm .list-group .list-group-item .action > button').click(function(e) {

      $('#payment').next().trigger('click');
    });


      //
  $('.modal table.variations select').change(function() {

    $(current_clicked_list_item).find('table.variations select').val($(this).val());
  });


  // on change variation dropdown
  $(document).on('change', 'table.variations select', function(e) {

    var product_id = 0;
    var variation = $(this).val();
    var element = $(this);
    var container = 'list';

    if ( typeof $(element).closest('.product-detail-wrap').attr('data-product-id') != 'undefined' ) {
      
      container = 'modal';
      product_id = $(element).closest('.product-detail-wrap').attr('data-product-id');
    } else {

      container = 'list';
      product_id = $(element).parents('.list-info').find('.product-list').attr('data-product-id');
    }

    console.log({action : 'action_on_change_variant_dropdown', product_id: product_id, variation: variation});

    jQuery.ajax({
      type: 'GET',
      dataType: 'json',
      url: wc_add_to_cart_params.ajax_url,
      data: {action : 'action_on_change_variant_dropdown', product_id: product_id, variation: variation},
      success: function (data) {
  
        // console.log(data);        

        show_add_to_cart_option(element, !data.status, data.quantity, container, data);

        // load discount
        load_discount_labels(element, container);
      },
      error: function(err) {
  
        console.error(err.responseText);
      }
  
    });
  });


  // open login popup on link clicked on footer
  $('footer .menu-my-account-container #menu-item-3241, footer .menu-my-account-container #menu-item-3269').click(function(e) {

    e.preventDefault();

    $('#LoginSignup').modal('show');
  });


  // mini cart hover
  $('#mini_cart').mouseenter(function(e) {

    if ( eval($(this).find('.cart-badge').text()) > 0 ) {

      // hide the emty message dropdown
      $(this).find('.cart-popup').hide();
      $(this).find('.cart-popup').removeAttr('data-hover-popup');
      $(this).removeAttr('data-hover');

      // add the cart page link
      $(this).find('a').attr('href', $(baseurl).val() + '/cart');
    } else {

      // hide the emty message dropdown
      $(this).find('.cart-popup').show();
      $(this).find('.cart-popup').attr('data-hover-popup', 'Cart');
      $(this).attr('data-hover', 'Cart');

      // remove the cart page link
      $(this).find('a').attr('href', '#');
    }
  });


  
  // make billing and shiiping address same and hide the toggle
  // console.log($('.woocommerce-checkout #ship-to-different-address-checkbox').is('checked'));
  $('.woocommerce-checkout #ship-to-different-address-checkbox').trigger('click');

  // $('.woocommerce-checkout #ship-to-different-address-checkbox').attr('checked', false);
  $('.woocommerce-checkout #ship-to-different-address').hide();

  // make terms checked on checkout page
  $('.woocommerce-checkout #terms').attr('checked', true);


  // open login pop on click the sign in button of the support candy plugin
  $(document).on('click', '#wpsc_tickets_container #wpsc_login_link', function(e) {

    e.preventDefault();

    $('#LoginSignup').modal('show');
  });

  // load discount labels of product items
  // load_discount_labels();

  // make bg to theme color on click
  $('.woocommerce-checkout .available-slots > div .wrapper .custom-control label').click(function(e) {

    $('.woocommerce-checkout .available-slots > div').each(function(index, element) {

      $(element).find('.wrapper').removeClass('active-checkout-box');
    });

    $(this).closest('.wrapper').addClass('active-checkout-box');
  });

  // hide category from contact support form and make General as selected by default
  if ( typeof $('.page-template-page-contact-us #create_ticket_body #ticket_category').attr('class') !== 'undefined' ) {

    console.log(this);
    
    $('.page-template-page-contact-us #create_ticket_body #ticket_category option:eq(1)').prop('selected', true)
  }

  // add promo code on cart page
  $('.woocommerce-cart .add-card button').click(function(e) {

    e.preventDefault();

    var code = $(this).prev().val();
    var button_html = $(this).html();
    var element = $(this);

    if ( code.length === 0 ) {

      swal("Please enter the coupon code");
    } else {

    $(this).attr('disabled', true);
    $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');

      jQuery.ajax({
        type: 'GET',
        dataType: 'json',
        url: wc_add_to_cart_params.ajax_url,
        data: {action : 'add_gift_card_promo_code', code: code},
        success: function (data) {
    
          console.log(data);

          if ( data.redirect ) {

            location.reload();
          } else {

            var span = document.createElement("span");
                  span.innerHTML = data.message;

                  swal({
                      content: span,
                      allowOutsideClick: "true" 
                  });

            $(element).attr('disabled', false);
            $(element).html(button_html);
          }
        }
      });
    }

  });


  setInterval(function() { makeTimer(); }, 1000);
});


function makeTimer() {

    // console.log($('span#clockdiv').attr('data-counter-limit'));
  

  //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
    var endTime = new Date($('span#clockdiv').attr('data-counter-limit'));			
      endTime = (Date.parse(endTime) / 1000);

      var now = new Date();
      now = (Date.parse(now) / 1000);

      var timeLeft = endTime - now;

      var days = Math.floor(timeLeft / 86400); 
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
      if (hours < "10") { hours = "0" + hours; }
      if (minutes < "10") { minutes = "0" + minutes; }
      if (seconds < "10") { seconds = "0" + seconds; }

      // $("#days").html(days + "<span>Days</span>");
      // $("#hours").html(hours + "<span>Hours</span>");
      // $("#minutes").html(minutes + "<span>Minutes</span>");
      // $("#seconds").html(seconds + "<span>Seconds</span>");		

      $('span#clockdiv').html(hours + ':' + minutes + ':' + seconds);

  }


/**
 * Change pin code request
 */
function change_pin_code()
{
  if ( getCookie(USER_PIN_NAME) ) {

    // $.removeCookie(USER_PIN_NAME, { path: '/' });

    deleteCookie(USER_PIN_NAME);
    location.href = $('#baseurl').val();
  }
}


function displa_variant_price(data, element, container = 'list')
{
  if ( container === 'list' ) {

    var html = '<span class="price">' +
                '<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">M.R.P.&nbsp;</span>' + data.regular_price + '</span></del>' +
                '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + data.currency + '</span>' + data.display_price + '</span></ins>' +
              '</span>';
    
    $(element).parents('.product-info').find('.p_alt .price').html(html);

    $(element).parents('.product-info').find("input[name='variation_id']").val(data.variant_id);

  } else {

    var html = '<span class="price">' +
                '<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">M.R.P.&nbsp;</span>' + data.regular_price + '</span></del>' +
                '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' + data.currency + '</span>' + data.display_price + '</span></ins>' +
              '</span>';

    console.log(html);
    
    
    $(element).parents('.product-detail-wrap').find('.p_alt .price').html(html);

    $(element).parents('.product-detail-wrap').find("input[name='variation_id']").val(data.variant_id);
  }
}


/**
 * Load the discount price for each product
 */
function load_discount_labels(ele = null, container = 'list')
{

  var product_id = 0;
  var variant = '';

  // console.log(typeof $(element).attr('class') !== 'undefined'); 

  if ( ele !== null ) {

    if ( container === 'list' ) {

      product_id = $(ele).parents('.product-info').prev().attr('data-product-id');
      variant = $(ele).val();
      $(ele).parents('.product-info').prev().find('.discount-label').html('<i class="fa fa-circle-o-notch fa-spin"></i>');

      $(ele).parents('.product-info').find('.p_alt .price').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
    } else {

      product_id = $(ele).parents('.product-detail-wrap').attr('data-product-id');
      variant = $(ele).val();
      $(ele).parents('.product-detail-wrap').find('.discount-label').html('<i class="fa fa-circle-o-notch fa-spin"></i>');

      $(ele).parents('.product-detail-wrap').find('.p_alt .price').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
    }

    // console.log({action : 'load_discount_label_for_product_variant', product_id: product_id, variant: variant}); return false;

    jQuery.ajax({
      type: 'GET',
      dataType: 'json',
      url: wc_add_to_cart_params.ajax_url,
      data: {action : 'load_discount_label_for_product_variant', product_id: product_id, variant: variant},
      success: function (data) {
  
        console.log(data);

        // display the discount percentage
        if ( container === 'list' ) {

          $(ele).parents('.product-info').prev().find('.discount-label').text(data.discount);

          // add variant          
          $(ele).parents('.product-info').prev().find('input[name=variation_id]').text(data.variation_id);          

          // display variant price
          displa_variant_price(data, ele, container);

        } else {

          $(ele).parents('.product-detail-wrap').find('.discount-label').text(data.discount);
          
          // add variant  
          $(ele).parents('.product-detail-wrap').find('input[name=variation_id]').text(data.variation_id);         

          // display variant price
          displa_variant_price(data, ele, container);
        }

      },
      error: function(err) {
  
        console.error(err.responseText);
      }
  
    });

  } else {

    if ( typeof $('.frntre-product-listings').attr('class') !== 'undefined' ) {

      $('.frntre-product-listings .product-list-item-col').each(function(index, element) {
  
        product_id = $(element).find('.product-list').attr('data-product-id');
        variant = '';
  
        $(element).find('.discount-label').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
  
        // console.log({action : 'load_discount_label_for_product_variant', product_id: product_id, variant: variant}); return false;
  
        jQuery.ajax({
          type: 'GET',
          dataType: 'json',
          url: wc_add_to_cart_params.ajax_url,
          data: {action : 'load_discount_label_for_product_variant', product_id: product_id},
          success: function (data) {
      
            console.log(data);
  
            // display the discount percentage
            $(element).find('.discount-label').text(data.discount);
  
          },
          error: function(err) {
      
            console.error(err.responseText);
          }
      
        });
      });    
    }
  }  
}


function open_no_manual_close_popup(element) {

  var popup = element;
  var dataHoverPopup = $(popup).attr('data-hover');
  $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeIn('fast').addClass('open');
  // $('.frntre-hover-overlay2').first().stop(false, false).fadeIn();

  // hide footer component
  $('.header-middle .header-right, #site_search').css('opacity', '.05').attr('disabled', true);
  $('.aws-search-field').attr('disabled', true);

  // make inputbox invalid
  $('#DetectCity').addClass('invalid-input');

  cookie_has_location_pincode = false;
}



function close_popup(element)
{
  var dataHoverPopup = $(element).attr('data-hover');
  $('[data-hover-popup = '+dataHoverPopup+']').first().stop(false, false).fadeOut('fast').removeClass('open');
  $('.frntre-hover-overlay2').first().stop(false, false).fadeOut();

  // show footer component
  $('.header-middle .header-right, #site_search').css('opacity', '1').attr('disabled', false);
  $('.aws-search-field').attr('disabled', false);

  // make inputbox invalid
  $('#DetectCity').removeClass('invalid-input');

  cookie_has_location_pincode = true;

  $('.frntre-hover-overlay').css('z-index', 3);

  $(window).trigger('resize');
}

/**
 * 
 * @param {element} element 
 * @param {show_add_to_cart} show_add_to_cart 
 */
function show_add_to_cart_option(element, show_add_to_cart=false, quantity = 1, container = 'modal', data = null)
{

  var list_item = (container === 'modal') ? $(element).parents('.product-detail-wrap') : $(element).parents('.list-info');

  if ( !show_add_to_cart ) {

    // show update
    $(list_item).find('.quantity_buttons').show();
    $(list_item).find('.quantity_buttons').find('input').val(quantity);
    $(list_item).find('.quantity_buttons').find("input[name='quantity']").val(quantity);
    // $(list_item).find('.quantity_buttons').find('input').attr('value', quantity);
  
    // hide add to cart
    $(list_item).find('.single_add_to_cart_button').hide();
  } else {

    // show update
    $(list_item).find('.quantity_buttons').hide();

    // hide add to cart
    $(list_item).find('.single_add_to_cart_button').show();
  }
}


/**
 * 
 * @param {integer} product_id 
 * @param {integer} cart_item_key 
 * @param {integer} product_qty 
 * @param {object} source_element 
 * @param {boolean} call_from_modal 
 */
function update_cart_qty(product_id, cart_item_key, product_qty, source_element=null, call_from_modal=false)
{

  var variation = $(source_element).parents('.single_variation_wrap').prev().find('select').val();

  // get the category id
  var body_classes = $('body').attr('class').split(' '); // represent class as array to determine the category id  
  var cat_id = 0;
  $.each( body_classes, function( index, value ){
    
    if ( value.indexOf('term-') !== -1 ) {

      cat_id = value;
    }
  });
  
  console.log({action : 'update_item_from_cart', 'cart_item_key' : cart_item_key, 'qty' : product_qty, product_id: product_id, variation: variation, category_id: cat_id});
    
    // make the list item inactive
    $(source_element).parents('.single_variation_wrap').closest('.list-info').addClass('list-item-inactive');

    jQuery.ajax({
      type: 'POST',
      // dataType: 'json',
      url: wc_add_to_cart_params.ajax_url,
      data: {action : 'update_item_from_cart', 'cart_item_key' : cart_item_key, 'qty' : product_qty, product_id: product_id, variation: variation, category_id: cat_id},
      complete: function() {

        // make the list item back to active
        $(source_element).parents('.single_variation_wrap').closest('.list-info').removeClass('list-item-inactive');
      },
      success: function (data) {
        console.log(data);
        console.info('Cart updated successfully.');

        if ( data === 'open_limit_popup' ) {

          open_quantity_limit_popup(source_element);
        } else {

          if ( source_element ) {

            var element = source_element;        

            // console.log(call_from_modal);

            if ( call_from_modal ) {                        

              // sync with list item
              var elep = $(element).parents('.modal-product-detail');
              var list_item = $(elep).parent();

              // variants dropdown
              $(list_item).find('.list-info .variations select').val($(elep).find('.variations select').val());
              $(list_item).find('.list-info .variations select').trigger('change');

              // quantity
              var qunty = $(elep).find('.single_variation_wrap .quantity_buttons input').val();

              console.table($(elep).find('.list-info .variations select').val(), qunty);

              if ( qunty > 0 ) {

                $(list_item).find('.list-info .single_variation_wrap .single_add_to_cart_button').hide();
                $(list_item).find('.list-info .single_variation_wrap .quantity_buttons').show();
              } else {

                $(list_item).find('.list-info .single_variation_wrap .single_add_to_cart_button').show();
                $(list_item).find('.list-info .single_variation_wrap .quantity_buttons').hide();
              }

              $(list_item).find('.list-info .single_variation_wrap .quantity_buttons input').val(qunty);

            } else {                     

              // sync with modal
              var elep = $(element).parents('.product-list-item-col');
              var modal = $(element).parents('.product-list-item-col').find('.modal-product-detail');

              // variants dropdown
              $(modal).find('.variations select').val($(elep).find('.list-info .variations select').val());
              $(modal).find('.variations select').trigger('change');

              // quantity
              var qunty = $(elep).find('.list-info .single_variation_wrap .quantity_buttons input').val();

              console.table($(elep).find('.list-info .variations select').val(), qunty);

              if ( qunty > 0 ) {

                $(modal).find('.single_variation_wrap .single_add_to_cart_button').hide();
                $(modal).find('.single_variation_wrap .quantity_buttons').show();
              } else {

                $(modal).find('.single_variation_wrap .single_add_to_cart_button').show();
                $(modal).find('.single_variation_wrap .quantity_buttons').hide();
              }

              $(modal).find('.single_variation_wrap .quantity_buttons input').val(qunty);
            }                            
          }      
            
          // repopulate the mini cart
          refresh_mini_cart();

          // update footer cart contents
          update_footer_cart_popup();       

          // update cart counter on product item
          update_cart_counter_on_product(product_id, element);
        }
      }
    });
}



function open_quantity_limit_popup(source_element, limit = 1)
{
  $(source_element).parents('.quantity_buttons').find('input[name="ProductNumberOne"]').val( eval($(source_element).parents('.quantity_buttons').find('input[name="ProductNumberOne"]').val()) - 1 );

  $('#footer_quantity_limit_popup').slideDown(function(){
    $('#footer_quantity_limit_popup').find('strong').html('&nbsp;' + limit + '&nbsp;');
    $('#footer_quantity_limit_popup').delay(5000).slideUp('fast'); 
 });
}


function update_cart(element, call_from_modal=false)
{
  var $thisbutton = $(element),
                      $form = $thisbutton.closest('form.cart'),
                      id = $thisbutton.val(),
                      // product_qty = $form.parent().parent().find('input[name=ProductNumberOne]').val() || 1,
                      product_qty = 1,
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

              // make the list item inactive
              $thisbutton.closest('.list-info').addClass('list-item-inactive');
          
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

                      // make the list item inactive
                      $thisbutton.closest('.list-info').removeClass('list-item-inactive');
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

                            $(element).parent().find('.quantity_buttons').after('<input type="hidden" name="cart_item_key" value="' + json.item_key + '">');

                            // $(element).closest('form.cart').parent().next().find('.quantity').after('<input type="hidden" name="cart_item_key" value="' + json.item_key + '">');
                            
                              // repopulate the mini cart
                              refresh_mini_cart();

                              // update footer cart popup
                              update_footer_cart_popup();

                              // update cart counter on product item
                              update_cart_counter_on_product(product_id, element);

                              // hide the Add To Cart button
                              $(element).hide();

                              // show the update counter (- and +)
                              $(element).parent().find('.quantity_buttons input').val(1);
                              $(element).parent().find('.quantity_buttons').show();

                            if ( call_from_modal ) {                              

                              // sync with list item
                              var elep = $(element).parents('.modal-product-detail');
                              var list_item = $(elep).parent();

                              // variants dropdown
                              $(list_item).find('.variations select').val($(elep).find('.variations select').val());
                              $(list_item).find('.variations select').trigger('change');

                              // quantity
                              var qunty = $(elep).find('.single_variation_wrap .quantity_buttons input').val();

                              if ( qunty > 0 ) {

                                $(list_item).find('.single_variation_wrap .single_add_to_cart_button').hide();
                                $(list_item).find('.single_variation_wrap .quantity_buttons').show();
                              } else {

                                $(list_item).find('.single_variation_wrap .single_add_to_cart_button').show();
                                $(list_item).find('.single_variation_wrap .quantity_buttons').hide();
                              }

                              $(list_item).find('.single_variation_wrap .quantity_buttons input').val(qunty);

                            } else {                              

                              // sync with modal
                              var elep = $(element).parents('.product-list-item-col');
                              var modal = $(element).parents('.product-list-item-col').find('.modal-product-detail');

                              // variants dropdown
                              $(modal).find('.variations select').val($(elep).find('.variations select').val());
                              $(modal).find('.variations select').trigger('change');

                              // quantity
                              var qunty = $(elep).find('.single_variation_wrap .quantity_buttons input').val();

                              if ( qunty > 0 ) {

                                $(modal).find('.single_variation_wrap .single_add_to_cart_button').hide();
                                $(modal).find('.single_variation_wrap .quantity_buttons').show();
                              } else {

                                $(modal).find('.single_variation_wrap .single_add_to_cart_button').show();
                                $(modal).find('.single_variation_wrap .quantity_buttons').hide();
                              }

                              $(modal).find('.single_variation_wrap .quantity_buttons input').val(qunty);
                            }                            
                          }                          
                      }
                  },
              });



}



function update_cart_counter_on_product(product_id, element) {

  jQuery.ajax({
    type: 'GET',
    dataType: 'json',
    url: wc_add_to_cart_params.ajax_url,
    data: {action : 'get_cart_quantity_of_product', product_id: product_id},
    success: function (data) {

      console.log(data);
      $(element).parents('.list-info').find('.cart-counter > span').html(data.count);

      if ( eval(data.value) > 0 )
        $(element).parents('.list-info').find('.cart-counter').show();
      else
        $(element).parents('.list-info').find('.cart-counter').hide();
    },
    error: function(err) {

      console.error(err.responseText);
    }

  });
}

// reacted quantity update
function update_quantity_reacted(source_element, modal, on_modal=false)
{
  if (on_modal) {

    var quantity = $(source_element).next().find('input[name="ProductNumberOne"]').val();
    var variant = $(source_element).next().find('.variations select').val();

    console.log(quantity, variant);

    // update the select dropdown
    // $(modal).find('.variations select option:eq(' + variant + ')').attr('selected', 'selected');
    $(modal).find('.variations select').val(variant);
    $(modal).find('.variations select').trigger('change');

    // update on modal
    $(modal).find('input[name="ProductNumberOne"]').val(quantity);

    if ( quantity > 0 ) {

      $(modal).find('.single_variation_wrap .single_add_to_cart_button').hide();
      $(modal).find('.single_variation_wrap .quantity_buttons').show();
    }
  } 
}


// refresh mini cart
function refresh_mini_cart()
{
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


/**
 * Update footer cart popup
 */
function update_footer_cart_popup()
{
  jQuery.ajax({
    type: 'GET',
    dataType: 'json',
    url: wc_add_to_cart_params.ajax_url,
    data: {action : 'update_footer_cart_contents'},
    success: function (data) {

      console.log(data);

      if ( data.cart_count > 0 ) {

        $('#footer_cart_popup').slideDown();

        $('#footer_cart_popup').html(data.content);
      } else {

        $('#footer_cart_popup').slideUp('fast');

        $('#footer_cart_popup').html(data.content);
      }
    },
    error: function(err) {

      console.error(err.responseText);
    }

  });
}


//get and set cookie functions
function getCookie(name) {
  var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
  return v ? v[2] : null;
}

function setCookie(name, value, days) {
  var d = new Date;
  d.setTime(d.getTime() + 24*60*60*1000*days);
  document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

function deleteCookie(name) { setCookie(name, '', -1); }
