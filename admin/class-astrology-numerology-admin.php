<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/admin
 * @author     Shaon Hossain <shaonhossain615@gmail.com>
 */
class Astrology_Numerology_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->admin_load_dependencies();

		if ( class_exists( 'Astrology_Numerology_Admin_Display' ) ) {
			new Astrology_Numerology_Admin_Display();
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
	private function admin_load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/astrology-numerology-admin-display.php';
	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/astrology-numerology-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/astrology-numerology-admin.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'astrology-numerology-template', plugin_dir_url( __FILE__ ) . 'js/astrology-numerology-admin-template.js', array( 'jquery' ), $this->version, false );
		$template_ajax_nonce = wp_create_nonce( 'ajax_nonce_template' );

				wp_localize_script(
					'astrology-numerology-template',
					'plugintemplate_obj',
					array(
						'ajax_url' => admin_url( 'admin-post.php' ),
						'action'   => 'template_insert_setting',
						'security' => $template_ajax_nonce,
					)
				);


				wp_enqueue_script( 'astrology-numerology-numerology', plugin_dir_url( __FILE__ ) . 'js/astrology-numerology-admin-numerology.js', array( 'jquery' ), $this->version, false );

	}

}
