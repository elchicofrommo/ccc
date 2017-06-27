<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.castrocountryclub.org
 * @since      1.0.0
 *
 * @package    Meeting_Schedule
 * @subpackage Meeting_Schedule/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Meeting_Schedule
 * @subpackage Meeting_Schedule/includes
 * @author     Mario Hernandez <mario.hernandez@gmail.com>
 */
class Meeting_Schedule_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'meeting-schedule',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
