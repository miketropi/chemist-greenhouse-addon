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

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_6513cc45324e8',
	'title' => 'CG Addon Options',
	'fields' => array(
		array(
			'key' => 'field_6513cc45fafaf',
			'label' => 'General',
			'name' => '',
			'aria-label' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6513cc6afafb0',
			'label' => 'Class Container',
			'name' => 'cga_class_container',
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
			'default_value' => 'block-container',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6513d3573f8a1',
			'label' => 'Container Width',
			'name' => 'cga_container_width',
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
			'default_value' => '1200px',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'cg-addon-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'field',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

