<?php
function bears_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'company' => array(
			'title' => esc_html__('Company', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/company/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/company/',
		),
		'lawfirm' => array(
			'title' => esc_html__('Lawfirm', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/lawfirm/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/lawfirm/',
		),
		'construction' => array(
			'title' => esc_html__('Construction', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/construction/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/construction/',
		),
		'dentist' => array(
			'title' => esc_html__('Dentist', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/dentist/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/dentist/',
		),
		'legal' => array(
			'title' => esc_html__('Legal', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/legal/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/legal/',
		),
		'marketing' => array(
			'title' => esc_html__('Marketing', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/marketing/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/marketing/',
		),
		'consultancy' => array(
			'title' => esc_html__('Consultancy', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/consultancy/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/consultancy/',
		),
		'creative' => array(
			'title' => esc_html__('Creative', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/creative/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/creative/',
		),
		'digital' => array(
			'title' => esc_html__('Digital', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/digital/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/digital/',
		),
		'advisor' => array(
			'title' => esc_html__('Advisor', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/advisor/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/advisor/',
		),
		'insurance' => array(
			'title' => esc_html__('Insurance', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/insurance/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/insurance/',
		),
		'serviceit' => array(
			'title' => esc_html__('Service IT', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/serviceit/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/serviceit/',
		),
		'arabic' => array(
			'title' => esc_html__('Arabic', 'bears'),
			'screenshot' => 'http://beplusthemes.com/install/demo/bears/arabic/screenshot.jpg',
			'preview_link' => 'http://bears.beplusthemes.com/arabic/ar/',
		),
    );

    $download_url = 'http://beplusthemes.com/install/demo/bears/';

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
