<?php
/**
 * Block Our Stores
 */
add_action('acf/init', 'CGA_our_stores_block');

function CGA_our_stores_block() {
  // Check function exists.
  if(function_exists('acf_register_block_type')) {
    // Register a block.
    acf_register_block_type([
      'name'              => 'our_stores_block',
      'title'             => __('Our Stores', 'chemist-greenhouse-addon'),
      'description'       => __('Our Stores', 'chemist-greenhouse-addon'),
      'render_template'   => CGA_DIR . '/templates/blocks/our-stores.php',
      'category'          => 'formatting',
      'mode'              => 'edit',
    ]);
  }
}
