<?php 
/**
 * Steps booking block
 */

$block_id = $block['id'];
$align_class = isset($block['align']) ? 'align' . $block['align'] : '';
$class_wrap = ['cg-addon-block', basename(__FILE__, ".php") . '-block', $align_class];
?>
<div 
  id="<?php echo $block_id; ?>" 
  class="<?php echo implode(' ', $class_wrap); ?>" 
  style="padding-top: <?php echo get_field('padding_top'); ?>; padding-bottom: <?php echo get_field('padding_bottom'); ?>;">
  <div class="background-layer" style="background: url(<?php echo get_field('background_image') ?>) no-repeat center center / cover,<?php echo get_field('background_color') ?>"></div>
  <div class="<?php echo CGA_container_class('__block-inner'); ?>">
    <pre><?php print_r($block); ?></pre>
  </div>
</div>