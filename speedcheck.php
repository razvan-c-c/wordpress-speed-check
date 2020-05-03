<?php
/**
 *
 * @link              razvancilibeanu.com
 * @since             1.0.0
 * @package           Rccp
 *
 * @wordpress-plugin
 * Plugin Name:       Raz SpeedTest - Based on Google PageSpeed Insights
 * Plugin URI:        razvancilibeanu.com
 * Description:       Simple way to analyze your website's speed.
 * Version:           1.0.0
 * Author:            Razvan Cilibeanu
 * Author URI:        razvancilibeanu.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rccp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC'))
{
    die;
}

define('RCCP_VERSION', '1.0.0');
function activate_rccp()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-rccp-activator.php';
    Rccp_Activator::activate();
}

function deactivate_rccp()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-rccp-deactivator.php';
    Rccp_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_rccp');
register_deactivation_hook(__FILE__, 'deactivate_rccp');

require plugin_dir_path(__FILE__) . 'includes/class-rccp.php';

function run_rccp()
{

    $plugin = new Rccp();
    $plugin->run();

}
add_action('admin_menu', 'extra_post_info_menu');
function extra_post_info_menu()
{
    $page_title = 'Raz SpeedTest ';
    $menu_title = 'Raz SpeedTest';
    $capability = 'manage_options';
    $menu_slug = 'Raz SpeedTest';
    $function = 'Raz SpeedTest';
    $icon_url = 'dashicons-star-empty';
    $position = 2;
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, 'dbi_render_plugin_settings_page', $icon_url, $position);
}

function dbi_render_plugin_settings_page()
{
    $uri = $_SERVER['REQUEST_URI'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $parse = parse_url($url);
    $path = "https://developers.google.com/speed/pagespeed/insights/?url=" . $parse['host'];

    echo '<style>#wpbody-content{padding-bottom:0px!important}</style>';
    echo '<body style="background:#fff">';
    echo '<div style="overflow-x: hidden;">';
    echo '<iframe src="' . $path . '" style="  height: 200vh;  width: calc(100% + 18px);  border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>;';

    echo '</div>';
}

run_rccp();

