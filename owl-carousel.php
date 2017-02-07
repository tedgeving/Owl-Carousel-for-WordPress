<?php

/**
 * @link              tedgeving.com
 * @since             1.0.0
 * @package           Owl_Carousel
 *
 * @wordpress-plugin
 * Plugin Name:       Owl Carousel
 * Plugin URI:        tedgeving.com
 * Description:       Wrapper for Owl Carousel https://owlcarousel2.github.io/OwlCarousel2/
 * Version:           1.0.0
 * Author:            ted
 * Author URI:        tedgeving.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       owl-carousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-owl-carousel-activator.php
 */
function activate_owl_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-owl-carousel-activator.php';
	Owl_Carousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-owl-carousel-deactivator.php
 */
function deactivate_owl_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-owl-carousel-deactivator.php';
	Owl_Carousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_owl_carousel' );
register_deactivation_hook( __FILE__, 'deactivate_owl_carousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-owl-carousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_owl_carousel() {

	$plugin = new Owl_Carousel();
	$plugin->run();

}
run_owl_carousel();
