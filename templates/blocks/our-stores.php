<?php 
/**
 * Our Stores Block
 */

$block_id = $block['id'];
$block_class = basename(__FILE__, ".php") . '-block';
$align_class = isset($block['align']) ? 'align' . $block['align'] : '';
$class_wrap = ['cg-addon-block', $block_class, $align_class];

$stores = CGA_get_stores();
$marker_icon = CGA_URI . '/images/marker.png';
$toggle_mobile_icon = CGA_URI . '/images/nav-icon-grid-svgrepo-com.svg';
?>
<div 
  id="<?php echo $block_id; ?>" 
  class="<?php echo implode(' ', $class_wrap); ?>"
  style="padding-top: <?php echo get_field('padding_top'); ?>; padding-bottom: <?php echo get_field('padding_bottom'); ?>;">
  <div class="<?php echo CGA_container_class(); ?>">
    <div class="block-inner">
      <?php if(count($stores) > 0) : ?>
      <h2 class="block-heading"><?php echo get_field('heading') ?></h2>

      <div class="our-stores__tool">
        <div class="our-stores__search-box">
          <input type="text" list="store_suggestion_<?php echo $block_id; ?>" class="store-seach-suggestion" placeholder="<?php _e('Enter Postcode or Suburb', 'chemist-greenhouse-addon') ?>">
          <datalist id="store_suggestion_<?php echo $block_id; ?>">
            <?php foreach($stores as $index => $store) : ?>
            <option value="<?php echo $store['gmap_location']['address']; ?>">
            <?php endforeach; ?>
          </datalist>
        </div>

        <button class="our-stores__toggle-nav">
          <img 
            src="<?php echo $toggle_mobile_icon; ?>" 
            alt="<?php _e('toggle', 'chemist-greenhouse-addon') ?>">
        </button>
      </div> <!-- .our-stores__tool -->
      
      <div class="our-stores-gmap">
        <div class="our-stores-gmap__map">
          <div class="__GMAP_HERE"></div> <!-- load by javascript -->
        </div> <!-- .our-stores-gmap__map -->
        <div class="our-stores-gmap__nav">
          <ul class="store-nav">
            <?php foreach($stores as $index => $store) : ?>
            <li class="store-nav-item" title="<?php echo $store['gmap_location']['address']; ?>" data-latlng="<?php echo $store['gmap_location']['lat'] . ',' . $store['gmap_location']['lng'] ?>">
              <div class="s-info">
                <h4><?php echo $store['name'] ?></h4>
                <?php echo $store['opening_time'] ?>
              </div>
              <div class="marker">
                <img src="<?php echo $marker_icon; ?>" alt="<?php echo $store['name'] ?>">
                <span class="distance"></span>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div> <!-- .our-stores-gmap__nav -->
      </div>
      <?php else: ?>
      <p><?php _e('There are no stores', 'chemist-greenhouse-addon'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div> <!-- #<?php echo $block_id; ?> -->