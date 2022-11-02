<?php
/*
Plugin Name: TopLand Тарифы
Description: Тарифы в категориях на сайте topland-rnd.ru
Version: 1.0
*/

global $wpdb;

if ( ! defined( 'ABSPATH' ) ) exit;

/**************
 * Константы
 **************/
define( 'TOPLAND_TARIFFS_PLUGIN_DB_VERSION', '1.1' );
define( 'TOPLAND_TARIFFS_PLUGIN_NAME',       'topland_tariffs' );
define( 'TOPLAND_TARIFFS_PLUGIN_NAME_RU',    'Тарифы' );
define( 'TOPLAND_TARIFFS_DB_TABLE_NAME',     $wpdb->prefix . TOPLAND_TARIFFS_PLUGIN_NAME );
define( 'TOPLAND_TARIFFS_PLUGIN_DIR',        plugin_dir_path( __FILE__ ) );
define( 'TOPLAND_TARIFFS_PLUGIN_ADMIN_URL',  admin_url('?page=' . TOPLAND_TARIFFS_PLUGIN_NAME) );

/**************
 * Class
 **************/
require_once dirname(__FILE__) . '/inc/class-main.php';
require_once dirname(__FILE__) . '/inc/class-model.php';
$topland_main_class = new ToplandTariffs( __FILE__ );


/**************
 * Run
 **************/

// Правила активации:
// register_activation_hook() должен вызываться из основного файла плагина, из того где расположена директива Plugin Name
register_activation_hook(__FILE__, array($topland_main_class, 'activate'));

add_action( 'wp_enqueue_scripts', 'topland_tariffs_script' );
function topland_tariffs_script(){
	wp_enqueue_script( 'tariffs-slider-init', '/wp-content/plugins/topland-tariffs/static/js/tariffs-init.js', array('jquery','slick'), null, true);
}