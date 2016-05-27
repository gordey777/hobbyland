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

  <?php do_action( 'storefront_before_footer' ); ?>



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


<!--         <div class="footer-bottom">
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
</div> -->
      </footer>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

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

</body>
</html>
