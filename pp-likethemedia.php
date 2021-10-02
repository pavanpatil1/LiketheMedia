<?php 

/*
Plugin name: Like/dislike Media
Author URI: https://pavan.patil
Description: Simple post like and dislike developed by <a href="https://tpcorporation.epizy.com/">Pavan Patil</a>
version: 1.0
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: likethemedia
*/

//called directly, abort.
if(!defined( 'WPINC' )){
    die;
}

if(!defined('PP_PLUGIN_DIR')){
    define('PP_PLUGIN_DIR', plugin_dir_url( __FILE__ ));
}

if(!function_exists('pp_plugin_script')){
    function pp_plugin_script(){
        wp_enqueue_style('pp-css', PP_PLUGIN_DIR. 'assets/css/style.css');
        wp_enqueue_script('pp-js', PP_PLUGIN_DIR. 'assets/js/main.js', 'jQuery');
    }
    add_action('wp_enqueue_scripts', 'pp_plugin_script');
}

function likemedia_settings_page_html(){

}

function pp_register_menu_page(){
    add_menu_page('LikeMedia', 'LikeMediaSettings', 'manage_options', 'likemedia-settings', 'likemedia_settings_page_html', 'dashicons-thumbs-up', 40);
}

add_action('admin_menu', 'pp_register_menu_page');

?>