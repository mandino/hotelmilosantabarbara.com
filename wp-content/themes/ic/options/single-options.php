<?php

$prefix = 'cebo';

$pagetypes = array('Two Column', 'Full Width', 'With Sidebar');

$meta_boxel = array(
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
              "name" => "Choose Your Page Layout.",
	          "desc" => "Defaults as a Two Column page. Just select the preference.",
	          "id" => $prefix."_pagetype",
	          "type" => "radio",	          
	          "options" => $pagetypes,
	          "std" => ""
              )
		,	
		array( 
              "name" => "Do Not Show Sliding Gallery",
	          "desc" => "If you have uploaded multiple pictures to this post, check if you want show the featured image rather than sliding gallery.",
	          "id" => $prefix."_attachonly",
	          "type" => "checkbox",
	          "std" => ""
        	  )
 		,
 		array( 
              "name" => "Hide Video/Picture/Slider Above Content Altogether",
	          "desc" => "Check if you want to hide everything above the post content",
	          "id" => $prefix."_hidepics",
	          "type" => "checkbox",
	          "std" => ""
        	  )
 		,
 		array( 
              "name" => "Youtube ID",
	          "desc" => "You can put your YOUTUBE video id here and replace the initial image with a video: ex: 'oHg5SJYRHA0'",
	          "id" => $prefix."_youtube",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Vimeo ID",
	          "desc" => "You put your VIMEO video id here to display a vimeo instead, ex: '43423014'",
	          "id" => $prefix."_vimeo",
	          "type" => "text",
	          "std" => ""
              )

       	)
);

/* ----------------------------------------------- DONT TOUCH BELOW UNLESS YOU KNOW WHAT YOU'RE DOING */
add_action('admin_menu', 'mythemes_add_boxel');
// Add meta boxel
function mythemes_add_boxel() {
	global $meta_boxel;
	foreach ( array( 'page', 'event' ) as $page )
	add_meta_box($meta_boxel['id'], $meta_boxel['title'], 'mythemes_show_boxel', $page, $meta_boxel['context'], 			$meta_boxel['priority']);
}
// Callback function to show fields in meta boxel
function mythemes_show_boxel() {
	global $meta_boxel, $post;
	// Use nonce for verification
		
	echo '<input type="hidden" name="mythemes_meta_boxel_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_boxel['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>',
				'<td class="boxeler" style="border-bottom: 1px solid #DFDFDF; box-shadow: 0 1px 0 #FFFFFF; width: 100%; padding-bottom: 20px;">';
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

add_action('save_post', 'mythemes_save_data');
// Save data from meta boxel
function mythemes_save_data($post_id) {
	global $meta_boxel;	
	// verify nonce
	if (!wp_verify_nonce($_POST['mythemes_meta_boxel_nonce'], basename(__FILE__))) {
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
	foreach ($meta_boxel['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}