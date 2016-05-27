<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! $messages ) return;
?>

<ul class="woocommerce-message">
	<?php foreach ( $messages as $message ) : ?>
		<li><?php echo $message; ?></li>
	<?php endforeach; ?>
</ul>