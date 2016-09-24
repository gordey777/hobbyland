<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>
    </div><!-- .col-full -->
  </div><!-- #content -->

      <div class="col-full">
      <div class="widget-footer">
        <?php if ( is_active_sidebar('widgetarea1') ) : ?>
          <?php dynamic_sidebar( 'widgetarea1' ); ?>
        <?php endif; ?>
      </div>
    </div>



  <?php do_action( 'storefront_before_footer' ); ?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

      <?php wpeFootNav(); ?>

      <?php wpeFootNavTwo(); ?>

      <?php wpeFootNavThree(); ?>

      <?php wpeFootNavFor(); ?>

      <?php
      /**
       * Functions hooked in to storefront_footer action
       *
       * @hooked storefront_footer_widgets - 10
       * @hooked storefront_credit         - 20
       */
      do_action( 'storefront_footer' ); ?>

    </div><!-- .col-full -->
  </footer><!-- #colophon -->

  <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.elevatezoom.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/home-page-sliders.js"></script>



<!--<script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
  <script type="text/javascript">
              $(document).ready(function () {
                  $("#bigpic").ezPlus({
                      zoomType: "window",
                      debug: true,
                      cursor: "default",
                      lensShape: "round",
                      scrollZoom:  "true",
                      lensOpacity:  0,
                      tint:  true,
                      tintColour:  "#000",
                      tintOpacity: 0.6,

                  });
              });

  //initiate the plugin and pass the id of the div containing gallery images
$("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'});

//pass the images to Fancybox
$("#zoom_03").bind("click", function(e) {
  var ez =   $('#zoom_03').data('elevateZoom');
  $.fancybox(ez.getGalleryList());
  return false;
});
</script> -->


  <!--  MAIN NAV -->
  <script>
    var h_hght = 142;
    var h_mrg = 0;
    $(function(){

      var elem = $('.my-nav');
      var top = $(this).scrollTop();

      if(top > h_hght){
        elem.css('top', h_mrg);
      }

      $(window).scroll(function(){
        top = $(this).scrollTop();

        if (top+h_mrg < h_hght) {
          elem.css('top', (h_hght-top));
        } else {
          elem.css('top', h_mrg);
        }
      });

    });
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ez-plus.js"></script>



</body>
</html>


<script>

  function displayImage(domAAroundImgThumb, no_animation) {
  if (typeof(no_animation) == 'undefined')
    no_animation = false;
  if (domAAroundImgThumb.attr('href')) {
    var new_src = domAAroundImgThumb.attr('href').replace('thickbox', 'large');
    var new_title = domAAroundImgThumb.attr('title');
    var new_href = domAAroundImgThumb.attr('href');
    if ($('#bigpic').attr('src') != new_src) {
      $('#bigpic').attr({
        'src': new_src,
        'alt': new_title,
        'title': new_title
      }).load(function() {
        if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled)
          $(this).attr('rel', new_href);
      });
    }
    $('#views_block li a').removeClass('shown');
    $(domAAroundImgThumb).addClass('shown');
  }
}

function displayDiscounts(combination) {
  var quantityDiscountTable = $('#quantityDiscount');
  var combinationsSpecificQuantityDiscount = $('#quantityDiscount_' + combination, quantityDiscountTable);
  var allQuantityDiscount = $('#quantityDiscount_0', quantityDiscountTable);
  if (combinationsSpecificQuantityDiscount.length != 0) {
    combinationsSpecificQuantityDiscount.show();
    quantityDiscountTable.show();
  } else if (allQuantityDiscount.length != 0) {
    allQuantityDiscount.show();
    $('tbody tr', quantityDiscountTable).not('#quantityDiscount_0').hide();
    quantityDiscountTable.show();
  } else {
    quantityDiscountTable.hide();
  }
}

function updateDiscountTable(newPrice) {
  $('#quantityDiscount tbody tr').each(function() {
    var type = $(this).data("discount-type");
    var discount = $(this).data("discount");
    var quantity = $(this).data("discount-quantity");
    if (type == 'percentage') {
      var discountedPrice = newPrice * (1 - discount / 100);
      var discountUpTo = newPrice * (discount / 100) * quantity;
    } else if (type == 'amount') {
      var discountedPrice = newPrice - discount;
      var discountUpTo = discount * quantity;
    }
    if (displayDiscountPrice != 0)
      $(this).children('td').eq(1).text(formatCurrency(discountedPrice * currencyRate, currencyFormat, currencySign, currencyBlank));
    $(this).children('td').eq(2).text(upToTxt + ' ' + formatCurrency(discountUpTo * currencyRate, currencyFormat, currencySign, currencyBlank));
  });
}

function serialScrollFixLock(event, targeted, scrolled, items, position) {
  var serialScrollNbImages = $('#thumbs_list li:visible').length;
  var leftArrow = position == 0 ? true : false;
  var rightArrow = position + serialScrollNbImagesDisplayed >= serialScrollNbImages ? true : false;
  $('#view_scroll_left').css('cursor', leftArrow ? 'default' : 'pointer').css('display', leftArrow ? 'none' : 'block').fadeTo(0, leftArrow ? 0 : 1);
  $('#view_scroll_right').css('cursor', rightArrow ? 'default' : 'pointer').fadeTo(0, rightArrow ? 0 : 1).css('display', rightArrow ? 'none' : 'block');
  return true;
}

function serialScrollSetNbImages() {
  serialScrollNbImagesDisplayed = 1;
  if ($('#thumbs_list').outerWidth(true) < 194)
    serialScrollNbImagesDisplayed = 1;
  else if ($('#thumbs_list').outerWidth(true) < 295)
    serialScrollNbImagesDisplayed = 2;
  else if ($('#thumbs_list').outerWidth(true) < 392)
    serialScrollNbImagesDisplayed = 3;
}

function refreshProductImages(id_product_attribute) {
  id_product_attribute = parseInt(id_product_attribute);
  if (id_product_attribute > 0 && typeof(combinationImages) !== 'undefined' && typeof(combinationImages[id_product_attribute]) !== 'undefined') {
    $('#thumbs_list li').hide();
    for (var i = 0; i < combinationImages[id_product_attribute].length; i++)
      if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled)
        $('#thumbnail_' + parseInt(combinationImages[id_product_attribute][i])).show().children('a.shown').trigger('click');
      else
        $('#thumbnail_' + parseInt(combinationImages[id_product_attribute][i])).show();
  } else {
    $('#thumbs_list li').show();
    var choice = [];
    var radio_inputs = parseInt($('#attributes .checked > input[type=radio]').length);
    if (radio_inputs)
      radio_inputs = '#attributes .checked > input[type=radio]';
    else
      radio_inputs = '#attributes input[type=radio]:checked';
    $('#attributes select, #attributes input[type=hidden], ' + radio_inputs).each(function() {
      choice.push(parseInt($(this).val()));
    });
    if (typeof combinationsHashSet !== 'undefined') {
      var combination = combinationsHashSet[choice.sort().join('-')];
      if (combination) {
        if (combination['image'] && combination['image'] != -1)
          displayImage($('#thumb_' + combination['image']).parent());
      }
    }
  }
  if (parseInt($('#thumbs_list_frame >li:visible').length) != parseInt($('#thumbs_list_frame >li').length))
    $('#wrapResetImages').stop(true, true).show();
  else
    $('#wrapResetImages').stop(true, true).hide();
  if (typeof Enable_productVerticalThumb == 'undefined' || !Enable_productVerticalThumb) {
    $('#thumbs_list_frame').width(parseInt($('#thumbs_list_frame >li').outerWidth(true) * $('#thumbs_list_frame >li').length - 15) + 'px');
  }
  $('#thumbs_list').trigger('goto', 0);
  serialScrollFixLock('', '', '', '', 0);
}

function saveCustomization() {
  $('#quantityBackup').val($('#quantity_wanted').val());
  $('#customizationForm').submit();
}


$(window).resize(function() {
  serialScrollSetNbImages();
  $('#thumbs_list').trigger('goto', 0);
  serialScrollFixLock('', '', '', '', 0);
});
$(document).on('mouseover', '#views_block li a', function() {
  displayImage($(this));
});
$(document).on('click', '#view_full_size, #image-block', function(e) {
  $('#views_block .shown').click();
});
if (typeof(contentOnly) !== 'undefined' && contentOnly) {

  $(document).on('click', '.fancybox', function(e) {
    e.preventDefault();
  });
  $(document).on('click', '#image-block', function(e) {
    e.preventDefault();
    var productUrl = window.document.location.href + '';
    var data = productUrl.replace(/[\?|&]content_only=1/, '');
    if (window.parent.page_name == 'search')
      data += ((data.indexOf('?') < 0) ? '?' : '&') + 'HTTP_REFERER=' + encodeURIComponent(window.parent.document.location.href);
    window.parent.document.location.href = data;
    return;
  });
}

$(document).ready(function() {
/*  var url_found = checkUrl();
  if (!url_found) {
    if (typeof productHasAttributes !== 'undefined' && productHasAttributes)
      findCombination();
    else
      refreshProductImages(0);
  }*/
  serialScrollSetNbImages();
  var wrapper = $('#thumbs_list');
  if (wrapper.length > 0 && typeof $.fn.carouFredSel == 'function' && typeof Enable_productVerticalThumb != 'undefined' && Enable_productVerticalThumb) {
    var items = 4;
    if ($('#left_column').length > 0 || $('#right_column').length > 0) {
      items = 2;
    }
    if ($('#left_column').length > 0 && $('#right_column').length > 0) {
      items = 2;
    }
    var _slider_data = {
      items: items,
      direction: 'up',
      width: 'auto',
      height: '150px',
      infinite: true,
      prev: wrapper.find('.owl-prev').selector,
      next: wrapper.find('.owl-next').selector,
      onBefore: serialScrollFixLock,
      auto: {
        play: false,
        timeoutDuration: 5000,
        duration: 800,
        delay: 3000,
        items: 1,
        pauseOnHover: true
      },
      scroll: {
        items: 1
      },
      swipe: {
        onTouch: true,
        onMouse: true
      },
      onCreate: function() {
        wrapper.addClass('loaded').removeClass('loading');
      }
    };
    $(window).load(function() {
      $(window).trigger('resize');
    });
    $(window).bind('resize orientationchange', function() {
      wrapper.find('#thumbs_list_frame').trigger('destroy', true);
      wrapper.find('#thumbs_list_frame').trigger('configuration');
      wrapper.find('#thumbs_list_frame').carouFredSel(_slider_data);
    });
  } else if (!!$.prototype.serialScroll) {
    $('#thumbs_list').serialScroll({
      items: 'li:visible',
      prev: '#view_scroll_left',
      next: '#view_scroll_right',
      axis: 'x',
      offset: 0,
      start: 0,
      stop: true,
      onBefore: serialScrollFixLock,
      duration: 700,
      lazy: true,
      lock: false,
      force: false,
      cycle: false
    });
    $('#thumbs_list').trigger('goto', 0);
  }
  if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled) {
    if ($('#thumbs_list .shown img').length) {
      var new_src = $('#thumbs_list .shown img').attr('src').replace('cart_', 'large_');
      if ($('.jqzoom img').attr('src') != new_src)
        $('.jqzoom img').attr('src', new_src).parent().attr('href', new_src);
    }
    $('.jqzoom').jqzoom({
      zoomType: 'innerzoom',
      zoomWidth: 458,
      zoomHeight: 458,
      xOffset: 21,
      yOffset: 0,
      title: false
    });
  }
  if (typeof(contentOnly) !== 'undefined') {
    if (!contentOnly && !!$.prototype.fancybox) {
      $('li:visible .fancybox, .fancybox.shown').fancybox({
        'hideOnContentClick': true,
        'openEffect': 'elastic',
        'closeEffect': 'elastic'
      });
    } else if (contentOnly) {
      $('#buy_block').attr('target', '_top');
    }
  }
  if ($('#accessories_product .item').length && !!$.prototype.owlCarousel)
    $('#accessories_product').owlCarousel({
      itemsCustom: [
        [0, 1],
        [320, 1],
        [480, 2],
        [768, 3],
        [992, 3],
        [1200, 4]
      ],
      responsiveRefreshRate: 50,
      slideSpeed: 200,
      paginationSpeed: 500,
      rewindSpeed: 600,
      autoPlay: false,
      stopOnHover: false,
      rewindNav: true,
      pagination: true,
      navigation: true,
      navigationText: ['<div class="carousel-previous disable-select"><span class="icon-chevron-left"></span></div>', '<div class="carousel-next disable-select"><span class="icon-chevron-right"></span></div>']
    });
  if (!$('#accessories_product .item').length)
    $('.accessories-block').parent().remove();
  if (!!$.prototype.uniform) {
    if (typeof product_fileDefaultHtml !== 'undefined')
      $.uniform.defaults.fileDefaultHtml = product_fileDefaultHtml;
    if (typeof product_fileButtonHtml !== 'undefined')
      $.uniform.defaults.fileButtonHtml = product_fileButtonHtml;
  }
  if ($('#customizationForm').length) {
    var url = window.location + '';
    if (url.indexOf('#') != -1)
      getProductAttribute();
  }
});

//zoom

  /* <![CDATA[ */ ;
  var zoom_type = 'window';
  var zoom_fade_in = 400;
  var zoom_fade_out = 550;
  var zoom_cursor_type = 'default';
  var zoom_window_pos = 1;
  var zoom_scroll = true;
  var zoom_easing = true;
  var zoom_tint = true;
  var zoom_tint_color = '#333';
  var zoom_tint_opacity = 0.4;
  var zoom_lens_shape = 'round';
  var zoom_lens_size = 345;;

  function applyElevateZoom() {
    var src = $('.thickbox.shown').attr('href');
    var bigimage = $('.fancybox.shown').attr('href');
    $('#bigpic').elevateZoom({
      zoomType: zoom_type,
      cursor: zoom_cursor_type,
      zoomWindowFadeIn: zoom_fade_in,
      zoomWindowFadeOut: zoom_fade_out,
      zoomWindowPosition: zoom_window_pos,
      scrollZoom: zoom_scroll,
      easing: zoom_easing,
      tint: zoom_tint,
      tintColour: zoom_tint_color,
      tintOpacity: zoom_tint_opacity,
      lensShape: zoom_lens_shape,
      lensSize: zoom_lens_size,
      zoomImage: bigimage,
      borderSize: 1,
      borderColour: '#e2dfdf',
      zoomWindowWidth: 450,
      zoomWindowHeight: 450,
      zoomLevel: 0.7,
      lensBorderSize: 0
    });
  }
  $(document).ready(function() {
    applyElevateZoom();
    $('#color_to_pick_list').click(function() {
      restartElevateZoom();
    });
    $('#color_to_pick_list').hover(function() {
      restartElevateZoom();
    });
    $('#views_block li a').hover(function() {
      restartElevateZoom();
    });
  });

  function restartElevateZoom() {
    $(".zoomContainer").remove();
    applyElevateZoom();
  };;
  var $input = $("#search_query_top");
  var width_ac_results = $input.parent('form').width();
  $('document').ready(function() {
    $("#search_query_top").autocomplete('', {
      minChars: 3,
      max: 10,
      width: (width_ac_results > 0 ? width_ac_results : 500),
      selectFirst: false,
      scroll: true,
      dataType: "json",
      formatItem: function(data, i, max, value, term) {
        return value;
      },
      parse: function(data) {
        var mytab = new Array();
        for (var i = 0; i < data.length; i++)
          mytab[mytab.length] = {
            data: data[i],
            value: '<img alt="' + data[i].pname + '" src="' + data[i].image + '"><div class="right-search"><h5>' + data[i].pname + '</h5><span class="price">' + data[i].dprice + '</span></div> '
          };
        return mytab;
      },
      extraParams: {
        ajaxSearch: 1,
        id_lang: 1,
        category_filter: $("#category_filter").val()
      }
    }).result(function(event, data, formatted) {
      $('#search_query_top').val(data.pname);
      document.location.href = data.product_link;
    });
    $("#category_filter").change(function() {
      $(".ac_results").remove();
      $("#search_query_top").trigger('unautocomplete');
      $("#search_query_top").autocomplete('', {
        minChars: 3,
        max: 10,
        width: (width_ac_results > 0 ? width_ac_results : 500),
        selectFirst: false,
        scroll: true,
        dataType: "json",
        formatItem: function(data, i, max, value, term) {
          return value;
        },
        parse: function(data) {
          var mytab = new Array();
          for (var i = 0; i < data.length; i++)
            mytab[mytab.length] = {
              data: data[i],
              value: '<img alt="' + data[i].pname + '" src="' + data[i].image + '"><div class="right-search"><h5>' + data[i].pname + '</h5><span class="price">' + data[i].dprice + '</span></div> '
            };
          return mytab;
        },
        extraParams: {
          ajaxSearch: 1,
          id_lang: 1,
          category_filter: $("#category_filter").val()
        }
      }).result(function(event, data, formatted) {
        $('#search_query_top').val(data.pname);
        document.location.href = data.product_link;
      });
    });
  });;
  $('#search_query_top').on('focus', function() {
    var $this = $(this);
    if ($this.val() == 'Search...') {
      $this.val('');
      $('.btn.button-search').addClass('active');
    }
  }).on('blur', function() {
    var $this = $(this);
    if ($this.val() == '') {
      $this.val('Search...');
      $('.btn.button-search').removeClass('active');
    }
  });
  $("#click_show_searchbox").click(function(e) {
    $("#searchbox").toggle();
    if ($("#searchbox").is(":visible")) {
      $("#click_show_searchbox").addClass("click_hide");
    } else {
      $("#click_show_searchbox").removeClass("click_hide");
    }
  });
  $(document).click(function(event) {
    if (!$(event.target).closest("#searchbox,#click_show_searchbox,.ac_results").length) {
      $("#searchbox").hide();
      $("#click_show_searchbox").removeClass("click_hide");
    }
  });;
  $('#productCates').owlCarousel({
    itemsCustom: [
      [0, 1],
      [320, 1],
      [480, 1],
      [768, 3],
      [992, 4],
      [1200, 5]
    ],
    responsiveRefreshRate: 50,
    slideSpeed: 200,
    paginationSpeed: 500,
    rewindSpeed: 600,
    autoPlay: false,
    stopOnHover: false,
    rewindNav: true,
    pagination: false,
    navigation: true,
    navigationText: ['<div class="carousel-previous disable-select"><span class="icon-chevron-left"></span></div>', '<div class="carousel-next disable-select"><span class="icon-chevron-right"></span></div>']
  }); /* ]]> */


</script>
