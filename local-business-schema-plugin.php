<?php
/*
Plugin Name: Coinso local business customizer
Plugin URI: http://
Description: Add local business schema from the customizer
Author: Ido @ Coinso
Author URI: http://coinso.com
Version: 1.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: The name of your plugin directory
*/
if( ! defined( 'ABSPATH' ) ) {
    return;
}
//Setup



//Includes
//1.1 include registration
include('inc/local-business-schema-plugin-activation.php');
include ('inc/local-business-schema-plugin-customizer.php');
include ('inc/local-business-schema-plugin-scripts.php');



//Hooks
//1.1 regster activation
register_activation_hook(__FILE__, 'coinso_lbs_activate_plugin');
add_action('customize_register', 'coinso_local_business_customize_register');
add_action('init', 'coinso_register_schema_shortcode');
add_action('wp_enqueue_scripts','coinso_local_business_schema_scripts' );


//Shorcodes
//add_action('admin_menu', 'coinso_lbs_plugin_menu');
//add_action('admin_init', 'coinso_lbs_admin_init');

//Schema Customizer
function coinso_register_schema_shortcode(){
    add_shortcode('schema','coinso_schema' );
}
function coinso_schema($args, $content){


    ob_start();
    include ('inc/local-business-schema-plugin-content.php');

    return ob_get_clean();
}


