<?php

/*
  Plugin Name: SK WP Adminer Database Manager
  Plugin URI: https://sk335577.github.io/sk-wp-adminer-database-manager/
  Description: A wordpress plugin based on an awesome database tool "adminer". Use this plugin to manage all your database activities like executing queries,exporting database,CRUD tasks and much more.You can find this plugin as "SK WP Adminer Database Manager" in wordpress menu.
  Version: 2.0.0
  Author:Sandeep Kumar
  Author URI: https://github.com/sk335577
  License: GPLv2
 */
defined('ABSPATH') or die('NO NO NO Everything is wRoNg i am not StArTing!!!!');
define('SK_WPADM_PATH', dirname(__FILE__));
define('SK_WPADM_FOLDER', basename(SK_WPADM_PATH));
define('SK_WPADM_URL', plugins_url() . '/' . SK_WPADM_FOLDER);
define('SK_WPADM_URL_ADMINER', SK_WPADM_URL . '/lib/adminer.php');
add_action('admin_menu', 'sk_wpadbm_plugin_page');

function sk_wpadbm_render_plugin_page() {
    require_once dirname(__FILE__) . '/inc/plugin-page.php';
}

function sk_wpadbm_plugin_page() {
    add_menu_page("SK WP Adminer Database Manager", 'SK WP Adminer Database Manager', 'manage_options', 'sk-wpadbm', 'sk_wpadbm_render_plugin_page', 'dashicons-portfolio');
}
