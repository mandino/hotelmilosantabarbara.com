<?php

$prefix = 'cebo';
$pagetypes = array('Two Column', 'Full Width', 'With Sidebar');

$meta_localer = array(
	'id' => 'CUSTOM FIELDS',
	'title' => 'Additional Variations for Your Posts',
	// 'page' => determines where the custom field is supposed to show up.
	// here it is desplaying Testimonials, but other options are
	// page or post
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
				
		array( 
              "name" => "What type of location?",
	          "desc" => "Add a simple tag like 'Asian Cuisine, or Art Museum ",
	          "id" => $prefix."_category",
	          "type" => "text",
	          "std" => "",
              )
		,
		array( 
              "name" => "Outbound Location Link",
	          "desc" => "Please put the outgoing link for this location here.",
	          "id" => $prefix."_outbound",
	          "type" => "text",
	          "std" => ""
              )
		,
		array( 
              "name" => "Property Address",
	          "desc" => "This address will only be used visually. The coordinates will determine the mapping",
	          "id" => $prefix."_address",
	          "type" => "text",
	          "std" => ""
              )
		,
		array( 
              "name" => "Property Phone Number",
	          "desc" => "Put telephone number here",
	          "id" => $prefix."_phone",
	          "type" => "text",
	          "std" => ""
              )
		,
		
		array( 
              "name" => "Distance",
	          "desc" => "Distance from the hotel. Ex: 1.5 Miles From Hotel Molo",
	          "id" => $prefix."_distance",
	          "type" => "text",
	          "std" => ""
              )
		,
		
		
		array( 
              "name" => "Map Coordinates",
	          "desc" => "If necessary, please put the property coordinates here.",
	          "id" => $prefix."_coordinates",
	          "type" => "text",
	          "std" => ""
              )
       )
);



/* ----------------------------------------------- DONT TOUCH BELOW UNLESS YOU KNOW WHAT YOU'RE DOING */
add_action('admin_menu', 'mythemeee_add_localer');
// Add meta localer
function mythemeee_add_localer() {
	global $meta_localer;
	foreach ( array( 'locations', 'event' ) as $page )
	add_meta_box($meta_localer['id'], $meta_localer['title'], 'mythemeee_show_localer', $page, $meta_localer['context'], 			$meta_localer['priority']);
}
// Callback function to show fields in meta localer
function mythemeee_show_localer() {
	global $meta_localer, $post;
	// Use nonce for verification
		
	echo '<input type="hidden" name="mythemeee_meta_localer_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_localer['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>',
				'<td class="localerer" style="border-bottom: 1px solid #DFDFDF; box-shadow: 0 1px 0 #FFFFFF; width: 100%; padding-bottom: 20px;">';
		switch ($field['type']) {
			
			
			case 'text':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>', '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width: 100%; padding: 10px 0;" />';
				break;
			
			
			case 'color':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>', '<div id="color_picker" class="colorSelector"></div></div></div><input class="of-color" name="'. $field['id'] .'" id="'. $field['id'] .'" type="text" value="', $meta ? $meta : $field['std'], '" />';
				break;
							
				
			case 'upload':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>', '<input type="text" class="upload_image" name="', $field['id'], '" id="', $field['id'], '"  value="', $meta ? $meta : $field['std'], '" size="30" style="width: 100%; padding: 10px 0;" /><input class="upload_image_button" type="button" value="Upload Image" />';
				break;
			
			case 'textarea':
				echo '<div class="title">' ,$field['name'], '</div><div class="descriptive">', $field['desc'], '</div>', '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:47%">', $meta ? $meta : $field['std'], '</textarea>';
				break;
			case 'select':
				echo '<div class="title">' ,$field['name'], '</div><div class="descriptive">', $field['desc'], '</div>', '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
					
				}
				echo '</select>';
				break;
			case 'radio':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2; margin-bottom: 6px;" class="descriptive">', $field['desc'], '</div>';
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />&nbsp;', $option, '&nbsp;&nbsp;';
				}
				break;
			case 'checkbox':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 11px; color: #a2a2a2;" class="descriptive">', $field['desc'], '</div>', '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo 	'<td>',
			'</tr>';
	}
	
	echo '</table>';
}

add_action('save_post', 'mythemeee_save_data');
// Save data from meta localer
function mythemeee_save_data($post_id) {
	global $meta_localer;	
	// verify nonce
	if (!wp_verify_nonce($_POST['mythemeee_meta_localer_nonce'], basename(__FILE__))) {
		return $post_id;
	}
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {		return $post_id;
	}
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	foreach ($meta_localer['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}