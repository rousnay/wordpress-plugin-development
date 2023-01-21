<?php
/*
Plugin Name:  Basic Plugin
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


// if admin area
if ( is_admin() ) {

    // include plugin dependencies
    require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
    require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';

}

