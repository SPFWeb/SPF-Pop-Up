<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://spfwebsites.co.nz/about-us
 * @since      1.0.0
 *
 * @package    Spf_Pop_Ups
 * @subpackage Spf_Pop_Ups/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Spf_Pop_Ups
 * @subpackage Spf_Pop_Ups/admin
 * @author     SPF Websites <jordan@spfwebsites.co.nz>
 */
class Spf_Pop_Ups_Admin {

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
		 * defined in Spf_Pop_Ups_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Spf_Pop_Ups_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/spf-pop-ups-admin.css', array(), $this->version, 'all' );

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
		 * defined in Spf_Pop_Ups_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Spf_Pop_Ups_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/spf-pop-ups-admin.js', array( 'jquery' ), $this->version, false );

	}

		// Register Custom Post Type for the Popup
		public function popups() {
		
			$labels = array(
				'name'                  => _x( 'Pop Ups', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Pop Up', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Site Popups', 'text_domain' ),
				'name_admin_bar'        => __( 'Site Popups', 'text_domain' ),
				'archives'              => __( 'Item Archives', 'text_domain' ),
				'attributes'            => __( 'Item Attributes', 'text_domain' ),
				'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
				'all_items'             => __( 'All Items', 'text_domain' ),
				'add_new_item'          => __( 'Add New Item', 'text_domain' ),
				'add_new'               => __( 'Add New', 'text_domain' ),
				'new_item'              => __( 'New Item', 'text_domain' ),
				'edit_item'             => __( 'Edit Item', 'text_domain' ),
				'update_item'           => __( 'Update Item', 'text_domain' ),
				'view_item'             => __( 'View Item', 'text_domain' ),
				'view_items'            => __( 'View Items', 'text_domain' ),
				'search_items'          => __( 'Search Item', 'text_domain' ),
				'not_found'             => __( 'Not found', 'text_domain' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
				'featured_image'        => __( 'Featured Image', 'text_domain' ),
				'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
				'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
				'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
				'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
				'items_list'            => __( 'Items list', 'text_domain' ),
				'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
				'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
			);
			$rewrite = array(
				'slug'                  => 'pop_up',
				'with_front'            => true,
				'pages'                 => true,
				'feeds'                 => true,
			);
			$args = array(
				'label'                 => __( 'Pop Up', 'text_domain' ),
				'description'           => __( 'Create Pop Ups to display on the site', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'post-formats' ),
				'taxonomies'            => array( 'category', 'post_tag', 'post' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'rewrite'               => $rewrite,
				'capability_type'       => 'page',
			);
			register_post_type( 'pop_up', $args );
		
		}
		
		

}
