<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'my-storefront' );
$storefront_version = $theme['Version'];

/**
 * Initialize all the things.
 */
require 'inc/class-storefront.php';
require 'inc/jetpack/class-storefront-jetpack.php';
require 'inc/customizer/class-storefront-customizer.php';

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( is_woocommerce_activated() ) {
	require 'inc/woocommerce/class-storefront-woocommerce.php';
	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	require 'inc/admin/class-storefront-admin.php';
}
/**
 * Note: Bla bla bla Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woothemes/theme-customisations
 */


// WPE head navigation
function wpeHeadNav() {
  wp_nav_menu(
  array(
    'theme_location'  => 'header-menu',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul data-tpl="navigation" class="header-nav-myclass">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}

function wpeHeadCont() {
  wp_nav_menu(
  array(
    'theme_location'  => 'header-content',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul data-tpl="navigation" class="header-content-nav">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}
// WPE footer navigation
function wpeFootNav() {
  wp_nav_menu(
  array(
    'theme_location'  => 'footer-menu',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul data-tpl="navigation" class="footer-nav-myclass">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}

// WPE footer navigation
function wpeFootNavTwo() {
  wp_nav_menu(
  array(
    'theme_location'  => 'footer-menu-two',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul data-tpl="navigation" class="footer-nav-myclass">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}

// WPE footer navigation
function wpeFootNavThree() {
  wp_nav_menu(
  array(
    'theme_location'  => 'footer-menu-three',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul data-tpl="navigation" class="footer-nav-myclass">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}


// WPE footer navigation
function wpeFootNavFor() {
  wp_nav_menu(
  array(
    'theme_location'  => 'footer-menu-for',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul data-tpl="navigation" class="footer-nav-myclass">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}

// WPE sidebar navigation
function wpeSideNav() {
  wp_nav_menu(
  array(
    'theme_location'  => 'sidebar-menu',
    'menu'            => '',
    'container'       => 'div',
    'container_class' => 'menu-{menu slug}-container',
    'container_id'    => '',
    'menu_class'      => 'menu',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul class="sidebarnav">%3$s</ul>',
    'depth'           => 0,
    'walker'          => ''
    )
  );
}
//  Register WPE Navigation
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
function register_html5_menu() {
  register_nav_menus(array(
    'header-menu' => __('Меню в шапке', 'wpeasy'),
    'header-content' => __('Header content', 'wpeasy'),
    'sidebar-menu' => __('Меню в сайдбар', 'wpeasy'),
    'footer-menu' => __('Меню в подвал', 'wpeasy'),
    'footer-menu-two' => __('Меню в подвал 2', 'wpeasy'),
    'footer-menu-three' => __('Меню в подвал 3', 'wpeasy'),
    'footer-menu-for' => __('Меню в подвал 4', 'wpeasy'),
  ));
}


//  If Dynamic Sidebar Existsов
if (function_exists('register_sidebar')) {
  //  Define Sidebar Widget Area 1
  register_sidebar(array(
    'name' => __('Блок виджетов #1', 'wpeasy'),
    'description' => __('Description for this widget-area...', 'wpeasy'),
    'id' => 'widgetarea1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));


  //  Define Sidebar Widget Area 2. If your want to display more widget - uncoment this

  register_sidebar(array(
    'name' => __('Блок виджетов #2', 'wpeasy'),
    'description' => __('Description for this widget-area...', 'wpeasy'),
    'id' => 'widgetarea2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

// DISPLEY USER NAME
function helloUser(){
$current_user = wp_get_current_user();
if (is_user_logged_in()){
    echo ("Привет, " . $current_user->user_login . "!");
  }
else {
    echo "ВХОД\РЕГИСТРАЦИЯ";
  }
}


//Меняем местами краткое описание товара и цену
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);
/*add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);*/
function HB_woocommerce_template_dimensions(){ //Добавим функцию вызова панельки с размерами и весом
    global $woocommerce, $post, $product;
    $product->list_attributes();
}
add_action( 'woocommerce_single_product_summary', 'HB_woocommerce_template_dimensions', 15);



include_once( get_stylesheet_directory() . '/ajax-login/ajax-login.php' );


// ADD UKRNIAN MONEY
add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
  $currencies['ABC'] = __( 'Українська гривня', 'woocommerce' );
  return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
  switch( $currency ) {
      case 'ABC': $currency_symbol = 'грн'; break;
    }
  return $currency_symbol;
}

// PRODUCT NUMBER  ON PAGE
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
  function loop_columns() {
  return 6;
  }
}

add_filter('loop_shop_per_page', create_function('$cols', 'return 18;'));


//releted products
function woocommerce_output_related_products() {
woocommerce_related_products(6,6);
}


//img in div
add_action( 'woocommerce_before_shop_loop_item_title', create_function('', 'echo "<div class=\"img-wrap-product-list-parent\"><div class=\"img-wrap-product-list-child\">";'), 5, 2);
add_action( 'woocommerce_before_shop_loop_item_title', create_function('', 'echo "</div></div>";'), 12, 2);


//show_admin_bar( false );




