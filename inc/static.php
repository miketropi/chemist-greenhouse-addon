<?php 
/**
 * Static
 */

add_action('wp_enqueue_scripts', 'CGA_enqueue_scripts');
function CGA_enqueue_scripts() {
  wp_enqueue_style('cga-css', CGA_URI . '/dist/css/chemist-greenhouse-addon.bundle.css', false, CGA_VERSION);
  wp_enqueue_script('cga-js', CGA_URI . '/dist/chemist-greenhouse-addon.bundle.js', ['jquery'], CGA_VERSION, true);

  wp_localize_script('cga-js', 'CGA_PHP_DATA', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'lang' => []
  ]);

  wp_add_inline_style('cga-css', CGA_style_inline());
}

add_action('admin_enqueue_scripts', 'CGA_admin_enqueue_scripts');
function CGA_admin_enqueue_scripts() {
  wp_enqueue_style('cga-admin-css', CGA_URI . '/dist/css/chemist-greenhouse-addon-admin.bundle.css', false, CGA_VERSION);
}

add_action('admin_head', function() {
  ?>
  <style>
    <?php echo CGA_style_inline(); ?>
  </style>
  <?php
});

function CGA_style_inline() {
  ob_start();
  ?>
  :root {
    --cga-container-width: <?php echo get_field('cga_container_width', 'option') ?>
  }

  <?php echo '.' . get_field('cga_class_container', 'option') ?> {
    width: var(--cga-container-width);
    max-width: 100%;
    padding: 0 20px;
    margin: 0 auto;
    box-sizing: border-box;
  }
  <?php
  return ob_get_clean();
}
