<?php 
/**
* Plugin Name: Color Picker for Contact Form 7
* Description: This plugin allows Enables adding a color field.
* Version: 1.0
* Copyright: 2023
* Text Domain: color-picker-for-contact-form-7
*/


if (!defined('ABSPATH')) {
    die('-1');
}

// define for base name
define('CPFCF7_BASE_NAME', plugin_basename(__FILE__));

// define for plugin file
define('cpfcf7_plugin_file', __FILE__);

// define for plugin dir path
if (!defined('CPFCF7_PLUGIN_DIR')) {
    define('CPFCF7_PLUGIN_DIR', plugin_dir_path(__FILE__));
}
if (!defined('CPFCF7_PLUGIN_URL')) {
  define('CPFCF7_PLUGIN_URL',plugins_url('', __FILE__));
}


// Include function files
include_once(CPFCF7_PLUGIN_DIR.'includes/frontend.php');
include_once(CPFCF7_PLUGIN_DIR.'includes/admin.php');

function CPFCF7_load_script_style(){
    wp_enqueue_script( 'jquery-colorpicker', CPFCF7_PLUGIN_URL . '/public/js/jscolor.js', array('jquery'), '2.0');
    wp_enqueue_script( 'jquery-colorpickers', CPFCF7_PLUGIN_URL. '/public/js/design.js', array(), '1.0');

    wp_enqueue_style( 'jquery-colorpickers-style', CPFCF7_PLUGIN_URL. '/public/css/design.css', '', '3.0' );
}
add_action( 'wp_enqueue_scripts', 'CPFCF7_load_script_style' );

function CPFCF7_load_admin_script(){
    wp_enqueue_script( 'jquery-admin', CPFCF7_PLUGIN_URL . '/public/js/jscolor.js', array('jquery'), '1.0');
    wp_enqueue_script( 'jquery-admin-colorpickers', CPFCF7_PLUGIN_URL. '/admin/js/design.js', array(), '1.0');

    wp_enqueue_style( 'jquery-admin-colorpickers-style', CPFCF7_PLUGIN_URL. '/admin/css/design.css', '', '3.0' );
}
add_action( 'admin_enqueue_scripts', 'CPFCF7_load_admin_script' );
?>