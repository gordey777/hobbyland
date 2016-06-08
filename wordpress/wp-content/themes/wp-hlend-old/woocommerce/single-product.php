<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="content-top-section">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>


		<?php while ( have_posts() ) : the_post(); ?>



<div  itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class('section content'); ?>>


            <div class="content-top-section-layout">
              <div class="content-top-primary-section">
                <div class="checkout-section-holder">
                  <div class="product-details-data-container">
                    <div class="product-data" data-pushable="true" data-action="redHelperAction" data-holder="#redHelperAction">
                      <div class="product-data-header">
                        <h1 itemprop="name" class="product-title"><?php the_title(); ?></h1>


<!-- BREND LOGO
 -->
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
                      <div class="imeges image image-holder">


<!--        IMEGE-->

                             <?php
                                if ( has_post_thumbnail() ) {
                                  $image_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
                                  $image_link    = wp_get_attachment_url( get_post_thumbnail_id() );
                                  $image         = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
                                    'title' => get_the_title( get_post_thumbnail_id() )
                                  ) );

                                  $attachment_count = count( $product->get_gallery_attachment_ids() );

                                  if ( $attachment_count > 0 ) {
                                    $gallery = '[product-gallery]';
                                  } else {
                                    $gallery = '';
                                  }

                                  echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_caption, $image ), $post->ID );

                                } else {

                                  echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );

                                }
                              ?>

                              <?php do_action( 'woocommerce_product_thumbnails' ); ?>



<!--                         <div class="product-badge" data-pushable="true" data-action="load" data-holder="#gtmSkuMarkerBubbleShow">


  <a href="http://www.mvideo.ru/promo/rassrochka-0024" id="product-page-bundle-marker" data-pushable="true" data-action="click" data-holder="#gtmSkuMarkerBubbleClick" target="_blank">
    <img src="<?php echo get_template_directory_uri(); ?>/img/rassrochka-0024-bubble_0-0-24.png" alt=" " class="">
  </a>
</div> -->
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



                          </div>
                        </div>
                        <div class="modal-footer">
                          <div class="carousel-holder">
                            <div class="list-carousel" data-device="true">

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




                        <p>      <div class="expanded-container">
                      <!-- User not authorized -->
                      <div class="form-block not-authorized">



                          Видели товар дешевле? Отправьте ссылку на данный товар. У конкурента будет цена ниже — вернем разницу! Промокод будет отправлен на телефон и е-mail.
                          <br>
                          <a href="http://www.mvideo.ru/ppc" target="_blank" data-pushable="true" data-action="click" data-holder="#gtmServiceBestPriceHelp"></a><a href="http://www.mvideo.ru/ppc" target="_blank">Правила</a>
                        </p>
                        <div class="authorized-block">
                          <p>
                            Для участия в программе вы должны быть авторизованы.
                          </p>

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

                           <strong>Цена</strong>
                          </div>


                        <div class="product-details-summary-prices">
                          <div class="product-price pricing-product-detail">
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="product-price">
                              <strong itemprop="price" class="product-price-current">

                               <?php echo $product->get_price_html(); ?>

                              <meta itemprop="price" content="<?php echo esc_attr( $product->get_price() ); ?>" />
                              <meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
<!--                               <link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
 -->
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
                              </strong>
                              </div>

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

    <button type="submit" class="btn btn-primary btn-fluid"><?php echo $product->single_add_to_cart_text(); ?></button>


                        </div>


                        <a href="http://www.mvideo.ru/products/televizor-samsung-ultra-hd-ue55ju7500u-10007781#overview" class="view-similar-products" data-holder="#gtmSimilarProducts" data-pushable="true" data-action="click" data-init="switchTab" data-init-param="{&quot;subTargetBlock&quot;: &quot;.similar-products-holder&quot;}">
                Смотреть похожие товары
  </a>


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




<?php
                            /**
                             * Single Product tabs
                             *
                             * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
                             *
                             * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
                             * will need to copy the new files to your theme to maintain compatibility. We try to do this.
                             * as little as possible, but it does happen. When this occurs the version of the template file will.
                             * be bumped and the readme will list any important changes.
                             *
                             * @see       http://docs.woothemes.com/document/template-structure/
                             * @author  WooThemes
                             * @package WooCommerce/Templates
                             * @version 2.4.0
                             */

                            if ( ! defined( 'ABSPATH' ) ) {
                              exit;
                            }

                            /**
                             * Filter tabs and allow third parties to add their own.
                             *
                             * Each tab is an array containing title, callback and priority.
                             * @see woocommerce_default_product_tabs()
                             */
                            $tabs = apply_filters( 'woocommerce_product_tabs', array() );

                            if ( ! empty( $tabs ) ) : ?>

                            <div class="top-section-background">

                              <div class="tab-container tab-container-product-details">
                                                <div class="tabset-container woocommerce-tabs wc-tabs-wrapper">
                                                  <ul class="tabs wc-tabs tabset hidden-phone">
                                                    <?php foreach ( $tabs as $key => $tab ) : ?>
                                                      <li class="<?php echo esc_attr( $key ); ?>_tab tabset-item">
                                                        <a href="#tab-<?php echo esc_attr( $key ); ?>" class="tabset-item-link"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
                                                      </li>

                                                    <?php endforeach; ?>

                                                  </ul>
                                                  <?php foreach ( $tabs as $key => $tab ) : ?>
                                                    <div class="panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
                                                      <?php call_user_func( $tab['callback'], $key, $tab ); ?>
                                                    </div>
                                                  <?php endforeach; ?>
                                                </div>

                                        <?php endif; ?>
                              </div>

                            </div>






                    <?php endwhile; // end of the loop. ?>


Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore optio architecto, id explicabo libero aspernatur aperiam voluptatibus doloribus autem repudiandae. Ut, ipsa, error! Dolorem iusto porro, ad eos impedit enim.

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
