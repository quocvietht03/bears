<?php
class WPBakeryShortCode_bt_google_map3 extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'api'					=>	'',
			'address'				=>	'New York, United States',
			'infoclick'				=>	'',
			'coordinate'			=>	'',
			'markercoordinate'		=>	'',
			'markertitle'			=>	'',
			'markerdesc'			=>	'',
			'markericon'			=>	'',
			'infowidth'				=>	'200',
			'width' 				=> 	'auto',
			'height' 				=> 	'350px',
			'type'					=>	'ROADMAP',
			'style'					=>	'',
			'zoom'					=>	'13',
			'scrollwheel'			=>	'',
			'pancontrol'			=>	'',
			'zoomcontrol'			=>	'',
			'scalecontrol'			=>	'',
			'maptypecontrol'		=>	'',
			'streetviewcontrol'		=>	'',
			'overviewmapcontrol'	=>	'',
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-google-map3-element',
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* API Key */
		if(!$api){
			$api = 'AIzaSyCyuW48kPjku1h6fle8WYwO1pKI3Hdp4wk';
		}
		$api_js = "https://maps.googleapis.com/maps/api/js?key=$api&sensor=false";
		wp_enqueue_script('maps-googleapis',$api_js,array(),'3.0.0');
		wp_enqueue_script('mapv3');
		/* Map Style defualt */
		$map_styles = array(
			'Subtle-Grayscale'=>'[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]',
			'Shades-of-Grey'=>'[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]',
			'Blue-water'=>'[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]',
			'Pale-Dawn'=>'[{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]',
			'Blue-Essence'=>'[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]',
			'Apple-Maps-esque'=>'[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]',
		);
		/* Select Template */
		$map_template = '';
		switch ($style){
			case '':
				$map_template = '';
				break;
			default:
				$map_template = rawurlencode($map_styles[$style]);
				break;
		}
		/* marker render */
		$marker = new stdClass();
		if($markercoordinate){
			$marker->markercoordinate = $markercoordinate;
			if($markerdesc || $markertitle){
			$marker->markerdesc = 	'<div class="bt-maps-info-content">'.
									'<h5 style="margin-bottom: 10px;">'.$markertitle.'</h5>'.
									'<span>'.$markerdesc.'</span>'.
									'</div>';
			}
			if($markericon){
				$marker->markericon = wp_get_attachment_url($markericon);
			}
		}
		$marker = rawurlencode(json_encode($marker));
		/* control render */
		$controls = new stdClass();
		if($scrollwheel == true){ $controls->scrollwheel = 1; } else { $controls->scrollwheel = 0; }
		if($pancontrol == true){ $controls->pancontrol = true; } else { $controls->pancontrol = false; }
		if($zoomcontrol == true){ $controls->zoomcontrol = true; } else { $controls->zoomcontrol = false; }
		if($scalecontrol == true){ $controls->scalecontrol = true; } else { $controls->scalecontrol = false; }
		if($maptypecontrol == true){ $controls->maptypecontrol = true; } else { $controls->maptypecontrol = false; }
		if($streetviewcontrol == true){ $controls->streetviewcontrol = true; } else { $controls->streetviewcontrol = false; }
		if($overviewmapcontrol == true){ $controls->overviewmapcontrol = true; } else { $controls->overviewmapcontrol = false; }
		if($infoclick == true){ $controls->infoclick = true; } else { $controls->infoclick = false; }
		$controls->infowidth = $infowidth;
		$controls->style = $style;
		$controls = rawurlencode(json_encode($controls));
		/* data render */
		$setting = array(
			"data-address='$address'",
			"data-marker='$marker'",
			"data-coordinate='$coordinate'",
			"data-type='$type'",
			"data-zoom='$zoom'",
			"data-template='$map_template'",
			"data-controls='$controls'"
		);
		
		ob_start();
		$maps_id = uniqid('maps-');
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>" <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>>
				<div id="<?php echo esc_attr($maps_id); ?>" class="maps-render" <?php echo implode(' ', $setting); ?> style="width:<?php echo esc_attr($width); ?>;height: <?php echo esc_attr($height); ?>"></div>
			</div>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => esc_html__('Google Map 3', 'bears'),
	'base' => 'bt_google_map3',
	'category' => esc_html__('BT Elements', 'bears'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
            "type" => "textfield",
            "heading" => esc_html__('API Key', 'bears'),
            "param_name" => "api",
            "value" => '',
            "description" => esc_html__('Enter you api key of map, get key from (https://console.developers.google.com)', 'bears')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Address', 'bears'),
            "param_name" => "address",
            "value" => 'New York, United States',
            "description" => esc_html__('Enter address of Map', 'bears')
        ),
		array(
            "type" => "textfield",
            "heading" => esc_html__('Coordinate', 'bears'),
            "param_name" => "coordinate",
            "value" => '',
            "description" => esc_html__('Enter coordinate of Map, format input (latitude, longitude)', 'bears')
        ),
		array(
            "type" => "dropdown",
            "heading" => esc_html__("Map Type", 'bears'),
            "param_name" => "type",
            "value" => array(
                "ROADMAP" => "ROADMAP",
                "HYBRID" => "HYBRID",
                "SATELLITE" => "SATELLITE",
                "TERRAIN" => "TERRAIN"
            ),
            "description" => esc_html__('Select the map type.', 'bears')
        ),
		array(
            "type" => "textfield",
            "heading" => esc_html__('Zoom', 'bears'),
            "param_name" => "zoom",
            "value" => '13',
            "description" => esc_html__('zoom level of map, default is 13', 'bears')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Width', 'bears'),
            "param_name" => "width",
            "value" => 'auto',
            "description" => esc_html__('Width of map without pixel, default is auto', 'bears')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Height', 'bears'),
            "param_name" => "height",
            "value" => '350px',
            "description" => esc_html__('Height of map without pixel, default is 350px', 'bears')
        ),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Element ID', 'bears'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__( 'Enter element ID (Note: make sure it is unique and valid).', 'bears' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__('Extra Class', 'bears'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'bears' )
		),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Click Show Info window', 'bears'),
            "param_name" => "infoclick",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Marker", 'bears'),
            "description" => esc_html__('Click a marker and show info window (Default Show).', 'bears')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Marker Coordinate', 'bears'),
            "param_name" => "markercoordinate",
            "value" => '',
            "group" => esc_html__("Marker", 'bears'),
            "description" => esc_html__('Enter marker coordinate of Map, format input (latitude, longitude)', 'bears')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Marker Title', 'bears'),
            "param_name" => "markertitle",
            "value" => '',
            "group" => esc_html__("Marker", 'bears'),
            "description" => esc_html__('Enter Title Info windows for marker', 'bears')
        ),
        array(
            "type" => "textarea",
            "heading" => esc_html__('Marker Description', 'bears'),
            "param_name" => "markerdesc",
            "value" => '',
            "group" => esc_html__("Marker", 'bears'),
            "description" => esc_html__('Enter Description Info windows for marker', 'bears')
        ),
        array(
            "type" => "attach_image",
            "heading" => esc_html__('Marker Icon', 'bears'),
            "param_name" => "markericon",
            "value" => '',
            "group" => esc_html__("Marker", 'bears'),
            "description" => esc_html__('Select image icon for marker', 'bears')
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__('Info Window Max Width', 'bears'),
            "param_name" => "infowidth",
            "value" => '200',
            "group" => esc_html__("Marker", 'bears'),
            "description" => esc_html__('Set max width for info window', 'bears')
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__("Style Template", 'bears'),
            "param_name" => "style",
            "value" => array(
                "Default" => "",
                "Subtle Grayscale" => "Subtle-Grayscale",
                "Shades of Grey" => "Shades-of-Grey",
                "Blue water" => "Blue-water",
                "Pale Dawn" => "Pale-Dawn",
                "Blue Essence" => "Blue-Essence",
                "Apple Maps-esque" => "Apple-Maps-esque",
            ),
            "group" => esc_html__("Map Style", 'bears'),
            "description" => 'Select your heading size for title.'
        ),
        
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Scroll Wheel', 'bears'),
            "param_name" => "scrollwheel",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('If false, disables scrollwheel zooming on the map. The scrollwheel is disable by default.', 'bears')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Pan Control', 'bears'),
            "param_name" => "pancontrol",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('Show or hide Pan control.', 'bears')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Zoom Control', 'bears'),
            "param_name" => "zoomcontrol",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('Show or hide Zoom Control.', 'bears')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Scale Control', 'bears'),
            "param_name" => "scalecontrol",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('Show or hide Scale Control.', 'bears')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Map Type Control', 'bears'),
            "param_name" => "maptypecontrol",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('Show or hide Map Type Control.', 'bears')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Street View Control', 'bears'),
            "param_name" => "streetviewcontrol",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('Show or hide Street View Control.', 'bears')
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__('Over View Map Control', 'bears'),
            "param_name" => "overviewmapcontrol",
            "value" => array(
                esc_html__("Yes, please", 'bears') => true
            ),
            "group" => esc_html__("Controls", 'bears'),
            "description" => esc_html__('Show or hide Over View Map Control.', 'bears')
        ),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'bears' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'bears' ),
		)
	)
));
