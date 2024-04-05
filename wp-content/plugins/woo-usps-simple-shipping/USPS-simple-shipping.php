<?php
/**
 * Plugin Name: USPS Simple Shipping for Woocommerce
 * Plugin URI: http://wordpress.org/plugins/woo-usps-simple-shipping
 * Description: The USPS Simple plugin calculates rates for domestic shipping dynamically using USPS API during checkout.
 * Version: 1.10.2
 * Author: dangoodman
 * Requires PHP: 7.2
 * Requires at least: 4.6
 * Tested up to: 6.4
 * WC requires at least: 5.0
 * WC tested up to: 8.7
 */

if (!class_exists('Dgm_UspsSimple_Vendors_DgmWpPluginBootstrapGuard', false)) {
    require_once(__DIR__.'/vendor/dangoodman/wp-plugin-bootstrap-guard/DgmWpPluginBootstrapGuard.php');
}

Dgm_UspsSimple_Vendors_DgmWpPluginBootstrapGuard::checkPrerequisitesAndBootstrap(
    'USPS Simple Shipping for Woocommerce', '7.2', '4.6', '5.0', __DIR__.'/bootstrap.php', ['SimpleXML', 'libxml']);