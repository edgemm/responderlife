<?php

add_theme_support( 'woocommerce' );

/* smc run only one version of jquery fix */
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
/* end smc run only one version of jquery fix */

add_filter ('add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
global $woocommerce;
$checkout_url = $woocommerce->cart->get_checkout_url();
return $checkout_url;
}

add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 
        return __( 'Give Now', 'woocommerce' );
 
}

?>