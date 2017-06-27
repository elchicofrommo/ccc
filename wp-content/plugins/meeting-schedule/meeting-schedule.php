<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.castrocountryclub.org
 * @since             1.0.0
 * @package           Meeting_Schedule
 *
 * @wordpress-plugin
 * Plugin Name:       MeetingSchedule
 * Plugin URI:        http://www.castrocountryclub.org
 * Description:       Use this plug in to build out the meeting schedule for the CCC
 * Version:           1.0.0
 * Author:            Mario Hernandez
 * Author URI:        http://www.castrocountryclub.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       meeting-schedule
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-meeting-schedule-activator.php
 */
function activate_meeting_schedule() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-meeting-schedule-activator.php';
	Meeting_Schedule_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-meeting-schedule-deactivator.php
 */
function deactivate_meeting_schedule() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-meeting-schedule-deactivator.php';
	Meeting_Schedule_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_meeting_schedule' );
register_deactivation_hook( __FILE__, 'deactivate_meeting_schedule' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-meeting-schedule.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_meeting_schedule() {

	$plugin = new Meeting_Schedule();
	$plugin->run();

}
run_meeting_schedule();
