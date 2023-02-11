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

if ( ! class_exists( 'CptBaseSetup' ) ) {
	class CptBaseSetup {

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    1.0.0
		 * @param      string $plugin_name       The name of this plugin.
		 * @param      string $version    The version of this plugin.
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'custom_post_type' ), 0 );
		}

		// Register Custom Post Type
		function custom_post_type() {

			$labels = array(
				'name'                  => _x( 'Astrology Numerologys', 'Post Type General Name', 'astrology-numerology' ),
				'singular_name'         => _x( 'Astrology Numerology', 'Post Type Singular Name', 'astrology-numerology' ),
				'menu_name'             => __( 'Astrology Numerologys', 'astrology-numerology' ),
				'name_admin_bar'        => __( 'Astrology Numerology', 'astrology-numerology' ),
				'archives'              => __( 'Item Archives', 'astrology-numerology' ),
				'attributes'            => __( 'Item Attributes', 'astrology-numerology' ),
				'parent_item_colon'     => __( 'Parent Item:', 'astrology-numerology' ),
				'all_items'             => __( 'All Items', 'astrology-numerology' ),
				'add_new_item'          => __( 'Add New Item', 'astrology-numerology' ),
				'add_new'               => __( 'Add New', 'astrology-numerology' ),
				'new_item'              => __( 'New Item', 'astrology-numerology' ),
				'edit_item'             => __( 'Edit Item', 'astrology-numerology' ),
				'update_item'           => __( 'Update Item', 'astrology-numerology' ),
				'view_item'             => __( 'View Item', 'astrology-numerology' ),
				'view_items'            => __( 'View Items', 'astrology-numerology' ),
				'search_items'          => __( 'Search Item', 'astrology-numerology' ),
				'not_found'             => __( 'Not found', 'astrology-numerology' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'astrology-numerology' ),
				'featured_image'        => __( 'Featured Image', 'astrology-numerology' ),
				'set_featured_image'    => __( 'Set featured image', 'astrology-numerology' ),
				'remove_featured_image' => __( 'Remove featured image', 'astrology-numerology' ),
				'use_featured_image'    => __( 'Use as featured image', 'astrology-numerology' ),
				'insert_into_item'      => __( 'Insert into item', 'astrology-numerology' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'astrology-numerology' ),
				'items_list'            => __( 'Items list', 'astrology-numerology' ),
				'items_list_navigation' => __( 'Items list navigation', 'astrology-numerology' ),
				'filter_items_list'     => __( 'Filter items list', 'astrology-numerology' ),
			);
			$args   = array(
				'label'               => __( 'Astrology Numerology', 'astrology-numerology' ),
				'description'         => __( 'Post Type Description', 'astrology-numerology' ),
				'labels'              => $labels,
				'supports'            => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies'          => array( 'category', 'post_tag' ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 5,
				'menu_icon'           => 'dashicons-welcome-widgets-menus',
				'show_in_admin_bar'   => true,
				'show_in_nav_menus'   => true,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
			);
			register_post_type( 'astrology_numerology', $args );

		}


	}
}
