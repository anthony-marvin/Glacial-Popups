<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.glacial.com/
 * @since      1.0.0
 *
 * @package    Glacial_Popups
 * @subpackage Glacial_Popups/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Glacial_Popups
 * @subpackage Glacial_Popups/includes
 * @author     Glacial Multimedia <anthony@glacial.com>
 */
class Glacial_Popups_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'glacial-popups',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
