<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
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
    'items_wrap'      => '<ul data-tpl="navigation" class="header-section header-nav-list header-nav-myclass">%3$s</ul>',
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


}// WPE footer navigation
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
    'sidebar-menu' => __('Меню в сайдбар', 'wpeasy'),
    'footer-menu' => __('Меню в подвал', 'wpeasy'),
    'footer-menu-two' => __('Меню в подвал 2', 'wpeasy'),
    'footer-menu-three' => __('Меню в подвал 3', 'wpeasy'),
    'footer-menu-for' => __('Меню в подвал 4', 'wpeasy'),
  ));
}
/**
 * Note: Bla bla bla Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woothemes/theme-customisations
 */




