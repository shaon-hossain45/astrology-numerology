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

		public function __construct() {
			add_action( 'admin_menu', array( $this, 'coupon_register_submenu_page' ) );
		}

		/**
		 * Register a custom menu page.
		 *
		 * @return void
		 */
		public function coupon_register_submenu_page() {

			//Add Offer Configuration Sub Menu   
			add_submenu_page('edit.php?post_type=astrology_numerology', 'coupon configuration', 'Coupon Configuration', "manage_options", 'coupon_configuration', array( $this, 'couponconfiguration'), '');
			
		}

		
		/**
		 * Register a callback function
		 *
		 * @return void
		 */
		public function couponconfiguration(){
			echo 'Offer Configuration';
			return;
		}


	}
}
