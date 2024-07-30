<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'color' => array(
		'title'   => __( 'Colors', 'lakshmi-lite'),
		'type'    => 'tab',
		'options' => array(
			'lsi_header_colors_text'                      => array(
				'label' => __( 'Header Style', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the header as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_header_background_color' => array(
				'label' => __('Header Background Color', 'lakshmi-lite'),
				'type' => 'rgba-color-picker',
				'value' => '#111111',
				'desc' => __('Pick a color for header background.', 'lakshmi-lite'),
			),
			'lsi_footer_colors_text'                      => array(
				'label' => __( 'Footer Style', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the footer as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_fw_background_color' => array(
				'label' => __('Footer Widgets Background Color', 'lakshmi-lite'),
				'type' => 'rgba-color-picker',
				'value' => '#222222',
				'desc' => __('Pick a color for the background.', 'lakshmi-lite'),
			),
			'lsi_fwil_bc' => array(
				'label' => __('Footer Layer Color', 'lakshmi-lite'),
				'type' => 'rgba-color-picker',
				'value' => 'rgba(17,17,17,0.4)',
				'desc' => __('Pick a color for the background.', 'lakshmi-lite'),
			),
			'lsi_bf_bg' => array(
				'label' => __('Bottom Footer Background Color', 'lakshmi-lite'),
				'type' => 'rgba-color-picker',
				'value' => '#111111',
				'desc' => __('Pick a color for bottom footer background.',
					'lakshmi-lite'),
			),
		),
	),
);