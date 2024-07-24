<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_66a0cb39c4c83',
	'title' => 'Block:reviews',
	'fields' => array(
		array(
			'key' => 'field_66a0cb73118ba',
			'label' => 'Группа отзывов',
			'name' => 'reviews-group',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'layout' => 'block',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Добавить группу',
			'acfe_field_group_condition' => 0,
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_66a0cb39ca98c',
					'label' => 'Категория',
					'name' => 'tax',
					'aria-label' => '',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'review-category',
					'add_term' => 1,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'field_type' => 'radio',
					'allow_null' => 0,
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'acfe_field_group_condition' => 0,
					'bidirectional' => 0,
					'multiple' => 0,
					'bidirectional_target' => array(
					),
					'min' => '',
					'max' => '',
					'parent_repeater' => 'field_66a0cb73118ba',
				),
				array(
					'key' => 'field_66a0cb9f118bb',
					'label' => 'Отзывы',
					'name' => 'reviews',
					'aria-label' => '',
					'type' => 'relationship',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'reviews',
					),
					'post_status' => array(
						0 => 'publish',
					),
					'taxonomy' => '',
					'filters' => array(
						0 => 'search',
						1 => 'taxonomy',
					),
					'return_format' => 'id',
					'acfe_add_post' => 0,
					'acfe_edit_post' => 0,
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'min' => '',
					'max' => '',
					'elements' => '',
					'acfe_field_group_condition' => 0,
					'bidirectional' => 0,
					'bidirectional_target' => array(
					),
					'parent_repeater' => 'field_66a0cb73118ba',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1721814682,
));

endif;