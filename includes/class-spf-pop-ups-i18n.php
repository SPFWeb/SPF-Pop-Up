<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://spfwebsites.co.nz/about-us
 * @since      1.0.0
 *
 * @package    Spf_Pop_Ups
 * @subpackage Spf_Pop_Ups/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Spf_Pop_Ups
 * @subpackage Spf_Pop_Ups/includes
 * @author     SPF Websites <jordan@spfwebsites.co.nz>
 */
class Spf_Pop_Ups_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'spf-pop-ups',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
