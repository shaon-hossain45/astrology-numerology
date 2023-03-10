<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/public
 * @author     Shaon Hossain <shaonhossain615@gmail.com>
 */
class Astrology_Numerology_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->public_load_dependencies();

		if ( class_exists( 'Astrology_Numerology_Public_Display_Today' ) ) {
			$today = new Astrology_Numerology_Public_Display_Today();
		}

		if ( class_exists( 'Astrology_Numerology_Public_Display_Tomorrow' ) ) {
			$tomorrow = new Astrology_Numerology_Public_Display_Tomorrow();
		}

		if ( class_exists( 'Astrology_Numerology_Public_Display' ) ) {
			new Astrology_Numerology_Public_Display( $today, $tomorrow );
		}
	}

	/**
	 * Directory path called
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	private function public_load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/astrology-numerology-public-display.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/astrology-numerology-public-today.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/astrology-numerology-public-tomorrow.php';
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Astrology_Numerology_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Astrology_Numerology_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'QueryCSS', plugin_dir_url( __FILE__ ) . 'css/vendor/jquery-ui.css', array(), '1.13.2', 'all' );

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/astrology-numerology-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Astrology_Numerology_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Astrology_Numerology_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'jQueryCore', plugin_dir_url( __FILE__ ) . 'js/vendor/jquery-3.5.1.min.js', array( 'jquery' ), '3.5.1', false );
		wp_enqueue_script( 'jQueryUI', plugin_dir_url( __FILE__ ) . 'js/vendor/jquery-ui.js', array( 'jquery' ), '1.13.2', false );

		wp_enqueue_script( 'plugin_name', plugin_dir_url( __FILE__ ) . 'js/astrology-numerology-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'horoscope_js', plugin_dir_url( __FILE__ ) . 'js/astrology-numerology-public-horoscope.js', array( 'jquery' ), $this->version, true );

	}

}
