<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/admin/partials
 */
?>
<?php
class Astrology_Numerology_Admin_Display {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct() {

		$this->admin_display_load_dependencies();

		// Menu Action setup
		if ( class_exists( 'MenuActionSetup' ) ) {
			$MenuActionSetupObj = new MenuActionSetup();
		}

		// Menu setup
		if ( class_exists( 'MenuSetup' ) ) {
			$MenuPageObj = new MenuSetup($MenuActionSetupObj);
		}
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Public_Popularity_Loader. Orchestrates the hooks of the plugin.
	 * - Public_Popularity_i18n. Defines internationalization functionality.
	 * - Public_Popularity_Admin. Defines all hooks for the admin area.
	 * - Public_Popularity_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function admin_display_load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/menu/astrology-numerology-admin-menu-action.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/menu/astrology-numerology-admin-menu.php';
	}

}