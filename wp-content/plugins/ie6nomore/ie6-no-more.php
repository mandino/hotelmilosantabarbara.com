<?php

/*
Plugin Name: IE6 No More
Plugin URI: http://aboutenjay.com/tag/ie6nomore/
Description: Encourages IE6 users to upgrade to a more modern browser by displaying a box at the top of the page informing them that they are using an outdated browser.
Author: Jerico Veloso
Version: 0.3.0
Author URI: http://aboutenjay.com/
*/

function callback($buffer) {
	global $is_IE;
	
	if ($is_IE) {
		$ie6nomore_code = "
			<!--[if lt IE 10]>
			<div style='border: 1px solid #F7941D; display: block; z-index: 9999; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>
				<div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'><a href='#' onclick='javascript:this.parentNode.parentNode.style.display=\"none\"; return false;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/></a></div>
				<div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
					<div style='width: 75px; float: left;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!'/></div>
					<div style='width: 275px; float: left; font-family: Arial, sans-serif;'>
						<div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>You are using an outdated browser</div>
						<div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>For a better experience using this site, please upgrade to a modern web browser.</div>
					</div>
					<div style='width: 75px; float: left;'><a href='http://www.mozilla.org/en-US/firefox/new/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox'/></a></div>
					<div style='width: 75px; float: left;'><a href='http://windows.microsoft.com/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer'/></a></div>
					<div style='width: 73px; float: left;'><a href='http://www.apple.com/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari'/></a></div>
					<div style='float: left;'><a href='https://www.google.com/intl/en/chrome/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome'/></a></div>
				</div>
			</div>
			<![endif]-->
		";
		$buffer = preg_replace('/(<body.*>)/', "$1\n".$ie6nomore_code, $buffer, 1);
	}
	
	return $buffer;
}

function buffer_start() {
	ob_start("callback");
}

function buffer_end() {
	ob_end_flush();
}

add_action('wp_head', 'buffer_start');
add_action('wp_footer', 'buffer_end');

?>