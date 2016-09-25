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
 * @see 	    http://docs.woothemes.com/document/template-structure/
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


              ?>

              <div class="tabs">

              <ul id="more_info_tabs" class="idTabs idTabsShort clearfix">
                <?php
                $i = 1;
                if ( ! empty( $tabs ) ) : ?>
                  <?php foreach ( $tabs as $key => $tab ) : ?>
                    <li class="<?php echo esc_attr( $key ); ?>_tab">
                      <a href="#idTab<?php echo $i; ?>">
                        <span>
                          <?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
                        </span>
                      </a>
                    </li>
                    <?php $i++;
                  endforeach;
                endif; ?>

                <li>
                  <a id="more_info_tab_data_sheet" href="#idTab6">Data sheet</a>
                </li>
                <li>
                  <a href="#idTab7">Reviews</a>
                </li>

              </ul>

              <?php
              $k = 1;
              if ( ! empty( $tabs ) ) : ?>
                  <?php foreach ( $tabs as $key => $tab ) : ?>
                    <section id="idTab<?php echo $k; ?>" class="page-product-box">
                      <div class="rte" id="tab-<?php echo esc_attr( $key ); ?>">
                        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
                      </div>
                    </section>
                  <?php $k++;
                endforeach;
              endif; ?>

              <section id="idTab6" class="page-product-box">
                <table class="table-data-sheet">
                  <tbody>
                    <tr class="odd">
                      <td>Compositions</td>
                      <td>Polyester</td>
                    </tr>
                    <tr class="even">
                      <td>Styles</td>
                      <td>Girly</td>
                    </tr>
                    <tr class="odd">
                      <td>Properties</td>
                      <td>Midi Dress</td>
                    </tr>
                  </tbody>
                </table>
              </section>

              <div id="idTab7">
                <div id="product_comments_block_tab">
                  <div class="comment row" itemprop="review" itemscope="" itemtype="https://schema.org/Review">
                    <div class="comment_author col-sm-2"> <span>Grade&nbsp;</span>
                      <div class="star_content clearfix" itemprop="reviewRating" itemscope="" itemtype="https://schema.org/Rating">
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <div class="star star_on"></div>
                        <meta itemprop="worstRating" content="0">
                        <meta itemprop="ratingValue" content="5">
                        <meta itemprop="bestRating" content="5">
                      </div>
                      <div class="comment_author_infos"> <strong itemprop="author">1</strong>
                        <meta itemprop="datePublished" content="2016-03-04"> <em>03/04/2016</em></div>
                    </div>
                    <div class="comment_details col-sm-10">
                      <p itemprop="name" class="title_block"> <strong>1</strong></p>
                      <p itemprop="reviewBody">1</p>
                      <ul></ul>
                    </div>
                  </div>
                  <p class="align_center">
                    <a id="new_comment_tab_btn" class="btn btn-default button button-small open-comment-form" href="#"> <span>Write your review!</span> </a>
                  </p>
                </div>
                </div> <!-- #idTab7 -->

              <div style="display: none;">
                <div id="new_comment_form">
                  <form id="id_new_comment_form" action="#">
                    <h2 class="page-subheading"> Write a review</h2>
                    <div class="row">
                      <div class="product clearfix col-xs-12 col-sm-6">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/beagle(6).jpg" height="181" width="125" alt="Beagle"> -->
                        <div class="product_desc">
                          <p class="product_name"> <strong>Beagle</strong></p>
                          <p>Printed chiffon knee length dress with tank straps. Deep v-neckline.</p>
                        </div>
                      </div>
                      <div class="new_comment_form_content col-xs-12 col-sm-6">
                        <div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
                          <ul></ul>
                        </div>
                        <ul id="criterions_list">
                          <li>
                            <label>Quality:</label>
                            <div class="star_content">
                              <input class="star not_uniform" type="radio" name="criterion[1]" value="1">
                              <input class="star not_uniform" type="radio" name="criterion[1]" value="2">
                              <input class="star not_uniform" type="radio" name="criterion[1]" value="3">
                              <input class="star not_uniform" type="radio" name="criterion[1]" value="4" checked="checked">
                              <input class="star not_uniform" type="radio" name="criterion[1]" value="5">
                            </div>
                            <div class="clearfix"></div>
                          </li>
                        </ul>
                        <label for="comment_title"> Title: <sup class="required">*</sup> </label>
                        <input id="comment_title" name="title" type="text" value="">
                        <label for="content"> Comment: <sup class="required">*</sup> </label>
                        <textarea id="content" name="content"></textarea>
                        <label> Your name: <sup class="required">*</sup> </label>
                        <input id="commentCustomerName" name="customer_name" type="text" value="">
                        <div id="new_comment_form_footer">
                          <input id="id_product_comment_send" name="id_product" type="hidden" value="16">
                          <p class="fl required"><sup>*</sup> Required fields</p>
                          <p class="fr">
                            <button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small"> <span>Submit</span> </button>&nbsp; or&nbsp; <a class="closefb" href="#"> Cancel </a></p>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div><!-- tabs -->

