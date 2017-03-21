<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/12/2017
 * Time: 3:38 PM
 */

function coinso_lbs_activate_plugin(){
    if( version_compare( get_bloginfo('version'), '4.0', '<' ) ){
        wp_die(__('You wordpress version is no supported, please upgrade version in order to use this plugin', 'coinso_lbs'));
    }
}