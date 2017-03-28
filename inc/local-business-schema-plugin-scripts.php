<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 2/26/2017
 * Time: 12:46 PM
 */
if( !defined('ABSPATH')){
    return;
}
/**
 * Enqueueing Scripts
 * @return void
 */
function coinso_local_business_schema_scripts() {
    wp_enqueue_style( 'local-business-schema-css', plugin_dir_url(__FILE__) . '/assets/css/style.css', array(), '', 'screen' );
    wp_enqueue_style( 'local-business-schema-fonts', plugin_dir_url( __FILE__ ) . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '', 'screen' );
    wp_enqueue_script( 'local-business-schema-js', plugin_dir_url( __FILE__ ) . '/assets/js/main.js', array('jquery'), '', false );
}