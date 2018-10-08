<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'services_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'services-meta' => array(
				'title' => esc_html__('Meta Fields', 'bears'),
				'type' => 'tab',
				'options' => array(
					'icon_font' => array( 
						'type' => 'text',
						'value' => 'fa fa-codepen',
						'label' => esc_html__('Icon Font', 'bears'),
						'desc'  => esc_html__('Please, enter icon font of service post.', 'bears'),
					),
					'icon_image' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Icon Image', 'bears'),
						'desc'  => esc_html__('Select icon image of service post.', 'bears'),
					),
					'info_option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'option' => 'Our Waterproofing System'
							),
							array(
								'option' => 'Patented Drain Systems'
							),
							array(
								'option' => 'Basement Flooding'
							),
							array(
								'option' => 'Basement Finishing Guide'
							)
						),
						'label' => esc_html__('Info Option', 'bears'),
						'desc'  => esc_html__('Please configs info option of service post', 'bears'),
						'popup-options' => array(
							'option' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Value', 'bears'),
								'desc'  => esc_html__('Please, enter value of project item.', 'bears'),
							)
						),
						'template' => '{{- option }}',
						'add-button-text' => esc_html__('Add', 'bears'),
						'sortable' => true,
					),
				),
			),
			
		)
	)
	
);
