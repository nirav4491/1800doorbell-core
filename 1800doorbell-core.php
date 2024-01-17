<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/nirav4491
 * @since             1.0.0
 * @package           1800doorbell_Core
 *
 * @wordpress-plugin
 * Plugin Name:       1800doorbell Core
 * Plugin URI:        https://github.com/nirav4491
 * Description:       This plugin holds the custom functionality.
 * Version:           1.0.0
 * Author:            Concatstring
 * Author URI:        https://github.com/nirav4491/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       1800doorbell-core
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
define( '1800DOORBELL_CORE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-1800doorbell-core-activator.php
 */
function activate_1800doorbell_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-1800doorbell-core-activator.php';
	1800doorbell_Core_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-1800doorbell-core-deactivator.php
 */
function deactivate_1800doorbell_core() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-1800doorbell-core-deactivator.php';
	1800doorbell_Core_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_1800doorbell_core' );
register_deactivation_hook( __FILE__, 'deactivate_1800doorbell_core' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-1800doorbell-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_1800doorbell_core() {

	$plugin = new 1800doorbell_Core();
	$plugin->run();

}
run_1800doorbell_core();
