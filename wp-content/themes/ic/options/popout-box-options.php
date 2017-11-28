<?php

$prefix = 'cebo';
$pagetypes = array('Two Column', 'Full Width', 'With Sidebar');

$meta_popout_box = array(
	'id' => 'popout-options',
	'title' => 'Popout Options',
	// 'page' => determines where the custom field is supposed to show up.
	// here it is desplaying Testimonials, but other options are
	// page or post
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
 		array( 
              "name" => "Welcome Text",
	          "desc" => "Type in the welcome text on the blue background",
	          "id" => $prefix."_popout_welcome",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Popout Sub-title",
	          "desc" => "Type in the sub-title text below the welcome text.",
	          "id" => $prefix."_popout_subtitle",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Title Text",
	          "desc" => "Type in the title text below the sub-title text.",
	          "id" => $prefix."_popout_title",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Popout Tagline",
	          "desc" => "Type in the tagline text below the title text.",
	          "id" => $prefix."_popout_tagline",
	          "type" => "text",
	          "std" => ""
              )
 		,
 		array( 
              "name" => "Popout URL",
	          "desc" => "Paste in here the url this popout is pointing to.",
	          "id" => $prefix."_popout_url",
	          "type" => "text",
	          "std" => ""
              )

       	)
);



/* ----------------------------------------------- DONT TOUCH BELOW UNLESS YOU KNOW WHAT YOU'RE DOING */
add_action('admin_menu', 'mythemes_add_popout_box');
// Add meta boxel
function mythemes_add_popout_box() {
	global $meta_popout_box;
	foreach ( array( 'popout-box' ) as $page )
	add_meta_box($meta_popout_box['id'], $meta_popout_box['title'], 'mythemes_show_popout_box', $page, $meta_popout_box['context'], 			$meta_popout_box['priority']);
}
// Callback function to show fields in meta boxel
function mythemes_show_popout_box() {
	global $meta_popout_box, $post;
	// Use nonce for verification
		
	echo '<input type="hidden" name="mythemes_meta_popout_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_popout_box['fields'] as $field) {
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

add_action('save_post', 'mythemes_popout_box_save_data');
// Save data from meta boxel
function mythemes_popout_box_save_data($post_id) {
	global $meta_popout_box;	
	// verify nonce
	if (!wp_verify_nonce($_POST['mythemes_meta_popout_box_nonce'], basename(__FILE__))) {
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
	foreach ($meta_popout_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}