<?php

	use WP_Query;
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://spfwebsites.co.nz/about-us
 * @since      1.0.0
 *
 * @package    Spf_Pop_Ups
 * @subpackage Spf_Pop_Ups/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Spf_Pop_Ups
 * @subpackage Spf_Pop_Ups/public
 * @author     SPF Websites <jordan@spfwebsites.co.nz>
 */
class Spf_Pop_Ups_Public {

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
		 * defined in Spf_Pop_Ups_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Spf_Pop_Ups_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/spf-pop-ups-public.css', array(), $this->version, 'all' );

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
		 * defined in Spf_Pop_Ups_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Spf_Pop_Ups_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/spf-pop-ups-public.js', array( 'jquery' ), $this->version, false );

	}



    public function get_pop_ups() {
		$args = array( 'post_type' => 'pop_up', 'posts_per_page' => 1 );
		$loop = new WP_Query( $args );
		$display .= '';
		while ( $loop->have_posts() ) : $loop->the_post();
?>
<div style="background: #1b1b1c; position: fixed; color: white; bottom: 0; left: 0; right: 0; width 100%; padding: 20px; z-index: 999; text-align: center;">
<?php
		$display .= the_content();
		?>
	</div>
<?php
		endwhile;
		
		return $display;
    }

		
}
