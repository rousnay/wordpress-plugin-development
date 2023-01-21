<?php
/*
Plugin Name:  MyPlugin
Description:  A WordPress Plugin with core features
Plugin URI:   https://wittyplex.com/wordpress
Author:       Mozahidur Rahman
Version:      1.0
Text Domain:  myplugin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/


// exit if file is called directly
if (!defined('ABSPATH')) {

    exit;
}


// load text domain
function myplugin_load_textdomain() {
    
    load_plugin_textdomain( 'myplugin', false, plugin_dir_path( __FILE__ ) . 'languages/' );
    
}
add_action( 'plugins_loaded', 'myplugin_load_textdomain' );



// include plugin dependencies: admin only
if ( is_admin() ) {
    
    require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
    
}



// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';



// default plugin options
function myplugin_options_default() {
    
    return array(
        'custom_url'     => 'https://wordpress.org/',
        'custom_title'   => esc_html__('Powered by WordPress', 'myplugin'),
        'custom_style'   => 'disable',
        'custom_message' => '<p class="custom-message">'. esc_html__('My custom message', 'myplugin') .'</p>',
        'custom_footer'  => esc_html__('Special message for users', 'myplugin'),
        'custom_toolbar' => false,
        'custom_scheme'  => 'default',
    );
    
}


// remove options on uninstall
// function myplugin_on_uninstall() {

//     if ( ! current_user_can( 'activate_plugins' ) ) return;

//     delete_option( 'myplugin_options' );

// }
// register_uninstall_hook( __FILE__, 'myplugin_on_uninstall' );