<?php
/**
 * Customer processing order email
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php do_action('woocommerce_email_header', $email_heading); ?>

<p><?php _e( "Thank you for your gift to those we serve through Responder Life.  I am grateful for God's faithfulness through your generosity. I appreciate your participation with us to ensure that every first responder has the opportunity to respond to the most important call of their lives. We couldn't do this without you!<br /><br />Blessings,<br /><br />Trey Doty<br />Executive Director", 'woocommerce' ); ?></p>

<?php do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text ); ?>

<h2><?php echo __( 'Reference number:', 'woocommerce' ) . ' ' . $order->get_order_number(); ?></h2>

<table cellspacing="0" cellpadding="6" style="width: 100%; border: 1px solid #eee;" border="1" bordercolor="#eee">
	<thead>
		<tr>
			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Price', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( $order->is_download_permitted(), true, ( $order->status=='processing' ) ? true : false ); ?>
	</tbody>
	<tfoot>
		<?php
			// removing subtotal and changing label from "Order Total" - gfh
			$donation_total = $order->get_order_item_totals();
			unset( $donation_total['cart_subtotal'] );
			$donation_total['order_total']['label'] = "Donation Total";
			
			if ( $totals = $donation_total ) {
				$i = 0;
				foreach ( $totals as $total ) {
					$i++;
					?><tr>
						<th scope="row" colspan="2" style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['label']; ?></th>
						<td style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['value']; ?></td>
					</tr><?php
				}
			}
		?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text ); ?>

<h2><?php _e( 'Donor details', 'woocommerce' ); ?></h2>

<?php if ($order->billing_email) : ?>
	<p><strong><?php _e( 'Email:', 'woocommerce' ); ?></strong> <?php echo $order->billing_email; ?></p>
<?php endif; ?>
<?php if ($order->billing_phone) : ?>
	<p><strong><?php _e( 'Tel:', 'woocommerce' ); ?></strong> <?php echo $order->billing_phone; ?></p>
<?php endif; ?>

<?php wc_get_template( 'emails/email-addresses.php', array( 'order' => $order ) ); ?>

<?php do_action( 'woocommerce_email_footer' ); ?>