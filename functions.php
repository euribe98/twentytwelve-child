
<?php
//remove side bar from woocommerce
//remove_action( 'storefront_sidebar', 'storefront_get_sidebar' );


remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar',10);



?>