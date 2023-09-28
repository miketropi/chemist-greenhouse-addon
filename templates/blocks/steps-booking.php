<?php 
/**
 * Steps booking block
 */

$block_id = $block['id'];
$block_class = basename(__FILE__, ".php") . '-block';
$align_class = isset($block['align']) ? 'align' . $block['align'] : '';
$class_wrap = ['cg-addon-block', $block_class, $align_class];

$next_arrow_url = CGA_URI . '/images/next-arrow.png';
$steps = [
  0 => [
    'step_num' => __('Step 1', 'chemist-greenhouse-addon'),
    'icon' => CGA_URI . '/images/pager.png',
    'name' => __('Do you have a prescription?', 'chemist-greenhouse-addon'),
    'buttons' => implode('', [
      '<a class="cga-button __btn-yes">'. __('Yes', 'chemist-greenhouse-addon') .'</a>',
      '<a class="cga-button __btn-no">'. __('No', 'chemist-greenhouse-addon') .'</a>',
    ]),
    'default_hidden' => false,
  ],
  1 => [
    'step_num' => __('Step 2', 'chemist-greenhouse-addon'),
    'icon' => CGA_URI . '/images/calendar.png',
    'name' => __('Book a consult', 'chemist-greenhouse-addon'),
    'buttons' => '<a class="cga-button __btn-book-now" href="'. get_field('book_now_url') .'">'. __('Book now', 'chemist-greenhouse-addon') .'</a>',
    'default_hidden' => true,
  ],
  2 => [
    'step_num' => __('Step 3', 'chemist-greenhouse-addon'),
    'icon' => CGA_URI . '/images/capsule.png',
    'name' => __('Receive your script', 'chemist-greenhouse-addon'),
    'buttons' => '',
    'default_hidden' => true,
  ],
  3 => [
    'step_num' => __('Step 2', 'chemist-greenhouse-addon'),
    'icon' => CGA_URI . '/images/house.png',
    'name' => __('Visit us today', 'chemist-greenhouse-addon'),
    'buttons' => '<a class="cga-button __btn-find-store" href="'. get_field('find_a_store_url') .'">'. __('Find a Store', 'chemist-greenhouse-addon') .'</a>',
    'default_hidden' => true,
  ],
];
?>
<div 
  id="<?php echo $block_id; ?>" 
  class="<?php echo implode(' ', $class_wrap); ?>" 
  style="padding-top: <?php echo get_field('padding_top'); ?>; padding-bottom: <?php echo get_field('padding_bottom'); ?>;">
  <div class="background-layer cga-zindex-1" style="background: url(<?php echo get_field('background_image') ?>) no-repeat center center / cover,<?php echo get_field('background_color') ?>"></div>
  <div class="<?php echo CGA_container_class('cga-zindex-3'); ?>">
    <div class="block-inner cga-text-center">
      <h2 class="block-heading" style="color: <?php echo get_field('heading_color'); ?>;"><?php echo get_field('heading') ?></h2>
      <div class="block-desc" style="--text-color: <?php echo get_field('description_color'); ?>;"><?php echo wpautop(get_field('description')) ?></div>
      <div class="steps-booking">
        <?php foreach($steps as $index => $step) : $hidden_class = ($step['default_hidden'] ? 'step-hidden' : '') ?>
        <div class="steps-booking__item <?php echo '__item-index-' . ($index + 1); ?> <?php echo $hidden_class; ?>">
          <?php if($index != 0) : ?>
          <span class="steps-booking__item-next-arrow">
            <img src="<?php echo $next_arrow_url; ?>" alt="<?php _e('#next-arrow', 'chemist-greenhouse-addon'); ?>">
          </span>
          <?php endif; ?>
          <div class="steps-booking__item-inner">
            <span class="steps-booking__item-num"><?php echo $step['step_num'] ?></span>
            <div class="steps-booking__item-icon">
              <img src="<?php echo $step['icon'] ?>" alt="<?php echo '#' . $step['name']; ?>">
            </div>
            <h4 class="steps-booking__item-name" style="color: <?php echo get_field('heading_color'); ?>;"><?php echo $step['name'] ?></h4>
            <?php if(!empty($step['buttons'])) : ?>
            <div class="steps-booking__item-buttons">
              <?php echo $step['buttons']; ?>
            </div>
            <?php endif; ?>  
          </div>
        </div> <!-- .steps-booking__item -->
        <?php endforeach; ?>
      </div> <!-- .steps-booking -->
    </div>
    <!-- <pre><?php // print_r($block); ?></pre> -->
  </div>
</div> <!-- #<?php echo $block_id; ?> -->