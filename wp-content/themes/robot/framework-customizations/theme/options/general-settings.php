<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title' => __('General', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_theme_layout' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'type' => 'fullwidth', ),
				'picker' => array(
					'type' => array(
						'label' => __('Theme Layout', 'lakshmi-lite'),
						'type' => 'radio',
						'choices' => array(
							'fullwidth' => __('Fullwidth', 'lakshmi-lite'),
							'boxed' => __('Boxed', 'lakshmi-lite'),
							'sidepadding' => __('Side Padding', 'lakshmi-lite')
						),
					)
				),
				'choices' => array(
					'boxed' => array(
						'lsi_boxed_width'     => array(
							'label'      => __( 'Box Width', 'lakshmi-lite'),
							'type'       => 'slider',
							'value'      => 1200,
							'properties' => array(
								'min' => 1200,
								'max' => 1920,
								'sep' => 1,
							),
							'desc'       => __( 'The width of the box.', 'lakshmi-lite'),
						),
						'lsi_boxed_margin_top' => array(
							'label' => __('Margin Top', 'lakshmi-lite'),
							'type' => 'slider',
							'value' => 0,
							'desc' => __('Margin at the top of the box. (px)', 'lakshmi-lite'),
						),
						'lsi_boxed_margin_bottom' => array(
							'label' => __('Margin Bottom', 'lakshmi-lite'),
							'type' => 'slider',
							'value' => 0,
							'desc' => __('Margin at the bottom of the box. (px)', 'lakshmi-lite'),
						),
						'lsi_boxed_background_color' => array(
							'label' => __('Body Background Color', 'lakshmi-lite'),
							'type' => 'rgba-color-picker',
							'value' => '#000000',
							'desc' => __('Pick a color for the background.', 'lakshmi-lite'),
						),
						'lsi_boxed_background_image' => array(
							'label' => __('Body Background Image', 'lakshmi-lite'),
							'desc' => __('Upload an image for the background.', 'lakshmi-lite'),
							'type' => 'upload',
						),
						'lsi_boxed_image_size' => array(
							'label' => __('Body Background Image Size', 'lakshmi-lite'),
							'type' => 'short-select',
							'value' => 'inherit',
							'choices' => array(
								'inherit' => __( 'inherit', 'lakshmi-lite'),
								'initial' => __( 'initial', 'lakshmi-lite'),
								'cover' => __( 'cover', 'lakshmi-lite'),
								'contain' => __( 'contain', 'lakshmi-lite'),
							),
						),
						'lsi_boxed_image_repeat' => array(
							'label' => __('Body Background Image Repeat', 'lakshmi-lite'),
							'type' => 'short-select',
							'value' => 'no-repeat',
							'choices' => array(
								'no-repeat' => __( 'no-repeat', 'lakshmi-lite'),
								'repeat' => __( 'repeat', 'lakshmi-lite'),
								'repeat-x' => __( 'repeat-x', 'lakshmi-lite'),
								'repeat-y' => __( 'repeat-y', 'lakshmi-lite'),
							),
						),
						'lsi_boxed_image_fixed' => array(
							'label'        => __( 'Fixed Body Background Image', 'lakshmi-lite'),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Yes', 'lakshmi-lite')
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'No', 'lakshmi-lite')
							),
							'value'        => 'no',
						),
					),
					'sidepadding' => array(
						'lsi_sidepadding'     => array(
							'label'      => __( 'Padding Size', 'lakshmi-lite' ),
							'type'       => 'slider',
							'value'      => 10,
							'properties' => array(
								'min' => 0,
								'max' => 150,
								'sep' => 1,
							),
							'desc'       => __( 'Padding in px.', 'lakshmi-lite' ),
						),
						'lsi_sidepadding_background_color' => array(
							'label' => __('Body Background Color', 'lakshmi-lite'),
							'type' => 'rgba-color-picker',
							'value' => '#000000',
							'desc' => __('Pick a color for the background.', 'lakshmi-lite'),
						),
						'lsi_sidepadding_background_image' => array(
							'label' => __('Body Background Image', 'lakshmi-lite'),
							'desc' => __('Upload an image for the background.', 'lakshmi-lite'),
							'type' => 'upload',
						),
						'lsi_sidepadding_image_size' => array(
							'label' => __('Body Background Image Size', 'lakshmi-lite'),
							'type' => 'short-select',
							'value' => 'inherit',
							'choices' => array(
								'inherit' => __( 'inherit', 'lakshmi-lite'),
								'initial' => __( 'initial', 'lakshmi-lite'),
								'cover' => __( 'cover', 'lakshmi-lite'),
								'contain' => __( 'contain', 'lakshmi-lite'),
							),
						),
						'lsi_sidepadding_image_repeat' => array(
							'label' => __('Body Background Image Repeat', 'lakshmi-lite'),
							'type' => 'short-select',
							'value' => 'no-repeat',
							'choices' => array(
								'no-repeat' => __( 'no-repeat', 'lakshmi-lite'),
								'repeat' => __( 'repeat', 'lakshmi-lite'),
								'repeat-x' => __( 'repeat-x', 'lakshmi-lite'),
								'repeat-y' => __( 'repeat-y', 'lakshmi-lite'),
							),
						),
						'lsi_sidepadding_image_fixed' => array(
							'label'        => __( 'Fixed Body Background Image', 'lakshmi-lite' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Yes', 'lakshmi-lite' )
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'No', 'lakshmi-lite' )
							),
							'value'        => 'no',
						),
					),
				),
				'show_borders' => false,
			),
			'lsi_page_background_color' => array(
				'label' => __('Page Background Color', 'lakshmi-lite'),
				'type' => 'rgba-color-picker',
				'value' => '#111111',
				'desc' => __('Pick a color for page background',
					'lakshmi-lite'),
			),
			'lsi_page_background_image' => array(
				'label' => __('Page Background Image', 'lakshmi-lite'),
				'desc' => __('Upload an image for page background.', 'lakshmi-lite'),
				'type' => 'upload',
			),
			'lsi_page_image_size' => array(
				'label' => __('Page Background Image Size', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'lakshmi-lite'),
					'initial' => __( 'initial', 'lakshmi-lite'),
					'cover'   => __( 'cover', 'lakshmi-lite'),
					'contain' => __( 'contain', 'lakshmi-lite'),
				),
			),
			'lsi_page_image_repeat' => array(
				'label' => __('Page Background Image Repeat', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'lakshmi-lite'),
					'repeat'   => __( 'repeat', 'lakshmi-lite'),
					'repeat-x' => __( 'repeat-x', 'lakshmi-lite'),
					'repeat-y' => __( 'repeat-y', 'lakshmi-lite'),
				),
			),
			'lsi_enable_responsive'                    => array(
				'label'        => __( 'Enable Responsive', 'lakshmi-lite'),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'lakshmi-lite')
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'lakshmi-lite')
				),
				'value'        => 'yes',
				'desc'         => __( 'Enable the responsive behaviour of the theme.', 'lakshmi-lite'),
			),
			'lsi_read_more_text' => array(
				'label' => __('Read More', 'lakshmi-lite'),
				'desc' => __('Default "Read more" text on buttons.', 'lakshmi-lite'),
				'type' => 'text',
				'value' => 'Read more'
			),
			'lsi_404_page'          => array(
				'label'   => __( 'Unique 404 Page', 'lakshmi-lite'),
				'desc'    => __( 'If You need unique design, select the 404 error page', 'lakshmi-lite'),
				'value'   => '',
				'type'    => 'select',
				'choices' => lakshmi_lite_all_pages(),
			),
			'lsi_gmap_key' => array(
				'label' => __( 'Google Maps', 'lakshmi-lite' ),
				'type'  => 'text',
				'desc' => sprintf( __( 'Create an account in %1$sGoogle Console%2$s and add the API Key.', 'lakshmi-lite' ), '<a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">', '</a>' )
			),
			'lsi_custom_css'          => array(
				'label'   => __( 'Custom CSS', 'lakshmi-lite' ),
				'desc'    => __( 'Add Your custom CSS here', 'lakshmi-lite' ),
				'value'   => '',
				'type'    => 'textarea',
			),
		)
	)
);