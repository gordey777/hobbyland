

<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see       http://docs.woothemes.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

?>
<div class="cart_totals <?php if ( WC()->customer->has_calculated_shipping() ) echo 'calculated_shipping'; ?>">

  <?php do_action( 'woocommerce_before_cart_totals' ); ?>

  <h2><?php _e( 'Cart Totals', 'woocommerce' ); ?></h2>

  <table cellspacing="0" class="shop_table shop_table_responsive">
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>
</head>
<body class="basket">
  <div class="wrapper">
    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>

            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="section">
            <!--noindex-->
            <span class="hidden" id="gtmContinueShopping">
        {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "continueShopping"
        }
      </span>
            <!--/noindex-->
            <div class="top-back-btn-block">
              <form name="back-button" action="http://www.mvideo.ru/cart?_DARGS=/sitebuilder/blocks/cart/fragments/cart-empty.jsp" method="post">
                <input name="_dyncharset" value="UTF-8" type="hidden">
                <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                <div class="back-btn-link">
                  <input name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value="" type="hidden">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShoppingSuccessURL" value=" " type="hidden">
                  <input data-pushable="true" data-holder="#gtmContinueShopping" name="/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value="Вернуться к покупкам" class="back-btn" type="submit" data-action="click">
                  <input name="_D:/com/mvideo/cart/formhandler/ContinueShoppingFormHandler.continueShopping" value=" " type="hidden">
                </div>
                <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/cart-empty.jsp" type="hidden">
              </form>
            </div>
            <h1 class="visible-phone">
    Корзина
  </h1>
            <div class="nc-checkout-steps visible-desktop visible-tablet">
              <div class="nc-step step1 active">
                <span class="font-icon icon-process"></span>
                <span class="step-text">
        Ваша <br>корзина
      </span>
              </div>
              <div class="nc-step step2">
                <span class="step-line"></span>
                <span class="font-icon icon-delivery"></span>
                <span class="step-text">
        Детали<br>получения
      </span>
              </div>
              <div class="nc-step step3">
                <span class="step-line"></span>
                <span class="font-icon icon-thumb-up"></span>
                <span class="step-text">
        Покупка<br>совершена!
  </span> </div>
            </div>
            <div class="responsive-margins content-frame empty-basket-content">
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<table class="shop_table woocommerce-checkout-review-order-table">
  <thead>
    <tr>
      <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
      <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
    </tr>
  </thead>
  <tbody>
    <?php
      do_action( 'woocommerce_review_order_before_cart_contents' );

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
          ?>
          <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <td class="product-name">
              <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
              <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
              <?php echo WC()->cart->get_item_data( $cart_item ); ?>
            </td>
            <td class="product-total">
              <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </td>
          </tr>
          <?php
        }
      }

      do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
  </tbody>
  <tfoot>



    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
      <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ); ?></th>
            <td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
          <td><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

  </tfoot>
</table>
            </div>
          </div>
        </div>
        <div class="gallery-layout shadow-top-inner ">
          <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
            <div class="gallery-header">
              <div class="gallery-title-wrapper">
                <h2 class="gallery-title">
              Хиты продаж
  </h2> </div>
              <!--noindex-->
              <!--/noindex-->
            </div>
            <div class="gallery-content">
              <div class="accessories-carousel-holder carousel">
                <div class="accessories-carousel-wrapper">
                  <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 959px; height: 411px; margin: 0px; overflow: hidden;">
                    <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: false, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;dataIds&quot; : [10009993,20033901,10008291,10006508,40064139,10007953,30025023,30024209,50042872,50045540,20033267,30021725,20035387,10006379,20030463,30024694], &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=homeItemsForYouBlock&amp;pageType=template&amp;prodId=emptyCartTemplatePage&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2877px; height: 411px;">
                      <li class="gallery-list-item" rel="0" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Телевизор Supra STV-LC32T840WL">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10009993m.jpg" alt="Телевизор Supra STV-LC32T840WL" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10009993m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Телевизор Supra STV-LC32T840WL" data-track-label="Телевизор Supra STV-LC32T840WL"> Телевизор Supra STV-LC32T840WL
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    14490
  </span>
                                    <strong class="product-price-current">
                    12490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10009993" action="http://www.mvideo.ru/cart?productId=10009993&amp;skuId=10009993&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10009993" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10009993" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10009993&amp;skuId=10009993" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10009993" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10009993" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10009993">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "12490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10009993"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/televizor-supra-stv-lc32t840wl-10009993" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="1" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/20033901m.jpg" alt="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/20033901m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Sku_logo/new-02.png" alt=" " class="lazy " src="./Корзина - Москва_files/new-02.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07" data-track-label="Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07">  Стиральная машина Узкая Candy GrandO Extra GC4 1071D-07
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(1)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    16990
  </span>
                                    <strong class="product-price-current">
                    14490<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>

                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.20033901" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock20033901" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock20033901">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14490",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000049",                      "eventProductId": "20033901"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="super-offer-icon">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/May/online-rasprodazha/online-rasprodazha-product.png" alt="" class="lazy " src="./Корзина - Москва_files/stub.gif">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/stiralnaya-mashina-uzkaya-candy-grando-extra-gc4-1071d-07-20033901" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="2" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Видеокамера экшн GoPro Hero+ LCD">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10008291m.jpg" alt="Видеокамера экшн GoPro Hero+ LCD" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10008291m.jpg">
                                </div>
                                <div class="product-badge">
                                  <div class="lazy-load-image-holder lazy-loaded">
                                    <img data-original="//static.mvideo.ru/media/Promotions/Promo_Page/2016/April/rassrochka-0024/rassrochka-0024-bubble_0-0-24.png" alt=" " class="lazy " src="./Корзина - Москва_files/rassrochka-0024-bubble_0-0-24.png">
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Видеокамера экшн GoPro Hero+ LCD" data-track-label="Видеокамера экшн GoPro Hero+ LCD"> Видеокамера экшн GoPro Hero+ LCD
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(6)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <span class="product-price-old">
                    20490
  </span>
                                    <strong class="product-price-current">
                    14990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10008291" action="http://www.mvideo.ru/cart?productId=10008291&amp;skuId=10008291&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008291" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10008291" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008291&amp;skuId=10008291" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008291" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10008291" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10008291">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "14990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000608",                      "eventProductId": "10008291"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                  <div class="product-tile-gift-card-holder">
                                    <div class="checkout-additional-info">
                                      <div class="gift-card-coupon-msg">
                                        <strong> + «М.Купоны» на 2&nbsp;000 рублей
  </strong> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/videokamera-ekshn-gopro-hero-lcd-10008291" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                      <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                        <div class="product-tile">
                          <div class="product-tile-picture">
                            <div class="product-tile-picture-holder">
                              <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">
                                <div class="lazy-load-image-holder lazy-loaded">
                                  <img data-original="//img.mvideo.ru/Pdb/10006508m.jpg" alt="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" class="lazy product-tile-picture-image" src="./Корзина - Москва_files/10006508m.jpg">
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="product-tile-info">
                            <div class="product-tail-section">
                              <div class="product-tile-description">
                                <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black" data-track-label="Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black">  Фотоаппарат зеркальный Nikon D3200 kit 18-55VRII Black
  </a>  </h2>
                                <div class="product-tile-meta">
                                  <div class="star-ratings">
                                    <div class="star-rating star-rating-large rating-mvideo">
                                      <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508#reviews" class="star-rating-canvas-link">
                                        <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                        <span style="width: 91%" class="font-icon icon-star active icon-star-holder-active"></span>
                                        </span><span class="star-rating-reviews-qty">(15)</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--noindex-->
                              <!--/noindex-->
                            </div>
                            <div class="product-tile-data">
                              <div class="product-tile-checkout-section">
                                <div class="info-wrap">
                                  <div class="product-price ">
                                    <strong class="product-price-current">
                    24990<span class="price-symbol-rub">р.</span>
  </strong>
                                  </div>
                                </div>
                                <div class="error text-error">
                                </div>
                                <form id="10006508" action="http://www.mvideo.ru/cart?productId=10006508&amp;skuId=10006508&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10006508" class="product-tile-add-to-basket hidden-phone" method="post">
                                  <input name="_dyncharset" value="UTF-8" type="hidden">
                                  <input name="_dynSessConf" value="-5281513429806941438" type="hidden">
                                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="homeItemsForYouBlock" type="hidden">
                                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBaskethomeItemsForYouBlock10006508" data-original-title="" title="">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10006508&amp;skuId=10006508" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/cart" type="hidden">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                  </div>
                                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10006508" type="hidden">
                                </form>
                              </div>
                              <!--noindex-->
                              <script>
                              var gtmSearch = function(gtmId, value, oneCart, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventOneCart": "' + oneCart + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmSimilarProducts = function(gtmId, value, content, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContent": "' + content + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };

                              var gtmOtherProducts = function(gtmId, value, location, position, categoryId, productId) {
                                document.getElementById('Div' + gtmId).innerHTML =
                                  '<span class="hidden" id="' + gtmId + '">{\
                      "event": "OWOX",\
                      "eventCategory": "Conversions",\
                      "eventAction": "click",\
                      "eventLabel": "AddToCart",\
                      "eventValue": "' + value + '",\
                      "eventContext": "productBlock",\
                      "eventLocation": "' + location + '",\
                      "eventPosition": "' + position + '",\
                      "eventProductCategoryId": "' + categoryId + '",\
                      "eventProductId": "' + productId + '"\
                      }</span>';
                              };
                              </script>
                              <div id="DivgtmAddToBaskethomeItemsForYouBlock10006508" style="display: none;"><span class="hidden" id="gtmAddToBaskethomeItemsForYouBlock10006508">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "24990",                      "eventContext": "productBlock",                     "eventLocation": "homeItemsForYouBlock",                      "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000261",                      "eventProductId": "10006508"                      }</span>
                              </div>
                              <!--/noindex-->
                              <div class="product-tile-sale">
                                <div class="product-tile-gift-card">
                                </div>
                              </div>
                            </div>
                            <div class="product-card">
                              white card
                            </div>
                          </div>
                          <a href="http://www.mvideo.ru/products/fotoapparat-zerkalnyi-nikon-d3200-kit-18-55vrii-black-10006508" class="product-tile-show-more visible-phone">&gt;</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                  <a class="prev-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                  <a class="next-btn" href="http://www.mvideo.ru/cart#" style="display: block;"></a>
                </div>
                <div class="carousel-paging"></div>
              </div>
              <div class="gallery-extra-content visible-phone">
                <a href="http://www.mvideo.ru/cart#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
            </div>
          </div>
        </div>
      </div>

    <tr class="cart-subtotal">
      <th><?php _e( 'Subtotal', 'woocommerce' ); ?></th>
      <td data-title="<?php _e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></td>
    </tr>

    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
      <tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
        <th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
        <td data-title="<?php wc_cart_totals_coupon_label( $coupon ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

      <?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

      <?php wc_cart_totals_shipping_html(); ?>

      <?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

    <?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

      <tr class="shipping">
        <th><?php _e( 'Shipping', 'woocommerce' ); ?></th>
        <td data-title="<?php _e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
      </tr>

    <?php endif; ?>

    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
      <tr class="fee">
        <th><?php echo esc_html( $fee->name ); ?></th>
        <td data-title="<?php echo esc_html( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
      </tr>
    <?php endforeach; ?>

    <?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) :
      $taxable_address = WC()->customer->get_taxable_address();
      $estimated_text  = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
          ? sprintf( ' <small>(' . __( 'estimated for %s', 'woocommerce' ) . ')</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] )
          : '';

      if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
        <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
          <tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
            <th><?php echo esc_html( $tax->label ) . $estimated_text; ?></th>
            <td data-title="<?php echo esc_html( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr class="tax-total">
          <th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></th>
          <td data-title="<?php echo esc_html( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
        </tr>
      <?php endif; ?>
    <?php endif; ?>

    <?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

    <tr class="order-total">
      <th><?php _e( 'Total', 'woocommerce' ); ?></th>
      <td data-title="<?php _e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></td>
    </tr>

    <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

  </table>

  <div class="wc-proceed-to-checkout">
    <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
  </div>

  <?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>
