<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/sass/owl.carousel.css">
  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/sass/owl.theme.default.css">
  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/sass/animate.css">
  <!-- <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/sass/owl.theme.css"> -->

  <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/sass/main.css">

</head>

<body <?php body_class(); ?>>




      <div class="col-full top-nav-col container">

        <div id="top-nav" class="header-nav-myclass">

          <?php wpeHeadNav(); ?>

        </div>
        <div class="col-2">
          <a class="top-modal-button" href="#openModal"><?php helloUser() ?></a>

          <div id="openModal" class="modalDialog">
              <div>
                 <a href="#close" title="Закрыть" class="close">X</a>
                   <?php get_ajaxlogin(); ?>
              </div>
          </div>
        </div>
      </div> <!-- .coll-full -->

  <div id="page" class="hfeed site">

    <?php do_action( 'storefront_before_header' ); ?>




    <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

      <div class="col-full container">


<div class="header-content">
 <?php wpeHeadCont(); ?>

</div>

        <?php
        /**
         * Functions hooked into storefront_header action
         *
         * @hooked storefront_skip_links                       - 0
         * @hooked storefront_social_icons                     - 10
         * @hooked storefront_site_branding                    - 20
         * @hooked storefront_secondary_navigation             - 30
         * @hooked storefront_product_search                   - 40
         * @hooked storefront_primary_navigation_wrapper       - 42
         * @hooked storefront_primary_navigation               - 50
         * @hooked storefront_header_cart                      - 60
         * @hooked storefront_primary_navigation_wrapper_close - 68
         */
        do_action( 'storefront_header' ); ?>

      </div>
    </header><!-- #masthead -->


    <?php
    /**
     * Functions hooked in to storefront_before_content
     *
     * @hooked storefront_header_widget_region - 10
     */
    do_action( 'storefront_before_content' ); ?>

  <div id="content" class="site-content" tabindex="-1">
    <div class="col-full container">

    <?php
    /**
     * Functions hooked in to storefront_content_top
     *
     * @hooked woocommerce_breadcrumb - 10
     */
    do_action( 'storefront_content_top' ); ?>



