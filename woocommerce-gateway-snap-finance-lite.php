<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              snap_finance.com
 * @since             1.0.0
 * @package           Woocommerce_Gateway_Snap_Finance_Lite
 *
 * @wordpress-plugin
 * Plugin Name:       Snap Finance Lite
 * Plugin URI:        http://snapfinance.com/
 * Description:       Pay with a credit card generated via our super-cool payment gateway, upon approval.
 * Version:           1.0.0
 * Author:            Snap Finance
 * Author URI:        http://snapfinance.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-gateway-snap-finance-lite
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('Woocommerce_Gateway_Snap_Finance_Lite_VERSION', '1.0.0');
/*
 * This action hook registers our PHP class as a WooCommerce payment gateway
 */
add_filter('woocommerce_payment_gateways', 'snap_finance_lite_add_gateway_class');

function snap_finance_lite_add_gateway_class($gateways) {
    $gateways[] = 'WC_Snap_Finance_Lite_Gateway'; // your class name is here
    return $gateways;
}
/*
 * The class itself, please note that it is inside plugins_loaded action hook
 */
add_action('plugins_loaded', 'snap_finance_lite_init_gateway_class');

function snap_finance_lite_init_gateway_class() {
    include 'woocommerce-gateway-snap-finance-lite-front-side.php';
    include 'woocommerce-gateway-snap-finance-lite-class.php';
}
