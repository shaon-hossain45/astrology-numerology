<?php

/**
 * Fired during plugin activation
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/includes
 * @author     Shaon Hossain <shaonhossain615@gmail.com>
 */
class Astrology_Numerology_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		self::create_table();
		self::create_table();
	}

	/**
	 * Add time and version on DB
	 */
	protected static function add_version() {
		$installed = get_option( 'astrology_numerology_version' );

		if ( ! $installed ) {
			update_option( 'astrology_numerology_version', time() );
		}

		update_option( 'astrology_numerology_version', ASTROLOGY_NUMEROLOGY_VERSION );
	}


	/**
	 * Create table plugin activator
	 *
	 * @return void
	 */
	protected static function create_table() {
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology` (
          `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `template_title` varchar(500) NOT NULL,
		  `template_description` varchar(3000) NOT NULL,
		  `template_house` varchar(50000) NOT NULL
        ) $charset_collate";


		if ( ! function_exists( 'dbDelta' ) ) {
			require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		}

		dbDelta( $schema );
	}

}
