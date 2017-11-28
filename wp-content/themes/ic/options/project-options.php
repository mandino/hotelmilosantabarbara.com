<?php

$prefix = 'cebo';
$pagetypes = array('Basic No Feature', 'Scrolling Feature', 'Full Screen Feature', 'Colored Background Area');

$meta_boxer = array(
	'id' => 'CUSTOM FIELDS',
	'title' => 'Additional Variations For Your Project Pages',
	// 'page' => determines where the custom field is supposed to show up.
	// here it is desplaying Testimonials, but other options are
	// page or post
	'page' => 'project',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
				
		array( 
              "name" => "Choose Your Page Layout.",
	          "desc" => "Defaults as a Two Column page. Just select the preference.",
	          "id" => $prefix."_pagetype",
	          "type" => "select",	          
	          "options" => $pagetypes,
	          "std" => ""
              )
		,	
		array( 
              "name" => "Big Tag Line",
	          "desc" => "This tagline will display in different places and will override the page title as well.",
	          "id" => $prefix."_tagline",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Thumbnail option rather than the featured image (hit INSERT INTO POST)",
	          "desc" => "This thumb should be panoramic. A good size is 520w X 350h. ",
	          "id" => $prefix."_homethumb",
	          "type" => "upload",
	          "std" => ""
              )
 		,
 		
 		
 		array( 
              "name" => "Full screen banner image (hit INSERT INTO POST)",
	          "desc" => "Wide and narrow is optimum for this image. Try ratios of 16:9, like 800 x 450 or 2000 x 800. ",
	          "id" => $prefix."_fullpic",
	          "type" => "upload",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Amenities List",
	          "desc" => "Separate each one by a comma. I.E: red, yellow, blue",
	          "id" => $prefix."_details",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Outbound Room Booking Link",
	          "desc" => "If a special link to book this room exists, else it will default to general booking link",
	          "id" => $prefix."_booklink",
	          "type" => "text",
	          "std" => ""
              )
 		,
       	array( 
              "name" => "If You Have Chosen Colored Background Choose Your Color",
	          "desc" => "Any hexagonal code will do.",
	          "id" => $prefix."_colorbg",
	          "type" => "color",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Hide Images Below Post Content",
	          "desc" => "Check if you want to hide the pictures below the post content",
	          "id" => $prefix."_hidepics",
	          "type" => "checkbox",
	          "std" => ""
        	  )
 		
       	)
);



/* ----------------------------------------------- DONT TOUCH BELOW UNLESS YOU KNOW WHAT YOU'RE DOING */
add_action('admin_menu', 'mythemer_add_boxer');
// Add meta boxer
function mythemer_add_boxer() {
	global $meta_boxer;
	foreach ( array( 'rooms', 'page', 'event' ) as $page )
	add_meta_box($meta_boxer['id'], $meta_boxer['title'], 'mythemer_show_boxer', $page, $meta_boxer['context'], 			$meta_boxer['priority']);
}
// Callback function to show fields in meta boxer
function mythemer_show_boxer() {
	global $meta_boxer, $post;
	// Use nonce for verification
		
	echo '<input type="hidden" name="mythemer_meta_boxer_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_boxer['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>',
				'<td class="boxerer" style="border-bottom: 1px solid #DFDFDF; box-shadow: 0 1px 0 #FFFFFF; width: 100%; padding-bottom: 20px;">';
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

add_action('save_post', 'mythemer_save_data');
// Save data from meta boxer
function mythemer_save_data($post_id) {
	global $meta_boxer;	
	// verify nonce
	if (!wp_verify_nonce($_POST['mythemer_meta_boxer_nonce'], basename(__FILE__))) {
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
	foreach ($meta_boxer['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
?>