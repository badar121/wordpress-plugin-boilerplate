<?php 
/**
 * 
 * @package plugin-new
 * @since 1.0.0
 */

namespace Plugin\Classes;

class Enqueue {
    public function register() {
        echo '<h1>hello</h1>';
        add_action( 'wp_enqueue_scripts', array( $this, 'np_frontend_enqueue_scripts' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'np_admin_enqueue_scripts' ) );
    }

    // Callback function for frontend styles and scripts
    public function np_frontend_enqueue_scripts() {
        wp_enqueue_style( 'np-frontend-style', NP_PLUGIN_URL . 'assets/css/frontend-style.css' );
        wp_enqueue_script( 'np-frontend-script', NP_PLUGIN_URL . 'assets/js/frontend-script.js' );
    }

    // Callback function for admin styles and scripts
    public function np_admin_enqueue_scripts() {
        wp_enqueue_style( 'np-admin-style', NP_PLUGIN_URL . 'assets/css/admin-style.css' );
        wp_enqueue_script( 'np-admin-script', NP_PLUGIN_URL . 'assets/js/admin-script.js' );
    }
}