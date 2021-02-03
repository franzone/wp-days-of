<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://about.franzone.com
 * @since      1.0.0
 *
 * @package    Wp_Days_Of
 * @subpackage Wp_Days_Of/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Days_Of
 * @subpackage Wp_Days_Of/includes
 * @author     Jonathan Franzone <jonathan.franzone@gmail.com>
 */
class Wp_Days_Of_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-days-of',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
