<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.concourschant.com
 * @since      1.0.0
 *
 * @package    Contest
 * @subpackage contest/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Contest
 * @subpackage contest/includes
 * @author     Lionel.c <admin@concourschant.com>
 */
class Contest_Activator {


	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		global $wpdb;
		$plugin_name_db_version = '1.0';
		$table_name = $wpdb->prefix . "contest"; 
		$charset_collate = $wpdb->get_charset_collate();
		
		$sql = "CREATE TABLE $table_name (
				  id mediumint(9) NOT NULL AUTO_INCREMENT,
				  created timestamp NOT NULL default CURRENT_TIMESTAMP,
				  organizer int NOT NULL,
				  email varchar(255) DEFAULT '' NOT NULL,
				  contestActive tinyint DEFAULT '0' NOT NULL,
				  department int NOT NULL,
				  category int NOT NULL,
				  contestWebsite varchar(255) DEFAULT '' NOT NULL,
				  contestName varchar(255) DEFAULT '' NOT NULL,
				  contestCity varchar(255) DEFAULT '' NOT NULL,
				  contestAdress varchar(255) DEFAULT '' NOT NULL,
				  contestCp varchar(5) DEFAULT '' NOT NULL,
				  contestTel varchar(10) DEFAULT '' NOT NULL,
				  contestPresentation text DEFAULT '' NOT NULL,
				  contestRegistration text DEFAULT '' NOT NULL,
				  contestRule text DEFAULT '' NOT NULL,
				  contestdate date NOT NULL,
				  custom_field varchar(255) DEFAULT '' NOT NULL,
				  
				  UNIQUE KEY id (id)
				) $charset_collate;";
		
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		add_option( 'plugin_name_db_version', $plugin_name_db_version );
	}
}
