<?php
/*
Plugin Name: TopLand Облако тегов
Description: Облако тегов на сайте topland.ru
Version: 1.0
*/

global $wpdb;

if ( ! defined( 'ABSPATH' ) ) exit;

/**************
 * Константы
 **************/
define( 'TOPLAND_CLOUDTAG_PLUGIN_DB_VERSION', '1.1' );
define( 'TOPLAND_CLOUDTAG_PLUGIN_NAME',       'topland_cloudtag' );
define( 'TOPLAND_CLOUDTAG_PLUGIN_NAME_RU',    'Облако тегов' );
define( 'TOPLAND_CLOUDTAG_DB_TABLE_NAME',     $wpdb->prefix . TOPLAND_CLOUDTAG_PLUGIN_NAME );
define( 'TOPLAND_CLOUDTAG_PLUGIN_DIR',        plugin_dir_path( __FILE__ ) );
define( 'TOPLAND_CLOUDTAG_PLUGIN_ADMIN_URL',  admin_url('?page=' . TOPLAND_CLOUDTAG_PLUGIN_NAME) );

/**************
 * Class
 **************/
require_once dirname(__FILE__) . '/inc/class-main.php';
require_once dirname(__FILE__) . '/inc/class-model.php';
$topland_main_class = new ToplandCloudTag( __FILE__ );


/**************
 * Run
 **************/

// Правила активации:
// register_activation_hook() должен вызываться из основного файла плагина, из того где расположена директива Plugin Name
register_activation_hook(__FILE__, array($topland_main_class, 'activate'));
add_action( 'wp_enqueue_scripts', 'topland_cloudtag_script' );
function topland_cloudtag_script(){
	wp_enqueue_script( 'cloudtag-slider-init', '/wp-content/plugins/topland-cloudtag/static/js/cloudtag-init.js', array('jquery','slick'), null, true);
}