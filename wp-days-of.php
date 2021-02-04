<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://about.franzone.com
 * @since             1.0.0
 * @package           Wp_Days_Of
 *
 * @wordpress-plugin
 * Plugin Name:       WPDaysOf
 * Plugin URI:        https://github.com/franzone/wp-days-of
 * Description:       Adds capabilities to provide a daily update in the form of: "It's January 20, 2021, the Nth day of [description]". Allows a configurable start day and description, allows the addition of "tags" and posting to social media.
 * Version:           1.0.0
 * Author:            Jonathan Franzone
 * Author URI:        https://about.franzone.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-days-of
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
define( 'WP_DAYS_OF_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-days-of-activator.php
 */
function activate_wp_days_of() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-days-of-activator.php';
	Wp_Days_Of_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-days-of-deactivator.php
 */
function deactivate_wp_days_of() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-days-of-deactivator.php';
	Wp_Days_Of_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_days_of' );
register_deactivation_hook( __FILE__, 'deactivate_wp_days_of' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-days-of.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_days_of() {

	$plugin = new Wp_Days_Of();
	$plugin->run();

}
run_wp_days_of();
