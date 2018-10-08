<?php
function bears_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'company' => array(
			'title' => esc_html__('Company', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/company/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-company/',
		),
		'lawfirm' => array(
			'title' => esc_html__('Lawfirm', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/lawfirm/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-lawfirm/',
		),
		'construction' => array(
			'title' => esc_html__('Construction', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/construction/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-construction/',
		),
		'dentist' => array(
			'title' => esc_html__('Dentist', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/dentist/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-dentist/',
		),
		'legal' => array(
			'title' => esc_html__('Legal', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/legal/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-legal/',
		),
		'marketing' => array(
			'title' => esc_html__('Marketing', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/marketing/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-marketing/',
		),
		'consultancy' => array(
			'title' => esc_html__('Consultancy', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/consultancy/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-consultancy/',
		),
		'creative' => array(
			'title' => esc_html__('Creative', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/creative/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-creative/',
		),
		'digital' => array(
			'title' => esc_html__('Digital', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/digital/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-digital/',
		),
		'advisor' => array(
			'title' => esc_html__('Advisor', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/advisor/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-advisor/',
		),
		'insurance' => array(
			'title' => esc_html__('Insurance', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/insurance/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-insurance/',
		),
		'serviceit' => array(
			'title' => esc_html__('Service IT', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/serviceit/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-serviceit/',
		),
		'arabic' => array(
			'title' => esc_html__('Arabic', 'bears'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/bears/arabic/screenshot.jpg',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/bears-arabic/ar/',
		),
    );

    $download_url = 'http://theme.bearsthemes.com/import_demo/bears/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', 'bears_fw_ext_backups_demos');
