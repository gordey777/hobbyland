<?php /* Template Name: Produect Page */  ?>
<!DOCTYPE html>

<html class="js flash history localstorage sessionstorage mediaqueries no-touchevents cssscrollbar" xml:lang="ru-RU" lang="ru-RU">
<!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/libs.css">
<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-common.css">
<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-blocks.css">
<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-pages.css">
<link media="print" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mvid-print.css">
<!--
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"> -->
  <?php wp_head(); ?>











</head>

<body class="productDetails no-inner-shaddow">
  <div class="wrapper">
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


                <!--noindex-->
                <div id="gtmRegistrationDiv" style="display: none;"><span class="hidden" id="gtmRegistration">{                   "event": "OWOX",                    "eventCategory": "Interactions",                    "eventAction": "click",                   "eventLabel": "registration"                    }</span>
                </div>
                <div id="gtmLoginDiv" style="display: none;"><span class="hidden" id="gtmLogin">{                   "event": "OWOX",                    "eventCategory": "Interactions",                    "eventAction": "click",                   "eventLabel": "authorisation",                    "eventContext": "email"                   }</span>
                </div>
                <!--/noindex-->
                <div class="header-login">
                  <!--noindex-->
                  <ul class="header-login-options-list">
                    <li class="header-login-option"><a data-pushable="true" data-holder="#gtmLogin" class="header-login-option-link" href="http://www.mvideo.ru/login" data-action="click">Войти</a></li>
                    <li class="header-login-option"><a data-pushable="true" data-holder="#gtmRegistration" class="header-login-option-link" href="http://www.mvideo.ru/register?sn=false" data-action="click">Регистрация</a></li>
                  </ul>
                  <span class="header-login-description">&nbsp;</span>
                  <!--/noindex-->
                </div>
              </div>
              <div class="header-area-right">

                <!--noindex-->
                <div id="gtmMiniBasketNavigationDiv" style="display: none;"><span class="hidden" id="gtmMiniBasketNavigation">{        "event": "OWOX",        "eventCategory": "Interactions",        "eventAction": "click",        "eventLabel": "initiateCart"        }</span>
                </div>
                <!--/noindex-->
                <div id="js-mini-basket" class="mini-basket-block ">
                  <a href="http://www.mvideo.ru/cart" data-init="miniBasketBtn" data-url="/sitebuilder/blocks/minibasket/miniBasketNavigation.json.jsp" class="mini-basket-service-blocks mini-basket-link collapsed close-cart">
                    <strong class="icon-trolley-cart font-icon">
            <span class="mini-basket-amount">1</span>
        </strong>
                  </a>
                  <div id="mini-basket" class="mini-basket-content">
                    <div class="mini-basket-main-content">
                      <div class="data-gtm-block hidden">
                        <span class="hidden data-gtm">{"sku":"40063842", "qty":"1", "price":"6490.0"}</span>
                      </div>
                      <div class="mini-basket-scrolling-panel">
                        <form id="mini-basket-form" action="http://www.mvideo.ru/sitebuilder/blocks/cart/cart-mini.json.jsp?_DARGS=/sitebuilder/blocks/cart/fragments/mini-basket-filled.jsp" method="POST">
                          <input name="_dyncharset" value="UTF-8" type="hidden">
                          <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
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
                          <div style="display: none">
                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.ajaxSetOrderSuccessURL" value="/sitebuilder/blocks/cart/cart-mini.json.jsp" type="hidden">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.ajaxSetOrderSuccessURL" value=" " type="hidden">
                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.ajaxSetOrderErrorURL" value="/sitebuilder/blocks/cart/cart-mini.json.jsp" type="hidden">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.ajaxSetOrderErrorURL" value=" " type="hidden">
                            <input id="update-mini-basket-button" name="/atg/commerce/order/purchase/CartModifierFormHandler.setOrderByCommerceId" type="submit">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.setOrderByCommerceId" value=" " type="hidden">
                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.ajaxRemoveItemFromOrderSuccessURL" value="/sitebuilder/blocks/cart/cart-mini.json.jsp" type="hidden">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.ajaxRemoveItemFromOrderSuccessURL" value=" " type="hidden">
                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.ajaxRemoveItemFromOrderErrorURL" value="/sitebuilder/blocks/cart/cart-mini.json.jsp" type="hidden">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.ajaxRemoveItemFromOrderErrorURL" value=" " type="hidden">
                            <input id="removed-item-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.removalCommerceIds" value="" type="hidden">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.removalCommerceIds" value=" " type="hidden">
                            <input id="remove-mini-basket-button" name="/atg/commerce/order/purchase/CartModifierFormHandler.removeItemFromOrder" type="submit">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.removeItemFromOrder" value=" " type="hidden">
                          </div>
                          <input name="_DARGS" value="/sitebuilder/blocks/cart/fragments/mini-basket-filled.jsp" type="hidden">
                        </form>
                      </div>
                    </div>
                    <div class="mini-basket-buttons">
                      <div class="mini-basket-action-btns">
                        <div class="mini-basket-total-block">
                          <strong class="mini-basket-total">Всего к оплате (р.)</strong>
                          <strong class="mini-basket-total-price">6490</strong>
                        </div>

                        <!--noindex-->
                        <div id="gtmMiniBasketDiv" style="display: none;"><span class="hidden" id="gtmMiniBasket">{             "event": "OWOX",              "eventCategory": "Interactions",              "eventAction": "click",             "eventLabel": "initiateCart"              }</span></div>
                        <!--/noindex-->
                        <div class="mini-basket-buttons-holder" data-pushable="true" data-action="click" data-holder="#gtmMiniBasket">
                          <a class="btn btn-fluid mini-basket-view-basket-button" href="http://www.mvideo.ru/cart">Перейти в корзину</a>
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
                  </div>
                </div>
                <div class="wishlist-block">
                  <a href="http://www.mvideo.ru/wish-list" data-device="true" class="wishlist-link default">
                    <strong class="icon-heart font-icon"></strong>
                  </a>
                </div>
                <form id="main-search-form" action="http://www.mvideo.ru/action/search?_DARGS=/sitebuilder/blocks/search/search.jsp" class="header-search-form-section" method="post" novalidate="novalidate">
                  <input name="_dyncharset" value="UTF-8" type="hidden">
                  <input value="-2688242646132088425" type="hidden">
                  <div data-init="autocompleteHandler" class="header-search-form" data-init-param="{&quot;element&quot;: &quot;#frm-search-text&quot;,&quot;submitAfter&quot;: &quot;true&quot;,&quot;timeout&quot;:0}">
                    <input type="hidden" name="Dy" value="1">
                    <input type="hidden" name="Nty" value="1">
                    <input type="hidden" name="Nrpp" value="24">
                    <input placeholder="Поиск" class="header-search-input" autocomplete="off" type="text" id="frm-search-text" data-init-param=".header-area-right #main-search-form" data-msg-required="Введено менее 2 символов" data-validate-keyup="true" data-rule-minlength="2" maxlength="64" name="Ntt" value="" data-init="validationHandler" data-msg-minlength="Введено менее 2 символов" data-rule-required="true">
                    <input name="_D:Ntt" value=" " type="hidden">
                    <input id="productListPageURL" name="/com/mvideo/search/SearchFormHandler.searchSuccessURL" value="/product-list" type="hidden">
                    <input name="_D:/com/mvideo/search/SearchFormHandler.searchSuccessURL" value=" " type="hidden">
                    <input name="/com/mvideo/search/SearchFormHandler.searchErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781" type="hidden">
                    <input name="_D:/com/mvideo/search/SearchFormHandler.searchErrorURL" value=" " type="hidden">
                    <input type="hidden" id="productUrlFormat" value="/products/&lt;subject.seoName&gt;-&lt;subject.repositoryId&gt;">
                    <span class="font-icon icon-zoom header-search-icon">
          <input type="submit" class="header-search-btn" value="">
        </span>
                  </div>
                  <div class="popup default inactive" style="display: none;">
                    <ul class="search-list"></ul>
                  </div>
                  <input name="_DARGS" value="/sitebuilder/blocks/search/search.jsp" type="hidden">
                </form>
                <label for="frm-search-text" data-init="autocompleteForm" data-init-param="{&quot;element&quot;: &quot;#frm-search-text&quot;, &quot;setPopupFocus&quot;: true }" class="header-search-form-label inactive" data-device="true">
                  <i class="font-icon icon-zoom"></i>
                </label>
                <div class="dimSearchSuggContainer"></div>
              </div>
            </div>
          </div>
          <div class="header-nav-wrap">
            <nav class="header-nav" data-init="mobileNavigation" data-device="true">
              <ul data-tpl="navigation" class="header-section header-nav-list">
                <li class="header-nav-item has-dropdown hni-actions">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/vse-akcii"><span class="header-nav-item-text">Акции</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

 <span>Главные акции</span>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/rasprodacha?reff=menu_main">
                                        РаспроДАЧА
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/rassrochka-0024?reff=menu_main">
                                        Умная рассрочка 0-0-24
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/snizim-cenu?reff=menu_main">
                                        Гарантия лучшей цены
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/sovmestnaja-akcija-mvideo-i-sitibanka?from=hub">
                                        Совместная акция «М.Видео» и Ситибанка
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/vse-akcii" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

 <span>Распродажи</span>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tv-sale?reff=menu_main">
                                        Суперцены на телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/rasprodazha-bytovoi-tehniki?reff=menu_main">
                                        Распродажа бытовой техники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/superceny-kondicionery">
                                        Суперцены на кондиционеры и климатическую технику
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/snizhenie-cen-na-smartfony?reff=menu_main">
                                        ШОК-цена на смартфоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/rasprodazha-noutbukov-acer?from=menu">
                                        Распродажа ноутбуков Acer
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

 <span>Не пропустите</span>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstroyka-10">
                                        Скидка 10% на комплект бытовой техники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/elektrolux-vozvraschaet-dengi?reff=menu_main">
                                        Electrolux возвращает деньги
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/sezon-chistoty?from=menu">
                                        Сезон чистоты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/stiralnye-mashiny-s-parom?reff=menu_main">
                                        Стиральные машины c функцией пара
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vodonagrevateli?from=menu">
                                        Водонагреватели для дома и дачи
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/test-drive-utugi-i-parogeneratory-philips?from=menu">
                                        Тест-драйв утюгов и парогенераторов Philips
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/otkrivaem-avtomobilny-sezon?reff=menu_main">
                                        Открываем сезон автопутешествий
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

 <span>Рекомендуем</span>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promocatalog-m">
                                        Промокаталог «М.Видео»
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tehnika-iz-nashey-reklamy?reff=menu_main">
                                        Техника из нашей рекламы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/buy-now?reff=menu_main">
                                        Успейте купить
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/deal_of_the_day?reff=menu_main">
                                        Товар дня
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/vse-novinki">
                                        Новинки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prophoto?reff=menu_main">
                                        M.PRO Фото
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://digital.mvideo.ru/">
                                        M.Digital
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://books.mvideo.ru/">
                                        Читайте с нами!
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/reviews">Обзоры</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-honor-4c-pro?from=menu">
                                        Honor 4C Pro
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-candy-grando-vita-gv42-128dc1-07?reff=menu_main">
                                        Candy GrandO Vita
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-netatmo-urban-weather-station?reff=menu_main">
                                        Netatmo Urban Weather Station
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-canon-pixma-g3400?reff=menu_main">
                                        Canon PIXMA G3400
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-lenovo-yoga-tablet-3-pro?from=menu">
                                        Lenovo Yoga Tab 3 Pro
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/reviews">Подборки</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-samih-ojidaemih-igr-maya?reff=menu_main">
                                        Самые ожидаемые игры мая
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-luchshih-camerofonov?reff=menu_main">
                                        Лучшие камерофоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-tovarov-dlya-otdiha-na-dache?reff=reviews">
                                        Всё для дачи
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-split-system-lg-artcool?reff=menu_main">
                                        Кондиционеры LG
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/obzor-3d-printerov-i-skanerov?reff=menu_main">
                                        3D-принтеры и сканеры
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/actions-menu.png" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/vse-akcii">Акции «М.Видео»</a></strong>
                          <p>Выгодные цены, скидки и интересные предложения.</p>
                          <a href="http://www.mvideo.ru/vse-akcii" class="view-all-base">Выбрать</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/televizory-i-video"><span class="header-nav-item-text">Телевизоры, видео и Hi-Fi</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_1_L.jpg" alt="Телевизоры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/menu_diag_220x220.jpg" alt="По диагонали" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/menu_brand-new_220x220.jpg" alt="По бренду" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cls_484_S.jpg" alt="Видеотехника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_5_S.jpg" alt="Hi-Fi техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_142_S.jpg" alt="Аксессуары и цифровое ТВ" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv-1">Телевизоры</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/category=4k-uhd-televizory-1682">
                                        4K (UHD)-телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/razreshenie_ekrana_telev=full-hd">
                                        Full HD-телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/category=zhk-led-televizory-990">
                                        ЖК LED-телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/category=oled-televizory-1987">
                                        OLED-телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/tehnologiya_3d=aktivnaya,passivnaya">
                                        Smart-телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/tehnologiya_3d=aktivnaya,passivnaya">
                                        3D-телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/izognut_ekran=da">
                                        Телевизоры с изогнутым экраном
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65?reff=menu_main">По диагонали</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/diagonal_televizor=ot-10-do-29-duimov?reff=menu_main">
                                        10"-29"
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/diagonal_televizor=ot-32-do-39-duimov,ot-40-do-43-duimov?reff=menu_main">
                                        32"-43"
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/diagonal_televizor=ot-46-do-49-duimov,ot-50-do-55-duimov?reff=menu_main">
                                        46"-55"
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/diagonal_televizor=bolee-60-duimov?reff=menu_main">
                                        Более 60"
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kronshteiny-i-stoiki-dlya-televizorov-2467">
                                        Кронштейны и стойки для телевизоров
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65?reff=menu_main">По бренду</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=samsung">
                                        Samsung
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=lg">
                                        LG
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=sony">
                                        Sony
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=philips">
                                        Philips
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=supra">
                                        Supra
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=haier">
                                        Haier
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=horizont">
                                        Horizont
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65">
                                        Все бренды
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/videotehnika-20">Видеотехника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videotehnika/domashnie-kinoteatry-212">
                                        Домашние кинотеатры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videotehnika/saundbary-2547">
                                        Саундбары
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videotehnika/dvd-blu-ray-i-mediapleery-317">
                                        DVD, Blu-Ray и медиаплееры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videotehnika/portativnye-pleery-70">
                                        Портативные плееры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/proektory-74">
                                        Проекторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/aksessuary-dlya-videoproektorov-206">
                                        Аксессуары для проекторов
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videotehnika/mikrofony-236">
                                        Микрофоны
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/hi-fi-tehnika-5">Hi-Fi техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/akustika-hi-fi-192">
                                        Акустика Hi-Fi
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/komponenty-hi-fi-191">
                                        Компоненты Hi-Fi
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/komplekty-hi-fi-1425">
                                        Комплекты Hi-Fi
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/besprovodnye-audioreshenija">
                                        Мультирум-решения
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/aksessuary-hi-fi-190">
                                        Аксессуары для Hi-Fi
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-televizorov-41">Аксессуары и цифровое ТВ</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-televizorov/aksessuary-dlya-3d-i-smart-tv-251">
                                        Аксессуары для 3D и Smart TV
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-televizorov/kabeli-2469">
                                        Кабели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernaya-tehnika-apple/pristavki-apple-tv-2671">
                                        Приставки Apple TV
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-televizorov/pristavki-smart-tv-i-priemniki-dvb-t2-358">
                                        Приставки Smart TV и приёмники DVB-T2
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/media-strimery-1381">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                    <img data-original="img/new.jpg" alt="Медиа-стриммеры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Медиа-стриммеры
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/sputnikovoe-cifrovoe-tv-133">
                                        Спутниковое/цифровое  ТВ
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-televizorov/pulty-distancionnogo-upravleniya-253">
                                        Пульты дистанционного управления
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-televizorov/stabilizatory-napryazheniya-2476">
                                        Стабилизаторы напряжения
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/loewe-tv">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Loewe_ready.jpg" alt="Телевизоры LOEWE" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/audiotehnika"><span class="header-nav-item-text">Аудио техника</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_11_S.jpg" alt="Аудиотехника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_7_S.jpg" alt="Автоакустика" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_155_S.jpg" alt="Наушники" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_5_S.jpg" alt="Hi-Fi техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_115_S.jpg" alt="Портативное аудио" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_158_S.jpg" alt="Оборудование для диджеев" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/audiotehnika-9">Аудиотехника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/audiotehnika/muzykalnye-centry-68/f/category=besprovodnye-audio-sistemy-3268">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                     <img data-original="img/new.jpg" alt="Беспроводные аудио системы" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Беспроводные аудио системы
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/audiotehnika/muzykalnye-centry-68">
                                        Музыкальные центры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/audiotehnika/muzykalnye-centry-68/f/category=muzykalnye-sistemy-midi-449">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                     <img data-original="img/new.jpg" alt="Музыкальные системы Midi" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Музыкальные системы Midi
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/audiotehnika/magnitoly-69">
                                        Магнитолы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/portativnaya-akustika-213/f/category=besprovodnaya-akustika-1232">
                                        Беспроводная акустика
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/portativnaya-akustika-213/f/category=chehly-dlya-portativnoi-akustiki-3048">
                                        Чехлы для портативной акустики
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/audiotehnika/dok-stancii-202">
                                        Док станции
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/audiotehnika/aksessuary-dlya-audio-2475">
                                        Аксессуары для аудио
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/avtoakustika-7">Автоакустика</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomagnitoly-224">
                                        Автомагнитолы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomagnitoly-224/f/category=avtomagnitoly-s-navigaciei-1255">
                                        Автомагнитолы с навигационной системой
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomobilnye-televizory-225">
                                        Автомобильные телевизоры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/sabvufery-148">
                                        Сабвуферы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomobilnye-kolonki-79">
                                        Автомобильные колонки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/usiliteli-78">
                                        Усилители
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/komplekty-avtoakustiki-153">
                                        Комплекты автоакустики
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/avtomobilnye-fm-modulyatory-238">
                                        Автомобильные FM модуляторы
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/naushniki-54">Наушники</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/naushniki-bluetooth-1702">
                                        Наушники Bluetooth
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/naushniki-s-mp3-359">
                                        Наушники Bluetooth с МР3
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/polnorazmernye-naushniki-314">
                                        Полноразмерные наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/nakladnye-naushniki-313">
                                        Накладные наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/naushniki-vkladyshi-312">
                                        Наушники-вкладыши
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/sportivnye-naushniki-2787">
                                        Спортивные наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/portativnaya-akustika-213/f/category=besprovodnaya-akustika-1232">
                                        Беспроводная акустика
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/hi-fi-tehnika-5">Hi-Fi техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/akustika-hi-fi-192">
                                        Акустика Hi-Fi
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/komponenty-hi-fi-191">
                                        Компоненты Hi-Fi
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/komplekty-hi-fi-1425">
                                        Комплекты Hi-Fi
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/besprovodnye-audioreshenija">
                                        Мультирум-решения
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/hi-fi-tehnika/aksessuary-hi-fi-190">
                                        Аксессуары для Hi-Fi
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/portativnoe-audio-25">Портативное аудио</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/ipod-166">
                                        Apple iPod
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/mp3-pleery-72">
                                        МР3-плееры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/karty-pamyati-i-kartridery-260">
                                        Карты памяти и картридеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/diktofony-83">
                                        Диктофоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/radio-85">
                                        Радио
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/portativnaya-akustika-213">
                                        Портативная акустика
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/oborudovanie-dlya-didzheev-57">Оборудование для диджеев</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/oborudovanie-dlya-didzheev/dj-oborudovanie-340">
                                        DJ оборудование
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/oborudovanie-dlya-didzheev/aksessuary-dlya-dj-oborudovaniya-341">
                                        Аксессуары для DJ оборудования
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/menu_baner_sony.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/promo/besprovodnye-audioreshenija">Мультирум решения</a></strong>
                          <p>Управлять музыкой легко и приятно</p>
                          <a href="http://www.mvideo.ru/promo/besprovodnye-audioreshenija" class="view-all-base">Подробнее</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/noutbuki-planshety-i-kompyutery"><span class="header-nav-item-text">Ноутбуки, планшеты и компьютеры</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_8_S.jpg" alt="Планшеты, ноутбуки и компьютеры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_116_S.jpg" alt="Электронные книги и аксессуары" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cls_248_S.jpg" alt="Компьютерная техника Apple" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_113_S.jpg" alt="Периферийные устройства" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Grp_1765_L.jpg" alt="Игровые аксессуары" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_114_S.jpg" alt="Компьютерные аксессуары" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/noutbuki-planshety-komputery-8">Планшеты, ноутбуки и компьютеры</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/planshety-195">
                                        Планшеты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/noutbuki-118">
                                        Ноутбуки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/noutbuki-118/f/category=noutbuki-transformery-1224">
                                        Ноутбуки-трансформеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/komputery-80">
                                        Компьютеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/monitory-101">
                                        Мониторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/monobloki-181">
                                        Моноблоки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-planshetov-47">
                                         Аксессуары для планшетов
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/noutbuki-planshety-i-kompyutery" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/elektronnye-knigi-i-aksessuary-26">Электронные книги и аксессуары</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/elektronnye-knigi-i-aksessuary/elektronnye-knigi-73">
                                        Электронные книги
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/elektronnye-knigi-i-aksessuary/aksessuary-dlya-elektronnyh-knig-2229">
                                        Аксессуары для электронных книг
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/komputernaya-tehnika-apple-2667">Компьютерная техника Apple</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernaya-tehnika-apple/noutbuki-apple-macbook-2668">
                                        Ноутбуки Apple MacBook
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/noutbuki-planshety-komputery/planshety-195/f/category=planshety-apple-927">
                                        iPad
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernaya-tehnika-apple/monobloki-apple-imac-2669">
                                        Моноблоки Apple iMac
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernaya-tehnika-apple/sistemnye-bloki-apple-mac-2670">
                                        Системные блоки Apple Mac
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernaya-tehnika-apple/pristavki-apple-tv-2671">
                                        Приставки Apple TV
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/myshi-i-klaviatury-apple-2607">
                                        Мыши и клавиатуры Apple
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/sumki-dlya-noutbukov-216/f/category=keisy-k-macbook-1083">
                                        Кейс для MacBook
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-planshetov/chehly-i-keisy-dlya-planshetov-280/f/category=keis-dlya-ipad-air-1623,keisy-dlya-ipad-1091,keisy-dlya-ipad-mini-1422">
                                        Чехлы для iPad
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/periferiinye-ustroistva-23">Периферийные устройства</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/printery-81">
                                        Принтеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/printery-81/f/category=3d-printery-1252">
                                        3D принтеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/mfu-146">
                                        МФУ
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/kartridzhi-215">
                                        Картриджи
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/bumaga-2487">
                                        Бумага
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/skanery-82">
                                        Сканеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/laminatory-3447">
                                        Ламинаторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/periferiinye-ustroistva/shredery-188">
                                        Шредеры
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/promo/aksessuary-dlja-igr">Игровые аксессуары</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/myshi-183/f/category=igrovye-myshi-1113">
                                        Игровые мыши
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/klaviatury-i-komplekty-217/f/category=igrovye-klaviatury-1114">
                                        Игровые клавиатуры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/komputernye-naushniki-219/f/category=naushniki-igrovye-1115">
                                        Игровые наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/kovriki-dlya-myshi-2593/f/category=igrovye-kovriki-dlya-myshki-1119">
                                        Игровые коврики
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/igrovye-ruli-dzhoistiki-i-geimpady-285">
                                        Игровые рули, джойстики и геймпады
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/komputernaya-mebel-1781/f/brand=arozzi?reff=menu_main">
                                        Игровые кресла
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/komputernye-aksessuary-24">Компьютерные аксессуары</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/routery-i-setevoe-oborudovanie-186">
                                        Роутеры и сетевое оборудование
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/zhestkie-diski-i-ssd-184">
                                        Внешние жесткие диски
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/sumki-dlya-noutbukov-216">
                                        Сумки для ноутбуков
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/myshi-183">
                                        Мыши
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/klaviatury-i-komplekty-217">
                                        Клавиатуры и комплекты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/komputernye-kolonki-182">
                                        Компьютерные колонки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/flesh-nakopiteli-185">
                                        Флеш накопители
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-aksessuary/komputernaya-mebel-1781">
                                        Компьютерная мебель
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/books">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/ban-menu_90x48.gif" alt="Один клик до книг" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://digital.mvideo.ru/">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Digital.png" alt="M.Digital" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/telefony"><span class="header-nav-item-text">Телефоны</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_12_S.jpg" alt="Телефоны и связь" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/iphone6.jpg" alt="Apple" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Samsung.jpg" alt="Samsung" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_165_S.jpg" alt="Гаджеты" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_159_S.jpg" alt="Аксессуары для телефонов" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_155_S.jpg" alt="Наушники" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/smartfony-i-svyaz-10">Телефоны и связь</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/smartfony-i-svyaz/smartfony-205">
                                        Смартфоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/smartfony-i-svyaz/smartfony-205/f/category=bolshie-smartfony-1218">
                                        Большие смартфоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/smartfony-i-svyaz/mobilnye-telefony-95">
                                        Мобильные телефоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/domashnie-i-ofisnye-telefony-radiostancii/radiotelefony-dect-221">
                                        Радиотелефоны DECT
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/domashnie-i-ofisnye-telefony-radiostancii/provodnye-telefony-222">
                                        Проводные телефоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/domashnie-i-ofisnye-telefony-radiostancii/radiostancii-163">
                                        Радиостанции
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/telefony" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/apple">Apple</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/smartfony-i-svyaz/apple-iphone-2927">
                                        Apple iPhone
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/apple-watch-2947">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                     <img data-original="img/new.jpg" alt="Apple Watch" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Apple Watch
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/chehly-dlya-telefonov-342/f/category=keisy-k-iphone-1122">
                                        Чехлы для iPhone
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/zaryadnye-ustroistva-2587/f/category=avtomobilnye-zaryadnye-ustroistva-dlya-iphone-1257,setevye-zaryadnye-ustroistva-dlya-iphone-ipad-ipod-1101">
                                        Зарядные устройства для iPhone
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/kabeli-dlya-sotovyh-telefonov-344/f/category=kabeli-dlya-iphone-ipad-ipod-1093">
                                        Кабель для iPhone
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/plenki-i-stekla-dlya-telefonov-2589/f/category=plenki-dlya-iphone-1262">
                                        Пленки для iPhone
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/chehly-akkumulyatory-dlya-telefonov-1943">
                                        Чехлы-аккумуляторы для iPhone
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/portativnaya-akustika-213/f/category=akustika-besprovodnaya-1232/brand=beats">
                                        Колонки Beats
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/promo/samsung-mark28741294?categoryId=10">Samsung</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/smartfony-samsung-galaxy-mark24146977?categoryId=10">
                                        Смартфоны Samsung Galaxy
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/promo/samsung-galaxy-s7-s7-edge-predzakas">
                                        Samsung Galaxy S7
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/smartfony-sotovye-telefony/mobilnye-telefony-95/f/brand=samsung">
                                        Мобильные телефоны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/smart-chasy-400/f/brand=samsung">
                                        Смарт-часы Samsung
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/products/ochki-virtualnoi-realnosti-samsung-gear-vr-sm-r322-white-50044255">
                                        Очки виртуальной реальности Gear VR
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/product-list?Dy=1&amp;N=4294966538&amp;Nr=AND%28product.searchable%3A1%2Cproduct.siteId%3ASite_1%29&amp;Nrpp=24&amp;Ntt=%D0%B0%D0%BA%D1%81%D0%B5%D1%81%D1%81%D1%83%D0%B0%D1%80%D1%8B+%D0%B4%D0%BB%D1%8F+%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BE%D0%B2&amp;Nty=1">
                                        Фирменные аксессуары
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/gadzhety-64">Гаджеты</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/giroskutery-3627">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                     <img data-original="img/new.jpg" alt="Гироскутеры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Гироскутеры
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/smart-chasy-400">
                                        Смарт-часы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/smart-braslety-401">
                                        Смарт-браслеты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/fitnes-trekery-402">
                                        Фитнес-трекеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/sportivnye-chasy-333">
                                        Спортивные часы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/tovary-dlya-sporta-i-zdorovya-403">
                                        Товары для спорта и здоровья
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/smart-home-ustroistva-398">
                                        Smart home устройства
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/ochki-virtualnoi-realnosti-2207">
                                        Очки дополненной реальности
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov-58">Аксессуары для телефонов</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/media-strimery-1381">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                     <img data-original="img/new.jpg" alt="Медиа-стриммеры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Медиа-стриммеры
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/karty-pamyati-microsdhc-2590">
                                        Карта памяти MicroSDHC
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/aksessuary-dlya-selfi-2588">
                                        Аксессуары для селфи
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/vneshnie-akkumulyatory-dlya-telefonov-1944">
                                        Внешние аккумуляторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/zaryadnye-ustroistva-2587">
                                        Зарядные устройства
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/besprovodnye-zaryadnye-ustroistva-2128">
                                        Беспроводные зарядные устройства
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/chehly-dlya-telefonov-342">
                                        Чехлы для телефонов
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/plenki-i-stekla-dlya-telefonov-2589">
                                        Пленки и стекла для телефонов
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/naushniki-54">Наушники</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/naushniki-bluetooth-1702">
                                        Наушники Bluetooth
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/naushniki-s-mp3-359">
                                        Наушники Bluetooth с МР3
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/polnorazmernye-naushniki-314">
                                        Полноразмерные наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/nakladnye-naushniki-313">
                                        Накладные наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/naushniki-vkladyshi-312">
                                        Наушники-вкладыши
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/naushniki/sportivnye-naushniki-2787">
                                        Спортивные наушники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/portativnoe-audio/portativnaya-akustika-213/f/category=besprovodnaya-akustika-1232">
                                        Беспроводная акустика
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/promo/besprovodnye-audioreshenija">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/menu_multiroom.png" alt="Мультирум решения" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/fotoapparaty-i-videotehnika"><span class="header-nav-item-text">Фото и видео</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_14_S.jpg" alt="Фотоаппараты" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/leica_p_2.jpg" alt="Фотоаппараты премиум класса" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cat_Aks_S.jpg" alt="Аксессуары для фото- и видеотехники" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cat_Vcam_S.jpg" alt="Видеокамеры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cls_14_S.jpg" alt="Фотопринтеры и цифровые фоторамки" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cls_494_S.jpg" alt="Бинокли и телескопы" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/fotoapparaty-12">Фотоаппараты</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/zerkalnye-fotoapparaty-169">
                                        Зеркальные фотоаппараты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/fotoapparaty-sistemnye-196">
                                        Системные фотоаппараты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/kompaktnye-cifrovye-fotoapparaty-112">
                                        Компактные цифровые фотоаппараты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/kompaktnye-cifrovye-fotoapparaty-112/f/category=mnogofunkcionalnye-fotoapparaty-1198">
                                        Мульти-функциональные фотоаппараты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/fotoapparaty-mgnovennoi-pechati-325">
                                        Фотоаппараты моментальной печати
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/fotoapparaty-i-videotehnika" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/prophoto">Фотоаппараты премиум класса</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/zerkalnye-fotoapparaty-169/f/category=fotoapparat-zerkalnyi-premium-1967">
                                        Фотоаппараты зеркальные премиум
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/fotoapparaty-sistemnye-196/f/category=fotoapparat-sistemnyi-premium-1968">
                                        Фотоаппараты системные премиум
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/fotoapparaty/kompaktnye-cifrovye-fotoapparaty-112/f/category=kompaktnyi-fotoapparat-premium-2107">
                                        Фотоаппараты компактные премиум
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki-42">Аксессуары для фото- и видеотехники</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/obektivy-199">
                                        Объективы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/fotovspyshki-200">
                                        Фотовспышки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/karty-pamyati-i-kartridery-260">
                                        Карты памяти и картридеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/shtativy-261">
                                        Штативы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/svetofiltry-262">
                                        Светофильтры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki/sumki-dlya-fotoapparatov-i-videokamer-264">
                                        Сумки для фотоаппаратов и видеокамер
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/leica">
                                        Аксессуары для фотоаппаратов Leica
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-foto-i-videotehniki-42">
                                        Все аксессуары для фотоаппаратов и видеокамер
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/videokamery-2287">Видеокамеры</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videokamery/ekshn-kamery-2288">
                                        Экшн камеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videokamery/aksessuary-dlya-ekshn-kamer-355">
                                        Аксессуары для экшн камер
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videokamery/videokamery-flash-hd-2290">
                                        Видеокамеры Flash HD
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videokamery/kvadrokoptery-2289">
                                        Квадрокоптеры
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/cifrovye-fotoramki-i-fotoprintery-2468">Фотопринтеры и цифровые фоторамки</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/cifrovye-fotoramki-i-fotoprintery/fotoprintery-kompaktnye-2478">
                                        Компактные фотопринтеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/cifrovye-fotoramki-i-fotoprintery/bumaga-dlya-kompaktnogo-printera-2479">
                                        Бумага для компактного принтера
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/cifrovye-fotoramki-i-fotoprintery/cifrovye-fotoramki-2480">
                                        Цифровые рамки
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/binokli-i-teleskopy-2267">Бинокли и телескопы</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/binokli-i-teleskopy/binokli-2268">
                                        Бинокли
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/binokli-i-teleskopy/teleskopy-2269">
                                        Телескопы
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/180x163_prophoto_1.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/prophoto?reff=menu_main">М.Видео PRO Фото</a></strong>
                          <p>Салон премиальной фототехники</p>
                          <a href="http://www.mvideo.ru/prophoto?reff=menu_main" class="view-all-base">Смотреть</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/tehnika-dlya-doma"><span class="header-nav-item-text">Техника для дома</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_183_S.jpg" alt="Стиральные и сушильные машины" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_2_S.jpg" alt="Малая бытовая техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_184_S.jpg" alt="Пылесосы" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_13_S.jpg" alt="Климатическая техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_151_S.jpg" alt="Аксессуары для дома" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_164_S.jpg" alt="Освещение" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny-2427">Стиральные и сушильные машины</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89">
                                        Стиральные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=uzkie-stiralnye-mashiny-2446">
                                        Узкие стиральные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=standartnye-stiralnye-mashiny-2447">
                                        Стандартные стиральные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=stiralnye-mashiny-s-vertikalnoi-zagruzkoi-2448">
                                        Стиральные машины с вертикальной загрузкой
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=stiralnye-mashiny-s-sushkoi-2449">
                                        Стиральные машины с сушкой
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=standartnye-sushilnye-mashiny-2453">
                                        Стандартные сушильные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=kompaktnye-stiralnye-mashiny-2450">
                                        Компактные стиральные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/stiralnye-i-sushilnye-mashiny/stiralnye-mashiny-89/f/category=mini-stiralnye-mashiny-aktivatornogo-tipa-2451">
                                        Мини стиральные машины активаторного типа
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/tehnika-dlya-doma" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika-2">Малая бытовая техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/utugi-92/f/category=utugi-s-parogeneratorom-736">
                                        Утюги с парогенератором
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/utugi-92/f/category=otparivateli-1196">
                                        Отпариватели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/utugi-92">
                                        Утюги
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/shveinye-mashiny-134">
                                        Швейные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/shveinye-mashiny-134/f/category=overloki-809">
                                        Оверлоки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/shveinye-mashiny-134/f/category=aksessuary-dlya-shveinyh-mashin-808">
                                        Аксессуары для швейных машин
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/avtomobilnye-holodilniki-179">
                                        Автомобильные холодильники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/parovye-ochistiteli-2445">
                                        Паровые очистители
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/pylesosy-2428">Пылесосы</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/pylesosy-s-pylesbornikom-2438">
                                        Пылесосы с пылесборником
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/pylesosy-s-konteinerom-dlya-pyli-2439">
                                        Пылесосы с контейнером для пыли
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/moushhie-pylesosy-2440">
                                        Моющие пылесосы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/roboty-pylesosy-2441">
                                        Роботы-пылесосы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/pylesosy-s-vodyanym-filtrom-2442">
                                        Пылесосы с водяным фильтром
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/akkumulyatornye-i-avtomobilnye-pylesosy-2443">
                                        Аккумуляторные и авто пылесосы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/pylesosy/pylesosy-hand-stick-3087">
                                        Ручные пылесосы Hand stick
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/klimaticheskaya-tehnika-11">Климатическая техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/kondicionery-106">
                                        Кондиционеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/kondicionery-106/f/category=split-sistemy-599">
                                        Сплит системы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/kondicionery-106/f/category=invertornye-split-sistemy-713">
                                        Сплит системы инверторные
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/kondicionery-106/f/category=napolnye-mobilnye-kondicionery-598">
                                        Напольные мобильные кондиционеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/uvlazhniteli-i-ochistiteli-vozduha-124">
                                        Увлажнители и очистители воздуха
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/ventilyatory-107">
                                        Вентиляторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/vodonagrevateli-109">
                                        Водонагреватели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/klimaticheskaya-tehnika/obogrevatelnye-pribory-125">
                                        Обогревательные приборы
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-doma-50">Аксессуары для дома</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/aksessuary-dlya-pylesosov-381">
                                        Для пылесосов
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/aksessuary-dlya-stiralnyh-mashin-382">
                                        Для стиральных машин
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/aksessuary-dlya-utugov-383">
                                        Для утюгов
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/batareiki-i-akkumulyatory-296">
                                        Батарейки и аккумуляторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/setevye-filtry-i-udliniteli-297">
                                        Сетевые фильтры и удлинители
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/prochie-hozyaistvennye-tovary-298">
                                        Прочие хозяйственные товары
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/uhod-za-veshhami-141">
                                        Уход за вещами
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-doma/gladilnye-doski-292">
                                        Гладильные доски
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/osveshhenie-63">Освещение</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/osveshhenie/lampy-388">
                                        Лампы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/osveshhenie/svetilniki-389">
                                        Светильники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/osveshhenie/fonari-390">
                                        Фонари
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/osveshhenie/elektronnye-svechi-391">
                                        Электронные свечи
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/promo/aeg">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/aeg-menu-logo.png" alt="Бренд-хаб AEG" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/promo/smeg">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/smeg-menu-logo.png" alt="Бренд хаб Smeg" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/miele">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Miele.gif" alt="Техника Miele в М.видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/smsp-menu.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/promo/stiralnye-mashiny-s-parom?reff=menu_main">Стиральные машины с паром</a></strong>
                          <p>Бережный уход и свежесть</p>
                          <a href="http://www.mvideo.ru/promo/stiralnye-mashiny-s-parom?reff=menu_main" class="view-all-base">Смотреть</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/tehnika-dlya-kuhni"><span class="header-nav-item-text">Техника для кухни</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_189_S.jpg" alt="Холодильники и морозильники" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cat_Kkt_S.jpg" alt="Крупная кухонная техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_3_S.jpg" alt="Кухонная техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_120_S.jpg" alt="Приготовление кофе" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_154_S.jpg" alt="Посуда" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_152_S.jpg" alt="Аксессуары для кухни" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/holodilniki-i-morozilniki-2687">Холодильники и морозильники</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159">
                                        Холодильники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=holodilniki-s-nizhnei-morozilkoi-premium-3489,holodilniki-s-nizhnei-morozilnoi-kameroi-666,shirokie-holodilniki-s-nizhnei-morozilnoi-kameroi-865">
                                        Холодильники с нижней морозильной камерой
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=holodilniki-s-verhnei-morozilnoi-kameroi-665,shirokie-holodilniki-s-verhnei-morozilnoi-kameroi-738">
                                        Холодильники с верхней морозильной камерой
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=odnodvernye-holodilniki-714">
                                        Однодверные холодильники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=holodilniki-side-by-side-668,mnogokamernye-holodilniki-874">
                                        Многодверные и Side-by-side холодильники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=holodilnik-side-by-side-premium-3428,holodilniki-s-nizhnei-morozilkoi-premium-3489">
                                        Холодильники премиум
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=morozilnye-kamery-717">
                                        Морозильные камеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/holodilniki-i-morozilniki/holodilniki-i-morozilnye-kamery-159/f/category=vinnye-shkafy-do-140-sm-716,vinnye-shkafy-ot-140-sm-715">
                                        Винные шкафы
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/tehnika-dlya-kuhni" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/krupnaya-kuhonnaya-tehnika-34">Крупная кухонная техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/krupnaya-kuhonnaya-tehnika/elektricheskie-plity-111">
                                        Электрические плиты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/krupnaya-kuhonnaya-tehnika/gazovye-plity-110">
                                        Газовые плиты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/krupnaya-kuhonnaya-tehnika/mikrovolnovye-pechi-94">
                                        Микроволновые печи
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/krupnaya-kuhonnaya-tehnika/posudomoechnye-mashiny-160">
                                        Посудомоечные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-posudomoechnye-mashiny-2328">
                                        Встраиваемые посудомоечные машины
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/kuhonnaya-tehnika-3">Кухонная техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/elektrochainiki-96">
                                        Электрочайники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/multivarki-180">
                                        Мультиварки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/miksery-i-blendery-98">
                                        Миксеры и блендеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/myasorubki-104">
                                        Мясорубки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/sokovyzhimalki-103">
                                        Соковыжималки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/hlebopechki-150">
                                        Хлебопечки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/kuhonnye-kombainy-156">
                                        Кухонные комбайны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/kuhonnaya-tehnika/kuhonnye-kombainy-156/f/category=kuhonnye-mashiny-1167">
                                        Кухонные машины&nbsp;
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/prigotovlenie-kofe-29">Приготовление кофе</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/kofemashiny-155">
                                        Кофемашины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/kofemashiny-155/f/category=kofemashiny-kapsulnogo-tipa-931">
                                        Кофемашины капсульного типа
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/kofevarki-157">
                                        Кофеварки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/kofevarki-kapsulnogo-tipa-330">
                                        Кофеварки капсульного типа
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/kofemolki-145">
                                        Кофемолки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/kofe-336">
                                        Кофе
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/prigotovlenie-kofe/aksessuary-dlya-kofemashin-197">
                                        Аксессуары для кофемашин
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/posuda-53">Посуда</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/nabory-posudy-305">
                                        Наборы посуды
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/skovorody-303">
                                        Сковороды
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/kastruli-306">
                                        Кастрюли
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/kovshi-310">
                                        Ковши
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/kuhonnye-prinadlezhnosti-311">
                                        Кухонные принадлежности
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/kuhonnye-nozhi-i-stolovye-nabory-395">
                                        Ножи и столовые приборы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/formy-dlya-vypekaniya-308">
                                        Формы для выпекания
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/posuda/konteinery-dlya-produktov-2608">
                                        Контейнеры для продуктов
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni-51">Аксессуары для кухни</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/aksessuary-dlya-holodilnikov-299">
                                        Для холодильников
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/aksessuary-dlya-posudomoechnyh-mashin-300">
                                        Для посудомоечных машин
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/aksessuary-dlya-kuhonnyh-plit-301">
                                        Для кухонных плит
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/aksessuary-dlya-mikrovolnovyh-pechei-302">
                                        Для микроволновых печей
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/izotermicheskie-tovary-392">
                                        Изотермические товары
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/nasadki-i-nabory-386">
                                        Насадки и наборы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/chistyashhie-sredstva-385">
                                        Чистящие средства
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-kuhni/prochie-kuhonnye-aksessuary-2477">
                                        Прочие кухонные аксессуары
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/promo/aeg">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/aeg-menu-logo.png" alt="Бренд-хаб AEG" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/miele">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Miele.gif" alt="Техника Miele в М.видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/tefal">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/ban-menu_90x48.gif" alt="BH Tefal" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/Menu.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/vstroyka-10">Покупайте больше − платите меньше!</a></strong>
                          <p>Скидка 10% на комплект бытовой техники</p>
                          <a href="http://www.mvideo.ru/vstroyka-10" class="view-all-base">Смотреть</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/vstraivaemaya-tehnika"><span class="header-nav-item-text">Встраиваемая техника</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_179_S.jpg" alt="Встраиваемые панели" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_182_S.jpg" alt="Встраиваемые духовые шкафы" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_181_S.jpg" alt="Встраиваемые вытяжки" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_180_S.jpg" alt="Встраиваемые посудомоечные машины" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_4_S.jpg" alt="Встраиваемая бытовая техника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/vstraivaemye-paneli-2327">Встраиваемые панели</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-paneli/gazovye-paneli-2330">
                                        Газовые панели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-paneli/elektricheskie-paneli-2331">
                                        Электрические панели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-paneli/indukcionnye-paneli-2332">
                                        Индукционные панели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-paneli/modulnye-gazovye-paneli-116">
                                        Модульные газовые панели
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-paneli/modulnye-elektricheskie-paneli-115">
                                        Модульные электрические панели
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/vstraivaemaya-tehnika" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/vstraivaemye-duhovye-shkafy-2367">Встраиваемые духовые шкафы</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-duhovye-shkafy/elektricheskie-duhovye-shkafy-2368">
                                        Встраиваемый электрический духовой шкаф
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-duhovye-shkafy/gazovye-duhovye-shkafy-2369">
                                        Встраиваемый газовый духовой шкаф
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-duhovye-shkafy/kompaktnye-elektricheskie-duhovye-shkafy-2370">
                                        Встраиваемый компактный духовой шкаф
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemaya-tehnika/komplekty-vstraivaemoi-tehniki-132">
                                        Комплекты встраиваемой техники
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki-2329">Встраиваемые вытяжки</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/vytyazhki-50-sm-2337">
                                        Вытяжки 50 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/vytyazhki-60-sm-2338">
                                        Вытяжки 60 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/vytyazhki-90-sm-2339">
                                        Вытяжки 90 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/ploskie-vytyazhki-50-sm-2340">
                                        Плоские вытяжки 50 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/ploskie-vytyazhki-60-sm-2341">
                                        Плоские вытяжки 60 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/vytyazhki-vstraivaemye-v-shkaf-50sm-2343">
                                        Вытяжки встраиваемые в шкаф  50 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/vytyazhki-vstraivaemye-v-shkaf-60sm-2342">
                                        Вытяжки встраиваемые в шкаф  60 см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-vytyazhki/ostrovnye-vytyazhki-2344">
                                        Островные вытяжки
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/vstraivaemye-posudomoechnye-mashiny-2328">Встраиваемые посудомоечные машины</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-posudomoechnye-mashiny/posudomoechnaya-mashina-45sm-2333">
                                        Посудомоечная машина 45см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-posudomoechnye-mashiny/posudomoechnaya-mashina-60sm-2334">
                                        Посудомоечная машина 60см
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemye-posudomoechnye-mashiny/kompaktnaya-posudomoechnaya-mashina-2335">
                                        Компактная посудомоечная машина
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/vstraivaemaya-tehnika-4">Встраиваемая бытовая техника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemaya-tehnika/vstraivaemye-stiralnye-mashiny-201">
                                        Встраиваемые стиральные машины
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemaya-tehnika/vstraivaemye-holodilniki-100">
                                        Встраиваемые холодильники
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemaya-tehnika/vstraivaemye-mikrovolnovye-pechi-117">
                                        Встраиваемые микроволновые печи
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemaya-tehnika/vstraivaemyi-podogrevatel-d-posudy-3327">
                                        Встраиваемый подогреватель посуды
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/vstraivaemaya-tehnika/vstraivaemyi-televizor-3127">
                                        Встраиваемый телевизор
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/promo/aeg">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/aeg-menu-logo.png" alt="Бренд-хаб AEG" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/promo/smeg">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/smeg-menu-logo.png" alt="Бренд хаб Smeg" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/menu.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/induction-panels">Индукционные встраиваемые панели</a></strong>
                          <p>Высокие технологии на вашей кухне</p>
                          <a href="http://www.mvideo.ru/induction-panels" class="view-all-base">Выбрать</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/krasota-i-zdorove"><span class="header-nav-item-text">Красота и здоровье</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_102_S.jpg" alt="Товары для красоты" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_136_S.jpg" alt="Товары для здоровья" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_137_S.jpg" alt="Товары для детей" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/garmin.jpg" alt="Гаджеты" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/tovary-dlya-krasoty-14">Товары для красоты</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/tovary-dlya-ukladki-volos-136">
                                        Товары для укладки волос
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/tovary-dlya-ukladki-volos-136/f/category=feny-470">
                                        Фены
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/epilyatory-i-aksessuary-113">
                                        Эпиляторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/fotoepilyatory-234">
                                        Фотоэпиляторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/elektrobritvy-137">
                                        Электробритвы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/mashinki-dlya-strizhki-volos-143">
                                        Машинки для стрижки волос
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/trimmery-142">
                                        Триммеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/kosmeticheskie-pribory-138">
                                        Косметические приборы
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/tovary-dlya-zdorovya-35">Товары для здоровья</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/napolnye-vesy-140">
                                        Напольные весы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/zubnye-shhetki-114">
                                        Зубные щетки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/zubnye-shhetki-114/f/category=elektricheskie-zubnye-centry-2848">
                                <div class="header-nav-drop-down-list-item-img">
                                  <div class="lazy-load-image-holder">
                                     <img data-original="img/new.jpg" alt="Зубные центры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                  </div>
                                </div> Зубные центры
                              </a>
                            </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/zubnye-shhetki-114/f/category=irrigatory-1206">
                                        Ирригаторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/massazhery-226">
                                        Массажеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/massazhery-226/f/category=massazhery-dlya-tela-796">
                                        Массажеры для тела
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-krasoty/kosmeticheskie-pribory-138/f/category=svetovye-pribory-dlya-krasoty-i-zdorovya-438">
                                        Световые приборы для красоты и здоровья
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-zdorovya/massazhery-226/f/category=massazhnye-vannochki-dlya-nog-797">
                                        Массажные ванночки для ног
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/tovary-dlya-detei-36">Товары для детей</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-detei/videonyani-228">
                                        Видеоняни
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/tovary-dlya-detei/knigi-dlya-detei-3027">
                                        Книги для детей
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/gadzhety-64">Гаджеты</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/sportivnye-chasy-333">
                                        Спортивные часы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/smart-braslety-401">
                                        Смарт-браслеты
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/fitnes-trekery-402">
                                        Фитнес-трекеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/gadzhety/tovary-dlya-sporta-i-zdorovya-403">
                                        Товары для спорта и здоровья
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/avtomobilnaya-elektronika-i-gps"><span class="header-nav-item-text">Авто техника</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_106_S.jpg" alt="Навигаторы и автомобильная электроника" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_7_S.jpg" alt="Автоакустика" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_131_S.jpg" alt="Автомобильные минимойки" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Cls_138_S.jpg" alt="Аксессуары для автомобилей" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/navigatory-i-avtomobilnaya-elektronika-17">Навигаторы и автомобильная электроника</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/navigatory-i-avtomobilnaya-elektronika/videoregistratory-209">
                                        Видеорегистраторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/navigatory-i-avtomobilnaya-elektronika/portativnye-gps-navigatory-176">
                                        Портативные GPS навигаторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/navigatory-i-avtomobilnaya-elektronika/turisticheskie-navigatory-334">
                                        Туристические навигаторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/navigatory-i-avtomobilnaya-elektronika/radar-detektory-210">
                                        Радар-детекторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/domashnie-i-ofisnye-telefony-radiostancii/radiostancii-163">
                                        Радиостанции
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-telefonov/karty-pamyati-microsdhc-2590/f/category=karty-pamyati-microsdhc-1073">
                                        Карты памяти MicroSDHC
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/navigatory-i-avtomobilnaya-elektronika/aksessuary-dlya-gps-navigatorov-177">
                                        Аксессуары для GPS навигаторов
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/avtomobilnaya-elektronika-i-gps" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/avtoakustika-7">Автоакустика</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomagnitoly-224">
                                        Автомагнитолы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomagnitoly-224/f/category=avtomagnitoly-s-navigaciei-1255">
                                        Автомагнитолы с навигационной системой
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/sabvufery-148">
                                        Сабвуферы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomobilnye-kolonki-79">
                                        Колонки
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/usiliteli-78">
                                        Усилители
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/avtoakustika/avtomobilnye-komplekty-356">
                                        Автомобильные комплекты
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/minimoiki/avtomobilnye-minimoiki-214">Автомобильные минимойки</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/malaya-bytovaya-tehnika/avtomobilnye-holodilniki-179">
                                        Автомобильные холодильники
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei-37">Аксессуары для автомобилей</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/avtomobilnye-fm-modulyatory-238">
                                        Автомобильные FM модуляторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/avtopreobrazovateli-napryazheniya-246">
                                        Авто преобразователи напряжения
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/avtomobilnye-antenny-256">
                                        Автомобильные антенны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/drugie-avtomobilnye-aksessuary-259">
                                        Все автомобильные аксессуары
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/avtorazvetviteli-prikurivatelya-241/f/category=avtorazvetviteli-dlya-prikurivatelya-1032">
                                        Авторазветвители прикуривателя
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/alkotestery-257/f/category=portativnye-alkotestery-1055">
                                        Алкотестеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/universalnye-derzhateli-dlya-sotovyh-telefonov-239">
                                        Универсальные держатели для сотовых телефонов
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-avtomobilei/avtomobilnye-ochki-396">
                                        Автомобильные очки
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="header-nav-item has-dropdown ">
                  <a class="header-nav-item-link" href="http://www.mvideo.ru/igry-i-razvlecheniya"><span class="header-nav-item-text">Игры и развлечения</span></a>
                  <div class="header-nav-drop-down">
                    <div class="header-nav-drop-down-holder">
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_105_S.jpg" alt="Игровые приставки и аксессуары" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_117_S.jpg" alt="Игры для игровых приставок" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_162_S.jpg" alt="Аксессуары для игровых приставок" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_108_S.jpg" alt="Компьютерные программы и PC игры" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_156_S.jpg" alt="Музыкальные инструменты" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                          <div class="header-nav-drop-down-image-container">
                            <div class="header-nav-drop-down-image-container">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Dir_157_S.jpg" alt="Радио- управляемые устройства" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-list">
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/igrovye-pristavki-16">Игровые приставки и аксессуары</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igrovye-pristavki/sony-playstation-318/f/category=sony-playstation-4-ps4--1241">
                                        Консоли PlayStation 4 (PS4)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igrovye-pristavki/sony-playstation-318/f/category=sony-playstation-3-ps3--883">
                                        Консоли PlayStation 3 (PS3)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igrovye-pristavki/xbox-319/f/category=konsol-xbox-one-1715">
                                        Консоли Xbox ONE
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igrovye-pristavki/xbox-319/f/category=konsol-xbox-360-887">
                                        Консоли Xbox 360
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igrovye-pristavki/sony-playstation-318/f/category=sony-playstation-vita-ps-vita--961">
                                        Консоли PlayStation Vita (PS Vita)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igrovye-pristavki/sony-playstation-318/f/category=sony-playstation-portable-psp--885">
                                        Консоли PlayStation Portable (PSP)
  </a> </li>
                          </ul>
                          <a href="http://www.mvideo.ru/igry-i-razvlecheniya" class="view-all-base">Посмотреть все</a>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok-27">Игры для игровых приставок</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok/igry-dlya-playstation-4-ps4--3348">
                                        Игры для PlayStation 4 (PS4)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok/igry-dlya-playstation-3-ps3--3349">
                                        Игры для PlayStation 3 (PS3)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok/igry-dlya-xbox-one-1442/f/category=igry-dlya-xbox-one-1443">
                                        Игры для Xbox One
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok/igry-dlya-xbox-360-170">
                                        Игры для Xbox 360
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok/igry-dlya-playstation-vita-ps-vita--3350">
                                        Игры для PlayStation Vita (PS Vita)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/igry-dlya-igrovyh-pristavok/igry-dlya-playstation-portable-psp--3351">
                                        Игры для PlayStation Portable (PSP)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/preorders">
                                        Предзаказы игр
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok-61">Аксессуары для игровых приставок</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-playstation-4-ps4--375">
                                        Аксессуары для PlayStation 4 (PS4)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-playstation-3-ps3--376">
                                        Аксессуары для PlayStation 3 (PS3)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-xbox-one-1722/f/category=aksessuary-dlya-xbox-one-1723">
                                        Аксессуары для Xbox One
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-xbox-360-377">
                                        Аксессуары для Xbox 360
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-playstation-vita-ps-vita--378">
                                        Аксессуары для PlayStation Vita (PS Vita)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-playstation-portable-psp--379">
                                        Аксессуары для PlayStation Portable (PSP)
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/aksessuary-dlya-igrovyh-pristavok/aksessuary-dlya-drugih-konsolei-380">
                                        Аксессуары для других игровых консолей
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/komputernye-programmy-i-pc-igry-19">Компьютерные программы и PC игры</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-programmy-i-pc-igry/igry-dlya-pk-91">
                                        Игры для ПК
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-programmy-i-pc-igry/antivirusy-172">
                                        Антивирусы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-programmy-i-pc-igry/programmy-microsoft-office-i-windows-173">
                                        Программы Microsoft Office и Windows
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/komputernye-programmy-i-pc-igry/drugoe-programmnoe-obespechenie-233">
                                        Другое программное обеспечение
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column ">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/muzykalnye-instrumenty-55">Музыкальные инструменты</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/muzykalnye-instrumenty/sintezatory-315">
                                        Синтезаторы
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/muzykalnye-instrumenty/aksessuary-dlya-muzykalnyh-instrumentov-316">
                                        Аксессуары для музыкальных инструментов
  </a> </li>
                          </ul>
                        </li>
                        <li class="header-nav-drop-down-column last">
                          <strong class="header-nav-drop-down-title">

                                      <a href="http://www.mvideo.ru/radioupravlyaemye-ustroistva-56">Радио- управляемые устройства</a>
                                </strong>
                          <ul class="header-nav-drop-down-column-list">
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/videokamery/kvadrokoptery-2289/f/brand=dji">
                                        Квадрокоптеры DJI
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/radioupravlyaemye-ustroistva/radioupravlyaemye-igrushki-332/f/tip_modeli=ar-drone,drone,minidron">
                                        Дроны
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/radioupravlyaemye-ustroistva/radioupravlyaemye-igrushki-332/f/tip_modeli=kvadrokoptery">
                                        Квадрокоптеры
  </a> </li>
                            <li class="header-nav-drop-down-list-item">
                              <a href="http://www.mvideo.ru/radioupravlyaemye-ustroistva/radioupravlyaemye-igrushki-332/f/tip_modeli=katery,mashiny,podv-lodki,tanki,vertolety">
                                        Другие радио- управляемые модели
  </a> </li>
                          </ul>
                        </li>
                      </ul>
                      <ul class="header-nav-drop-down-images-list">
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://digital.mvideo.ru/">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/Digital.png" alt="M.Digital" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                          <div class="header-nav-drop-down-image-container">
                            <a href="http://www.mvideo.ru/books">
                              <div class="lazy-load-image-holder">
                                <img data-original="img/ban-menu_90x48.gif" alt="Один клик до книг" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item ">
                        </li>
                        <li class="header-nav-drop-down-images-item last">
                        </li>
                      </ul>
                      <div class="drop-down-advert">
                        <div class="drop-down-advert-picture">
                          <div class="lazy-load-image-holder">
                            <img data-original="img/ps4-uncharted-bundle.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                          </div>
                        </div>
                        <div class="drop-down-advert-description">
                          <strong class="drop-down-advert-title"><a href="http://www.mvideo.ru/preorder/ps4-%D0%B8%D0%B3%D1%80%D0%B0-uncharted-4-%D0%BF%D1%83%D1%82%D1%8C-%D0%B2%D0%BE%D1%80%D0%B0-3800002?reff=menu_main">Игровая консоль PS4 Uncharted 4:Путь вора</a></strong>
                          <p>Скоро в «М.Видео»</p>
                          <a href="http://www.mvideo.ru/preorder/ps4-%D0%B8%D0%B3%D1%80%D0%B0-uncharted-4-%D0%BF%D1%83%D1%82%D1%8C-%D0%B2%D0%BE%D1%80%D0%B0-3800002?reff=menu_main" class="view-all-base">Подробнее</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
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
      <div itemscope="" itemtype="http://schema.org/Product" class="main-holder" data-init="lazyLoadContent">
        <div class="content-top-section">
          <div class="main-toolbar-holder">
            <div class="section">
              <div class="page-container">
                <div data-init="ajax-breadcrumbs" class="main-toolbar">
                  <div id="social-sharing">
                    <div class="social-sharing-container">
                      <div class="social-item"><a data-network="facebook" id="facebook-share" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-pushable="true" data-action="click" data-holder="#socialSharingGoogleAnalytics-Facebook" class="social-share-link"><span class="socials-sharing font-icon icon-facebook"></span><span id="facebook-counter" class="social-counter">0</span></a></div>
                      <div class="social-item"><a data-network="twitter" id="twitter-share" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-pushable="true" data-action="click" data-holder="#socialSharingGoogleAnalytics-Twitter" class="social-share-link"><span class="socials-sharing font-icon icon-twitter"></span><span id="twitter-counter" class="social-counter">0</span></a></div>
                      <div class="social-item"><a data-network="google-plus" id="gplus-share" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="social-share-link"><span class="socials-sharing font-icon icon-gplus"></span><span id="gplus-counter" class="social-counter">0</span></a></div>
                      <div class="social-item"><a data-network="vkontakte" id="vk-share" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-pushable="true" data-action="click" data-holder="#socialSharingGoogleAnalytics-VKontakte" class="social-share-link"><span class="socials-sharing font-icon icon-vk"></span><span id="vk-counter" class="social-counter">0</span></a></div>
                      <div class="social-item last"><a data-network="odnoklassniki" id="odnoklassniki-share" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-pushable="true" data-action="click" data-holder="#socialSharingGoogleAnalytics-OK" class="social-share-link"><span class="socials-sharing font-icon icon-odnoklassniki"></span><span id="odnoklassniki-counter" class="social-counter">0</span></a></div>
                    </div>
                  </div>
                  <span class="hidden" id="socialSharingGoogleAnalytics">
{
"event": "Social",
"socialNetwork": "Поделиться",
"socialAction": "share",
"socialTarget": "http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781"
}
  </span>
                  <span class="hidden" id="socialSharingGoogleAnalytics-Facebook">
{
"event": "Social",
"socialNetwork": "Facebook",
"socialAction": "share",
"socialTarget": "http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781"
}
  </span>
                  <span class="hidden" id="socialSharingGoogleAnalytics-Twitter">
{
"event": "Social",
"socialNetwork": "Twitter",
"socialAction": "share",
"socialTarget": "http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781"
}
  </span>
                  <span class="hidden" id="socialSharingGoogleAnalytics-VKontakte">
{
"event": "Social",
"socialNetwork": "VKontakte",
"socialAction": "share",
"socialTarget": "http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781"
}
  </span>
                  <span class="hidden" id="socialSharingGoogleAnalytics-OK">
{
"event": "Social",
"socialNetwork": "OK",
"socialAction": "share",
"socialTarget": "http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781"
}
  </span>
                  <ul class="main-toolbar-menu">
                    <li class="main-toolbar-menu-item share-link">
                      <a data-init="social-sharing" data-placement="bottom" data-init-param=".share-link a, #social-sharing" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-toggle="toolt
ip" data-html="true" data-device="true" data-pushable="true" data-action="click" data-holder="#socialSharingGoogleAnalytics" class="main-toolbar-menu-link show-share-popup" data-original-title="" title=""><i class="main-toolbar-menu-icon font-icon icon-share"></i><span class="link-text">Поделиться</span></a></li>
                    <li data-init="print" data-init-param=".js-print" class="main-toolbar-menu-item print-link visible-desktop">
                      <a class="main-toolbar-menu-link js-print" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#"><i class="main-toolbar-menu-icon font-icon icon-print"></i><span class="link-text">Печатать</span></a></li>
                  </ul>
                  <div class="breadcrumbs">
                    <ul class="breadcrumbs-list">
                      <li class="breadcrumb-item">
                        <a href="http://www.mvideo.ru/" class="breadcrumbs-home-link">Домой</a> </li>
                      <li class="breadcrumb-item">
                        <a class="breadcrumb-item-link" href="http://www.mvideo.ru/televizory-i-cifrovoe-tv-1">Телевизоры и цифровое ТВ</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a class="breadcrumb-item-link" href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65">Телевизоры</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a class="breadcrumb-item-link" href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/category=4k-uhd-televizory-1682">4K (UHD) телевизоры</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a class="breadcrumb-item-link" href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/category=4k-uhd-televizory-1682/brand=samsung">Samsung</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section">
            <div class="content-top-section-layout">
              <div class="content-top-primary-section">
                <div class="checkout-section-holder">
                  <div class="product-details-data-container">
                    <div class="product-data" data-pushable="true" data-action="redHelperAction" data-holder="#redHelperAction">
                      <div class="product-data-header">
                        <h1 itemprop="name" class="product-title">Телевизор Samsung Ultra HD UE55JU7500U</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/samsung_logo.png" alt="Samsung" class="brand-logo pull-right">
                      </div>
                      <div class="product-data-rating-code">
                        <div class="star-ratings">
                          <div class="star-rating star-rating-large rating-mvideo">
                            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews" data-init="switchTab" class="star-rating-canvas-link">
                              <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                              <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                              </span><span class="star-rating-reviews-qty">(9)</span>
                            </a>
                            <span class="star-rating-owner">М.Видео</span>
                          </div>
                        </div>
                        <!--noindex-->
                        <p class="product-code">Код&nbsp; 10007781</p>
                        <!--/noindex-->
                      </div>
                    </div>
                  </div>
                  <div class="product-details-media-container">
                    <div data-device="true" class="media-gallery page-gallery">
                      <div class="image image-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/10007781b.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U" class="product-image">

                        <!--noindex-->
                        <div id="DivgtmSkuMarkerBubbleShow" style="display: none;"><span class="hidden" id="gtmSkuMarkerBubbleShow">{         "event": "OWOX",          "eventCategory": "Interactions",          "eventAction": "show",          "eventLabel": "bubble",         "eventContext": "mark30303146",         "eventContent": "Умная рассрочка 0-0-24 (0-0-24) (до 16.05) (бабл)",          "eventNoninteraction": "1"          }</span>
                        </div>
                        <!--/noindex-->
                        <div class="product-badge" data-pushable="true" data-action="load" data-holder="#gtmSkuMarkerBubbleShow">

                          <!--noindex-->
                          <div id="DivgtmSkuMarkerBubbleClick" style="display: none;"><span class="hidden" id="gtmSkuMarkerBubbleClick">{         "event": "OWOX",          "eventCategory": "Interactions",          "eventAction": "click",         "eventLabel": "bubble",         "eventContext": "mark30303146",         "eventContent": "Умная рассрочка 0-0-24 (0-0-24) (до 16.05) (бабл)",          "eventNoninteraction": "1"          }</span>
                          </div>
                          <!--/noindex-->
                          <a href="http://www.mvideo.ru/promo/rassrochka-0024" id="product-page-bundle-marker" data-pushable="true" data-action="click" data-holder="#gtmSkuMarkerBubbleClick" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rassrochka-0024-bubble_0-0-24.png" alt=" " class="">
                          </a>
                        </div>
                      </div>
                      <div class="video image-holder">
                        <iframe src="./product_files/saved_resource.html" frameborder="0" class="product-carousel-view-iframe"></iframe>
                      </div>
                    </div>
                    <div class="carousel-holder">
                      <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="zoom"><i class="font-icon icon-zoom"></i>Увеличить</a>
                      <div class="list-carousel" data-init="mediaShowcase" data-init-param="" data-device="true">
                        <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 256px; height: 62px; margin: 0px; overflow: hidden;">
                          <ul class="product-carousel in-page" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 1280px; height: 62px;">
                            <li class="selected-image" rel="0" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b.jpg" data-type="img" class="wrapper" data-src="//img.mvideo.ru/Pdb/10007781b.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781s.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U " class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li class="view3d-li rotation-js" data-type="3d" rel="1" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/3dPics/10007781/001.jpg" class="wrapper" data-type="3d" data-images="//img.mvideo.ru/3dPics/10007781/###.jpg">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/3d-small.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U 3d" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li rel="2" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b1.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b1.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b1.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b1.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b1.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b1.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781b1.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li rel="3" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b2.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b2.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b2.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b2.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b2.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b2.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781b2.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li rel="4" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b3.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b3.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b3.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b3.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b3.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b3.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781b3.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li rel="5" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b4.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b4.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b4.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b4.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b4.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b4.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781b4.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li rel="6" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b5.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b5.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b5.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b5.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b5.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b5.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781b5.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                            <li rel="7" style="width: 51.7778px;">
                              <a href="http://img.mvideo.ru/Pdb/10007781b6.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b6.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b6.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b6.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b6.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b6.jpg&quot;}">
                                <div class="lazy-load-image-holder">
                                  <img data-original="img/10007781b6.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <a class="font-icon icon-left-open prev-btn disabled" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" style="display: inline;"></a>
                        <a class="font-icon icon-right-open next-btn" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" style="display: inline;"></a>
                      </div>
                    </div>
                    <div id="pdp-modal" tabindex="-1" role="dialog" aria-labelledby="PDP modal" aria-hidden="true" class="pdp-modal modal fade">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close ico-close">&nbsp;</button>
                        </div>
                        <div class="modal-body">
                          <div data-device="true" class="media-gallery page-gallery">
                            <div class="image image-holder">
                              <img src="<?php echo get_template_directory_uri(); ?>/img/10007781b.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U" class="product-image">
                              <div class="product-badge">
                                <a href="http://www.mvideo.ru/promo/rassrochka-0024" id="product-page-bundle-marker" data-pushable="true" data-action="click" data-holder="#gtmSkuMarkerBubbleClick" target="_blank">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/rassrochka-0024-bubble_0-0-24.png" alt=" " class="">
                                </a>
                              </div>
                            </div>
                            <div class="video image-holder">
                         <!--      <iframe src="#" frameborder="0" class="product-carousel-view-iframe"></iframe> -->
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <div class="carousel-holder">
                            <div class="list-carousel" data-device="true">
                              <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 255px; height: 62px; margin: 0px; overflow: hidden;">
                                <ul class="product-carousel in-modal" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 1071px; height: 62px;">
                                  <li class="selected-image" rel="0" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b.jpg" data-type="img" class="wrapper" data-src="//img.mvideo.ru/Pdb/10007781b.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781s.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U " class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li class="view3d-li rotation-js" data-type="3d" rel="1" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/3dPics/10007781/001.jpg" class="wrapper" data-type="3d" data-images="//img.mvideo.ru/3dPics/10007781/###.jpg">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/3d-small.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U 3d" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li rel="2" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b1.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b1.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b1.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b1.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b1.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b1.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781b1.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li rel="3" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b2.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b2.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b2.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b2.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b2.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b2.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781b2.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li rel="4" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b3.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b3.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b3.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b3.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b3.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b3.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781b3.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li rel="5" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b4.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b4.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b4.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b4.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b4.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b4.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781b4.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li rel="6" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b5.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b5.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b5.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b5.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b5.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b5.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781b5.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                  <li rel="7" style="width: 38.7778px;">
                                    <a href="http://img.mvideo.ru/Pdb/10007781b6.jpg" class="wrapper" data-type="img" data-src="//img.mvideo.ru/Pdb/10007781b6.jpg" data-src-obj="{&quot;mobile&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/600/10007781b6.jpg&quot;,&quot;tablet&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b6.jpg&quot;,&quot;desktop&quot;: &quot;//img.mvideo.ru/Pdb/small_pic/480/10007781b6.jpg&quot;,&quot;original&quot;: &quot;//img.mvideo.ru/Pdb/10007781b6.jpg&quot;}">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781b6.jpg" alt="Купить Телевизор Samsung Ultra HD UE55JU7500U в интернет-магазине М.Видео" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <a class="font-icon icon-left-open prev-btn disabled" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" style="display: inline;"></a>
                              <a class="font-icon icon-right-open next-btn" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" style="display: inline;"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-top-secondary-section">
                <div class="pdp-summary-wrapper">
                  <div data-init="validationHandler" data-init-param="#best-price-form" class="best-price-guarantee-holder content-frame">

                    <div id="gtmServiceBestPriceOpenDiv" style="display: none;"><span class="hidden" id="gtmServiceBestPriceOpen">{                     "event": "OWOX",                      "eventCategory": "Interactions",                      "eventAction": "open",                      "eventLabel": "bestPrice",                      "eventProductCategoryId": "cat2_cis_0000000001",                      "eventProductId": "10007781"                  }</span>
                    </div>
                    <!--/noindex-->
                    <div data-init="bestPriceGuarantee" class="best-price-guarantee" data-pushable="true" data-action="click" data-holder="#gtmServiceBestPriceOpen">
                      <i class="ico pull-left best-price-guarantee-thumbs-up"></i>
                      <div class="best-price-guarantee-info">
                        <strong>Нашли дешевле? Снизим цену!</strong><i class="pull-right font-icon icon-right-open best-price-guarantee-more"></i>
                      </div>
                    </div>
                    <div class="expanded-container">
                      <!-- User not authorized -->
                      <div class="form-block not-authorized">

                        <!--noindex-->
                        <div id="gtmServiceBestPriceHelpDiv" style="display: none;"><span class="hidden" id="gtmServiceBestPriceHelp">{                           "event": "OWOX",                            "eventCategory": "Interactions",                            "eventAction": "click",                           "eventLabel": "bestPrice",                            "eventContext": "help",                           "eventProductId": "10007781",                           "eventProductCategoryId": "cat2_cis_0000000001",                            "eventNoninteraction": "1"                          }</span>
                        </div>
                        <!--/noindex-->
                        <p>
                          Видели товар дешевле? Отправьте ссылку на данный товар. У конкурента будет цена ниже — вернем разницу! Промокод будет отправлен на телефон и е-mail.
                          <br>
                          <a href="http://www.mvideo.ru/ppc" target="_blank" data-pushable="true" data-action="click" data-holder="#gtmServiceBestPriceHelp"></a><a href="http://www.mvideo.ru/ppc" target="_blank">Правила</a>
                        </p>
                        <div class="authorized-block">
                          <p>
                            Для участия в программе вы должны быть авторизованы.
                          </p>
                          <!--noindex-->
                          <ul class="header-login-options-list">
                            <li class="header-login-option"><a href="http://www.mvideo.ru/login/?bpg=true" class="header-login-option-link">Войти</a></li>
                            <li class="header-login-option"><a href="http://www.mvideo.ru/register?sn=false&amp;bpg=true" class="header-login-option-link">Регистрация</a></li>
                          </ul>
                          <!--/noindex-->
                          <a class="btn btn-invers-deep-grey">Закрыть</a> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pdp-summary-wrapper">
                  <div class="checkout-section-holder product-details-summary-holder ">
                    <div class="product-details-summary">
                      <div class="product-details-summary-price-holder">
                        <div class="product-details-summary-price-label">
                          <strong>Цена (р.)</strong> </div>
                        <div class="product-details-summary-prices">
                          <div class="product-price pricing-product-detail">
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="product-price">
                              <strong itemprop="price" class="product-price-current">
                    134990
  </strong>
                              <meta itemprop="priceCurrency" content="RUB">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-details-summary-main">
                        <div class="product-details-summary-bonus">
                          <div>
                            <div class="product-details-summary-bonus-lable pull-left">
                              <strong>
            Бонусных рублей <br> за покупку
  </strong> </div>
                            <div class="product-details-summary-bonus-help pull-left">
                              <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" id="js-custom-tooltip" data-init="custom-tooltip" data-init-param="#js-custom-tooltip, top, body" data-tooltip-text="Начисление Бонусных рублей произойдёт после доставки или получения заказа в магазине.
&lt;br&gt;Сумма Бонусных рублей определяется в соответствии с правилами программы «М.Видео-Бонус»." class="ico ico-help-small" data-original-title="" title="">
                              </a>
                            </div>
                            <div class="product-details-summary-bonus-info pull-right highlighted-text-secondary">
                              4499
                            </div>
                          </div>
                        </div>
                        <div class="product-details-summary-add-to-cart">

                          <!--noindex-->
                          <div id="gtmAddToBasketDiv10007781" style="display: none;"><span class="hidden" id="gtmAddToBasket10007781">{           "event": "OWOX",            "eventCategory": "Conversions",           "eventAction": "click",           "eventLabel": "AddToCart",            "eventValue": "134990",           "eventOneCart": "0",            "eventProductCategoryId": "cat2_cis_0000000001",            "eventProductId": "10007781"            }</span>
                          </div>
                          <!--/noindex-->
                          <div class="error text-error">
                          </div>
                          <form id="10007781" action="http://www.mvideo.ru/cart?productId=10007781&amp;skuId=10007781&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10007781" class="" method="post">
                            <input name="_dyncharset" value="UTF-8" type="hidden">
                            <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="productDetailSummaryBlock" type="hidden">
                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                            <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="" data-pushable="true" data-action="click" data-holder="#gtmAddToBasket10007781" data-original-title="" title="">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10007781" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10007781" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                              <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10007781&amp;skuId=10007781" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                              <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn btn-primary btn-fluid submit-basket" type="submit">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                            </div>
                            <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10007781" type="hidden">
                          </form>
                        </div>

                        <!--noindex-->
                        <div id="gtmSimilarProductsDiv" style="display: none;"><span class="hidden" id="gtmSimilarProducts">{                     "event": "OWOX",                      "eventCategory": "Interactions",                      "eventAction": "click",                     "eventLabel": "similarProducts",                      "eventContext": "productBlock"                      }</span>
                        </div>
                        <!--/noindex-->
                        <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" class="view-similar-products" data-holder="#gtmSimilarProducts" data-pushable="true" data-action="click" data-init="switchTab" data-init-param="{&quot;subTargetBlock&quot;: &quot;.similar-products-holder&quot;}">
                Смотреть похожие товары
  </a>

                        <!--noindex-->
                        <div id="gmtAddToWishListDiv10007781" style="display: none;"><span class="hidden" id="gmtAddToWishList10007781">{         "event": "OWOX",          "eventCategory": "Conversions",         "eventAction": "add",         "eventLabel": "toWishlist",         "eventValue": "134990",         "eventProductCategoryId": "cat2_cis_0000000001",          "eventProductId": "10007781"          }</span>
                        </div>
                        <!--/noindex-->
                        <form action="http://www.mvideo.ru/?_DARGS=/sitebuilder/components/product/wishlist/addToWishList.jsp" method="post">
                          <input name="_dyncharset" value="UTF-8" type="hidden">
                          <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                          <input name="skuId" value="10007781" type="hidden">
                          <input name="productId" value="10007781" type="hidden">
                          <input name="/atg/commerce/gifts/GiftlistFormHandler.redirectSuccessURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?" type="hidden">
                          <input name="_D:/atg/commerce/gifts/GiftlistFormHandler.redirectSuccessURL" value=" " type="hidden">
                          <input name="/atg/commerce/gifts/GiftlistFormHandler.redirectErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?" type="hidden">
                          <input name="_D:/atg/commerce/gifts/GiftlistFormHandler.redirectErrorURL" value=" " type="hidden">
                          <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" data-original-title="" title="">
                            <input data-pushable="true" data-holder="#gmtAddToWishList10007781" name="/atg/commerce/gifts/GiftlistFormHandler.AddCatalogItemToWishlist" value="В избранное" class="btn btn btn-invers-deep-grey btn-fluid submit-button" type="submit" data-action="click">
                            <input name="_D:/atg/commerce/gifts/GiftlistFormHandler.AddCatalogItemToWishlist" value=" " type="hidden">
                          </div>

                        <div class="product-details-summary-delivery" data-init="switchTab" data-init-param="{&quot;isBlockAnchors&quot;:&quot;true&quot;, &quot;subTarget&quot;:&quot;&quot;}">
                          <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-details-summary-delivery-shop profited" data-original-title="" title="">
                            <div class="clearfix">
                              <div class="product-details-summary-delivery-shop-icon-wrap">
                                <i class="font-icon icon-basket"></i>
                              </div>
                              <span class="delivery-choice-description-title">

                <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#shopdirections" data-subturget="#in-store" data-ancor-element="true">Забрать в магазине</a>
            </span>
                              <span class="product-details-summary-delivery-shop-value">
              Бесплатно
  </span> </div>
                            <div class="clearfix">
                              <span class="product-details-summary-delivery-shop-desc">
              Сегодня
            </span>
                              <span class="product-details-summary-delivery-shop-addToValue">
              Премия 500р.
  </span> </div>
                          </div>
                          <div class="product-details-summary-delivery-shop product-details-summary-delivery-not-first ">
                            <div class="clearfix  unavailable">
                              <div class="product-details-summary-delivery-car-icon-wrap">
                                <i class="font-icon icon-delivery"></i>
                              </div>
                              <span class="delivery-choice-description-title">
              Доставить на дом
            </span>
                              <span class="product-details-summary-delivery-shop-value">

  </span> </div>
                            <div class="clearfix pseudo-table">
                              <span class="product-details-summary-delivery-shop-desc pseudo-td">
              <font color="#B5B5B5">Онлайн-оформление доставки
недоступно для данного товара</font>
            </span>
                              <span class="product-details-summary-delivery-shop-addToValue pseudo-td">
                            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" id="delivery-from-shop-tooltip-9004" data-init="custom-tooltip" data-init-param="#delivery-from-shop-tooltip-9004, , body" data-tooltip-text="Этот товар можно заказать
и оплатить на сайте, а доставку
оформить в магазине, где он есть в наличии." class="ico ico-help-small" data-original-title="" title=""></a>
 </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--noindex-->

                    <!--noindex-->
                    <div id="gtmCompareDiv10007781" style="display: none;"><span class="hidden" id="gtmCompare10007781">{         "event": "OWOX",          "eventCategory": "Interactions",          "eventAction": "remove",          "eventLabel": "removeFromCompare",          "eventValue": "134990",         "eventProductCategoryId": "cat2_cis_0000000001",          "eventProductId": "10007781",         "mutable": "true",          "mutationFunction": "mvideo.Module._items.gtmCompareMutationFunction"         }</span>
                    </div>
                    <!--/noindex-->
                    <form action="http://www.mvideo.ru/sitebuilder/components/product-comparion/comparisonListJSON.jsp?_DARGS=/sitebuilder/components/product/product-detail-compare.jsp" method="post">
                      <input name="_dyncharset" value="UTF-8" type="hidden">
                      <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                      <div class="product-details-summary-compare-holder">
                        <div class="product-details-summary-compare-check">
                          <input id="compare-10007781" type="checkbox" class="input-checkbox">
                          <input id="compared-prod-qty" class="compared-prod-qty" type="hidden" value="0">
                          <label for="compare-10007781" class="product-tile-compare-label checkbox label-checkbox" data-pushable="true" data-action="click" data-holder="#gtmCompare10007781">
                            <span class="fake-checkbox"></span>Сравнить
                          </label>
                        </div>
                        <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-init="custom-tooltip" data-init-param="#check-tooltip-10007781" data-tooltip-text="Вы не можете добавить в таблицу сравнения более 5 товаров" data-original-title="" title="" id="check-tooltip-10007781" class="ico ico-help-small right-aligned-tolltip top-offset hidden">?</a>
                        <span class="hidden" data-init="comparison-add-remove" data-init-param="input[id^=&#39;compare-&#39;], #product-details-compare-link"></span>
                        <div class="product-details-summary-compare-button">
                          <a id="product-details-compare-link" href="http://www.mvideo.ru/product-comparison?showDiffOnly=true" class="btn btn-invers-deep-grey btn-fluid" style="display:none;"> Сравнить
          <span class="product-details-summary-compare-count">

  </span> </a> </div>
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.productID" value="10007781" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.productID" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.lastCategoryURL" value="/televizory-i-cifrovoe-tv/televizory-65/f/category=4k-uhd-televizory-1682" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.lastCategoryURL" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.ajaxAddProductSuccessURL" value="/sitebuilder/components/product-comparion/comparisonListJSON.jsp" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.ajaxAddProductSuccessURL" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.ajaxAddProductErrorURL" value="/sitebuilder/components/product-comparion/comparisonListJSON.jsp" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.ajaxAddProductErrorURL" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.ajaxRemoveProductSuccessURL" value="/sitebuilder/components/product-comparion/comparisonListJSON.jsp" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.ajaxRemoveProductSuccessURL" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.ajaxRemoveProductErrorURL" value="/sitebuilder/components/product-comparion/comparisonListJSON.jsp" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.ajaxRemoveProductErrorURL" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.addProduct" value="" class="add-param" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.addProduct" value=" " type="hidden">
                        <input name="/atg/commerce/catalog/comparison/ProductListHandler.removeProduct" value="" class="remove-param" type="hidden">
                        <input name="_D:/atg/commerce/catalog/comparison/ProductListHandler.removeProduct" value=" " type="hidden">
                      </div>
                      <input name="_DARGS" value="/sitebuilder/components/product/product-detail-compare.jsp" type="hidden">
                    </form>
                    <!--/noindex-->
                  </div>
                  <!-- Display federal promo marker only in case of product not involved in Gift Card/Coupon promo -->
                  <div class="checkout-section-holder product-details-summary-timer-holder">
                    <div class="product-details-summary-timer">
                      <div class="product-details-summary-timer-sale clearfix">
                        <div class="product-details-summary-timer-sale-text">
                          <div data-init="custom-tooltip" data-tooltip-text="Скидка не предоставляется при оплате заказа или его части Бонусными рублями." data-init-param=",,,true" data-original-title="" title="">
                            Скидка 5%
                          </div>
                        </div>
                        <div class="product-details-summary-timer-sale-images">
                          <div class="product-details-summary-timer-visa">
                            <i class="ico-visa"></i>
                          </div>
                          <div class="product-details-summary-timer-master-card">
                            <i class="ico-mastercard"></i>
                          </div>
                        </div>
                      </div>
                      <div class="product-details-summary-timer-credit clearfix">
                        <div class="product-details-summary-timer-credit-text">
                          <a href="http://www.mvideo.ru/online-credit">
            Онлайн-кредит от&nbsp;  6&nbsp;053 руб./мес.
  </a> </div>
                        <div class="product-details-summary-timer-credit-help">
                          <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" id="js-custom-tooltip1" data-init="custom-tooltip" data-init-param="#js-custom-tooltip1" data-tooltip-text="-Оформите кредит в корзине,
Выбрав курьерскую доставку.
Решение банка – онлайн!&lt;br&gt;
-Оформите кредит в магазине,
выбрав доставку в магазин.
&lt;a href=&quot;/online_credit_steps&quot; class=&quot;red&quot; target=&quot;_blank&quot;&gt;подробнее&lt;/a&gt;" class="ico ico-help-small" data-original-title="" title=""></a>
                        </div>
                      </div>
                      <div class="product-details-summary-timer-sale clearfix">

                        <!--noindex-->
                        <div id="DivgtmSkuMarkerFederalShow" style="display: none;"><span class="hidden" id="gtmSkuMarkerFederalShow">{         "event": "OWOX",          "eventCategory": "Interactions",          "eventAction": "show",          "eventLabel": "banner",         "eventContext": "mark28913781",         "eventContent": "Триколор в подарок",         "eventNoninteraction": "1"          }</span>
                        </div>
                        <!--/noindex-->
                        <div class="super-offer-icon" data-pushable="true" data-action="load" data-holder="#gtmSkuMarkerFederalShow">

                          <!--noindex-->
                          <div id="DivgtmSkuMarkerFederalClick" style="display: none;"><span class="hidden" id="gtmSkuMarkerFederalClick">{         "event": "OWOX",          "eventCategory": "Interactions",          "eventAction": "click",         "eventLabel": "banner",         "eventContext": "mark28913781",         "eventContent": "Триколор в подарок",         "eventNoninteraction": "1"          }</span>
                          </div>
                          <!--/noindex-->
                          <a href="http://www.mvideo.ru/promo/tsifrovoe-tv-podarok" data-pushable="true" data-action="click" data-holder="#gtmSkuMarkerFederalClick" target="_blank">
                            <div class="lazy-load-image-holder">
                              <img data-original="img/trikolor-v-podarok-product.jpg" alt="" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="top-section-background">
          <div class="tabset hidden-phone">
            <div class="tabset-container">
              <ul class="tabset-list">
                <li class="tabset-item active"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" class="tabset-item-link">         О товаре        </a> </li>
                <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification" class="tabset-item-link">         Характеристики        </a> </li>
                <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews" class="tabset-item-link">         Отзывы        </a> </li>
                <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" class="tabset-item-link">         Аксессуары        </a> </li>
                <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#shopdirections" class="tabset-item-link">         Наличие в магазинах        </a> </li>
              </ul>
            </div>
          </div>
          <div id="js-product-tabs" data-init="tabs" data-device="true" data-instance="productTabs" class="tab-container tab-container-product-details">
            <div class="tab-heading visible-phone active">
              <h3>  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview">О товаре<i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i></a>
            </h3>
            </div>
            <div data-id="overview" class="tab-body active">
              <div class="tab-inner">
                <div class="shadow-top-inner">
                  <div class="section">
                    <div class="product-details-section product-details-section-overview">
                      <div class="product-details-heading hidden-phone">
                        <h2 class="product-details-heading-title">
            Описание
  </h2>
                        <!--noindex-->
                        <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification" data-init="switchTab" class="view-all-base">Посмотреть все</a>
                        <!--/noindex-->
                      </div>
                      <div class="product-details-content">
                        <div class="pds-top-part clearfix">
                          <div class="pds-top-description">
                            <p>Smart-телевизоры Samsung стали быстрее и проще в обращении. Новый сервис Smart Hub от Samsung обеспечивает ускоренный доступ к расширенной коллекции развлекательного контента и предлагает рекомендации по просмотру фильмов и ТВ программ.
                              <br>
                              <br> Усовершенствованные панели Smart Hub легче для навигации, особенно когда телевизор работает быстрее благодаря четырехъядерному процессору Quad Core. С помощью нового приложения Smart View 2.0 обмен контентом между телевизором, мобильным телефоном и планшетом стал предельно простым и свободным.
                              <br>
                              <br> Наслаждайтесь просмотром телепрограмм на мобильном устройстве, управляйте телевизором при помощи телефона. Поддерживаются разные платформы (Android, iOS, Windows 8). Благодаря новейшей технологии управления голосом вы можете управлять вашим телевизором используя целые фразы.
                              <br>
                              <br> Наслаждайтесь просмотром спортивных программ в режиме "Футбол", в котором включаются оптимальные для просмотра настройки изображения и звука, позволяющие вам ощутить себя на стадионе. Вы можете записывать самые яркие моменты и увеличивать отдельные области экрана, чтобы рассмотреть детали.
                              <br>
                              <br> Технология повышения контрастности Samsung Micro Dimming позволяет улучшить проработку деталей в темных и светлых участках экрана, что добавляет глубины и драматичности происходящему на экране.
                              <br>
                              <br> А благодаря улучшенной технологии Clear Motion Rate (CMR) даже быстрое движение на экране телевизора будет отображаться с высокой четкостью. Более высокое значение CMR означает более четкую картинку в динамичных сюжетах, благодаря чему вы получите больше удовольствия от просмотра фильмов в жанре Action, спортивных трансляций и прочих развлекательных программ.</p>
                          </div>
                          <!--noindex-->
                          <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification" data-init="switchTab" class="view-all-base visible-phone">Посмотреть все</a>
                          <!--/noindex-->
                          <div data-init="tooltip" data-init-param=".product-vendors-el" class="product-vendors">
                          </div>
                        </div>
                        <div class="pds-mid-part clearfix">
                          <div class="product-details-specification-column">
                            <div class="product-details-tables-holder">
                              <table class="table table-striped product-details-table">
                                <tbody>
                                  <tr>
                                    <td>Гарантия</td>
                                    <td>1 год</td>
                                  </tr>
                                  <tr>
                                    <td>Страна</td>
                                    <td>Россия</td>
                                  </tr>
                                  <tr>
                                    <td>Диагональ экрана</td>
                                    <td>55"(139.6 см)</td>
                                  </tr>
                                  <tr>
                                    <td>Разрешение экрана</td>
                                    <td>3840х2160 Пикс (Ultra HD)</td>
                                  </tr>
                                  <tr>
                                    <td>Поддержка 3D</td>
                                    <td>активная технология</td>
                                  </tr>
                                  <tr>
                                    <td>Поддержка Smart TV</td>
                                    <td>Да</td>
                                  </tr>
                                  <tr>
                                    <td>Количество ядер процессора</td>
                                    <td>4</td>
                                  </tr>
                                  <tr>
                                    <td>Технология</td>
                                    <td>1000 Гц</td>
                                  </tr>
                                  <tr>
                                    <td>Масштабирование до 4K Ultra HD</td>
                                    <td>Да</td>
                                  </tr>
                                  <tr>
                                    <td>Цифровой ТВ тюнер</td>
                                    <td>DVB-T/T2/C</td>
                                  </tr>
                                  <tr>
                                    <td>Поддержка Wi-Fi</td>
                                    <td>через встроенный модуль</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="product-details-online-chat hidden-phone hidden-tablet">
                              <a class="btn redhlp_button">
                                        Онлайн-консультация
 </a>
                              <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification" data-init="switchTab" class="view-all-base">
                                    Все характеристики
  </a>
                            </div>
                          </div>
                          <div class="product-details-specification-column">
                            <div class="product-details-text">
                              <h3>Телевизор Samsung Ultra HD UE55JU7500U</h3>
                              <p itemprop="description">
                                Вы можете купить Телевизор Samsung Ultra HD UE55JU7500U в магазинах М.Видео по доступной цене. Телевизор Samsung Ultra HD UE55JU7500U: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.
                              </p>
                              <p class="view-all-models">
                                <a href="http://www.mvideo.ru/televizory-i-cifrovoe-tv/televizory-65/f/brand=samsung/category=4k-uhd-televizory-1682">
                                  <!-- todo create message -->
                                  Смотреть&nbsp;все&nbsp;Телевизоры&nbsp;Samsung
                                </a>
                              </p>
                            </div>
                          </div>
                          <div class="product-details-online-chat hidden-desktop hidden-phone">
                            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification" data-init="switchTab" class="view-all-base">Все характеристики</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="page-container no-shadow-block">
                  <div class="section">
                    <div class="content-details-description">
                      Полная информация о&nbsp;товаре, изготовителе, комплектации, технических характеристиках и&nbsp;функциях содержится в&nbsp;технической документации.
                    </div>
                  </div>
                </div>
                <div class="shadow-top-inner brand-promises">
                  <div class="section">
                    <div class="shop-sub-options clearfix">
                      <ul>
                        <li>
                          <a href="http://www.mvideo.ru/deliverypage">
                            <div class="option-icon"><i class="font-icon icon-delivery-truck-go"></i></div>
                            <div class="option-text">Доставка вовремя</div>
                          </a>
                        </li>
                        <li>
                          <a href="http://www.mvideo.ru/ppc">
                            <div class="option-icon"><i class="font-icon icon-thumbs-up-left"></i></div>
                            <div class="option-text">Нашли дешевле? Снизим цену!</div>
                          </a>
                        </li>
                        <li>
                          <a href="http://www.mvideo.ru/catalog">
                            <div class="option-icon"><i class="font-icon icon-bag"></i></div>
                            <div class="option-text">Полный каталог на mvideo.ru</div>
                          </a>
                        </li>
                        <li>
                          <a href="http://www.mvideo.ru/exchange">
                            <div class="option-icon"><i class="font-icon icon-arrow"></i></div>
                            <div class="option-text">30 дней на обмен</div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="shadow-top-inner">
                  <div class="section">
                    <div class="delivery-choice-holder">
                      <div class="delivery-choice-heading">
                        <h2>
          Как получить товар?
        </h2>
                      </div>
                      <div class="delivery-choice-content">
                        <div class="delivery-choice-info without-description">
                          <div class="delivery-choice-item profited">
                            <div class="delivery-choice-icon">
                              <i class="font-icon icon-basket"></i>
                            </div>
                            <div class="delivery-choice-title">
                              <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#shopdirections" data-init="switchTab" data-init-param="{&quot;subTarget&quot;: &quot;#in-store&quot;}" class="delivery-choice-description-title">Забрать в магазине</a> </div>
                            <div class="delivery-choice-condition">
                              <div class="delivery-choice-condition-date">Сегодня</div>
                              <div class="delivery-choice-condition-price">
                                Бесплатно,
                              </div>
                              <div class="delivery-choice-condition-bonus">
                                Премия 500р.
                              </div>
                            </div>
                            <div class="delivery-choice-description">
                              <span>г. Москва, Славянский б-р, д.13, стр.1&nbsp;
                        </span>
                              <span>
                          <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#shopdirections" data-init="switchTab" data-init-param="{&quot;subTarget&quot;: &quot;#in-store&quot;}">
                            Другие магазины
  </a>  </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gallery-layout shadow-top-inner ">
                  <div data-init="viewMore" data-device="true" data-init-param="{&quot;itemsShown&quot; : 2}" class="section">
                    <div class="gallery-header">
                      <div class="gallery-title-wrapper">
                        <h2 class="gallery-title">
              Вместе с этим товаром покупают:
  </h2> </div>
                      <!--noindex-->
                      <div class="gallery-action"><a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" data-init="switchTab" class="view-all-base">Посмотреть все</a></div>
                      <!--/noindex-->
                    </div>
                    <div class="gallery-content">
                      <div class="accessories-carousel-holder carousel">
                        <div class="accessories-carousel-wrapper">
                          <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 960px; height: 457px; margin: 0px; overflow: hidden;">
                            <ul class="accessories-product-list" data-init="galleryCarousel" data-init-param="{&quot;align&quot; : &quot;left&quot;, &quot;infinite&quot;: true, &quot;circular&quot;: true, &quot;scroll&quot;: 300, &quot;auto&quot; : false, &quot;ajaxContentLoad&quot; : {&quot;total&quot;:16, &quot;contentUrl&quot;: &quot;/browse/product/gallery-product-list.jsp?galleryId=pdpTopAccessories&amp;pageType=product&amp;prodId=10007781&amp;startFrom=5&amp;ref=true&amp;requestId=&quot;}}" data-device="true" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 2880px; height: 457px;">
                              <li class="gallery-list-item" rel="0">
                                <div class="product-tile">
                                  <div class="product-tile-picture">
                                    <div class="product-tile-picture-holder">
                                      <a href="http://www.mvideo.ru/products/saundbar-samsung-hw-j8501-10008046" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Саундбар Samsung HW-J8501">
                                        <div class="lazy-load-image-holder">
                                          <img data-original="img/10008046m.jpg" alt="Саундбар Samsung HW-J8501" class="lazy product-tile-picture-image" src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="product-tile-info">
                                    <div class="product-tail-section">
                                      <div class="product-tile-description">
                                        <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/saundbar-samsung-hw-j8501-10008046" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Саундбар Samsung HW-J8501" data-track-label="Саундбар Samsung HW-J8501">  Саундбар Samsung HW-J8501
  </a>  </h2>
                                        <div class="product-tile-meta">
                                          <div class="star-ratings">
                                            <div class="star-rating star-rating-large rating-mvideo">
                                              <a href="http://www.mvideo.ru/products/saundbar-samsung-hw-j8501-10008046#reviews" class="star-rating-canvas-link">
                                                <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                                <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                                                </span><span class="star-rating-reviews-qty">(2)</span>
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
                    50990<span class="price-symbol-rub">р.</span>
  </strong>
                                          </div>
                                        </div>
                                        <div class="error text-error">
                                        </div>
                                        <form id="10008046" action="http://www.mvideo.ru/cart?productId=10008046&amp;skuId=10008046&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10008046" class="product-tile-add-to-basket hidden-phone" method="post">
                                          <input name="_dyncharset" value="utf-8" type="hidden">
                                          <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                                          <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="pdpTopAccessories" type="hidden">
                                          <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                          <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBasketpdpTopAccessories10008046" data-original-title="" title="">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10008046" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10008046" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                            <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10008046&amp;skuId=10008046" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?ssb_block=pdpTopAccessories" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                            <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                          </div>
                                          <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10008046" type="hidden">
                                        </form>
                                      </div>
                                      <!--noindex-->

                                      <div id="DivgtmAddToBasketpdpTopAccessories10008046" style="display: none;"><span class="hidden" id="gtmAddToBasketpdpTopAccessories10008046">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "50990",                      "eventContext": "productBlock",                     "eventLocation": "pdpTopAccessories",                     "eventPosition": "0",                     "eventProductCategoryId": "cat2_cis_0000000665",                      "eventProductId": "10008046"                      }</span></div>
                                      <!--/noindex-->
                                      <div class="product-tile-sale">
                                        <div class="product-tile-gift-card">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="product-card">
                                      white card
                                    </div>
                                    <div class="view-all-accessories">
                                      <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" data-init="switchTab" data-init-param="{&quot;urlParams&quot; : {&quot;categoryId&quot; : &quot;104050402&quot;}}" class="view-all-link hidden-phone">
                Все подобные товары
  </a> </div>
                                  </div>
                                  <a href="http://www.mvideo.ru/products/saundbar-samsung-hw-j8501-10008046" class="product-tile-show-more visible-phone">&gt;</a>
                                </div>
                              </li>
                              <li class="gallery-list-item" rel="1">
                                <div class="product-tile">
                                  <div class="product-tile-picture">
                                    <div class="product-tile-picture-holder">
                                      <a href="http://www.mvideo.ru/products/kabel-cifrovoi-audio-video-belkin-f3y021bf5m-50037461" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Кабель цифровой аудио-видео Belkin F3Y021bf5M">
                                        <div class="lazy-load-image-holder">
                                          <img data-original="img/50037461m.jpg" alt="Кабель цифровой аудио-видео Belkin F3Y021bf5M" class="lazy product-tile-picture-image" src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="product-tile-info">
                                    <div class="product-tail-section">
                                      <div class="product-tile-description">
                                        <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/kabel-cifrovoi-audio-video-belkin-f3y021bf5m-50037461" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Кабель цифровой аудио-видео Belkin F3Y021bf5M" data-track-label="Кабель цифровой аудио-видео Belkin F3Y021bf5M"> Кабель цифровой аудио-видео Belkin F3Y021bf5M
  </a>  </h2>
                                        <div class="product-tile-meta">
                                          <div class="star-ratings">
                                            <div class="star-rating star-rating-large rating-mvideo">
                                              <a href="http://www.mvideo.ru/products/kabel-cifrovoi-audio-video-belkin-f3y021bf5m-50037461#reviews" class="star-rating-canvas-link">
                                                <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                                <span style="width: 1%" class="font-icon icon-star active icon-star-holder-active"></span>
                                                </span><span class="star-rating-reviews-qty">(0)</span>
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
                    2390<span class="price-symbol-rub">р.</span>
  </strong>
                                          </div>
                                        </div>
                                        <div class="error text-error">
                                        </div>
                                        <form id="50037461" action="http://www.mvideo.ru/cart?productId=50037461&amp;skuId=50037461&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.50037461" class="product-tile-add-to-basket hidden-phone" method="post">
                                          <input name="_dyncharset" value="utf-8" type="hidden">
                                          <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                                          <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="pdpTopAccessories" type="hidden">
                                          <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                          <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBasketpdpTopAccessories50037461" data-original-title="" title="">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="50037461" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="50037461" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                            <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=50037461&amp;skuId=50037461" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?ssb_block=pdpTopAccessories" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                            <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                          </div>
                                          <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.50037461" type="hidden">
                                        </form>
                                      </div>
                                      <!--noindex-->

                                      <div id="DivgtmAddToBasketpdpTopAccessories50037461" style="display: none;"><span class="hidden" id="gtmAddToBasketpdpTopAccessories50037461">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "2390",                     "eventContext": "productBlock",                     "eventLocation": "pdpTopAccessories",                     "eventPosition": "1",                     "eventProductCategoryId": "cat2_cis_0000000647",                      "eventProductId": "50037461"                      }</span></div>
                                      <!--/noindex-->
                                      <div class="product-tile-sale">
                                        <div class="product-tile-gift-card">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="product-card">
                                      white card
                                    </div>
                                    <div class="view-all-accessories">
                                      <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" data-init="switchTab" data-init-param="{&quot;urlParams&quot; : {&quot;categoryId&quot; : &quot;513010215&quot;}}" class="view-all-link hidden-phone">
                Все подобные товары
  </a> </div>
                                  </div>
                                  <a href="http://www.mvideo.ru/products/kabel-cifrovoi-audio-video-belkin-f3y021bf5m-50037461" class="product-tile-show-more visible-phone">&gt;</a>
                                </div>
                              </li>
                              <li class="gallery-list-item" rel="2">
                                <div class="product-tile">
                                  <div class="product-tile-picture">
                                    <div class="product-tile-picture-holder">
                                      <a href="http://www.mvideo.ru/products/podstavka-dlya-televizora-akma-v3-610mol-black-50036628" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Подставка для телевизора АКМА V3-610MOL Black">
                                        <div class="lazy-load-image-holder">
                                          <img data-original="img/50036628m.jpg" alt="Подставка для телевизора АКМА V3-610MOL Black" class="lazy product-tile-picture-image" src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="product-tile-info">
                                    <div class="product-tail-section">
                                      <div class="product-tile-description">
                                        <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/podstavka-dlya-televizora-akma-v3-610mol-black-50036628" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Подставка для телевизора АКМА V3-610MOL Black" data-track-label="Подставка для телевизора АКМА V3-610MOL Black"> Подставка для телевизора АКМА V3-610MOL Black
  </a>  </h2>
                                        <div class="product-tile-meta">
                                          <div class="star-ratings">
                                            <div class="star-rating star-rating-large rating-mvideo">
                                              <a href="http://www.mvideo.ru/products/podstavka-dlya-televizora-akma-v3-610mol-black-50036628#reviews" class="star-rating-canvas-link">
                                                <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                                <span style="width: 81%" class="font-icon icon-star active icon-star-holder-active"></span>
                                                </span><span class="star-rating-reviews-qty">(9)</span>
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
                    8790<span class="price-symbol-rub">р.</span>
  </strong>
                                          </div>
                                        </div>
                                        <div class="error text-error">
                                        </div>
                                        <form id="50036628" action="http://www.mvideo.ru/cart?productId=50036628&amp;skuId=50036628&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.50036628" class="product-tile-add-to-basket hidden-phone" method="post">
                                          <input name="_dyncharset" value="utf-8" type="hidden">
                                          <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                                          <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="pdpTopAccessories" type="hidden">
                                          <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                          <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBasketpdpTopAccessories50036628" data-original-title="" title="">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="50036628" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="50036628" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                            <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=50036628&amp;skuId=50036628" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?ssb_block=pdpTopAccessories" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                            <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                          </div>
                                          <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.50036628" type="hidden">
                                        </form>
                                      </div>
                                      <!--noindex-->

                                      <div id="DivgtmAddToBasketpdpTopAccessories50036628" style="display: none;"><span class="hidden" id="gtmAddToBasketpdpTopAccessories50036628">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "8790",                     "eventContext": "productBlock",                     "eventLocation": "pdpTopAccessories",                     "eventPosition": "2",                     "eventProductCategoryId": "cat2_cis_0000000401",                      "eventProductId": "50036628"                      }</span></div>
                                      <!--/noindex-->
                                      <div class="product-tile-sale">
                                        <div class="product-tile-gift-card">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="product-card">
                                      white card
                                    </div>
                                    <div class="view-all-accessories">
                                      <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" data-init="switchTab" data-init-param="{&quot;urlParams&quot; : {&quot;categoryId&quot; : &quot;511040101&quot;}}" class="view-all-link hidden-phone">
                Все подобные товары
  </a> </div>
                                  </div>
                                  <a href="http://www.mvideo.ru/products/podstavka-dlya-televizora-akma-v3-610mol-black-50036628" class="product-tile-show-more visible-phone">&gt;</a>
                                </div>
                              </li>
                              <li class="gallery-list-item" rel="3" style="margin-right: 0px;">
                                <div class="product-tile">
                                  <div class="product-tile-picture">
                                    <div class="product-tile-picture-holder">
                                      <a href="http://www.mvideo.ru/products/setevoi-filtr-interstep-is-sp-106lt50me-000b201-50041690" class="product-tile-picture-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_photo_click" data-track-label="Сетевой фильтр InterStep IS-SP-106LT50ME-000B201">
                                        <div class="lazy-load-image-holder">
                                          <img data-original="img/50041690m.jpg" alt="Сетевой фильтр InterStep IS-SP-106LT50ME-000B201" class="lazy product-tile-picture-image" src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="product-tile-info">
                                    <div class="product-tail-section">
                                      <div class="product-tile-description">
                                        <h2 class="product-tile-title">
                  <a href="http://www.mvideo.ru/products/setevoi-filtr-interstep-is-sp-106lt50me-000b201-50041690" class="product-tile-title-link" data-ga-track="false" data-track-event="click" data-track-category="add_to_cart_pop_up" data-track-action="cart_popup_acessories_product_name_link_click" title="Сетевой фильтр InterStep IS-SP-106LT50ME-000B201" data-track-label="Сетевой фильтр InterStep IS-SP-106LT50ME-000B201">  Сетевой фильтр InterStep IS-SP-106LT50ME-000B201
  </a>  </h2>
                                        <div class="product-tile-meta">
                                          <div class="star-ratings">
                                            <div class="star-rating star-rating-large rating-mvideo">
                                              <a href="http://www.mvideo.ru/products/setevoi-filtr-interstep-is-sp-106lt50me-000b201-50041690#reviews" class="star-rating-canvas-link">
                                                <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                                <span style="width: 61%" class="font-icon icon-star active icon-star-holder-active"></span>
                                                </span><span class="star-rating-reviews-qty">(2)</span>
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
                    1290<span class="price-symbol-rub">р.</span>
  </strong>
                                          </div>
                                        </div>
                                        <div class="error text-error">
                                        </div>
                                        <form id="50041690" action="http://www.mvideo.ru/cart?productId=50041690&amp;skuId=50041690&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.50041690" class="product-tile-add-to-basket hidden-phone" method="post">
                                          <input name="_dyncharset" value="utf-8" type="hidden">
                                          <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                                          <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="pdpTopAccessories" type="hidden">
                                          <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                                          <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart " data-pushable="true" data-action="click" data-holder="#gtmAddToBasketpdpTopAccessories50041690" data-original-title="" title="">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="50041690" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="50041690" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                                            <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=50041690&amp;skuId=50041690" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                                            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?ssb_block=pdpTopAccessories" type="hidden">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                                            <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                                            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                                          </div>
                                          <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.50041690" type="hidden">
                                        </form>
                                      </div>
                                      <!--noindex-->

 {

                                      <div id="DivgtmAddToBasketpdpTopAccessories50041690" style="display: none;"><span class="hidden" id="gtmAddToBasketpdpTopAccessories50041690">{                     "event": "OWOX",                      "eventCategory": "Conversions",                     "eventAction": "click",                     "eventLabel": "AddToCart",                      "eventValue": "1290",                     "eventContext": "productBlock",                     "eventLocation": "pdpTopAccessories",                     "eventPosition": "3",                     "eventProductCategoryId": "cat2_cis_0000000463",                      "eventProductId": "50041690"                      }</span></div>
                                      <!--/noindex-->
                                      <div class="product-tile-sale">
                                        <div class="product-tile-gift-card">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="product-card">
                                      white card
                                    </div>
                                    <div class="view-all-accessories">
                                      <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" data-init="switchTab" data-init-param="{&quot;urlParams&quot; : {&quot;categoryId&quot; : &quot;516040102&quot;}}" class="view-all-link hidden-phone">
                Все подобные товары
  </a> </div>
                                  </div>
                                  <a href="http://www.mvideo.ru/products/setevoi-filtr-interstep-is-sp-106lt50me-000b201-50041690" class="product-tile-show-more visible-phone">&gt;</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <span class="hidden" data-init="bindCarouselEventsForGA" data-init-param=".accessories-carousel-holder"></span>
                          <a class="prev-btn" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" style="display: block;"></a>
                          <a class="next-btn" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" style="display: block;"></a>
                        </div>
                        <div class="carousel-paging"></div>
                      </div>
                      <div class="gallery-extra-content visible-phone">
                        <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="btn btn-invers-deep-grey manufacturers-details-btn visible-phone opener">Еще</a> </div>
                    </div>
                  </div>
                </div>
                <div class="section product-browse-bundle">
                  <div id="promoBundle10301078_0" data-update-bundle-message-url="/browse/product/bundle-presell-message-update.jsp?bundleSkuIds=10007781,10006694" data-init="productBundlePickup" data-init-param="#promoBundle10301078_0" class="js-bundle-pickup-holder">
                    <div data-init="multiBundles" data-init-param=".js-multi-bundles-holder" class="js-multi-bundles-holder multi-bundles-holder  multi-bundles-discount-holder">
                      <form action="http://www.mvideo.ru/cart?_DARGS=/browse/product/bundle-combination.jsp" class="multi-bundles-send-data" method="post">
                        <input name="_dyncharset" value="UTF-8" type="hidden">
                        <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                        <div class="bundle-pickup multi-bundles-discount">
                          <h2>Купите комплект со скидкой</h2>
                          <h3>Содержимое комплектов&nbsp;зависит от&nbsp;способов получения</h3>
                          <div class="row-bundle-pickup">
                            <div class="input-inline disabled">
                              <input id="courier.10301078_0" name="pickup-method" type="radio" disabled="disabled" class="input-radio">
                              <label for="courier.10301078_0" class="label-radio"><span class="fake-radio"></span>Доставка курьером</label>
                            </div>
                            <div class="input-inline">
                              <input id="pickup.10301078_0" name="/atg/commerce/order/purchase/CartModifierFormHandler.addBundleShippingType" value="pickup" class="input-radio" type="radio" checked="">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addBundleShippingType" value=" " type="hidden">
                              <label for="pickup.10301078_0" class="label-radio"><span class="fake-radio"></span>Забрать в магазине</label>
                            </div>
                            <select class="bundle-pickup-select outta-here select-30367" select-id="30367">
                              <option data-icon="icon icon-checkbox" data-store-id="S018">24 часа! Ст. м. «Алексеевская» </option>
                              <option data-icon="icon icon-checkbox" data-store-id="S019">24 часа! ст. м. «Калужская», ул. Обручева</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S026">24 часа! ст. м. «Славянский бульвар», Славянский б-р</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S029">24 часа! ст.м. «Красные ворота», ул. Садовая-Спасская</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S064">24 часа! ст.м. «Улица 1905 года»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S039">Бесединское ш., д.15, ТЦ «Парк Хаус»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S725">Ленинский проспект, д.54, Универмаг «Москва»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S046">МЕГА Белая Дача, г. Котельники</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S089">МКАД, 24-й км, ТРЦ «VEGAS»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S041">МКАД, 47-й км, ТЦ «НАШ»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S044">МКАД, 87-й км, ТЦ «Час Пик»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S091">Пятницкое ш., 7-й км</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S724">Ул. Проспект Вернадского, 86а </option>
                              <option data-icon="icon icon-checkbox" data-store-id="S718">г. Зеленоград, гп. Ржавки, мкр 2, ТРЦ «Зеленопарк»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S087">ст. м. «Авиамоторная», ш. Энтузиастов, ТРК «Город»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S719">ст. м. «Автозаводская», ТРЦ «Ривьера»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S045">ст. м. «Академическая», ТРЦ «Рио»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S034">ст. м. «Алтуфьево», ТЦ «НАШ»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S081">ст. м. «Бабушкинская», ТЦ «Эго Молл»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S011">ст. м. «Варшавская», Чонгарский б-р</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S050">ст. м. «Владыкино», ТРК «Алтуфьевский»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S054">ст. м. «Войковская», ТЦ «Метрополис»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S022">ст. м. «Домодедовская», ул. Генерала Белова</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S057">ст. м. «Калужская», ТРЦ «Рио»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S093">ст. м. «Каширская», ТРК «Москворечье»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S067">ст. м. «Красносельская», ТЦ «Тройка»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S027">ст. м. «Кузьминки», ТЦ «Будапешт»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S099">ст. м. «Ленинский проспект», ТЦ «Гагаринский»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S016">ст. м. «Марьино», ул. Люблинская</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S048">ст. м. «Митино», ТК «Ковчег»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S047">ст. м. «Мякинино», ТРЦ «Вегас» (Крокус Сити)</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S056">ст. м. «Новогиреево», ТД «Перовский»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S051">ст. м. «Новокосино», ул. Новокосинская</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S024">ст. м. «Октябрьское поле», ул. Народного ополчения</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S058">ст. м. «Петровско-Разумовская», Дмитровское ш.</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S096">ст. м. «Пражская», ТРЦ «Columbus»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S015">ст. м. «Преображенская площадь», ул. Большая Черкизовская</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S036">ст. м. «Проспект Вернадского», ТРЦ «Фестиваль»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S082">ст. м. «Речной вокзал», ТЦ «Речной»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S014">ст. м. «Семеновская», ул. Измайловский вал</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S025">ст. м. «Сокольники», ул. Русаковская</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S100">ст. м. «Строгино», ТЦ «Дарья»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S079">ст. м. «Сходненская, ТЦ «Калейдоскоп»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S077">ст. м. «Теплый Стан», ТРЦ «Спектр»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S073">ст. м. «Трубная», ТЦ «Неглинная плаза»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S020">ст. м. «Щёлковская», ТЦ «Щёлково»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S704"> Октябрьский пр-т, д.112 </option>
                              <option data-icon="icon icon-checkbox" data-store-id="S035">МЕГА Химки, 8-й мкр</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S700">МО, Воскресенск, ул. Фединская, стр.1</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S038">МО, г. Балашиха, ТЦ «Вертикаль»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S076">МО, г. Дмитров, ТРК «Дмитровский»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S084">МО, г. Домодедово, ТРЦ «Торговый Квартал»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S078">МО, г. Дубна, пр-т Боголюбова</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S095">МО, г. Жуковский, ТЦ «Океан»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S066">МО, г. Зеленоград, ТК «Панфиловский»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S060">МО, г. Зеленоград, ул. Гоголя</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S052">МО, г. Коломна, ТЦ «Глобус»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S069">МО, г. Красногорск, ТЦ «Солнечный Рай»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S070">МО, г. Мытищи, ТЦ «Альта»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S098">МО, г. Ногинск, ТЦ «Ногинский»,</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S063">МО, г. Одинцово, ТЦ «Дубрава»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S083">МО, г. Орехово-Зуево, ТЦ «Орех»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S097">МО, г. Реутов, Носовихинское ш., ТРЦ «Реутов Парк»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S059">МО, г. Сергиев Посад, пр-т Красной Армии</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S062">МО, г. Серпухов, ТРЦ «Корстон»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S072">МО, г. Солнечногорск, ТРЦ «Солнечный»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S703">МО, г. Ступино, пр-т Победы, д.63А</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S028">МО, г. Химки, ТЦ «ЛИГА»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S080">МО, г. Чехов, ТЦ «Карусель»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S092">МО, г. Щёлково, ТЦ «Гранд Плаза»</option>
                              <option data-icon="icon icon-checkbox" data-store-id="S068">МО, г. Электросталь,ТРЦ «Эльград»</option>
                            </select>
                            <div class="select-area bundle-pickup-select custom-select-30367">
                              <div class="center">24 часа! Ст. м. «Алексеевская» </div><a tabindex="-1" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="select-button">&nbsp;</a>
                              <div class="disable-overlay" style="display: none;"></div>
                            </div>
                          </div>
                          <div id="bundleDiscountMessage10301078_0" class="multi-bundles-discount-message hidden">
                            <div class="message"><i class="font-icon icon-error small-icon"></i>Можно получить только после онлайн-оплаты</div>
                          </div>
                        </div>
                        <div class="multi-items-wrapper">
                          <ul class="multi-bundles-top">
                            <li class="multi-bundles-top-item">
                              <div class="multi-bundles-top-item-plus-holder">
                                <span class="multi-bundles-count">+1</span>
                                <input name="cannotDelete" value="1" type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].catalogRefId" value="10007781" class="jsAjaxProductId" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].catalogRefId" value=" " type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].productId" value="10007781" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].productId" value=" " type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].quantity" value="1" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].quantity" value=" " type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].promotionId" value="promo980008" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].promotionId" value=" " type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].position" value="1" class="jsAjaxProductPosition" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].position" value=" " type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].createdByUser" value="true" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].createdByUser" value=" " type="hidden">
                                <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].serviceSku" value="false" type="hidden">
                                <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[0].serviceSku" value=" " type="hidden">
                                <div class="multi-bundles-img-container">
                                  <div class="multi-bundles-img-vertical">
                                    <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781">
                                      <div class="lazy-load-image-holder">
                                        <img data-original="img/10007781s.jpg" alt="Телевизор Samsung Ultra HD UE55JU7500U" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                      </div>
                                    </a>
                                  </div>
                                </div>
                                <div class="multi-bundles-title-holder">
                                  <div class="multi-bundles-title">
                                    <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781">Телевизор Samsung Ultra HD UE55JU7500U</a>
                                  </div>
                                </div>
                                <div class="multi-bundles-price">
                                  <div class="multi-bundles-old-price">
                                    134990
                                  </div>
                                  <div class="multi-bundles-new-price">
                                    131990<span class="price-symbol-rub">р.</span> </div>
                                  <div class="multi-bundles-discount">
                                    <span class="highlighted-text-primary">
                                          3000
                                        </span>
                                    <span class="highlighted-text-description">экономия</span> </div>
                                </div>
                              </div>
                            </li>
                            <li class="multi-bundles-top-item">
                              <input name="cannotDelete" value="1" type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].catalogRefId" value="10006694" class="jsAjaxProductId" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].catalogRefId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].productId" value="10006694" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].productId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].quantity" value="1" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].quantity" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].promotionId" value="promo980008" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].promotionId" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].position" value="2" class="jsAjaxProductPosition" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].position" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].createdByUser" value="true" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].createdByUser" value=" " type="hidden">
                              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].serviceSku" value="false" type="hidden">
                              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.bundleItems[1].serviceSku" value=" " type="hidden">
                              <div class="multi-bundles-img-container">
                                <div class="multi-bundles-img-vertical">
                                  <a href="http://www.mvideo.ru/products/komplekt-cifrovogo-tv-trikolor-full-hd-e501-c591-evropa-10006694">
                                    <div class="lazy-load-image-holder">
                                      <img data-original="img/10006694s.jpg" alt="Комплект цифрового ТВ Триколор Full HD E501/C591 Европа" class="lazy " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="multi-bundles-title-holder">
                                <div class="multi-bundles-title">
                                  <a href="http://www.mvideo.ru/products/komplekt-cifrovogo-tv-trikolor-full-hd-e501-c591-evropa-10006694">
                                  Комплект цифрового ТВ Триколор Full HD E501/C591 Европа
  </a>
                                </div>
                              </div>
                              <div class="multi-bundles-price">
                                <div class="multi-bundles-old-price">
                                  12990
                                </div>
                                <div class="multi-bundles-new-price">
                                  3000<span class="price-symbol-rub">р.</span> </div>
                                <div class="multi-bundles-discount">
                                  <span class="highlighted-text-primary">
                                        9990
                                      </span>
                                  <span class="highlighted-text-description">экономия</span> </div>
                              </div>
                            </li>
                            <li class="multi-bundles-top-item multi-bundles-right">
                              <table class="prices-table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="multi-bundles-price-lable">
                                        <div class="multi-bundles-lable-discount">Экономия</div>
                                      </div>
                                    </td>
                                    <td class="column-right">
                                      <div class="multi-bundles-discount">
                                        <span class="highlighted-text-primary">
                                                  12990
                                                </span>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="multi-bundles-sum">
                                        <div class="multi-bundles-price-lable">
                                          <div class="multi-bundles-lable-new-price">Цена за&nbsp;комплект</div>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="column-right">
                                      <div class="multi-bundles-discount">
                                        <div class="multi-bundles-new-price">
                                          134990
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">
                                      <div id="gtmBundleBuyDiv">
                                        <span class="hidden" id="gtmBundleBuy">{
                      "event": "OWOX",
                      "eventCategory": "Conversions",
                      "eventAction": "click",
                      "eventLabel": "AddToCart",
                      "eventContext": "package",
                      "eventPosition": "10301078",
                      "eventProductId": "10007781"
                      }</span>
                                      </div>
                                      <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="btn btn-buy-bundle js-multi-bundles-add-to-basket" data-pushable="true" data-action="click" data-holder="#gtmBundleBuy">Купить комплект</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="multi-bundles-build">
                                <div class="build-bundle-text-wrapper">
                                  <p class="build-bundle-text">&nbsp;&nbsp;&nbsp;</p>
                                </div>
                                <a class="btn btn-invers-deep-grey btn-build-bundle" href="http://www.mvideo.ru/create-bundle?bundleId=10301078&amp;skuId=10007781">Собрать свой комплект</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <ul class="multi-bundles-bottom-dicsount">
                          <li class="multi-bundles-bottom-item-dicsount item-build">
                            <div class="multi-bundles-build">
                              <div class="build-bundle-text-wrapper">
                                <p class="build-bundle-text">&nbsp;&nbsp;&nbsp;</p>
                              </div>
                              <a class="btn btn-invers-deep-grey btn-build-bundle" href="http://www.mvideo.ru/create-bundle?bundleId=10301078&amp;skuId=10007781">Собрать свой комплект</a>
                            </div>
                          </li>
                          <li class="multi-bundles-bottom-item-dicsount item-price">
                            <table class="prices-table">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="multi-bundles-price-lable">
                                      <div class="multi-bundles-lable-discount">Экономия</div>
                                    </div>
                                  </td>
                                  <td class="column-right">
                                    <div class="multi-bundles-discount">
                                      <span class="highlighted-text-primary">
                        12990
                      </span>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="multi-bundles-sum">
                                      <div class="multi-bundles-price-lable">
                                        <div class="multi-bundles-lable-new-price">Цена за&nbsp;комплект</div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="column-right">
                                    <div class="multi-bundles-discount">
                                      <div class="multi-bundles-new-price">
                                        134990
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td colspan="2">
                                    <div id="gtmBundleBuyDiv">
                                      <span class="hidden" id="gtmBundleBuy">{
                      "event": "OWOX",
                      "eventCategory": "Conversions",
                      "eventAction": "click",
                      "eventLabel": "AddToCart",
                      "eventContext": "package",
                      "eventPosition": "' + 10301078 + '",
                      "eventProductId": "' + 10007781 + '"
                      }</span>
                                    </div>
                                    <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="btn btn-buy-bundle js-multi-bundles-add-to-basket" data-pushable="true" data-action="click" data-holder="#gtmBundleBuy">
                      Купить комплект
  </a> </td>
                                </tr>
                              </tbody>
                            </table>
                          </li>
                        </ul>
                        <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addBundleItemCount" value="2" type="hidden">
                        <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addBundleItemCount" value=" " type="hidden">
                        <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addBundleStoreId" value="S018" type="hidden">
                        <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addBundleStoreId" value=" " type="hidden">
                        <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addBundleToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781" type="hidden">
                        <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addBundleToOrderErrorURL" value=" " type="hidden">
                        <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addBundleToOrderSuccessURL" value="/cart" type="hidden">
                        <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addBundleToOrderSuccessURL" value=" " type="hidden">
                        <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addBundleToOrder" value=" " type="hidden">
                        <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addBundleToOrder" value=" " type="hidden">
                        <div class="multi-bundles-items">
                        </div>
                        <div class="js-empty-element-HTML">
                          <div class="multi-bundles-top-item empty">
                            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" class="multi-bundles-add-to-collection">
                              <div class="multi-bundles-empty-item-icon"><i class="font-icon icon-plus"></i></div>
                              <p class="multi-bundles-empty-item-text">Добавить в комплект</p>
                            </a>
                          </div>
                        </div>
                        <input name="_DARGS" value="/browse/product/bundle-combination.jsp" type="hidden">
                      </form>
                    </div>
                  </div>
                </div>
                <div class="shadow-top-inner">
                  <div class="section">
                    <div data-init="linkLeaveReview" data-init-param=".product-leave-review-btn, #reviews, create-review-area" class="product-details-reviews-section product-details-section-overview">
                      <div class="product-details-heading">
                        <h2 class="product-details-heading-title">
            Отзывы
          </h2>
                        <!--noindex-->
                        <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews" data-init="switchTab" class="view-all-link">Посмотреть все</a>
                        <!--/noindex-->
                      </div>
                      <!-- Product reviews statistic -->
                      <div class="product-reviews-stats">
                        <div class="product-average-rating">
                          <div class="star-rating star-rating-large rating-mvideo">
                            <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                            <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                            </span><span class="star-rating-reviews-qty">(9)</span>
                          </div>
                        </div>
                        <div class="product-reviews-area">
                          <ul class="product-reviews-info-list">
                            <li class="review-info">
                              <strong class="review-info-title">
            5 звезд
          </strong>
                              <div class="review-info-progress progress">
                                <div class="bar" style="width:100%"></div>
                              </div>
                              <span class="review-info-qty">(9)</span></li>
                            <li class="review-info">
                              <strong class="review-info-title">
            4 звезды
          </strong>
                              <div class="review-info-progress progress">
                                <div class="bar" style="width:0%"></div>
                              </div>
                              <span class="review-info-qty">(0)</span></li>
                            <li class="review-info">
                              <strong class="review-info-title">
            3 звезды
          </strong>
                              <div class="review-info-progress progress">
                                <div class="bar" style="width:0%"></div>
                              </div>
                              <span class="review-info-qty">(0)</span></li>
                            <li class="review-info">
                              <strong class="review-info-title">
            2 звезды
          </strong>
                              <div class="review-info-progress progress">
                                <div class="bar" style="width:0%"></div>
                              </div>
                              <span class="review-info-qty">(0)</span></li>
                            <li class="review-info">
                              <strong class="review-info-title">
            1 звезда
          </strong>
                              <div class="review-info-progress progress">
                                <div class="bar" style="width:0%"></div>
                              </div>
                              <span class="review-info-qty">(0)</span></li>
                          </ul>
                          <div class="product-leave-review">
                            <div class="product-leave-review-description">
                              <span>
            Оставьте свой отзыв о товаре:
                <strong class="product-leave-review-title">Телевизор Samsung Ultra HD UE55JU7500U</strong>
          </span>
                            </div>
                            <a class="product-leave-review-btn btn" href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#"> Оставить свой отзыв
  </a> </div>
                        </div>
                      </div>
                      <div class="product-review" id="product-review-287500003" data-device="true" data-init-param=".product-review-content p, link, {&quot;maxLength&quot; : 380}" data-init="cutText">
                        <div class="product-review-area">
                          <div class="product-review-container">
                            <div class="clearfix">
                              <div class="product-review-meta">
                                <div class="product-review-author">
                                  <div class="product-review-author-text">
                                    <strong class="product-review-author-name">Анна</strong>
                                    <span class="product-review-date">24.12.2015</span>
                                    <strong class="product-review-author-location">Тверь</strong>
                                  </div>
                                </div>
                                <div class="star-rating star-rating-large rating-mvideo product-review-rating">
                                  <span class="star-rating-canvas">
                <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                                  <span style="width: 100%" class="font-icon icon-star active icon-star-holder-active"></span>
                                  </span>
                                </div>
                              </div>
                              <div data-init="btnLikeTooltip" data-id="287500003" data-init-param=".product-review-tools" class="product-review-tools product-review-column">
                                <div class="btn-like-holder">
                                  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-toggle="tooltip" data-title="Спасибо. Ваш голос учтен." class="btn btn-like btn-secondary " data-original-title="" title="">
                                    <i class="font-icon icon-thumb-up"></i><span class="btn-like-text">16</span></a>
                                  <form id="review_287500003_thumbUp" action="http://www.mvideo.ru/sitebuilder/blocks/browse/product-detail/product-review-rate-result.jsp?_DARGS=/sitebuilder/blocks/browse/product-detail/fragments/product-review.jsp.review_thumbUp" method="POST">
                                    <input name="_dyncharset" value="UTF-8" type="hidden">
                                    <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                                    <input name="/com/mvideo/reviews/RatingAndReviewFormHandler.reviewId" value="287500003" type="hidden">
                                    <input name="_D:/com/mvideo/reviews/RatingAndReviewFormHandler.reviewId" value=" " type="hidden">
                                    <input name="/com/mvideo/reviews/RatingAndReviewFormHandler.thumbActionType" value="thumbUp" type="hidden">
                                    <input name="_D:/com/mvideo/reviews/RatingAndReviewFormHandler.thumbActionType" value=" " type="hidden">
                                    <input name="/com/mvideo/reviews/RatingAndReviewFormHandler.rateReview" value="" type="hidden">
                                    <input name="_D:/com/mvideo/reviews/RatingAndReviewFormHandler.rateReview" value=" " type="hidden">
                                    <input name="_DARGS" value="/sitebuilder/blocks/browse/product-detail/fragments/product-review.jsp.review_thumbUp" type="hidden">
                                  </form>
                                </div>
                                <div class="btn-like-holder">
                                  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#" data-toggle="tooltip" data-title="Спасибо. Ваш голос учтен." class="btn btn-like btn-secondary " data-original-title="" title="">
                                    <i class="font-icon icon-thumb-down"></i><span class="btn-like-text">13</span></a>
                                  <form id="review_287500003_thumbDown" action="http://www.mvideo.ru/sitebuilder/blocks/browse/product-detail/product-review-rate-result.jsp?_DARGS=/sitebuilder/blocks/browse/product-detail/fragments/product-review.jsp.review_thumbDown" method="POST">
                                    <input name="_dyncharset" value="UTF-8" type="hidden">
                                    <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                                    <input name="/com/mvideo/reviews/RatingAndReviewFormHandler.reviewId" value="287500003" type="hidden">
                                    <input name="_D:/com/mvideo/reviews/RatingAndReviewFormHandler.reviewId" value=" " type="hidden">
                                    <input name="/com/mvideo/reviews/RatingAndReviewFormHandler.thumbActionType" value="thumbDown" type="hidden">
                                    <input name="_D:/com/mvideo/reviews/RatingAndReviewFormHandler.thumbActionType" value=" " type="hidden">
                                    <input name="/com/mvideo/reviews/RatingAndReviewFormHandler.rateReview" value="" type="hidden">
                                    <input name="_D:/com/mvideo/reviews/RatingAndReviewFormHandler.rateReview" value=" " type="hidden">
                                    <input name="_DARGS" value="/sitebuilder/blocks/browse/product-detail/fragments/product-review.jsp.review_thumbDown" type="hidden">
                                  </form>
                                </div>
                              </div>
                            </div>
                            <div class="product-review-content">
                              <div class="product-review-description">
                                <h3 class="product-review-content-title">Отличный телевизор!!!</h3>
                                <p><span class="text-cutter-wrapper">Купили месяц назад, довольны на все 100%. Доставку заказывали на одно число, потом планы поменялись, позвонили в службу доставки попросили привести пораньше, ребята сработали очень оперативно и на следующий день покупка была  дома!  Отличный телевизор!  отличная картинка и звук! Очень красивый!! Рекомендуем!!!</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="similar-products-holder">
                  <div class="lazy-content" data-url="http://www.mvideo.ru:80/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781?ssb_block=similarProducts">
                    <div class="lazy-load-content-holder"></div>
                  </div>
                </div>
                <div class="shadow-top-inner listing-banner">
                  <div class="lazy-load-image-holder">
                    <img data-original="img/warranty-banner-big.jpg" alt="Description" class="lazy visible-desktop " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                    <img data-original="img/warranty-banner-tablet.jpg" alt="Description" class="lazy visible-tablet " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                    <img data-original="img/warranty-banner-small.jpg" alt="Description" class="lazy visible-phone " src="<?php echo get_template_directory_uri(); ?>/img/stub.gif">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-heading visible-phone">
              <h3>  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification">Характеристики<i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i></a>
            </h3>
            </div>
            <div data-id="specification" data-content-url="?ssb_block=descriptionTabContentBlock&amp;ajax=true&amp;requestId=&amp;tab=specification" class="tab-body">
              <div class="tab-inner">
              </div>
            </div>
            <div class="tab-heading visible-phone">
              <h3>  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews">Отзывы<i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i></a>
            </h3>
            </div>
            <div data-id="reviews" data-content-url="?ssb_block=reviewsTabContentBlock&amp;ajax=true&amp;requestId=&amp;tab=reviews" class="tab-body">
              <div class="tab-inner">
              </div>
            </div>
            <div class="tab-heading visible-phone">
              <h3>  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories">Аксессуары<i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i></a>
            </h3>
            </div>
            <div data-id="accessories" data-content-url="?ssb_block=accessoriesTabContentBlock&amp;ajax=true&amp;requestId=&amp;tab=accessories" class="tab-body">
              <div class="tab-inner">
              </div>
            </div>
            <div class="tab-heading visible-phone">
              <h3>  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#shopdirections">Наличие в магазинах<i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i></a>
            </h3>
            </div>
            <div data-id="shopdirections" data-content-url="?ssb_block=availabilityContentBlockContainer&amp;ajax=true&amp;requestId=&amp;tab=shopdirections" class="tab-body">
              <div class="tab-inner">
              </div>
            </div>
          </div>
        </div>
        <div style="display:none;" data-init="stickyHeaderProduct" data-instance="stickyHeader" data-device="true" class="product-details-sticky-header">
          <div class="section">
            <div class="sticky-header-holder">
              <div class="sticky-header-left">
                <a href="http://www.mvideo.ru/" class="header-logo font-icon icon-logo-main">
                  <img class="header-logo-img" src="<?php echo get_template_directory_uri(); ?>/img/mvideo-logo.png" alt="М.Видео, нам не всё равно">
                  <strong>М.Видео, нам не всё равно</strong>
                </a>
                <div class="image-holder">
                  <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" data-init="switchTab">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/10007781s.jpg" alt="Купить null в интернет-магазине М.Видео" class="product-image">
                  </a>
                </div>
              </div>
              <div class="sticky-header-center">
                <strong class="product-title">
            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" data-init="switchTab">
              Телевизор Samsung Ultra HD UE55JU7500U
            </a>
          </strong>
                <div class="product-data-rating-code">
                  <div class="star-rating rating-mvideo">
                    <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews" data-init="switchTab" class="star-rating-canvas-link">
                      <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                      <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                      </span><span class="star-rating-reviews-qty">(9)</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="sticky-header-right">
                <div class="error text-error">
                </div>
                <form id="10007781" action="http://www.mvideo.ru/cart?productId=10007781&amp;skuId=10007781&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10007781" class="" method="post">
                  <input name="_dyncharset" value="UTF-8" type="hidden">
                  <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                  <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="productDetailTabContainerBlock" type="hidden">
                  <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
                  <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart pull-right" data-pushable="true" data-action="click" data-holder="#gtmAddToBasket10007781" data-original-title="" title="">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10007781" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10007781" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
                    <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10007781&amp;skuId=10007781" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
                    <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781" type="hidden">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
                    <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
                    <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
                  </div>
                  <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10007781" type="hidden">
                </form>
                <div class="price-holder">
                  <div class="product-price">
                    <div class="product-price pricing-product-detail">
                      <strong class="product-price-current">
                    134990<span class="price-symbol-rub">р.</span>
  </strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer grayLighter">
        <div class="footer-top">
          <div class="section">
            <div class="footer-sign-up pseudo-table">
              <i class="font-icon icon-e-mail pseudo-td"></i>
              <div class="footer-sign-text pseudo-td">Подпишитесь! Новинки, скидки, предложения!</div>
            </div>
            <div data-init-param="#subscription-form" data-init="validationHandler" id="js-subscription-form" class="footer-subscribe">
              <div id="js-subscription-form" data-init="subscriptionInputHandler" data-init-param="#subscription-form">
                <form id="subscription-form" action="http://www.mvideo.ru/?_DARGS=/sitebuilder/blocks/subscription.jsp" method="POST" autocomplete="on" novalidate="novalidate">
                  <input name="_dyncharset" value="UTF-8" type="hidden">
                  <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
                  <div class="controls">
                    <div class="input-wrap">
                      <div class="input ">
                        <input id="frm-subscr-email-address" data-msg-required="Укажите email" data-msg-regexp="E-mail имеет неверный формат" maxlength="256" data-rule-regexp="^[a-zA-Z0-9\!#\$%&amp;&#39;\*\+\/\=\?\^_`\{\|\}~-]+(?:\.[a-zA-Z0-9\!#\$%&amp;&#39;\*\+\/\=\?\^_`\{\|\}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$" placeholder="Введите email" name="/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribingEmail" value="" tabindex="-1" data-rule-required="true" type="text">
                        <input name="_D:/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribingEmail" value=" " type="hidden">
                      </div>
                    </div>
                    <div class="controls hidden">
                      <input minlength="1" id="subscr-on-news-from-footer" data-msg-required="Выберите вариант подписки" name="/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribeOnNews" value="true" class="input-checkbox" type="checkbox" checked="checked">
                      <input name="_D:/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribeOnNews" value=" " type="hidden">
                      <label for="subscr-on-news-from-footer" class="checkbox label-checkbox">
                        <span class="fake-checkbox"></span>Новости и акции М.Видео</label>
                    </div>
                    <input id="submitSubscribe" name="/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribeUserOnNews" value="Подписаться" class="btn" type="submit">
                    <input name="_D:/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribeUserOnNews" value=" " type="hidden">
                    <input name="/com/mvideo/subscription/UserSubscriptionsFormHandler.ajaxSubscribeUserSuccessURL" value="/sitebuilder/blocks/subscriptionSuccessJson.jsp" type="hidden">
                    <input name="_D:/com/mvideo/subscription/UserSubscriptionsFormHandler.ajaxSubscribeUserSuccessURL" value=" " type="hidden">
                    <input name="/com/mvideo/subscription/UserSubscriptionsFormHandler.ajaxSubscribeUserErrorURL" value="/sitebuilder/blocks/subscriptionErrorJson.jsp" type="hidden">
                    <input name="_D:/com/mvideo/subscription/UserSubscriptionsFormHandler.ajaxSubscribeUserErrorURL" value=" " type="hidden">
                  </div>
                  <label for="frm-subscr-email-address" class="text-success">
                  </label>
                  <label for="frm-subscr-email-address" class="text-error"></label>
                  <input type="hidden" class="input-atg-fix" name="/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribeUserOnNews">
                  <input name="_DARGS" value="/sitebuilder/blocks/subscription.jsp" type="hidden">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-middle">
          <div class="section">
            <div data-init-param=".nav-accordion-body" data-init="addParentClass" id="js-footer-accordion" class="footer-nav accordion">
              <div class="footer-col accordion-group">
                <h3 class="accordion-heading">
                    <a href="http://www.mvideo.ru/mvideo-companiya">Компания М.Видео</a>
                    <span data-toggle="collapse" data-parent="#js-footer-accordion" data-target="#nav-part-0" class="accordion-btns collapsed">
                      <i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i>
                    </span>
                  </h3>
                <div id="nav-part-0" class="nav-accordion-body">
                  <ul class="footer-nav-list">
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/news-hub" class="footer-nav-link">Новости</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/nam-nevseravno" class="footer-nav-link">Нам не всё равно</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/company" class="footer-nav-link">О компании</a></li>
                    <li class="footer-nav-item"><a href="http://invest.mvideo.ru/" target="_blank" class="footer-nav-link">Инвесторам и акционерам</a></li>
                    <li class="footer-nav-item"><a href="http://invest.mvideo.ru/eng/" target="_blank" class="footer-nav-link">For Our Investors</a></li>
                    <li class="footer-nav-item"><a href="http://job.mvideo.ru/" target="_blank" class="footer-nav-link">Вакансии</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/e-tender" class="footer-nav-link">Тендеры</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/eco" class="footer-nav-link">Экологические инициативы</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/media/Pdf/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7_01-206%201_%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%20%D0%9F%D0%94_%D0%9F%D1%80%D0%B8%D0%BB_%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0.pdf" class="footer-nav-link">Политика</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/fund" class="footer-nav-link">Благотворительность</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/rent" class="footer-nav-link">Аренда торговых помещений</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/contacts" class="footer-nav-link">Контакты</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-col accordion-group">
                <h3 class="accordion-heading">
                    <a href="http://www.mvideo.ru/mvideo-internet-magazin">Интернет-магазин</a>
                    <span data-toggle="collapse" data-parent="#js-footer-accordion" data-target="#nav-part-1" class="accordion-btns collapsed">
                      <i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i>
                    </span>
                  </h3>
                <div id="nav-part-1" class="nav-accordion-body">
                  <ul class="footer-nav-list">
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/how-to-buy" class="footer-nav-link">Как купить в интернет-магазине?</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/pamyatka" class="footer-nav-link">Памятка для клиентов</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/pickup" class="footer-nav-link">Закажи и забери!</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/catalog" class="footer-nav-link">Каталог товаров</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/deliverypage" class="footer-nav-link">Доставка</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-col accordion-group">
                <h3 class="accordion-heading">
                    <a href="http://www.mvideo.ru/mvideo-vygodno">С нами выгодно</a>
                    <span data-toggle="collapse" data-parent="#js-footer-accordion" data-target="#nav-part-2" class="accordion-btns collapsed">
                      <i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i>
                    </span>
                  </h3>
                <div id="nav-part-2" class="nav-accordion-body">
                  <ul class="footer-nav-list">
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/vse-akcii" class="footer-nav-link">Акции</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo-bonus.ru/" target="_blank" class="footer-nav-link">М.Видео-Бонус</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/business" class="footer-nav-link">М.Бизнес</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/partnerskaya-programma" class="footer-nav-link">Партнёрская программа</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/podarochnye-karty" class="footer-nav-link">Подарочные карты</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/ppc" class="footer-nav-link">Нашли дешевле? Снизим цену!</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-col accordion-group">
                <h3 class="accordion-heading">
                    <a href="http://www.mvideo.ru/mvideo-udobno">С нами удобно</a>
                    <span data-toggle="collapse" data-parent="#js-footer-accordion" data-target="#nav-part-3" class="accordion-btns collapsed">
                      <i class="font-icon icon-plus"></i><i class="font-icon icon-minus"></i>
                    </span>
                  </h3>
                <div id="nav-part-3" class="nav-accordion-body">
                  <ul class="footer-nav-list">
                    <li class="footer-nav-item"><a href="http://service.mvideo.ru/universal-pay/" target="_blank" class="footer-nav-link">Оплати кредит</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/credit" class="footer-nav-link">Купи в кредит</a></li>
                    <li class="footer-nav-item"><a href="http://service.mvideo.ru/installation/" target="_blank" class="footer-nav-link">Установка техники</a></li>
                    <li class="footer-nav-item"><a href="http://service.mvideo.ru/bistroservice/" target="_blank" class="footer-nav-link">Быстросервис</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/exchange" class="footer-nav-link">Обмен и возврат без проблем</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/help" class="footer-nav-link">Часто Задаваемые Вопросы</a></li>
                    <li class="footer-nav-item"><a href="http://www.mvideo.ru/favorite-store" class="footer-nav-link">Мой любимый магазин</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-feedback">
              <div class="footer-feedback-part">
                <h3 class="footer-feedback-title"> <a href="http://www.mvideo.ru/mvideo-kontakty">Обратная связь</a></h3>
                <p> <a href="http://www.mvideo.ru/shop-feedbacks/?eshop=true">Оставьте отзыв</a>&nbsp; и помогите нам стать лучше.</p>
                <div class="footer-links">
                  <div class="footer-yandex-link">Оставьте отзыв о нас на <a href="http://market.yandex.ru/shop/211/reviews/add" target="_blank"><i class="font-icon icon-yandex-logo"></i></a></div>
                </div>
              </div>
              <div class="footer-socials-part">
                <div class="footer-socials">
                  <h3 class="footer-socials-title">М.Видео в соцсетях</h3>
                  <ul>
                    <li>
                      <a href="http://facebook.com/mvideo.ru" target="_blank" class="socials-link font-icon icon-facebook"></a>
                    </li>
                    <li>
                      <a href="http://twitter.com/mvideo" target="_blank" class="socials-link font-icon icon-twitter"></a>
                    </li>
                    <li>
                      <a href="http://vk.com/mvideo" target="_blank" class="socials-link font-icon icon-vk"></a>
                    </li>
                    <li>
                      <a href="http://odnoklassniki.ru/mvideo" target="_blank" class="socials-link font-icon icon-odnoklassniki"></a>
                    </li>
                    <li>
                      <a href="http://youtube.com/mvideoru" target="_blank" class="socials-link font-icon icon-youtube"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="section">
            <div class="footer-akit-ico">
              <a href="http://www.mvideo.ru/akit"><img src="<?php echo get_template_directory_uri(); ?>/img/akit-logo.png" alt="АКИТ - Ассоциация Компаний Интернет Торговли" title="АКИТ"></a>
            </div>
            <div class="footer-copyright">
              <a href="http://www.mvideo.ru/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" alt="М.Видео" title="М.Видео"></a>
              Copyright© «М.Видео»,&nbsp;2016
            </div>
            <ul class="footer-sub-nav">
              <li><a href="http://www.mvideo.ru/legal-notice">Официальная информация</a></li>
              <li><a href="http://www.mvideo.ru/contacts">Свяжитесь с нами</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <iframe name="oauth2relay369446746" id="oauth2relay369446746" src="<?php echo get_template_directory_uri(); ?>/img/postmessageRelay.html" tabindex="-1" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe>

  <div class="device-manager"></div>
  <div class="sticky-header sticky-header-product" style="display: none;">
    <div class="section">
      <div class="sticky-header-holder">
        <div class="sticky-header-left">
          <a href="http://www.mvideo.ru/" class="header-logo font-icon icon-logo-main">
            <img class="header-logo-img" src="<?php echo get_template_directory_uri(); ?>/img/mvideo-logo.png" alt="М.Видео, нам не всё равно">
            <strong>М.Видео, нам не всё равно</strong>
          </a>
          <div class="image-holder">
            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" data-init="switchTab">
              <img src="<?php echo get_template_directory_uri(); ?>/img/10007781s.jpg" alt="Купить null в интернет-магазине М.Видео" class="product-image">
            </a>
          </div>
        </div>
        <div class="sticky-header-center">
          <strong class="product-title">
            <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" data-init="switchTab">
              Телевизор Samsung Ultra HD UE55JU7500U
            </a>
          </strong>
          <div class="product-data-rating-code">
            <div class="star-rating rating-mvideo">
              <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews" data-init="switchTab" class="star-rating-canvas-link">
                <span class="star-rating-canvas">
    <span class="font-icon icon-star inactive icon-star-holder-inactive"></span>
                <span style="width: 101%" class="font-icon icon-star active icon-star-holder-active"></span>
                </span><span class="star-rating-reviews-qty">(9)</span>
              </a>
            </div>
          </div>
        </div>
        <div class="sticky-header-right">
          <div class="error text-error">
          </div>
          <form id="10007781" action="http://www.mvideo.ru/cart?productId=10007781&amp;skuId=10007781&amp;_DARGS=/sitebuilder/components/product/add-to-basket.jsp.10007781" class="" method="post">
            <input name="_dyncharset" value="UTF-8" type="hidden">
            <input name="_dynSessConf" value="-2688242646132088425" type="hidden">
            <input name="/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value="productDetailTabContainerBlock" type="hidden">
            <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.blockId" value=" " type="hidden">
            <div data-init="custom-tooltip" data-tooltip-text="" data-init-param=",,,true" class="product-tile-add-to-basket-btn btn font-icon icon-trolley-cart pull-right" data-pushable="true" data-action="click" data-holder="#gtmAddToBasket10007781" data-original-title="" title="">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value="1" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemCount" value=" " type="hidden">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value="Site_1" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.siteId" value=" " type="hidden">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value="10007781" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].catalogRefId" value=" " type="hidden">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value="10007781" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].productId" value=" " type="hidden">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value="1" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.items[0].quantity" value=" " type="hidden">
              <input id="js-store-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value="" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.storeId" value=" " type="hidden">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value="/cart?productId=10007781&amp;skuId=10007781" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderSuccessURL" value=" " type="hidden">
              <input name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value="/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781" type="hidden">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrderErrorURL" value=" " type="hidden">
              <input id="js-form-submit-id" name="/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value="Добавить в корзину" class="btn submit-basket" type="submit">
              <input name="_D:/atg/commerce/order/purchase/CartModifierFormHandler.addItemToOrder" value=" " type="hidden">
            </div>
            <input name="_DARGS" value="/sitebuilder/components/product/add-to-basket.jsp.10007781" type="hidden">
          </form>
          <div class="price-holder">
            <div class="product-price">
              <div class="product-price pricing-product-detail">
                <strong class="product-price-current">
                    134990<span class="price-symbol-rub">р.</span>
  </strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tabset hidden-phone">
      <div class="tabset-container">
        <ul class="tabset-list">
          <li class="tabset-item active"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" class="tabset-item-link">         О товаре        </a> </li>
          <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#specification" class="tabset-item-link">         Характеристики        </a> </li>
          <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#reviews" class="tabset-item-link">         Отзывы        </a> </li>
          <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#accessories" class="tabset-item-link">         Аксессуары        </a> </li>
          <li class="tabset-item"> <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#shopdirections" class="tabset-item-link">         Наличие в магазинах        </a> </li>
        </ul>
      </div>
    </div>
  </div>
<img src="<?php echo get_template_directory_uri(); ?>/img/hit" width="1" height="1" class="hidden" alt="">
  <span class="hidden" id="redHelperAction">
      {
        "Chat opened": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "openOnlineConsultant",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781",
          "mutable": "true",
          "mutationFunction": "mvideo.Module._items.gtmRhVidMutationFunction"
        },
        "Invitation accepted": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "OnlineConsultant",
          "eventContext": "accept",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781",
          "timingCategory": "Forms",
          "timingVar": "send",
          "timingLabel": "accept",
          "eventForm": "OnlineConsultant",
          "mutable": "true",
          "timeStartEvent": "Invitation shown",
          "timeEndEvent": "Invitation accepted",
          "mutationFunction": "mvideo.Module._items.gtmRhGeneralMutationFunction"
        },
        "Invitation rejected": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "OnlineConsultant",
          "eventContext": "reject",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781"
        },
        "Message sent": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "send",
          "eventLabel": "messageOnlineConsultant",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781",
          "timingCategory": "Forms",
          "timingVar": "send",
          "timingLabel": "message",
          "eventForm": "OnlineConsultant",
          "mutable": "true",
          "mutationFunction": "mvideo.Module._items.gtmRhGeneralMutationFunction",
          "timeStartEvent": "Chat opened",
          "timeEndEvent": "Message sent"
        },
        "Chat closed": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "click",
          "eventLabel": "complateOnlineConsultant",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781",
          "timingCategory": "Forms",
          "timingVar": "send",
          "timingLabel": "complate",
          "eventForm": "OnlineConsultant",
          "mutable": "true",
          "mutationFunction": "mvideo.Module._items.gtmRhGeneralMutationFunction",
          "timeStartEvent": "Message sent",
          "timeEndEvent": "Chat closed"
        },
        "Like": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "send",
          "eventLabel": "ratingOnlineConsultant",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781",
          "eventContext": "like",
          "mutable": "true",
          "mutationFunction": "mvideo.Module._items.gtmRhGeneralMutationFunction"
        },
        "Dislike": {
          "event": "OWOX",
          "eventCategory": "Interactions",
          "eventAction": "send",
          "eventLabel": "ratingOnlineConsultant",
          "eventProductCategoryId": "cat2_cis_0000000001",
          "eventProductId": "10007781",
          "eventContext": "dislike",
          "mutable": "true",
          "mutationFunction": "mvideo.Module._items.gtmRhGeneralMutationFunction"
        }
      }
    </span>
  <!-- 126ms (4ms / 1ms / 121ms) | MStore-weblogic-test-prod-a -->
  <iframe id="apiproxyed011dd507befb8911df97c5b6e12d219d8fef670.6080046305209756" name="apiproxyed011dd507befb8911df97c5b6e12d219d8fef670.6080046305209756" src="<?php echo get_template_directory_uri(); ?>/img/proxy.html" tabindex="-1" style="width: 1px; height: 1px; position: absolute; top: -100px;"></iframe>

  <div id="netotiate-hub-container" class="" style="">
    <iframe id="netotiate-hub" src="<?php echo get_template_directory_uri(); ?>/img/saved_resource(2).html" width="1px" height="1px" overflow="hidden" frameborder="0" class="netotiate-window-client"></iframe>
  </div>

  <div id="netotiate_plugin" style="display: none;" class="">

  </div>
</body>

</html>
