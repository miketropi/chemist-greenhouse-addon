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
      'mode'              => 'edit',
    ]);
  }
}

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_6513c90cd4c46',
	'title' => 'Block - Steps Booking',
	'fields' => array(
		array(
			'key' => 'field_6513c90d4fd57',
			'label' => 'Background Color',
			'name' => 'background_color',
			'aria-label' => '',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#007341',
			'enable_opacity' => 1,
			'return_format' => 'string',
		),
		array(
			'key' => 'field_6513c9c54fd58',
			'label' => 'Background Image',
			'name' => 'background_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_6513c9e34fd59',
			'label' => 'Heading',
			'name' => 'heading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'This is Heading Text',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6513c9f74fd5a',
			'label' => 'Description',
			'name' => 'description',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'This is description, neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_65144701948b7',
			'label' => 'Padding Top',
			'name' => 'padding_top',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '45px',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65144778948b8',
			'label' => 'Padding Bottom',
			'name' => 'padding_bottom',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '45px',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/steps-booking-block',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

