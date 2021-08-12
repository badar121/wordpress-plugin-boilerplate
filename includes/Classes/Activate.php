<?php 
/**
 * 
 * @package plugin-new
 * @since 1.0.0
 */

namespace Plugin\Classes;

 class Activate {
    public static function activate() {
        if ( ! defined( 'ABSPATH' ) ) {
           die;
        }
        flush_rewrite_rules();

    }
 }