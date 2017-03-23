<?php

$bgcolor = get_option('cebo_background_color');
$bgimg = get_option('cebo_background_image');
$bgrepeat = get_option('cebo_background_repeat');
$bgpos = get_option('cebo_background_position');
$accent = get_option('cebo_accent_color');
$accentsecond = get_option('cebo_second_color');	
$css = '';


function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);
 
   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb);

}

function deleteFirstChar( $string ) {
	return substr( $string, 1 );
}



$css .= stripslashes(get_option('cebo_custom_css'));  

$rgb = hex2rgb($accent);

$rawcolor = deleteFirstChar( $accent );

if(get_option('cebo_accent_color')) {

$css .= <<<CSS

.mmenu-icon .fa.fa-bars { background: none repeat scroll 0 0  $accent; }

.button:focus {
    background-color:  $accent;
}


 #room-featured-slider .button:hover {
        background: none repeat scroll 0 0  $accent !important;
    }

.fullpic .button:hover {
        background: none repeat scroll 0 0  $accent !important;
}

.room-details-content .button:hover {
        background-color:  $accent !important;
        }

.sidebar .button:hover {
        background:  $accent !important;

}

.upcoming-events .fr li:hover .event-date {	background:  $accent; }

.upcoming-events li:hover .event-description {
background: none repeat scroll 0 0  $accent;
}
	
nav .icon-mail:hover {  color:  $accent; }

nav .icon-mail { background:  $accent; }

.button {  background:  $accent; }

.circle { background: none repeat scroll 0 0  $accent; }



a { color:  $accent; }

.button:focus { background-color:  $accent; }

.boxer .lowball { color:  $accent; }
	
.boxer h3 { color:  $accent; }
.boxer h6 {  color:  $accent; }    


.boxer a { color:  $accent; }   	


p a { color:  $accent; }	

.dropmenu select { border: 1px solid  $accent; }
 

.icon-menu { color:  $accent; }

#slidecaption .footprints li:hover {  background:  $accent; }

.boxer aside ul li a:hover { color:  $accent; }

ul.tabs li.active a { color:  $accent; }


#toggle-view li.activated:after { background:  $accent; }

.nextposters .boxer li a:hover h4 {
	color:  $accent;
}

.usercomments h4 i a {
	color:  $accent;
}

.social-buttons a:hover, .social-buttons i:hover {
		color:  $accent;
	}

#primary-nav nav ul li a:hover {
		color:  $accent;
	}

#primary-nav .button { background: none repeat scroll 0 0  $accent;   }
 
 #neighborhood .section-header .fr li {
    background: none repeat scroll 0 0  $accent;
    }
    
 .newsletter-form input[type="submit"] { background: none repeat scroll 0 0  $accent; }
 
 	footer nav ul.footling li a:hover {
		color:  $accent;
	}
	


.ui-timepicker-div .ui-state-default,
.ui-timepicker-div .ui-widget-content .ui-state-default,
.ui-timepicker-div .ui-widget-header .ui-state-default {
    background:  $accent;

}

.dp-highlight .ui-state-default {
          background:  $accent;
         }


	   
#map .activities li { background: none repeat scroll 0 0  $accent; }
  
.post-content h3 {
    color:  $accent;
 }
 
 .post-tags li a:hover, .post-tags li.current a {
	color:  $accent;
}

   
.post-content blockquote p {
    color:  $accent;
 }
 
 
  .wpcf7 input[type="submit"]:hover {
        background-color:  $accent;

    }
 
 
 .upcoming-calendar .tribe-mini-calendar td.tribe-events-has-events {
   background: none repeat scroll 0 0  $accent;
}
      
.section-photos li div.hover-effect, .thumbgal li div.hover-effect {
background: none repeat scroll 0 0 rgba( $rgb, .8);
}


#neighborhood .section-header .fr li {
    background: none repeat scroll 0 0  $accent;
}

footer nav ul.footling li a:hover {
		color:  $accent;
	}


.dp-highlight .ui-state-default {
          background:  $accent;
          color: #FFF;
        }
        
#map .activities li {  background: none repeat scroll 0 0  $accent; }        
   
   
   
   
     .placeMark { 
	background:  $accentsecond;
  }
  
   #toggles li {

	background:  $accentsecond;

  }

.from-price { background: none repeat scroll 0 0 rgba( $rgb, 0.8);      }

CSS;

}
  
  file_put_contents(TEMPLATEPATH."/css/inset.css", $css);  
  echo "<link rel='stylesheet' id='inset-css'  href='".get_bloginfo("template_directory")."/css/inset.css' type='text/css' media='all' />";

?>