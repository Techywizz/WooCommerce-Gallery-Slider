<?php
/**
 * Plugin Name: Product Gallery Slider
 * Description: Enables carousel for WooCommerce Product Gallery thumbnails
 * Plugin URI: https://www.techsolitaire.com
 * Author: TechSolitaire
 * Author URI: https://www.techsolitaire.com
 * License: GPL2 or later
 * Text Domain: techsolitaire
 */

defined( 'ABSPATH' ) || exit;

//include main plugin file
require_once plugin_dir_path( __FILE__ ) . '/includes/class-tech-product-gallery-slider.php';

function tech_product_gallery_slider_run() {
	$instance = new TECH_Product_Gallery_Slider();
	$instance->run();
}

tech_product_gallery_slider_run();
