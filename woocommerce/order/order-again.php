<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<p class="order-again">
	<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'order_again', $order->get_id() ) , 'woocommerce-order_again' ) ); ?>" class="button"><?php _e( 'Order again', 'woocommerce' ); ?></a>
</p>
