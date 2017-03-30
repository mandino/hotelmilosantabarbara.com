<?php

global $psp;

require($psp->cfg['paths']['plugin_dir_path'] . 'modules/rich_snippets/' . 'lists.inc.php');

echo json_encode(
	array(
		array(

			/* organization shortcode */
			'psp_rs_organization' => array(
				'title' 	=> __('Insert Organization Shortcode', 'psp'),
				'icon' 		=> '{plugin_folder_uri}assets/menu_icon.png',
				'size' 		=> 'grid_4', // grid_1|grid_2|grid_3|grid_4
				'header' 	=> false, // true|false
				'toggler' 	=> false, // true|false
				'buttons' 	=> false, // true|false
				'style' 	=> 'panel', // panel|panel-widget
				
				'exclude_empty_fields'	=> true,
				'shortcode'	=> '[psp_rs_organization {atts}]',

				// create the box elements array
				'elements'	=> array(
				
					'orgtype' => array(
						'type' 		=> 'select',
						'std' 		=> 'Organization',
						'size' 		=> 'large',
						'force_width'=> '200',
						'title' 	=> __('Organization Type:', 'psp'),
						'desc' 		=> 'select organization type',
						'options'	=> $psp_organization_type
					)
					,'name' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Name:', 'psp'),
						'desc' 		=> __('enter name', 'psp')
					)
					,'url' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Website URL:', 'psp'),
						'desc' 		=> __('enter website url', 'psp')
					)
					,'image' => array(
						'type' 		=> 'upload_image',
						'size' 		=> 'large',
						'title' 	=> 'Organization Image',
						'value' 	=> 'Upload image',
						'thumbSize' => array(
							'w' => '100',
							'h' => '100',
							'zc' => '2',
						),
						'desc' 		=> 'select organization image'
					)
					,'description' 	=> array(
						'type' 		=> 'textarea',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Description:', 'psp'),
						'desc' 		=> __('enter description', 'psp')
					)
					,'street' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Street Address:', 'psp'),
						'desc' 		=> __('enter street address', 'psp')
					)
					,'pobox' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('P.O. Box:', 'psp'),
						'desc' 		=> __('enter p.o. box', 'psp')
					)
					,'city' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('City:', 'psp'),
						'desc' 		=> __('enter city', 'psp')
					)
					,'state' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('State or Region:', 'psp'),
						'desc' 		=> __('enter state or region', 'psp')
					)
					,'postalcode' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Postal code or Zipcode:', 'psp'),
						'desc' 		=> __('enter postal code or zipcode', 'psp')
					)
					,'country' => array(
						'type' 		=> 'select',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '200',
						'title' 	=> __('Country:', 'psp'),
						'desc' 		=> 'select country',
						'options'	=> array_merge( array('none' => __('Select country', 'psp')), $psp_countries_list )
					)
					,'map_latitude' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Latitude:', 'psp'),
						'desc' 		=> __('enter latitude', 'psp')
					)
					,'map_longitude' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Longitude:', 'psp'),
						'desc' 		=> __('enter longitude', 'psp')
					)
					,'email' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Email:', 'psp'),
						'desc' 		=> __('enter email', 'psp')
					)
					,'phone' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Phone:', 'psp'),
						'desc' 		=> __('enter phone', 'psp')
					)
					,'fax' 	=> array(
						'type' 		=> 'text',
						'std' 		=> '',
						'size' 		=> 'large',
						'force_width'=> '400',
						'title' 	=> __('Fax:', 'psp'),
						'desc' 		=> __('enter fax', 'psp')
					)

				)
			) // end shortcode
			
		)
	)
);

?>