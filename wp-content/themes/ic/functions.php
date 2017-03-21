<?php
/**

 Functions
 
 */
 
 
//.................. BASIC FUNCTIONS .................. //

/* language include.*/
$lang = TEMPLATE_PATH . '/languages';
load_theme_textdomain('cebolang', $lang);

//.................. BASIC FUNCTIONS .................. //

/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/simple_functions.php');


/* Include Super Furu Custom Options Panel*/
require_once(TEMPLATEPATH .  '/options/options_panel.php');


 /* ................. CUSTOM POST TYPES .................... */
/* Below is an include to a default custom post type.*/
include(TEMPLATEPATH . '/library/post_types.php');

 /* ................. SOME OPTIONS FOR POSTS .................... */
/* Below is an include to a few options for your posts.*/
include(TEMPLATEPATH . '/options/single-options.php'); 


 /* ................. SOME OPTIONS FOR POPOUT BOXES .................... */
/* Below is an include to a few options for your popout boxes.*/
include(TEMPLATEPATH . '/options/popout-box-options.php'); 


 /* ................. SOME OPTIONS FOR SLIDES .................... */
/* Below is an include to a few options for your slides.*/
include(TEMPLATEPATH . '/library/videobox.php'); 


 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/options/project-options.php'); 
include(TEMPLATEPATH . '/options/packages-options.php'); 



 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/options/local-options.php'); 




 /* ................. CUSTOM FIELDS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/library/custom_fields.php'); 

/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/shortcodes.php');



/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/widgets.php');




function is_subpage() {
    global $post;                              // load details about this page

    if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
        return $post->post_parent;             // return the ID of the parent post

    } else {                                   // there is no parent so ...
        return false;                          // ... the answer to the question is false
    }
}



 /* ................. ADDITIONAL INFO FOR SHORTCODES .................... */
/* Below is an include to a few options for your projects.*/

define( 'SS_BASE_DIR', TEMPLATEPATH . '/' );
define( 'SS_BASE_URL', get_template_directory_uri() . '/' );



if (!is_admin()) add_action( 'wp_enqueue_scripts', 'enqueue_footer_scripts', 11 );
function enqueue_footer_scripts() {

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '');
	wp_enqueue_script('jquery');

	wp_enqueue_style('style', SS_BASE_URL . 'style.css');
	wp_enqueue_style('style-css', SS_BASE_URL . 'css/style.css');
	wp_enqueue_style('custom', SS_BASE_URL . 'css/custom.css');
	wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	wp_enqueue_style('googleapis-fonts', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700');
	wp_enqueue_style('quotes-rotator', SS_BASE_URL . 'css/quotes-rotator/component.css');
	wp_enqueue_style('slidejs', SS_BASE_URL . 'css/slidejs.css');
	wp_enqueue_style('flexslider', SS_BASE_URL . 'js/flexslider/flexslider.css');
	wp_enqueue_style('mmenu', SS_BASE_URL . 'css/jquery.mmenu.css');

	if ( 'rooms' == get_post_type() ) {
		wp_enqueue_style('iosslider', SS_BASE_URL . 'css/iosslider.css');
	}
	
	wp_enqueue_style('custom-plugins', SS_BASE_URL . 'css/custom-plugins.css');
	wp_enqueue_style('oceana-hotel', SS_BASE_URL . 'css/oceana-hotel.css');
	wp_enqueue_style('prettyPhoto', SS_BASE_URL . 'css/prettyPhoto.css');
	wp_enqueue_style('media', SS_BASE_URL . 'css/media.css');

	wp_enqueue_script('prettyPhoto', SS_BASE_URL . 'js/jquery.prettyPhoto.js', 'jquery', '', true);
	wp_enqueue_script('jquery-clicknav', SS_BASE_URL . 'js/jquery-clicknav.js', 'jquery', '', true);
	wp_enqueue_script('pinit', '//assets.pinterest.com/js/pinit.js', 'jquery', '', true);
	wp_enqueue_script('modernizr-custom', SS_BASE_URL . 'js/quotes-rotator/modernizr.custom.js', 'jquery', '', true);
	wp_enqueue_script('cbpQTRotator', SS_BASE_URL . 'js/quotes-rotator/jquery.cbpQTRotator.min.js', 'jquery', '', true);
	wp_enqueue_script('slides', SS_BASE_URL . 'js/jquery.slides.min.js', 'jquery', '', true);
	wp_enqueue_script('flexslider', SS_BASE_URL . 'js/flexslider/jquery.flexslider.js', 'jquery', '', true);
	wp_enqueue_script('sticky', SS_BASE_URL . 'js/jquery.sticky.js', 'jquery', '', true);
	wp_enqueue_script('lazyload', SS_BASE_URL . 'scripts/jquery.lazyload.js', 'jquery', '', true);
	wp_enqueue_script('mmenu', SS_BASE_URL . 'js/jquery.mmenu.min.js', 'jquery', '', true);
	wp_enqueue_script('mousewheel', SS_BASE_URL . 'js/jquery.mousewheel.js', 'jquery', '', true);
	wp_enqueue_script('scripts', SS_BASE_URL . 'js/scripts.js', 'jquery', '', true);
	
	if ( 'rooms' == get_post_type() ) 	{
		wp_enqueue_script('', SS_BASE_URL . 'js/jquery.iosslider.min.js', 'jquery', '', true);
	}

}


if ( !function_exists('ss_framework_admin_scripts') ) {

	// Backend Scripts
	function ss_framework_admin_scripts( $hook ) {

		if( $hook == 'post.php' || $hook == 'post-new.php' ) {
			wp_register_script( 'tinymce_scripts', SS_BASE_URL . 'library/tinymce/js/scripts.js', array('jquery'), false, true );
			wp_enqueue_script('tinymce_scripts');
		}

	}
	add_action('admin_enqueue_scripts', 'ss_framework_admin_scripts');
	
}



//  Exclude Categories

function exclude_widget_categories($args){
	$exclude = "10"; // The IDs of the excluding categories
	$args["exclude"] = $exclude;
	return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");

//  Do not load smoothness calendar CSS

function remove_events_css() {
    wp_dequeue_style( 'tribe-events-custom-jquery-styles' );
    wp_deregister_style( 'tribe-events-custom-jquery-styles' );
}
add_action( 'wp_enqueue_scripts', 'remove_events_css', 20 );



if ( function_exists('icl_get_languages') ) {

	function language_selector_flags(){
	    $languages = icl_get_languages('skip_missing=0&orderby=code');
	    if(!empty($languages)){
	        foreach($languages as $l){
	            if(!$l['active']) {
	            	if($l['language_code'] == 'pt-pt') {
	                	echo '<li><a href="'.$l['url'].'">pt</a></li>';
	                } else {
	                	echo '<li><a href="'.$l['url'].'">'.$l['language_code'].'</a></li>';
	                }
	            }
	        }
	    }
	}

	function language_selector_flags_current(){
	    $languages = icl_get_languages('skip_missing=1&orderby=code');
	    if(!empty($languages)){
	        foreach($languages as $l){
	            if($l['active']) {
	                echo '<a href="'.$l['url'].'">'.$l['language_code'].'</a>';
	            }
	        }
	    }
	}

}

function tt($image,$width,$height){
    return bloginfo('template_url') . "/library/thumb.php?src=$image&w=$width&h=$height";
}


add_filter( 'wpseo_next_rel_link', 'is_homeFrontpageNextPrev' );
function is_homeFrontpageNextPrev($string) {
	if (is_home() || is_front_page() ) { // IF HOMEPAGE, remove <link rel="next" />
		$string = '';
	}
	return $string;
}


add_action( 'wp_head', 'blogPage_relNextPrev', 0 );
function blogPage_relNextPrev() {

	if ( is_page_template('page_blog.php') ) { // IF BLOG PAGE

		$nextprev_query = new WP_Query(array(
			'post_type' => 'post',
		));

		global $paged;
		$paged_max = intval($nextprev_query->max_num_pages);

		if ( $paged == 0 ) { // IF IS THE BLOG PAGE
			echo '<link rel="next" href="' . get_permalink() . 'page/' . ($paged + 2) . '/" />';
		} elseif ( $paged == 2 ) { // ELSEIF $paged is equal to 2.. NOTE: $paged = 1, is the BLOG PAGE
			echo '<link rel="prev" href="' . get_permalink() . '" />';
			echo '<link rel="next" href="' . get_permalink() . 'page/' . ($paged + 1) . '/" />';
		} elseif ( $paged > 2 && $paged < $paged_max ) { // ELSEIF $paged is more than 1 AND lesser than $paged_max
			echo '<link rel="prev" href="' . get_permalink() . 'page/' . ($paged - 1) . '/" />';
			echo '<link rel="next" href="' . get_permalink() . 'page/' . ($paged + 1) . '/" />';
		} elseif ( $paged == $paged_max ) { // ELSEIF $paged is at the end of pagination page
			echo '<link rel="prev" href="' . get_permalink() . 'page/' . ($paged - 1) . '/" />';
		}

		wp_reset_postdata();
	}
}

function get_attachment_id_by_url($attachment_url = '') {
 
	global $wpdb;
	$attachment_id = false;

	if ('' == $attachment_url)
		return;
 
	$upload_dir_paths = wp_upload_dir();
 
	if (false !== strpos($attachment_url, $upload_dir_paths['baseurl'])) {
		$attachment_url = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url);
		$attachment_url = str_replace($upload_dir_paths['baseurl'] . '/', '', $attachment_url);
		$attachment_id = $wpdb->get_var($wpdb->prepare("SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url));
	}
 
	return $attachment_id;
}

add_image_size('Image 540x292', 540, 292, false);
add_image_size('Image 540x290', 540, 290, false);
add_image_size('Image 260x290', 260, 290, false);
add_image_size('Image 531x290', 531, 290, false);
add_image_size('Image 257x290', 257, 290, false);