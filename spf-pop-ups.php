<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://spfwebsites.co.nz/about-us
 * @since             1.0.0
 * @package           Spf_Pop_Ups
 *
 * @wordpress-plugin
 * Plugin Name:       SPF Pop Up
 * Plugin URI:        https://spfwebsites.co.nz
 * Description:       A plugin to show a noticebar at the bottom of a site using a custom post type.
 * Version:           1.0.0
 * Author:            SPF Websites
 * Author URI:        https://spfwebsites.co.nz/about-us
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       spf-pop-ups
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-spf-pop-ups-activator.php
 */
function activate_spf_pop_ups() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spf-pop-ups-activator.php';
	Spf_Pop_Ups_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-spf-pop-ups-deactivator.php
 */
function deactivate_spf_pop_ups() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spf-pop-ups-deactivator.php';
	Spf_Pop_Ups_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_spf_pop_ups' );
register_deactivation_hook( __FILE__, 'deactivate_spf_pop_ups' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-spf-pop-ups.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_spf_pop_ups() {

	$plugin = new Spf_Pop_Ups();
	$plugin->run();

}
run_spf_pop_ups();
