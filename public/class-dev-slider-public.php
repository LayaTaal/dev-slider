<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Dev_slider
 * @subpackage Dev_slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Dev_slider
 * @subpackage Dev_slider/public
 * @author     Jason Zinn <jason@zinnfinity.com>
 */
class Dev_slider_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $dev_slider    The ID of this plugin.
	 */
	private $dev_slider;

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
	 * @param      string    $dev_slider       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $dev_slider, $version ) {

		$this->dev_slider = $dev_slider;
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
		 * defined in Dev_slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dev_slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->dev_slider, plugin_dir_url( __FILE__ ) . 'css/dev-slider-public.css', array(), $this->version, 'all' );

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
		 * defined in Dev_slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dev_slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->dev_slider, plugin_dir_url( __FILE__ ) . 'js/dev-slider-public.js', array( 'jquery' ), $this->version, false );

	}

}
