<?php
/*
 * Plugin Name: Liten Demo
 * Version: 1.0
 * Plugin URI: http://www.kildedal.no
 * Description: En liten plugin demo.
 * Author: Marius Kildedal
 * Author URI: http://www.kildedal.no
 * Requires at least: 4.0
 * Tested up to: 4.7.1
 *
 * Text Domain: liten-demo
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Marius Kildedal
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-liten-demo.php' );
require_once( 'includes/class-liten-demo-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-liten-demo-admin-api.php' );
require_once( 'includes/lib/class-liten-demo-post-type.php' );
require_once( 'includes/lib/class-liten-demo-taxonomy.php' );

/**
 * Returns the main instance of Liten_Demo to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Liten_Demo
 */
function Liten_Demo () {
	$instance = Liten_Demo::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Liten_Demo_Settings::instance( $instance );
	}

	return $instance;
}

Liten_Demo();
