<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.castrocountryclub.org
 * @since      1.0.0
 *
 * @package    Meeting_Schedule
 * @subpackage Meeting_Schedule/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Meeting_Schedule
 * @subpackage Meeting_Schedule/includes
 * @author     Mario Hernandez <mario.hernandez@gmail.com>
 */
class Meeting_Schedule_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		$charset_collate = $wpdb->get_charset_collate();
		$meetingTypesTableName = $wpdb->prefix . "meeting_types";
		$meetingsTableName = $wpdb->prefix . "meetings";


		// create meeting type table"
		$createMeetingTypesTable = "CREATE TABLE $meetingTypesTableName.  ( 
			id int(10) NOT NULL AUTO_INCREMENT COMMENT 'primary key ' , 
			short_name CHAR(6) NOT NULL COMMENT 'abbreviated name' , 
			full_name VARCHAR(60) NOT NULL COMMENT 'full unabbreviated name' , 
			url VARCHAR(256) NOT NULL COMMENT 'url for the fellowship' , 
			color CHAR(6) NOT NULL COMMENT 'hex color code' , 
			PRIMARY KEY  ('id')
		) $charset_collate;";

		// create meetings table
		$createMeetingsTable = "CREATE TABLE $meetingsTableName  ( 
			name VARCHAR(60) NOT NULL , 
			meeting_type_id INT NOT NULL , 
			start_time TIME NOT NULL , 
			end_time TIME NOT NULL , 
			day_of_week INT NOT NULL , 
			details VARCHAR(256) NULL,
			FOREIGN KEY  (meeting_type_id) REFERENCES $meetingTypesTableName(id)
		) $charset_collate;";

		dbDelta( $createMeetingTypesTable );
		dbDelta( $createMeetingsTable );



require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );


	}

}
