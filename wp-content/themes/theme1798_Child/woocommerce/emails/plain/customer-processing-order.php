<?php
/**
 * Customer processing order email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails/Plain
 * @version     2.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

echo $email_heading . "\n\n";

echo __( "Thank you for your gift to those we serve through Responder Life.  I am grateful for God's faithfulness through your generosity. I appreciate your participation with us to ensure that every first responder has the opportunity to respond to the most important call of their lives. We couldn't do this without you! Blessings, Trey Doty, Executive Director", 'woocommerce' ) . "\n\n";

echo "****************************************************\n\n";

do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text );

echo sprintf( __( 'Reference number: %s', 'woocommerce'), $order->get_order_number() ) . "\n";
echo sprintf( __( 'Donation date: %s', 'woocommerce'), date_i18n( wc_date_format(), strtotime( $order->order_date ) ) ) . "\n";

do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text );

echo "\n" . $order->email_order_items_table( $order->is_download_permitted(), true, ($order->status=='processing') ? true : false, '', '', true );

echo "----------\n\n";

// removing subtotal and changing label from "Order Total" - gfh
$donation_total = $order->get_order_item_totals();
unset( $donation_total['cart_subtotal'] );
$donation_total['order_total']['label'] = "Donation Total";

if ( $totals = $donation_total ) {
	foreach ( $totals as $total ) {
		echo $total['label'] . "\t " . $total['value'] . "\n";
	}
}

echo "\n****************************************************\n\n";

do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text );

echo __( 'Your details', 'woocommerce' ) . "\n\n";

if ( $order->billing_email )
	echo __( 'Email:', 'woocommerce' ); echo $order->billing_email . "\n";

if ( $order->billing_phone )
	echo __( 'Tel:', 'woocommerce' ); ?> <?php echo $order->billing_phone . "\n";

wc_get_template( 'emails/plain/email-addresses.php', array( 'order' => $order ) );

echo "\n****************************************************\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );