<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$menu_slug_opt = array();
$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$menu_slug_opt['auto'] = 'Auto';
foreach ( $menus_obj as $menu_obj ) {
	$menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => esc_html__('General', 'bears'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Title Bar', 'bears'),
						'desc' => esc_html__('Turn on to disable title bar in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Footer Space', 'bears'),
						'desc' => esc_html__('Turn on to disable space between footer and content in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => esc_html__('Header', 'bears'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Header Layout', 'bears'),
						'desc'  => esc_html__('Select a header layout in current page', 'bears'),
						'choices' => array(
							'default' => esc_html__('Default', 'bears'),
							'1' => esc_html__('Header 1', 'bears'),
							'2' => esc_html__('Header 2', 'bears'),
							'3' => esc_html__('Header 3', 'bears'),
							'4' => esc_html__('Header 4', 'bears'),
							'5' => esc_html__('Header 5', 'bears'),
							'6' => esc_html__('Header 6', 'bears'),
							'7' => esc_html__('Header 7', 'bears'),
							'8' => esc_html__('Header 8', 'bears'),
							'9' => esc_html__('Header 9', 'bears'),
							'10' => esc_html__('Header 10', 'bears'),
							'11' => esc_html__('Header 11', 'bears'),
							'12' => esc_html__('Header 12', 'bears'),
							'13' => esc_html__('Header 13', 'bears')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Full Width (100%)', 'bears'),
						'desc' => esc_html__('Turn on to disable header full width (100%) in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Top', 'bears'),
						'desc' => esc_html__('Turn on to disable header top in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo', 'bears'),
						'desc'  => esc_html__('Select image to change the logo in current page.', 'bears'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'bears'),
						'desc'  => esc_html__('Controls the height of the logo in current page. EX: 50', 'bears')
					),
					'header_menu_assign' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => esc_html__('Menu Assign', 'bears'),
						'desc'  => esc_html__('Select a menu assign of header layout in current page', 'bears'),
						'choices' => $menu_slug_opt
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Sticky', 'bears'),
						'desc' => esc_html__('Turn on to disable header stick in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo Stick', 'bears'),
						'desc'  => esc_html__('Select image to change the logo stick in current page.', 'bears'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'bears'),
						'desc'  => esc_html__('Controls the height of the logo stick in current page. EX: 40', 'bears')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Header Top Mobile', 'bears'),
						'desc' => esc_html__('Turn on to disable header top mobile in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Logo Mobile', 'bears'),
						'desc'  => esc_html__('Select image to change the logo mobile in current page.', 'bears'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => esc_html__('Logo Height', 'bears'),
						'desc'  => esc_html__('Controls the height of the logo mobile in current page. EX: 30', 'bears')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => esc_html__('Title Bar', 'bears'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Title Bar Layout', 'bears'),
						'desc'  => esc_html__('Select a title bar layout in current page', 'bears'),
						'choices' => array(
							'default' => esc_html__('Default', 'bears'),
							'1' => esc_html__('Title Bar 1', 'bears'),
							'2' => esc_html__('Title Bar 2', 'bears')
						)
					),
					'page_titlebar_space' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Title Bar Space', 'bears'),
						'desc' => esc_html__('Turn on to disable space between title bar and content in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'page_titlebar_background' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => esc_html__('Title Bar Background', 'bears'),
						'desc'  => esc_html__('Select image to change the title bar background in current page.', 'bears'),
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => esc_html__('Footer', 'bears'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => esc_html__('Footer Layout', 'bears'),
						'desc'  => esc_html__('Select a footer layout in current page', 'bears'),
						'choices' => array(
							'default' => esc_html__('Default', 'bears'),
							'1' => esc_html__('Footer 1', 'bears'),
							'2' => esc_html__('Footer 2', 'bears'),
							'3' => esc_html__('Footer 3', 'bears'),
							'4' => esc_html__('Footer 4', 'bears'),
							'5' => esc_html__('Footer 5', 'bears'),
							'6' => esc_html__('Footer 6', 'bears'),
							'7' => esc_html__('Footer 7', 'bears'),
							'8' => esc_html__('Footer 8', 'bears'),
							'9' => esc_html__('Footer 9', 'bears'),
							'10' => esc_html__('Footer 10', 'bears'),
							'11' => esc_html__('Footer 11', 'bears'),
							'12' => esc_html__('Footer 12', 'bears'),
							'13' => esc_html__('Footer 13', 'bears')
						)
					),
					'footer_fixed' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Fixed', 'bears'),
						'desc' => esc_html__('Turn on to disable footer fixed in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'footer_fullwidth' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Full Width (100%)', 'bears'),
						'desc' => esc_html__('Turn on to disable footer full width (100%) in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
					'footer_top' => array(
						'type' => 'switch',
						'label' => esc_html__('Disable Footer Top', 'bears'),
						'desc' => esc_html__('Turn on to disable footer top in current page.', 'bears'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => esc_html__('Off', 'bears'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => esc_html__('On', 'bears'),
						),
					),
				),
			),
		),
	),
	
);