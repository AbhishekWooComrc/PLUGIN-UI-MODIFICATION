<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.cedcoss.com/
 * @since             1.0.0
 * @package           Woocommerce_Uimodification
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce-UiModification
 * Plugin URI:        https://www.cedcoss.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Abhishek Pandey
 * Author URI:        https://www.cedcoss.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-uimodification
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WOOCOMMERCE_UIMODIFICATION_VERSION', '1.0.0' );
define( 'CED_DIRPATH', plugin_dir_path( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-uimodification-activator.php
 */
function activate_woocommerce_uimodification() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-uimodification-activator.php';
	Woocommerce_Uimodification_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-uimodification-deactivator.php
 */
function deactivate_woocommerce_uimodification() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-uimodification-deactivator.php';
	Woocommerce_Uimodification_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_uimodification' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_uimodification' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-uimodification.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_uimodification() {

	$plugin = new Woocommerce_Uimodification();
	$plugin->run();

}
run_woocommerce_uimodification();
