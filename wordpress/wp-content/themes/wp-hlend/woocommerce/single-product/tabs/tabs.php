<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see   https://docs.woocommerce.com/document/template-structure/
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

  <div class="woocommerce-tabs wc-tabs-wrapper">
    <div class="tabs-head">
      <ul class="wc-tabs product-tabs">

        <?php foreach ( $tabs as $key => $tab ) : ?>
          <li class="<?php echo esc_attr( $key ); ?>_tab">
            <a href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
          </li>
        <?php endforeach; ?>

        <?php

        global $product;

        $upsells = $product->get_upsells();

        if ( sizeof( $upsells ) > 0 ) {?>
            <li class="upsell_tab">
              <a href="#tab-upsell"><?php _e( 'You may also like&hellip;', 'woocommerce' ) ?></a>
            </li>

        <?php } ?>

      </ul>
    </div>

    <div class="tabs-content">
      <?php foreach ( $tabs as $key => $tab ) : ?>
        <div class="tabs-cell woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
          <?php call_user_func( $tab['callback'], $key, $tab ); ?>
        </div>
      <?php endforeach; ?>

      <div class="tabs-cell woocommerce-Tabs-panel--upsell; ?> entry-content wc-tab" id="tab-upsell">
        <?php

        global $product, $woocommerce_loop;

        $upsells = $product->get_upsells();

        if ( sizeof( $upsells ) === 0 ) {
          return;
        }

        $meta_query = WC()->query->get_meta_query();

        $args = array(
          'post_type'           => 'product',
          'ignore_sticky_posts' => 1,
          'no_found_rows'       => 1,
          'posts_per_page'      => $posts_per_page,
          'orderby'             => $orderby,
          'post__in'            => $upsells,
          'post__not_in'        => array( $product->id ),
          'meta_query'          => $meta_query
        );

        $products = new WP_Query( $args );

        $woocommerce_loop['columns'] = $columns;

        if ( $products->have_posts() ) : ?>

          <div id="upsell-owl" class="upsells products">


              <?php woocommerce_product_loop_start(); ?>
                <?php while ( $products->have_posts() ) : $products->the_post(); ?>

                    <?php wc_get_template_part( 'content', 'product' ); ?>

                <?php endwhile; // end of the loop. ?>
              <?php woocommerce_product_loop_end(); ?>

          </div>

        <?php endif;

        wp_reset_postdata(); ?>
      </div>

    </div>
  </div>
<?php endif; ?>

