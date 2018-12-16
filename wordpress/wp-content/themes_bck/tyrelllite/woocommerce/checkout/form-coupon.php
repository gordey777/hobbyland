<?php
/**
 * Checkout coupon form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( ! $woocommerce->cart->coupons_enabled() )
	return;

$info_message = apply_filters('woocommerce_checkout_coupon_message', __( 'Have a coupon?', 'woocommerce' ));
?>

<p class="woocommerce-info"><?php echo $info_message; ?> <a href="#" class="showcoupon"><?php _e( 'Click here to enter your code', 'woocommerce' ); ?></a></p>

<form class="checkout_coupon" method="post" style="display:none">

	<p class="form-row form-row-first">
		<input type="text" name="coupon_code" class="input-text" placeholder="<?php _e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
	</p>

	<p class="form-row form-row-last">
		<span class="btn"><input type="submit" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" /></span>
	</p>

	<div class="clear"></div>
</form>