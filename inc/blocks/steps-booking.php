<?php 
add_action('acf/init', 'CGA_steps_booking_block');

function CGA_steps_booking_block() {
  // Check function exists.
  if(function_exists('acf_register_block_type')) {
    // Register a block.
    acf_register_block_type([
      'name'              => 'steps_booking_block',
      'title'             => __('Steps Booking', 'chemist-greenhouse-addon'),
      'description'       => __('Steps booking', 'chemist-greenhouse-addon'),
      'render_template'   => CGA_DIR . '/templates/blocks/steps-booking.php',
      'category'          => 'formatting',
      // 'mode'              => 'edit',
    ]);
  }
}
