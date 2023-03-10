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
		
		if ( ! function_exists( 'dbDelta' ) ) {
			require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		}

		$charset_collate = $wpdb->get_charset_collate();

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_template` (
          `ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
		  `template_title` varchar(500) NOT NULL,
		  `template_description` varchar(2000) NOT NULL,
		  `house_1` varchar(1000) NOT NULL,
		  `house_2` varchar(1000) NOT NULL,
		  `house_3` varchar(1000) NOT NULL,
		  `house_4` varchar(1000) NOT NULL,
		  `house_5` varchar(1000) NOT NULL,
		  `house_6` varchar(1000) NOT NULL,
		  `house_7` varchar(1000) NOT NULL,
		  `house_8` varchar(1000) NOT NULL,
		  `house_9` varchar(1000) NOT NULL,
		  `house_10` varchar(1000) NOT NULL,
		  `house_11` varchar(1000) NOT NULL,
		  `house_12` varchar(1000) NOT NULL,
		  `template_bottom_description` varchar(1000) NOT NULL
        ) $charset_collate";

		dbDelta( $schema );

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_day` (
			`ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
			`template_title` varchar(500) NOT NULL,
			`template_description` varchar(2000) NOT NULL,
			`variation_1` varchar(1000) NOT NULL,
			`variation_2` varchar(1000) NOT NULL,
			`variation_3` varchar(1000) NOT NULL,
			`variation_4` varchar(1000) NOT NULL,
			`variation_5` varchar(1000) NOT NULL,
			`variation_6` varchar(1000) NOT NULL,
			`variation_7` varchar(1000) NOT NULL,
			`variation_8` varchar(1000) NOT NULL,
			`variation_9` varchar(1000) NOT NULL,
			`template_bottom_description` varchar(1000) NOT NULL
		) $charset_collate";

		dbDelta( $schema );

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_week` (
			`ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
			`template_title` varchar(500) NOT NULL,
			`template_description` varchar(2000) NOT NULL,
			`variation_1` varchar(1000) NOT NULL,
			`variation_2` varchar(1000) NOT NULL,
			`variation_3` varchar(1000) NOT NULL,
			`variation_4` varchar(1000) NOT NULL,
			`variation_5` varchar(1000) NOT NULL,
			`variation_6` varchar(1000) NOT NULL,
			`variation_7` varchar(1000) NOT NULL,
			`template_bottom_description` varchar(1000) NOT NULL
		) $charset_collate";

		dbDelta( $schema );

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_month` (
			`ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
			`template_title` varchar(500) NOT NULL,
			`template_description` varchar(2000) NOT NULL,
			`variation_1` varchar(1000) NOT NULL,
			`variation_2` varchar(1000) NOT NULL,
			`variation_3` varchar(1000) NOT NULL,
			`variation_4` varchar(1000) NOT NULL,
			`variation_5` varchar(1000) NOT NULL,
			`variation_6` varchar(1000) NOT NULL,
			`variation_7` varchar(1000) NOT NULL,
			`variation_8` varchar(1000) NOT NULL,
			`variation_9` varchar(1000) NOT NULL,
			`template_bottom_description` varchar(1000) NOT NULL
		) $charset_collate";

		dbDelta( $schema );

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_year` (
			`ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
			`template_title` varchar(500) NOT NULL,
			`template_description` varchar(2000) NOT NULL,
			`variation_1` varchar(1000) NOT NULL,
			`variation_2` varchar(1000) NOT NULL,
			`variation_3` varchar(1000) NOT NULL,
			`variation_4` varchar(1000) NOT NULL,
			`variation_5` varchar(1000) NOT NULL,
			`variation_6` varchar(1000) NOT NULL,
			`variation_7` varchar(1000) NOT NULL,
			`variation_8` varchar(1000) NOT NULL,
			`variation_9` varchar(1000) NOT NULL,
			`template_bottom_description` varchar(1000) NOT NULL
		) $charset_collate";

		dbDelta( $schema );

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_energyday` (
			`ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
			`template_title` varchar(500) NOT NULL,
			`template_description` varchar(2000) NOT NULL,
			`variation_1` varchar(1000) NOT NULL,
			`variation_2` varchar(1000) NOT NULL,
			`variation_3` varchar(1000) NOT NULL,
			`variation_4` varchar(1000) NOT NULL,
			`variation_5` varchar(1000) NOT NULL,
			`variation_6` varchar(1000) NOT NULL,
			`variation_7` varchar(1000) NOT NULL,
			`template_bottom_description` varchar(1000) NOT NULL
		) $charset_collate";

		dbDelta( $schema );


		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}astrology_numerology_powermercurymonth` (
			`ID` bigint(20) unsigned NOT NULL PRIMARY KEY,
			`template_title` varchar(500) NOT NULL,
			`template_description` varchar(2000) NOT NULL,
			`variation_1` varchar(1000) NOT NULL,
			`variation_2` varchar(1000) NOT NULL,
			`variation_3` varchar(1000) NOT NULL,
			`variation_4` varchar(1000) NOT NULL,
			`variation_5` varchar(1000) NOT NULL,
			`variation_6` varchar(1000) NOT NULL,
			`variation_7` varchar(1000) NOT NULL,
			`variation_8` varchar(1000) NOT NULL,
			`variation_9` varchar(1000) NOT NULL,
			`variation_10` varchar(1000) NOT NULL,
			`variation_11` varchar(1000) NOT NULL,
			`variation_12` varchar(1000) NOT NULL,
			`template_bottom_description` varchar(1000) NOT NULL
		) $charset_collate";

		dbDelta( $schema );

	}

}