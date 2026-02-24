<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_gallery' => array(
				'title' => esc_html__('Gallery', 'bears'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'bears' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'bears' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => esc_html__('Video', 'bears'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'bears' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'bears' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'bears' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'bears' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'bears' ),
						'desc'  => esc_html__( 'Please video caption.', 'bears' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => esc_html__('Audio', 'bears'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => esc_html__('Audio Types', 'bears'),
								'desc' => esc_html__('Choose the audio type.', 'bears'),
								'value' => 'html5',
								'choices' => array(
									'html5' => esc_html__('HTML5', 'bears'),
									'embed' => esc_html__('Embed', 'bears')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => esc_html__('Format', 'bears'),
									'desc'  => esc_html__('Choose the audio format.', 'bears'),
									'choices' => array(
										'audio/mpeg' => esc_html__('MP3', 'bears'),
										'audio/ogg' => esc_html__('Ogg', 'bears'),
										'audio/wav' => esc_html__('Wav', 'bears')
									)
								),
								'src' => array(
									'label' => esc_html__('Src', 'bears'),
									'desc' => esc_html__('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'bears'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => esc_html__('Embed', 'bears'),
									'desc' => esc_html__('Please enter embed code(SoundCloud, ...)', 'bears'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => esc_html__('Quote', 'bears'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'bears' ),
						'desc'  => esc_html__( 'Please enter quote.', 'bears' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => esc_html__('Link', 'bears'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'bears' ),
						'desc'  => esc_html__( 'Please enter url.', 'bears' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
