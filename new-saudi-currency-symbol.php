<?php
/**
 * Plugin Name:New Saudi currency symbol
 * Plugin URI: https://github.com/Ohadidy/new-saudi-currency-symbol
 * Description: Include the new Saudi Riyal symbol in the list of stores that have been approved on WooCommerce.
 * Author: Omar Kamel
 * Author URI: https://www.linkedin.com/in/omarhadidy/
 * Version: 1.0.0
 * Requires Plugins: woocommerce
 * Tested up to: 6.7
 * WC requires at least: 7.0
 * WC tested up to: 9.5
 * Elementor tested up to: 3.6.5
 * Requires PHP: 7.0
*/
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'new_saudi_currency_symbol' ) ) {
	/**
	 * Change a currency symbol
	 *
	 * @param string $currency_symbol Existing currency symbols.
	 * @param string $currency Currency code.
	 * @return string $currency_symbol Updated currency symbol(s).
	 */
	function new_saudi_currency_symbol( $currency_symbol, $currency ) {
		switch ( $currency ) {
			case 'SAR': $currency_symbol = '<svg class="riyal-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39" width="14" height="15.432" style="display:inline-block;vertical-align:-0.125em;">
      <path fill="currentColor" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"></path>
      <path fill="currentColor" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"></path>
    </svg>'; break;
		}

		return $currency_symbol;
	}
	add_filter( 'woocommerce_currency_symbol', 'new_saudi_currency_symbol', 10, 2 );
}



