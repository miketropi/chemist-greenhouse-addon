<?php 
/**
 * Chemist Greenhouse Addon
 *
 * @package       Chemist Greenhouse Addon
 * @author        Mike
 *
 * @wordpress-plugin
 * Plugin Name:       Chemist Greenhouse Addon Block
 * Plugin URI:        #
 * Description:       chemist-greenhouse addon block
 * Version:           1.0.0
 * Author:            Mike
 * Author URI:        #Beplus
 * Text Domain:       chemist-greenhouse-addon
 */

/**
 * Define
 */
define('CGA_VERSION', '1.0.0');
define('CGA_DIR', plugin_dir_path(__FILE__));
define('CGA_URI', plugin_dir_url(__FILE__));

/**
 * Inc
 */
require(CGA_DIR . '/inc/static.php');
require(CGA_DIR . '/inc/hooks.php');
require(CGA_DIR . '/inc/helpers.php');
require(CGA_DIR . '/inc/tempate-tags.php');
require(CGA_DIR . '/inc/ajax.php');

/**
 * Boot
 */
