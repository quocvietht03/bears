<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => esc_html__('Layout Settings', 'bears'),
				'type' => 'tab',
				'options' => array(
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Layout', 'bears'),
						'desc'  => esc_html__('Select a layout of project', 'bears'),
						'choices' => array(
							'default' => esc_html__('Default(Gallery Left)', 'bears'),
							'layout1' => esc_html__('Layout 1(Gallery Top)', 'bears'),
							'layout2' => esc_html__('Layout 2(Gallery Bottom)', 'bears'),
							'layout3' => esc_html__('Layout 3(Gallery Slide Left)', 'bears')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Select Gallery Columns', 'bears'),
						'desc'  => esc_html__('Select gallery columns of project', 'bears'),
						'choices' => array(
							'col-md-12' => esc_html__('1 Column', 'bears'),
							'col-md-6' => esc_html__('2 Columns', 'bears'),
							'col-md-4' => esc_html__('3 Columns', 'bears'),
							'col-md-3' => esc_html__('4 Columns', 'bears')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => esc_html__('Gallery Space', 'bears'),
						'desc'  => esc_html__('Please, enter gallery space of project.', 'bears'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => esc_html__('Meta Fields', 'bears'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infomation',
						'label' => esc_html__('Info Title', 'bears'),
						'desc'  => esc_html__('Please, enter info title of project.', 'bears'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2017'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => esc_html__('Info Option', 'bears'),
						'desc'  => esc_html__('Please configs info option of project', 'bears'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'bears'),
								'desc'  => esc_html__('Please, enter title of project item.', 'bears'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Value', 'bears'),
								'desc'  => esc_html__('Please, enter value of project item.', 'bears'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => esc_html__('Add', 'bears'),
						'sortable' => true,
					),
					'infor-avatar' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Avatar Image', 'bears'),
						'desc'  => esc_html__('Select avatar image of project item.', 'bears'),
					),
					'infor-email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => esc_html__('Email', 'bears'),
						'desc'  => esc_html__('Please, enter email of member.', 'bears'),
					),
					'infor-phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => esc_html__('Phone', 'bears'),
						'desc'  => esc_html__('Please, enter phone number of member.', 'bears'),
					),
					'infor-address' => array(
						'type'  => 'text',
						'value' => '121 Rain St, Melbourne 3000, Australia.',
						'label' => esc_html__('Address', 'bears'),
						'desc'  => esc_html__('Please, enter address of member.', 'bears'),
					)
				),
			),
			'portfolio-social' => array(
				'title' => esc_html__('Social', 'bears'),
				'type' => 'tab',
				'options' => array(
					'social-title' =>  array( 
						'type' => 'text',
						'value' => 'Share',
						'label' => esc_html__('Social Title', 'bears'),
						'desc'  => esc_html__('Please, enter social title of project.', 'bears'),
					),
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Pinterest',
								'icon' => 'fa fa-pinterest',
								'link' => '#'
							),
							array(
								'title' => 'Behance',
								'icon' => 'fa fa-behance',
								'link' => '#'
							),
							array(
								'title' => 'Instagram',
								'icon' => 'fa fa-instagram',
								'link' => '#'
							)
						),
						'label' => esc_html__('Social Items', 'bears'),
						'desc'  => esc_html__('Please configs social of member', 'bears'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Title', 'bears'),
								'desc'  => esc_html__('Please, enter title of social item.', 'bears'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Icon', 'bears'),
								'desc'  => esc_html__('Please, enter icon of social item.', 'bears'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => esc_html__('Url(Link)', 'bears'),
								'desc'  => esc_html__('Please, enter link of social item.', 'bears'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => esc_html__('Add', 'bears'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);