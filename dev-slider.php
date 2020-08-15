<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Dev_Slider
 *
 * @wordpress-plugin
 * Plugin Name:       Dev Slider
 * Plugin URI:        https://zinnfnity.com/wordpress/plugins/dev-slider/
 * Description:       A simple flexible slider meant for developers
 * Version:           1.0.0
 * Author:            Jason Zinn
 * Author URI:        https://zinnfinity.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dev-slider
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
define( 'DEV_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dev-slider-activator.php
 */
function activate_dev_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dev-slider-activator.php';
	Dev_slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dev-slider-deactivator.php
 */
function deactivate_dev_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dev-slider-deactivator.php';
	Dev_slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dev_slider' );
register_deactivation_hook( __FILE__, 'deactivate_dev_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dev-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dev_slider() {

	$plugin = new Dev_slider();
	$plugin->run();

}
run_dev_slider();
