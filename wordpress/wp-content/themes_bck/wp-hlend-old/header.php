<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/libs.css">
  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-common.css">
  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-blocks.css">
  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-pages.css">
  <link media="print" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-print.css">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->


  <?php wp_head(); ?>

</head>
<body <?php body_class('productDetails no-inner-shaddow'); ?>>


  <div c>

    <div class="page-content" style="left: 0px;">
      <div class="sidebar">
      </div>
      <div class="header-main closed" data-init="headerRegions">
        <div class="header-area">
          <div id="header-regions"></div>
          <div class="region-popup">
            <div id="region-popup" data-init="custom-tooltip" data-init-param="#region-popup, bottom" data-tooltip-text="" class="region-popup-btn" data-original-title="" title=""></div>
          </div>
          <div class="header-top-bar">
            <div class="header-section">
              <div class="header-stores-section">
                <div class="header-stores">
                  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-init="openCloseScroll" data-init-param=".header-stores-dropdown,.header-stores-content" data-post-load-url="/sitebuilder/blocks/storeSelection.json.jsp" class="header-store-addresses-link inactive">Адреса магазинов
              <i class="font-icon header-stores-icon"></i>
            </a>
                  <div class="header-stores-dropdown "></div>
                </div>
              </div>
              <div class="header-info-section">
                <strong class="header-phone">(495) 777-777-5</strong> <a class="header-help-link" href="http://www.mvideo.ru/help">Вопросы-ответы</a>
                <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#header-regions" data-post-load-url="/sitebuilder/blocks/regionSelection.json.jsp?pageId=productDetailsPage&amp;pageUrl=/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781&amp;" class="header-sities-link region-opener">Москва
            <i class="font-icon header-sities-icon"></i></a>
              </div>
            </div>
          </div>
          <div class="header-main-area">
            <div class="header-section">
              <div class="header-area-center">
                <div class="header-area-holder">
                  <a href="http://www.mvideo.ru/" class="header-logo font-icon icon-logo-main">
                    <img class="header-logo-img" src="<?php echo get_template_directory_uri(); ?>/img/mvideo-logo.png" alt="М.Видео, нам не всё равно">
                    <strong>М.Видео, нам не всё равно</strong>
                  </a>
                </div>
              </div>
              <div class="header-area-left">
                <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="header-menu-btn">Menu</a>

                <div class="header-login">

                </div>

              </div>

              <div class="header-area-right">


                <div id="js-mini-basket" class="mini-basket-block ">
                  <a href="<?php echo WC()->cart->get_cart_url(); ?>" data-init="miniBasketBtn" data-url="/sitebuilder/blocks/minibasket/miniBasketNavigation.json.jsp" class="mini-basket-service-blocks mini-basket-link collapsed close-cart">

<!--                     КІЛЬКІСТЬ ТОВАРІВ В КОРЗИНІ-->
                    <strong class="icon-trolley-cart font-icon">

                        <span class="mini-basket-amount">

                                <?php echo sprintf ('%d', WC()->cart->get_cart_contents_count()) ; ?>

                        </span>

                    </strong>


                  </a>





<!--                   <div id="mini-basket" class="mini-basket-content">
  <div class="mini-basket-main-content">
    <div class="mini-basket-scrolling-panel">
      <form id="mini-basket-form" action="http://www.mvideo.ru/sitebuilder/blocks/cart/cart-mini.json.jsp?_DARGS=/sitebuilder/blocks/cart/fragments/mini-basket-filled.jsp" method="POST">
        <ul class="mini-basket-product-details">
          <li class="mini-basket-product">
            <div class="mini-basket-product-image">
              <div class="mini-basket-picture-holder">
                <a href="http://www.mvideo.ru/products/radioupravlyaemaya-mashina-pilotage-buggy-stem-12-rd-ep-rc17514-40063842">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/40063842s.jpg" alt="Радиоуправляемая машина Pilotage Buggy Stem 12 RD EP RC17514" class="">
                </a>
              </div>
            </div>
            <div class="mini-basket-product-description">
              <h4 class="mini-basket-product-name">
        <a href="http://www.mvideo.ru/products/radioupravlyaemaya-mashina-pilotage-buggy-stem-12-rd-ep-rc17514-40063842">Радиоуправляемая машина Pilotage Buggy Stem 12 RD EP RC17514</a> </h4> </div>
          </li>
        </ul>
      </form>
    </div>
  </div>
  <div class="mini-basket-buttons">
    <div class="mini-basket-action-btns">
      <div class="mini-basket-total-block">
        <strong class="mini-basket-total">Всего к оплате (р.)</strong>
        <strong class="mini-basket-total-price">6490</strong>
      </div>

      <div class="mini-basket-buttons-holder" data-pushable="true" data-action="click" data-holder="#gtmMiniBasket">
        <a class="btn btn-fluid mini-basket-view-basket-button" href="http://hlend.dev/cart">Перейти в корзину</a>
      </div>
    </div>
  </div>
  <a href="http://www.mvideo.ru/exchange">
    <div class="slider-pict">
      <div class="slider-pict-center">
        <div class="lazy-load-image-holder">
          <img data-original="img/ex_ret.gif" alt="Гарантия и обмен по чеку" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
        </div>
      </div>
    </div>
  </a>
</div> -->
                </div>
                <div class="wishlist-block">
                  <a href="http://www.mvideo.ru/wish-list" data-device="true" class="wishlist-link default">
                    <strong class="icon-heart font-icon"></strong>
                  </a>
                </div>
                <form id="main-search-form" action="http://www.mvideo.ru/action/search?_DARGS=/sitebuilder/blocks/search/search.jsp" class="header-search-form-section" method="post" novalidate="novalidate">
                  <div data-init="autocompleteHandler" class="header-search-form" data-init-param="{&quot;element&quot;: &quot;#frm-search-text&quot;,&quot;submitAfter&quot;: &quot;true&quot;,&quot;timeout&quot;:0}">
                    <input placeholder="Поиск" class="header-search-input" autocomplete="off" type="text" id="frm-search-text" data-init-param=".header-area-right #main-search-form" data-msg-required="Введено менее 2 символов" data-validate-keyup="true" data-rule-minlength="2" maxlength="64" name="Ntt" value="" data-init="validationHandler" data-msg-minlength="Введено менее 2 символов" data-rule-required="true">
                    <span class="font-icon icon-zoom header-search-icon">
          <input type="submit" class="header-search-btn" value="">
        </span>
                  </div>
                  <div class="popup default inactive" style="display: none;">
                    <ul class="search-list"></ul>
                  </div>
                </form>
                <label for="frm-search-text" data-init="autocompleteForm" data-init-param="{&quot;element&quot;: &quot;#frm-search-text&quot;, &quot;setPopupFocus&quot;: true }" class="header-search-form-label inactive" data-device="true">
                  <i class="font-icon icon-zoom"></i>
                </label>
                <div class="dimSearchSuggContainer"></div>
              </div>
            </div>
          </div>




          <div class="header-nav-wrap">
            <nav class="header-nav">
              <?php wpeHeadNav(); ?>
            </nav>
          </div>






          <div class="autocomplete inactive" data-init="autocompleteHandler" data-init-param="{&quot;element&quot;: &quot;#alt-search-input&quot;,&quot;submitAfter&quot;: true,&quot;placement&quot;:&quot;append&quot;, &quot;timeout&quot;: 0}" style="display: none;">
            <form action="http://www.mvideo.ru/action/search?_DARGS=/sitebuilder/blocks/search/search.jsp" id="alt-search-form" class="header-search-form-section" novalidate="novalidate">
              <div class="header-search-form" data-init="validationHandler" data-init-param=".autocomplete .header-search-form-section">
                <input id="alt-search-input" class="header-search-input" name="Ntt" type="text" data-rule-minlength="2" data-msg-minlength="Введено менее 2 символов" data-rule-required="true" data-msg-required="Введено менее 2 символов" data-ignore-change="true" data-validate-keyup="true" autocomplete="off"> <span class="font-icon icon-zoom header-search-icon">     <input class="header-search-btn" type="submit" value="Поиск">    </span> </div>
            </form>
            <div class="popup default inline inactive" style="display: none;">
              <ul class="search-list"></ul>
            </div>
          </div>
        </div>
      </div>
      </div>
