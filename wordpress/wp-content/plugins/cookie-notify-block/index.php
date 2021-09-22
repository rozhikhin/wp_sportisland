<?php
/**
 * Plugin Name: Cookie Notify Block
 * Description: Show notify for users about cookies
 * Plugin URI:  https:://wp.itwk.ru/cookie_notify_block
 * Author URI:  https:://itwk.ru/
 * Author:      Alexander Rozhikhin
 * Version:    1.0
 * Domain Path: /languages
 * Text Domain: cookie-notify-block
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

register_activation_hook(__FILE__, 'cookie_notify_activation');
register_deactivation_hook(__FILE__, 'cookie_notify_deactivation');
add_action( 'plugins_loaded', function(){
	load_plugin_textdomain( 'cookie-notify-block', false, dirname( plugin_basename(__FILE__) ) . '/languages' );
} );

add_action('admin_enqueue_scripts', 'cookie_notify_block_style_register');
function cookie_notify_block_style_register(){
	wp_enqueue_style('cookie-notify-block-admin-style', plugins_url('/css/admin.css',  __FILE__));
}

function cookie_notify_defautl_options(){
	return [
		'cnb_bg' => '#000000',
		'cnb_color' => '#ffffff',
		'cnb_text' => esc_html__('We are uses cookies', 'cookie-notify-block'),
		'cnb_position' => 'bottom',
	];
}

function cookie_notify_activation(){
	$options = cookie_notify_defautl_options();
	foreach ($options as $key => $value ){
		update_option($key, $value);
	}
}

function cookie_notify_deactivation(){
	$options = cookie_notify_defautl_options();
	foreach ($options as $key => $value ){
		delete_option($key);
	}
}

add_action('admin_menu', 'cookie_notify_reg_menu');

function cookie_notify_reg_menu(){
	add_menu_page(
		esc_html__('Cookie notify', 'cookie-notify-block'),
		esc_html__('Cookie notify', 'cookie-notify-block'),
		'manage_options',
		'cookie-notify-block-settings',
		'cookie_notify_block_admin_view_cb',
		'dashicons-bell'
	);
}

function cookie_notify_block_admin_view_cb(){

	if (!empty($_POST)) {
		update_option('cnb_bg', sanitize_text_field($_POST['cnb_bg']));
		update_option('cnb_color', sanitize_text_field($_POST['cnb_color']));
		update_option('cnb_text', sanitize_text_field($_POST['cnb_text']));
		update_option('cnb_position', sanitize_text_field($_POST['cnb_position']));
	}

	$bg = get_option('cnb_bg');
	$color = get_option('cnb_color');
	$text = get_option('cnb_text');
	$position = get_option('cnb_position');

	require_once('inc/admin.php');
}

add_action('wp_footer', 'cookie_notify_block_frontpage_view_cb');

function cookie_notify_block_frontpage_view_cb(){
	if ($_COOKIE['cnb_coockie_agreement'] === 'agreed') {
		return;
	}
	$bg = get_option('cnb_bg');
	$color = get_option('cnb_color');
	$text = get_option('cnb_text');
	$position = get_option('cnb_position');
	$css = $position . ': 0; '; // top: 0; or bottom: 0;

	require_once('inc/front-page.php');
}

add_action('wp_ajax_nopriv_cnb_coockie_ajax', 'cnb_ajax_handler');
add_action('wp_ajax_cnb_coockie_ajax', 'cnb_ajax_handler');
function cnb_ajax_handler(){
	setcookie('cnb_coockie_agreement', 'agreed', time() + 60*60*24*30, '/');
	echo 'OK';
	wp_die();
}


