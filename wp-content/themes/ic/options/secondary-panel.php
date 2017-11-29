<?php

$prefix = 'cebo';
$pagetypes = array('Two Column', 'Full Width', 'With Sidebar');

$meta_box = array(
	'id' => 'CUSTOM FIELDS',
	'title' => 'Additional Variations For Page Layout',
	// 'page' => determines where the custom field is supposed to show up.
	// here it is desplaying Testimonials, but other options are
	// page or post
	'page' => 'project',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
				
		
		array( 
              "name" => "Is This A Featured Special",
	          "desc" => "Slide Out Special on the home page",
	          "id" => $prefix."_available_on_header",
	          "type" => "checkbox",
	          "std" => ""
              )	
        ,	
		array( 
              "name" => "Price Point",
	          "desc" => "Anything be here, but should be short ex: From $29",
	          "id" => $prefix."_pricepoint",
	          "type" => "text",
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
              "name" => "Subtitle (optional)",
	          "desc" => "Shorter Tag such as 'Shop N' Stay' or 'Big Savings'. Will override the title",
	          "id" => $prefix."_subtagline",
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
       	)
);
/* ----------------------------------------------- DONT TOUCH BELOW UNLESS YOU KNOW WHAT YOU'RE DOING */
add_action('admin_menu', 'mytheme_add_box');
// Add meta box
function mytheme_add_box() {
	global $meta_box;
	foreach ( array( 'specials', 'dolo' ) as $page )
	add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $page, $meta_box['context'], 			$meta_box['priority']);
}
// Callback function to show fields in meta box
function mytheme_show_box() {
	global $meta_box, $post;
	// Use nonce for verification
	
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>',
				'<td class="boxer">';
		switch ($field['type']) {
			case 'text':
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>', '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width: 109%" />';
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
				echo '<div style="font-weight: bold;" class="title">' ,$field['name'], '</div><div style="font-style: italic; font-size: 12px; color: #a2a2a2;"class="descriptive">', $field['desc'], '</div>';
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option, '<br>';
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

add_action('save_post', 'mytheme_save_data');
// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
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
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}