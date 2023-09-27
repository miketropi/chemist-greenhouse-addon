<?php 
/**
 * Steps booking block
 */

$block_id = $block['id'];
$align_class = isset($block['align']) ? 'align' . $block['align'] : '';
$class_wrap = ['cg-addon-block', basename(__FILE__, ".php") . '-block', $align_class];
?>
<div id="<?php echo $block_id; ?>" class="<?php echo implode(' ', $class_wrap); ?>">
  <div class="<?php echo CGA_container_class(); ?>">
    <pre><?php print_r($block); ?></pre>
  </div>
</div>