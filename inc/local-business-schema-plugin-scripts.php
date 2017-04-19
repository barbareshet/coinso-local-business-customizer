<?php


define('PLUGIN_FOLDER', plugins_url().'/coinso-local-business-customizer');

if( !defined('ABSPATH')){
    return;
}

function coinso_local_business_schema_scripts() {
    wp_enqueue_style( 'local-business-schema-css', PLUGIN_FOLDER . '/assets/css/style.css', array(), '', 'screen' );
    wp_enqueue_style( 'local-business-schema-css', PLUGIN_FOLDER  . '/assets/css/style.css', array(), '', 'screen' );
    wp_enqueue_style( 'local-business-schema-fonts', PLUGIN_FOLDER  . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '', 'screen' );
    wp_enqueue_script( 'local-business-schema-js', PLUGIN_FOLDER  . '/assets/js/main.js', array('jquery'), '', false );
}