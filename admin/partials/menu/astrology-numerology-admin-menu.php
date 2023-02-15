<?php

/**
 * Provide a admin area view for the plugin
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    public_plugin
 * @subpackage public_plugin/admin/partials
 */

if ( ! class_exists( 'MenuSetup' ) ) {
	class MenuSetup {

		public function __construct($functional) {

			$this->functional = $functional;
			add_action( 'admin_menu', array( $this, 'wpdocs_register_my_custom_menu_page' ) );
			// Register sub menu page.
			add_action( 'admin_menu', array( $this, 'wpdocs_register_my_custom_submenu_page' ) );
		}

		/**
		 * Register custom menu page.
		 *
		 * @return void
		 */
		public function wpdocs_register_my_custom_menu_page() {
			add_menu_page(
				__( 'Astrology Numerology Title', 'astrology-numerology' ),
				'Astrology Numerology',
				'manage_options',
				'astrology_numerology',
				array( $this->functional, 'astrology_numerology_menu_page' ),
				'dashicons-tagcloud',
				6
			);
		}

		/**
		 * Register sub menu page.
		 *
		 * @return void
		 */
		public function wpdocs_register_my_custom_submenu_page() {

			add_submenu_page(
				'astrology_numerology',
				'Dashboard',
				'Dashboard',
				'manage_options',
				'astrology_numerology',
				array( $this->functional, 'astrology_numerology_menu_page' ),
			);


			add_submenu_page(
				'astrology_numerology',
				'Templates',
				'Templates ',
				'manage_options',
				'templates',
				array( $this->functional, 'astrology_numerology_submenu_page_templates' ),
			);

			add_submenu_page(
				'astrology_numerology',
				'Shortcodes',
				'Shortcodes',
				'manage_options',
				'shortcodes',
				array( $this->functional, 'astrology_numerology_submenu_page_shortcode' ),
			);
		}


	}
}
