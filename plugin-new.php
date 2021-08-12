<?php
/**
 * Plugin Name:       Plugin New
 * Description:       Boilerplate for creating an expandible and cleanly organized wordpress plugin. I have used Namespaces and Composer for autoloading all my classes as it is the real way to build plugins.
 * Version:           1.0
 * Requires at least: 4.9
 * Requires PHP:      7.2
 * Author:            Badar Shahbaz
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-new
 */


 // Checking if the plugin is not accessed from outside WordPress.
 if ( ! defined( 'ABSPATH' ) ) {
     die;
 }

 // Defining global constants for our plugin 
 define( 'NP_PLUGIN_VERSION', '1.0' );
 define( 'NP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
 define( 'NP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
 define( 'NP_PLUGIN_INC', NP_PLUGIN_PATH . 'includes/' );

 // Requiring the composer autoload file
 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
   require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

 // Code that runs during plugin activation
 function plugin_new_activate() {
   \Plugin\Classes\Activate::activate();
 }
 register_activation_hook( __FILE__, 'plugin_new_activate' );


 // Code that runs during plugin activation
 function plugin_new_deactivate() {
    \Plugin\Classes\Deactivate::deactivate();
 }
 register_activation_hook( __FILE__, 'plugin_new_deactivate' );

// Init all the files required for the plugin to run
if ( class_exists( 'Plugin\\Init' ) ) {
    \Plugin\Init::register_services();
}