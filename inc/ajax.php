<?php 
/**
 * Ajax
 */

function CGA_ajax_get_stores() {
  wp_send_json(CGA_get_stores());
}

add_action('wp_ajax_CGA_ajax_get_stores', 'CGA_ajax_get_stores');
add_action('wp_ajax_nopriv_CGA_ajax_get_stores', 'CGA_ajax_get_stores');