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
 * Load blocks
 */
require(CGA_DIR . '/inc/blocks/load.php');

/**
 * Admin Note
 */
function CGA_admin_notice_init() {
	$class = 'notice notice-info';
	$message = __( 'We\'re using ACF Pro to build Gutenberg Block, please install ACF Pro first. Thank you!', 'chemist-greenhouse-addon' );

  if( ! class_exists('ACF') ) {
    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
  }
}

add_action( 'admin_notices', 'CGA_admin_notice_init' );

/**
 * Boot
 */
