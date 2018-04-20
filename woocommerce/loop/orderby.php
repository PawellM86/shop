<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<a id="down-cart" href="http://localhost/cart/" class="added_to_cart2 wc-forward" title="View cart">Jūsų krepšelis<i class="fa fa-cart-arrow-down"></i></a>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form>
