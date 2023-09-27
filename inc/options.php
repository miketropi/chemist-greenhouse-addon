<?php 
/**
 * ACF Options
 */

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page([
    'page_title'    => __('CG Addon Options', 'chemist-greenhouse-addon'),
    'menu_title'    => __('CG Addon Options', 'chemist-greenhouse-addon'),
    'menu_slug'     => 'cg-addon-options',
    'capability'    => 'edit_posts',
    'redirect'      => false,
    'icon_url'      => 'dashicons-block-default'
  ]);
}