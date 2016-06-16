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

                  <div class="controls">
                    <div class="input-wrap">
                      <div class="input ">
                        <input id="frm-subscr-email-address" data-msg-required="Укажите email" data-msg-regexp="E-mail имеет неверный формат" maxlength="256" data-rule-regexp="^[a-zA-Z0-9\!#\$%&amp;&#39;\*\+\/\=\?\^_`\{\|\}~-]+(?:\.[a-zA-Z0-9\!#\$%&amp;&#39;\*\+\/\=\?\^_`\{\|\}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$" placeholder="Введите email" name="/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribingEmail" value="" tabindex="-1" data-rule-required="true" type="text">

                      </div>
                    </div>

                    <input id="submitSubscribe" name="/com/mvideo/subscription/UserSubscriptionsFormHandler.subscribeUserOnNews" value="Подписаться" class="btn" type="submit">

                  </div>
                  <label for="frm-subscr-email-address" class="text-success">
                  </label>
                  <label for="frm-subscr-email-address" class="text-error"></label>
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

                         <?php wpeFootNav(); ?>



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

                           <?php wpeFootNavTwo(); ?>


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

                   <?php wpeFootNavThree(); ?>



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

                                    <?php wpeFootNavFor(); ?>



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


<!--       </div>
  </div>


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

<div id="netotiate-hub-container" class="" style="">

</div>

<div id="netotiate_plugin" style="display: none;" class="">

</div> -->

  <?php wp_footer(); ?>

</body>
</html>

