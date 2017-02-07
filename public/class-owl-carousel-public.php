<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       tedgeving.com
 * @since      1.0.0
 *
 * @package    Owl_Carousel
 * @subpackage Owl_Carousel/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name,
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Owl_Carousel
 * @subpackage Owl_Carousel/public
 * @author     ted <tgeving@gmail.com>
 */
class Owl_Carousel_Public {

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

		wp_enqueue_style( 'owl-carousel', plugin_dir_url( __FILE__ ) . 'js/dist/assets/owl.carousel.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'owl-theme', plugin_dir_url( __FILE__ ) . 'js/dist/assets/owl.theme.default.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( 'owl-carousel' , plugin_dir_url( __FILE__ ) . 'js/dist/owl.carousel.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'owl-carousel-public', plugin_dir_url( __FILE__ ) . 'js/owl-carousel-public.js', array( 'jquery' ), $this->version, false );

	}

}
