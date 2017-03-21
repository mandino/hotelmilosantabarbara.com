<?php

	if ( file_exists( 'library/Mobile_Detect.php' ) ) {

	    require_once  'library/Mobile_Detect.php';
	    $detect = new Mobile_Detect;
	    $check = $detect->isMobile();

	}  

?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]--> 
<!--[if IE 7 ]>	<html lang="en" class="ie ie7"> <![endif]--> 
<!--[if IE 8 ]>	<html lang="en" class="ie ie8"> <![endif]--> 
<!--[if IE 9 ]>	<html lang="en" class="ie ie9"> <![endif]--> 
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Cyber Monday Deal - Independent Collection</title>
<meta name="description" content="">
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo ('template_url'); ?>/images/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Defualt Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/widget-style.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/custom.css">

<!-- Fonts -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/fonts.css">

<!-- Jquery -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<!-- Jquery Stuffs -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery-clicknav.js"></script>
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.iosslider.js"></script>

<!-- responsive style -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/media.css">

<!-- scroll too -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/scrolltoo.js"></script>

<!-- Plugins -->

<!-- Quotes Rotator -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/quotes-rotator/component.css" />
<script src="<?php bloginfo ('template_url'); ?>/js/quotes-rotator/modernizr.custom.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
	    var halfwhiteheight = $('.below-slider .halfwhite').height();
	    $('.below-slider .halfgray').height(halfwhiteheight);
	});

	$(window).resize(function(){
	    var halfwhiteheight = $('.below-slider .halfwhite').height();
	    $('.below-slider .halfgray').height(halfwhiteheight);
	});

</script>
<script src="<?php bloginfo ('template_url'); ?>/js/quotes-rotator/jquery.cbpQTRotator.min.js"></script>
<script>
	$( function() {
		/*
		- how to call the plugin:
		$( selector ).cbpQTRotator( [options] );
		- options:
		{
			// default transition speed (ms)
			speed : 700,
			// default transition easing
			easing : 'ease',
			// rotator interval (ms)
			interval : 8000
		}
		- destroy:
		$( selector ).cbpQTRotator( 'destroy' );
		*/

		$( '#cbp-qtrotator' ).cbpQTRotator();

	} );
</script>

<!-- SlideJS -->
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/slidejs.css" type="text/css" media="screen" />
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.slides.min.js"></script>
<script>
	$(document).ready(function() {
	  $('.slides-mini').slidesjs({
	    width: 540,
	    height: 292,
	    navigation: false,
	    effect: {
		      slide: {
		        // Slide effect settings.
		        speed: 500
		          // [number] Speed in milliseconds of the slide animation.
		      },
		      fade: {
		      	speed: 1000,
		      	crossfade: true
		      }
		  },
		  navigation: {
		      active: true,
		        // [boolean] Generates next and previous buttons.
		        // You can set to false and use your own buttons.
		        // User defined buttons must have the following:
		        // previous button: class="slidesjs-previous slidesjs-navigation"
		        // next button: class="slidesjs-next slidesjs-navigation"
		      effect: "fade"
		        // [string] Can be either "slide" or "fade".
		    },
	    pagination: {
	    	effect: 'fade',
	    }
	  });
	});
</script>

<!-- Flex Slider -->
<!-- <link rel="stylesheet" href="js/flexslider/css/demo.css" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/js/flexslider/flexslider.css" type="text/css" media="screen" />
<script defer src="<?php bloginfo ('template_url'); ?>/js/flexslider/jquery.flexslider.js"></script>
<!-- <script src="js/flexslider/js/modernizr.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() {
	  $('.flexslider').flexslider({
	    animation: "fade",
	    animationSpeed: 600,
	  });
	});
</script>

<!-- Datepicker -->
<!-- <link rel="stylesheet" href="css/datepicker.css" type="text/css" media="screen" />
<script type="text/javascript">
	// $(function(){
	// 	$('#idp3').datepicker();
	// });
</script>-->

<!-- Jquery Sticky -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.sticky.js"></script>
<script>
	 $(window).load(function(){
      $(".searchbox").sticky({ topSpacing: 61, className: 'sticky', wrapperClassName: 'my-wrapper' });
      $("#navigation").sticky({ topSpacing: 0, className: 'sticky', wrapperClassName: 'my-wrapper' });
    });
</script>

<!-- iosslider -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/iosslider.css">
<script defer src="<?php bloginfo ('template_url'); ?>/js/jquery.iosslider.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	
		// $('.iosSlider').iosSlider({
		// 	snapToChildren: true,
		// 	desktopClickDrag: true,
		// 	infiniteSlider: true,
		// 	snapSlideCenter: true,
		// 	onSlideChange: slideChange,
		// 	autoSlideTransTimer: 2000,
		// 	onSlideChange: slideChange,
		// 	scrollbar: true,
		// 	scrollbarHide: false,
		// 	desktopClickDrag: true,
		// 	scrollbarLocation: 'bottom',
		// 	scrollbarHeight: '6px',
		// 	scrollbarBackground: 'url(_img/some-img.png) repeat 0 0',
		// 	scrollbarBorder: '1px solid #000',
		// 	scrollbarMargin: '0 30px 16px 30px',
		// 	scrollbarOpacity: '0.75',

		// 	navSlideSelector: '.sliderContainer .slideSelectors .item',
		// 	navPrevSelector: '.sliderContainer .slideSelectors .prev',
		// 	navNextSelector: '.sliderContainer .slideSelectors .next',
		// 	scrollbarContainer: '.sliderContainer .scrollbarContainer',
		// 	scrollbarMargin: '0',
		// 	scrollbarBorderRadius: '0',
		// 	keyboardControls: true,
		// onSlideChange: changeSlideFunction,
		// });

		// function changeSlideFunction(args) {
		// 	var slideNumber = args.currentSlideNumber);
		// }

		$('#room-details-slider .iosSlider').iosSlider({
			snapToChildren: true,
			desktopClickDrag: true,
			infiniteSlider: true,
			snapSlideCenter: true,
			onSlideChange: slideChange,
			autoSlideTransTimer: 2000,
			keyboardControls: true,
			onSlideComplete: slideComplete,
			onSlideChange: slideChange,
			navNextSelector: $('.iosslider-next'),
		    navPrevSelector: $('.iosslider-prev'),
		});

		function slideChange(args) {
			
			try {
				console.log('changed: ' + (args.currentSlideNumber - 1));
			} catch(err) {
			}
		
		}

		function slideComplete(args) {
				
			$('.iosslider-next, .iosslider-prev').removeClass('unselectable');
		    if(args.currentSlideNumber == 1) {
		        $('.iosslider-prev').addClass('unselectable');
		    } else if(args.currentSliderOffset == args.data.sliderMax) {
		        $('.iosslider-next').addClass('unselectable');
	    	}

	    }

		function slideChange(args) {

			try {
				console.log('changed: ' + (args.currentSlideNumber - 1));
			} catch(err) {
			}
			
			$('.indicators .item').removeClass('selected');
			$('.indicators .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

			$('.slideSelectors .item').removeClass('selected');
			$('.slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

			$('.iosSlider .item').removeClass('current');
		    $(args.currentSlideObject).addClass('current');

		}

		// iosSlider - Add mouse scroll function

		$('.iosSlider').bind('mousewheel', function(event, delta) {

		    var currentSlide = $('.iosSlider').data('args').currentSlideNumber;

		    //if delta is a positive number, go to prev slide. If delta is a negative number, go to next slide.
		    if(delta > 0) {

		        $('.iosSlider').iosSlider('goToSlide', currentSlide - 1);

		    } else {

		        $('.iosSlider').iosSlider('goToSlide', currentSlide + 1);

		    }

		});

		// iosSlider - Prevent default scrolling down when on slider

		$('.iosSlider').bind('mousewheel DOMMouseScroll', function(e) {
		    var scrollTo = null;

		    if (e.type == 'mousewheel') {
		        scrollTo = (e.originalEvent.wheelDelta * -1);
		    }
		    else if (e.type == 'DOMMouseScroll') {
		        scrollTo = 40 * e.originalEvent.detail;
		    }

		    if (scrollTo) {
		        e.preventDefault();
		        $(this).scrollTop(scrollTo + $(this).scrollTop());
		    }
		});


		
	});

</script>

<!-- Custom Plugin Settings -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/custom-plugins.css">

<!-- Scripts -->
<!-- Optional FlexSlider Additions -->
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.easing.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.mousewheel.js"></script>

<!-- Color Override CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/oceana-hotel.css">


<!-- things I added from independnentcollection.com -->
<script src="//www.independentcollection.com/wp-content/themes/ic/js/markermanager.js" type="text/javascript"></script>
<script src="//www.independentcollection.com/wp-content/themes/ic/js/StyledMarker.js" type="text/javascript"></script>
<script src="//www.independentcollection.com/wp-content/themes/ic/js/jquery.metadata.js" type="text/javascript"></script>
<script src="//www.independentcollection.com/wp-content/themes/ic/js/jquery.jmapping.js" type="text/javascript"></script>	
	<script type="text/javascript">
		
		<?php if(!$check) { ?>

			function createURL() {
				var checkin = jQuery("#arrival_date").val();
				var checkout = jQuery("#departure_date").val();
				var adults = jQuery("#adcount").val();
				var children = jQuery("#children").val();		
				var hotell = jQuery('#hotell').val();

				var bookinglink = "https://" + hotell + ".reztrip.com/search?" + 
												"&arrival_date=" + checkin + 
												"&departure_date=" + checkout + 
												"&adults[]=" + adults + 
												"&children[]=" + children;
			
				return bookinglink;
			}

			function createURLtwo() {
				var checkin = jQuery("#arrival_date-1").val();
				var checkout = jQuery("#departure_date-1").val();
				var adults = jQuery("#adcount-1").val();
				var children = jQuery("#children-1").val();		
				var hotell = jQuery('#hotell-1').val();

				var bookinglink = "https://" + hotell + ".reztrip.com/search?" + 
												"&arrival_date=" + checkin + 
												"&departure_date=" + checkout + 
												"&adults[]=" + adults + 
												"&children[]=" + children;

				return bookinglink;
			}
			
			function createURLthree() {
				var checkin = jQuery("#arrival_date").val();
				var checkout = jQuery("#departure_date").val();
				var adults = jQuery("#adcount").val();
				var children = jQuery("#children").val();		
				var hotell = jQuery('#hotell').val();

				switch(hotell) {

					case 'hotelmilosantabarbara':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBERM&offer_code=CYBMON&vr=3';						
						break;

					case 'thegrahamgeorgetown':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBERM&vr=3';						
						break;

					case 'theboxerboston':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBER&vr=3';						
						break;

					case 'duanestreethotel':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBERM&vr=3';						
						break;

					case 'capitolhillhotel-dc':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBERM&vr=3';
						break;

					case 'theindependenthotel':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBE&vr=3';						
						break;

					case 'nuhotelbrooklyn':
						switchhot = 'reztrip';
						promoex = 'special_offer?rate_code=CYBERM&vr=3';
						break;
						
					case 'bluemoon':
						switchhot = 'marriot';
						promoex = 'meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Cyber Monday Flash Sale^LPR`MIAAK|MIABM`&app=resvlink&stop_mobi=yes';
						break;
						
					case 'winterhaven':
						switchhot = 'marriot';
						promoex = 'meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Cyber Monday Flash Sale^LPR`MIAAK|MIABM`&app=resvlink&stop_mobi=yes';
						break;
						
					
					case 'hotel373':
						switchhot = 'hotel373';
						promoex = 'res.windsurfercrs.com/bbe/page2.aspx?pcode=WBL033&propertyid=12302&nights=1&checkin=11/29/2014&group=141129CYBE';
						break;
				}
				
				if (switchhot == 'reztrip') {
				
					var bookinglink = "https://" + hotell + ".reztrip.com/" + promoex + 
													"&arrival_date=" + checkin + 
													"&departure_date=" + checkout + 
													"&adults[]=" + adults + 
													"&children[]=undefined";
				
					return bookinglink;
				
				} else if (switchhot == 'marriot') {
					
					var bookinglink = "//www.marriott.com/" + promoex + 
													"&fromDate=" + checkin + 
													"&toDate=" + checkout + 
													"&numberOfGuests=" + adults + 
													"&numberOfRooms=1";
				
					return bookinglink;
					
				} else if (switchhot == 'hotel373') {
					
					var bookinglink = "https://" + promoex;
				
					return bookinglink;
					
				} else {}
			}

		<?php } else { ?>

			function createURL() {
				var checkin = jQuery("#arrival_date").val();
				var checkout = jQuery("#departure_date").val();
				var adults = jQuery("#adcount").val();
				var children = jQuery("#children").val();		
				var hotell = jQuery('#hotell').val();
				var sub = jQuery('#sub').val();
				var locale = "en-us";

				switch(hotell) {

					case 'hotelmilosantabarbara':
						propertyid = 416;
						break;

					case 'thegrahamgeorgetown':
						propertyid = 513;
						break;

					case 'theboxerboston':
						propertyid = 439;
						break;

					case 'duanestreethotel':
						propertyid = 515;
						break;

					case 'capitolhillhotel-dc':
						propertyid = 440;
						break;

					case 'theindependenthotel':
						propertyid = 530;
						break;

					case 'nuhotelbrooklyn':
						propertyid = 417;
						break;
						
				}

				var bookinglink = "//" + hotell + ".reztripmobile.com/rt/m/results?" + 
												"&propertyId=" + propertyid + 
												"&sub=" + hotell + 
												"&locale=" + locale + 
												"&arrival=" + checkin + 
												"&departure=" + checkout + 
												"&numAdults=" + adults + 
												"&numChildren=0";
			
				return bookinglink;
			}

			function createURLtwo() {
				var checkin = jQuery("#arrival_date-1").val();
				var checkout = jQuery("#departure_date-1").val();
				var adults = jQuery("#adcount-1").val();
				var children = jQuery("#children-1").val();		
				var hotell = jQuery('#hotell-1').val();
				var sub = jQuery('#sub-1').val();
				var locale = "en-us";

				switch(hotell) {

					case 'hotelmilosantabarbara':
						propertyid = 416;
						break;

					case 'thegrahamgeorgetown':
						propertyid = 513;
						break;

					case 'theboxerboston':
						propertyid = 439;
						break;

					case 'duanestreethotel':
						propertyid = 515;
						break;

					case 'capitolhillhotel-dc':
						propertyid = 440;
						break;

					case 'theindependenthotel':
						propertyid = 530;
						break;

					case 'nuhotelbrooklyn':
						propertyid = 417;
						break;
						
				}

				var bookinglink = "//" + hotell + ".reztripmobile.com/rt/m/results?" + 
												"&propertyId=" + propertyid + 
												"&sub=" + hotell + 
												"&locale=" + locale +
												"&arrival=" + checkin + 
												"&departure=" + checkout + 
												"&numAdults=" + adults + 
												"&numChildren=0";

				return bookinglink;
			}
			
			function createURLthree() {
				var checkin = jQuery("#arrival_date").val();
				var checkout = jQuery("#departure_date").val();
				var adults = jQuery("#adcount").val();
				var children = jQuery("#children").val();		
				var hotell = jQuery('#hotell').val();
				var sub = jQuery('#sub').val();
				var locale = "en-us";

				switch(hotell) {

					case 'hotelmilosantabarbara':
						propertyid = 416;
						switchhot = 'reztrip';
						break;

					case 'thegrahamgeorgetown':
						propertyid = 513;
						switchhot = 'reztrip';
						break;

					case 'theboxerboston':
						propertyid = 439;
						switchhot = 'reztrip';
						break;

					case 'duanestreethotel':
						propertyid = 515;
						switchhot = 'reztrip';
						break;

					case 'capitolhillhotel-dc':
						propertyid = 440;
						switchhot = 'reztrip';
						break;

					case 'theindependenthotel':
						propertyid = 530;
						switchhot = 'reztrip';
						break;

					case 'nuhotelbrooklyn':
						propertyid = 417;
						switchhot = 'reztrip';
						break;
					
					case 'bluemoon':
						switchhot = 'marriot';
						promoex = 'meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Cyber Monday Flash Sale^LPR`MIAAK|MIABM`&app=resvlink&stop_mobi=yes';
						break;
						
					case 'winterhaven':
						switchhot = 'marriot';
						promoex = 'meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Cyber Monday Flash Sale^LPR`MIAAK|MIABM`&app=resvlink&stop_mobi=yes';
						break;
						
					
					case 'hotel373':
						switchhot = 'hotel373';
						promoex = 'res.windsurfercrs.com/bbe/Page2.aspx?sortby=1&amp;langID=1&amp;hotelID=12302';
						break;
				}
				
				
				
				if (switchhot == 'reztrip') {
					
					var bookinglink = "//" + hotell + ".reztripmobile.com/rt/m/results?" + 
													"&propertyId=" + propertyid + 
													"&sub=" + hotell + 
													"&locale=" + locale + 
													"&arrival=" + checkin + 
													"&departure=" + checkout + 
													"&numAdults=" + adults + 
													"&numChildren=0";
				
					return bookinglink;
				
				} else if (switchhot == 'marriot') {
					
					var bookinglink = "//www.marriott.com/" + promoex + 
													"&fromDate=" + checkin + 
													"&toDate=" + checkout + 
													"&numberOfGuests=" + adults + 
													"&numberOfRooms=1";
				
					return bookinglink;
					
				} else if (switchhot == 'hotel373') {
					
					var bookinglink = "https://" + promoex;
				
					return bookinglink;
					
				} else {}
			}

		<?php } ?>



		function createURLwindsurfer() {
			var checkin = jQuery("#arrival_date").val();
			var checkout = jQuery("#departure_date").val();
			var adults = jQuery("#adcount").val();
			var children = jQuery("#children").val();		
			var hotell = jQuery('#hotell').val();

			var datearray = checkin.split('-');


			var bookinglink = "https://" + hotell + 
											"&checkin=" + datearray[1] + "/" + datearray[2] + "/" + datearray[0] +
											"&checkout=" + checkout + 
											"&adults=" + adults + 
											"&child1=" + children;
		
			return bookinglink;
		}

		function createURLwindsurfertwo() {
			var checkin = jQuery("#arrival_date-1").val();
			var checkout = jQuery("#departure_date-1").val();
			var adults = jQuery("#adcount-1").val();
			var children = jQuery("#children-1").val();		
			var hotell = jQuery('#hotell-1').val();

			var datearray = checkin.split('-');

			var bookinglink = "https://" + hotell + 
											"&checkin=" + datearray[1] + "/" + datearray[2] + "/" + datearray[0] +
											"&checkout=" + checkout + 
											"&adults=" + adults + 
											"&child1=" + children;
		
			return bookinglink;
		}



		function createURLsecond() {

			var hotell = jQuery('#hotell').val();
			var bookinglinksecond = "https://" + hotell;
			return bookinglinksecond;

		}

		function createURLsecondtwo() {

			var hotell = jQuery('#hotell-1').val();
			var bookinglinksecondtwo = "https://" + hotell;
			return bookinglinksecondtwo;

		}
	
	$(document).ready(function() {

		jQuery('form#home-booking a.button').click(function(e) {

			if( 
				$('#hotell').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIAAK' ||
				$('#hotell').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIABM'
			) {

				$('.below-slider .form-error').removeClass('error');
				
				window.location = createURLsecond();
				return false;
				

			} else if( 
				$('#hotell').val() == 'res.windsurfercrs.com/bbe/Page2.aspx?sortby=1&langID=1&hotelID=12302'
			) {

				$('.below-slider .form-error').removeClass('error');
				
				window.location = createURLwindsurfer();
				return false;

			} else if ( $('#hotell').val().length == 0 ) {

				e.preventDefault();
				$('.below-slider .form-error').addClass('error');
				$('#home-booking').preventDefault();
				return false;
					
			} else {

				$('.below-slider .form-error').removeClass('error');
				
				window.location = createURLthree();
				return false;

			}

		});

		$('#hotell').on('change', function(e){

			if( 
				$('#hotell').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIAAK' ||
				$('#hotell').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIABM'
			) {

				$('.below-slider .form-error').removeClass('error');
				$('#home-booking').preventDefault();
				// e.preventDefault();
				window.location = createURLsecond();
				return false;

			} else if( 
				$('#hotell').val() == 'res.windsurfercrs.com/bbe/Page2.aspx?sortby=1&langID=1&hotelID=12302'
			) {

				$('.below-slider .form-error').removeClass('error');
				$('#home-booking').preventDefault();
				// e.preventDefault();
				window.location = createURLwindsurfer();
				return false;

			} else if ( $('#hotell').val().length == 0 ) {

				e.preventDefault();
				$('.below-slider .form-error').addClass('error');
				$('#home-booking').preventDefault();
				// _gaq.push(['_link', createURL() ]);
				return false;
					
			} else {

				
				$('.below-slider .form-error').removeClass('error');
				
				$('#home-booking').preventDefault();
				window.location = createURLthree();
				return false;

			}

		});

		jQuery('form#footer-booking a.button').click(function(e) {

			if( 
				$('#hotell-1').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIAAK' ||
				$('#hotell-1').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIABM'
			) {

				$('.brandfooter .form-error').removeClass('error');
				
				window.location = createURLsecondtwo();
				return false;

			} else if( 
				$('#hotell-1').val() == 'res.windsurfercrs.com/bbe/Page2.aspx?sortby=1&langID=1&hotelID=12302'
			) {

				$('.brandfooter .form-error').removeClass('error');
				
				window.location = createURLwindsurfertwo();
				return false;

			} else if ( $('#hotell-1').val().length == 0 ) {

				e.preventDefault();
				$('.brandfooter .form-error').addClass('error');
				$('#footer-booking').preventDefault();
				// _gaq.push(['_link', createURL() ]);
				return false;
					
			} else {

				$('.brandfooter .form-error').removeClass('error');
				
				window.location = createURLtwo();
				return false;

			}

		});

		$('#hotell-1').on('change', function(e){

			if( 
				$('#hotell-1').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIAAK' ||
				$('#hotell-1').val() == 'www.marriott.com/reservation/rateListMenu.mi?propertyCode=MIABM'
			) {

				$('.brandfooter .form-error').removeClass('error');
				$('#footer-booking').preventDefault();
				_gaq.push(['_link', createURLsecondtwo() ]);
				return false;

			} else if( 
				$('#hotell-1').val() == 'res.windsurfercrs.com/bbe/Page2.aspx?sortby=1&langID=1&hotelID=12302'
			) {

				$('.brandfooter .form-error').removeClass('error');

				$('#footer-booking').preventDefault();
				_gaq.push(['_link', createURLwindsurfertwo() ]);
				return false;

			} else if ( $('#hotell-1').val().length == 0 ) {

				e.preventDefault();
				$('.brandfooter .form-error').addClass('error');
				$('#footer-booking').preventDefault();
				return false;
					
			} else {

				$('.brandfooter .form-error').removeClass('error');

				e.preventDefault();
				$('#footer-booking').preventDefault();
				_gaq.push(['_link', createURLtwo() ]);
				return false;

			}

		});
	
	});
	
	$(document).ready(function () {
   		 $("select").each(function () {
       		 $(this).val($(this).find('option[selected]').val());
   		 });
    });
    
    
    
	</script>


	<!-- Scripts -->
	<script type="text/javascript">

	$(function() {

		$('#arrive-cal .squaredance, #arrive-cal-1 .squaredance').on('click',function(){
			$('.hasDatepicker').removeClass('cal-hover'),
			$(this).next('.hasDatepicker').addClass('cal-hover');
		});

		$('#depart-cal .squaredance, #depart-cal-1 .squaredance').on('click',function(){
			$('.hasDatepicker').removeClass('cal-hover'),
			$(this).next('.hasDatepicker').addClass('cal-hover');
		});

		$('.cal-close').on('click',function(){
			$('.hasDatepicker').removeClass('cal-hover');
		});

		$.datepicker._defaults.dateFormat = 'yy-mm-dd';
		
		var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		var months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];

		var the_date = new Date();
		var init_getcurrentdate = new Date().getDate();
		var init_getcurrentmonth = new Date().getMonth();
		var init_getnextmonth = new Date().getMonth()+1;
		var init_LastDayOfMonth = new Date(the_date.getFullYear(),the_date.getMonth()+1, 0);
		var init_LastMonthOfYear = new Date(the_date.getFullYear(),0,0);
		var init_getdateLastDayOfMonth = init_LastDayOfMonth.getDate();
		var init_getdateLastMonthOfYear = init_LastMonthOfYear.getMonth()+1;

		// $('#arv').val(months[init_getcurrentmonth]);
		// $('#arv-1').val(months[init_getcurrentmonth]);

		// if( init_LastDayOfMonth == init_getcurrentdate && init_getcurrentmonth != init_getdateLastMonthOfYear ) {

		// 	$('#dep').val(months[init_getnextmonth]);
		// 	$('#dep-1').val(months[init_getnextmonth]);

		// } else if ( init_LastDayOfMonth == init_getcurrentdate && init_getcurrentmonth == init_getdateLastMonthOfYear ) {

		// 	$('#dep').val(months[0]);
		// 	$('#dep-1').val(months[0]);

		// } else {

		// 	$('#dep').val(months[init_getcurrentmonth]);
		// 	$('#dep-1').val(months[init_getcurrentmonth]);

		// }
		
		$('.datepicker').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#arve',
			altFormat : 'dd',
			minDate: new Date(),
			gotoCurrent: true,
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        var selectednextMonthName = months[$(this).datepicker('getDate').getMonth()+1];
		        $('#arv').val(selectedMonthName);
		        $('#arrival_date').val(event);

		        var d = $(this).datepicker("getDate");
				var d2 =  (d.getDate() + 1);

				var getthedate = d.getDate();
				var getthemonth = d.getMonth()+1;
				var today = new Date();
				var LastDayOfMonth = new Date(d.getFullYear(),d.getMonth()+1, 0);
				var LastMonthOfYear = new Date(d.getFullYear(),0,0);
				var getdateLastDayOfMonth = LastDayOfMonth.getDate();
				var getdateLastMonthOfYear = LastMonthOfYear.getMonth()+1;
				var firstOfMonth = new Date(today.getFullYear(),today.getMonth(), 1);

				var d3 = firstOfMonth.getDate();

				// alert(testget);

				$(".departdatepicker").datepicker("option", "minDate", d);

				if( (getthedate == getdateLastDayOfMonth) && (getthemonth != getdateLastMonthOfYear) ) {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 2) + '-' + d3;

					$('.departdatepicker').datepicker('setDate',d1);

					$('#depee').val(d3);
					$('#departure_date').val(d1);
		        	$('#dep').val(selectednextMonthName);

		        } else if( (getthedate == getdateLastDayOfMonth) && (getthemonth == getdateLastMonthOfYear) ) {

		        	var d1 =  (d.getFullYear()+1) + '-' + '1' + '-' + d3;

					$('.departdatepicker').datepicker('setDate',d1);

					$('#depee').val(d3);
					$('#departure_date').val(d1);
		        	$('#dep').val('January');

				} else {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + (d.getDate() + 1);

					$('.departdatepicker').datepicker('setDate',d1);

					$('#depee').val(d2);
					$('#departure_date').val(d1);
		        	$('#dep').val(selectedMonthName);
				}

				$('.hasDatepicker').removeClass('cal-hover');
		        
		    }
		     
		});
		
		// var tester = $("#arrival_date").val();
		
		$('.departdatepicker').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#depee',
			altFormat : 'dd',
			minDate: 1,
			gotoCurrent: true,
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $('#arrival_date').val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $('#departure_date').val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        $('#dep').val(selectedMonthName);
		        $('#departure_date').val(event);

		        $('.hasDatepicker').removeClass('cal-hover');
		        
		    }
		});

		$('.datepickerr').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#arve-1',
			altFormat : 'dd',
			minDate: new Date(),
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        var selectednextMonthName = months[$(this).datepicker('getDate').getMonth()+1];
		        $('#arv-1').val(selectedMonthName);
		        $("#arrival_date-1").val(event);

		        var d = $(this).datepicker("getDate");
				var d2 =  (d.getDate() + 1);

				var getthedate = d.getDate();
				var getthemonth = d.getMonth()+1;
				var today = new Date();
				var LastDayOfMonth = new Date(d.getFullYear(),d.getMonth()+1, 0);
				var LastMonthOfYear = new Date(d.getFullYear(),0,0);
				var getdateLastDayOfMonth = LastDayOfMonth.getDate();
				var getdateLastMonthOfYear = LastMonthOfYear.getMonth()+1;
				var firstOfMonth = new Date(today.getFullYear(),today.getMonth(), 1);				
				
				var d3 = firstOfMonth.getDate();

				$(".departdatepickerr").datepicker("option", "minDate", d);

				if( (getthedate == getdateLastDayOfMonth) && (getthemonth != getdateLastMonthOfYear) ) {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 2) + '-' + d3;

					$('.departdatepickerr').datepicker('setDate',d1);

					$("#depee-1").val(d3);
					$("#departure_date-1").val(d1);
		        	$('#dep-1').val(selectednextMonthName);

		        } else if( (getthedate == getdateLastDayOfMonth) && (getthemonth == getdateLastMonthOfYear) ) {

		        	var d1 =  (d.getFullYear()+1) + '-' + '1' + '-' + d3;

		        	$('.departdatepickerr').datepicker('setDate',d1);

					$("#depee-1").val(d3);
					$("#departure_date-1").val(d1);
		        	$('#dep-1').val('January');

				} else {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + (d.getDate() + 1);

					$('.departdatepickerr').datepicker('setDate',d1);

					$("#depee-1").val(d2);
					$("#departure_date-1").val(d1);
		        	$('#dep-1').val(selectedMonthName);
				}

				$('.hasDatepicker').removeClass('cal-hover');
		       
		    }
		     
		});
					
		$('.departdatepickerr').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#depee-1',
			altFormat : 'dd',
			minDate: 1,
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-1").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-1").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        $('#dep-1').val(selectedMonthName);
		        $("#departure_date-1").val(event);

		        $('.hasDatepicker').removeClass('cal-hover');
		    }
		});

		$(".datepicker-ressys").datepicker({
			minDate: 0,
			numberOfMonths: [2,1],
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
			onSelect: function(dateText, inst) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
	            var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

	            
	            if (!date1 || date2) {
					$("#arrival_date-nav").val(dateText);
					$("#departure_date-nav").val("");
	                $(this).datepicker();
	            } else if( selectedDate < date1 ) {
	                $("#departure_date-nav").val( $("#arrival_date-nav").val() );
	                $("#arrival_date-nav").val( dateText );
	                $(this).datepicker();
	            } else {
					$("#departure_date-nav").val(dateText);
	                $(this).datepicker();
				}
			}
		});
				
				
				
				
		var d=new Date();
		var month=new Array();
		month[0]="January";
		month[1]="February";
		month[2]="March";
		month[3]="April";
		month[4]="May";
		month[5]="June";
		month[6]="July";
		month[7]="August";
		month[8]="September";
		month[9]="October";
		month[10]="November";
		month[11]="December";
		var n = month[d.getMonth()];
		
		if($("#arrival_date").val() != "") {
			var checkin_chrome = $("#arrival_date").val();
			var datearray_chrome = checkin_chrome.split('-');
			var dep_chrome = $("#departure_date").val();
			var dep_datearray_chrome = dep_chrome.split('-');

			$('#arve').val(datearray_chrome[2]);
			$('#depee').val(dep_datearray_chrome[2]);

			$('#dep').attr('placeholder', month[dep_datearray_chrome[1]]);
		} else {
			$("#arv").attr("placeholder", n);
			$("#dep").attr("placeholder", n);
		}

		if($("#arrival_date-1").val() != "") {
			var checkin_chrome1 = $("#arrival_date-1").val();
			var datearray_chrome1 = checkin_chrome1.split('-');
			var dep_chrome1 = $("#departure_date-1").val();
			var dep_datearray_chrome1 = dep_chrome1.split('-');

			$('#arve-1').val(datearray_chrome1[2]);
			$('#depee-1').val(dep_datearray_chrome1[2]);

			$('#dep-1').attr('placeholder', month[dep_datearray_chrome1[1]]);
		} else {
			$("#arv-1").attr("placeholder", n);
			$("#dep-1").attr("placeholder", n);
		}



			// var todaytwo = new Date();
		 //    var monthtwo = todaytwo.getMonth(),
		 //        yeartwo = todaytwo.getFullYear();
		 //    if (monthtwo < 0) {
		 //        monthtwo = 11;
		 //        yeartwo -= 1;
		 //    }
		 //    var tomorrow = new Date(yeartwo, monthtwo, todaytwo.getDate()+1);

			// $('#arrival_date').val($.datepicker.formatDate('yy-mm-dd', todaytwo));
		 //    $('#departure_date').val($.datepicker.formatDate('yy-mm-dd', tomorrow));

	});

 
	// Map init
	// Position this thing here because it makes the map load when pressing "Back" in Chrome

	$(function() {
	
		// styles	
		
		 var styles = [{"featureType":"poi","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":0},{"lightness":-100},{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":0},{"lightness":-100},{"visibility":"off"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":26},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":-3},{"visibility":"on"}]}];
		
		// map options
		var mapOptions = {
		    zoom: 13,
		    minZoom: 13,
		    scrollwheel: false,
			draggable: true,
		    center: new google.maps.LatLng(40.667013, -123.438436),
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		    disableDefaultUI: false,
		    styles: styles,
		    scaleControl: true
		};



		$('#map').jMapping({
			force_zoom_level: 13,
			default_zoom_level: 13,
		    category_icon_options: function(category){
		      if (category.charAt(0).match(/[a-c]/i)){
		        return new google.maps.MarkerImage($(this).attr('data-icon'));
		      } else if (category.charAt(0).match(/[d-z]/i)){
		        return new google.maps.MarkerImage($(this).attr('data-icon'));
		      } else {
		        return new google.maps.MarkerImage($(this).attr('data-icon'));
		      }
		    },
		    map_config: mapOptions
		});
	
	});


	$(document).ready(function(){

		// Position this thing here because it makes the magnet boxes load when pressing "Back" in Chrome
		
		 
		$('#container').magnet();
		

						
			   	   /** HIDE MENU **/
		    $("#navigation").css("margin-top", "-88px");
		    
		    
		     
		    
		    $(window).scroll(function() {
		        
		        var verschil = ($(window).scrollTop() / 5);
		    
		        if (verschil > 40) 
		            
		            $('#navigation').animate({'margin-top': '0px' }, {duration: 500, queue: false}).addClass('jumpshot');
		        
		        else if (verschil < 40)
		            
		            $('#navigation').animate({'margin-top': '-88px' }, {duration: 500, queue: false}).removeClass('jumpshot');
		    });
		    
		    
		    		    
		    
		    
		
	    
		$(".closebox a").click(function(e) {
			e.preventDefault();
			
			$(".specialsbox").addClass("shutit");

			
		})

	    // Hidden calendar

	    $("#primary-nav .button.input-append.date").hover(function() {
					
			$(".ressys").addClass("dropit");
			$(this).removeClass("fixeer");
		
		},function(){
		
			$(".ressys").removeClass("dropit");
		
		
		});

		$("#primary-nav .button.input-append.date").toggle(function() {
					
			$(".ressys").addClass("dropit");
			$(this).removeClass("fixeer");
		
		},function(){
		
			$(".ressys").removeClass("dropit");
		
		
		});
		
		


		// Reserve button hover
		
		 $('.ressys').hover(function() {
			$("#primary-nav .button").stop().addClass("nothingness");
			
			
		 	}, function() {
	 		$("#primary-nav .button").removeClass("nothingness");			
		 });
		 
		 
		 
		 
 

		$('.slides-mini').slidesjs({
		    width: 540,
		    height: 292,
		    navigation: false,
		    effect: {
			      slide: {
			        // Slide effect settings.
			        speed: 500
			          // [number] Speed in milliseconds of the slide animation.
			      },
			      fade: {
			      	speed: 1000,
			      	crossfade: true
			      }
			  },
			  navigation: {
			      active: false,
			        // [boolean] Generates next and previous buttons.
			        // You can set to false and use your own buttons.
			        // User defined buttons must have the following:
			        // previous button: class="slidesjs-previous slidesjs-navigation"
			        // next button: class="slidesjs-next slidesjs-navigation"
			      effect: "fade"
			        // [string] Can be either "slide" or "fade".
			    },
		    pagination: {
		    	effect: 'fade',
		    }
		});



		// Flexslider

		$('.flexslider').flexslider({
			animation: "fade",
			animationSpeed: 1200,
			slideshowSpeed: 3500,
			pauseOnAction: false,
		});









		// Question box

		 $("input.check").click(function(){
	        if($(this).is(":checked")){
	            $(this).parent().addClass("question-box-active");
	        }
	    });



		// Pretty Photo

	    $('a[rel=tooltip]').mouseover(function(e) {
	         
	        //Grab the title attribute's value and assign it to a variable
	        var tip = $(this).attr('title');   
	         
	        //Remove the title attribute's to avoid the native tooltip from the browser
	        $(this).attr('title','');
	         
	        //Append the tooltip template and its value
	        $(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');    
	         
	        //Set the X and Y axis of the tooltip
	        $('#tooltip').css('top', e.pageY + 10 );
	        $('#tooltip').css('left', e.pageX + 20 );
	         
	        //Show the tooltip with faceIn effect
	        $('#tooltip').fadeIn('500');
	        $('#tooltip').fadeTo('10',0.8);
	         
	    }).mousemove(function(e) {
	     
	        //Keep changing the X and Y axis for the tooltip, thus, the tooltip move along with the mouse
	        $('#tooltip').css('top', e.pageY + 10 );
	        $('#tooltip').css('left', e.pageX + 20 );
	         
	    }).mouseout(function() {
	     
	        //Put back the title attribute's value
	        $(this).attr('title',$('.tipBody').html());
	     
	        //Remove the appended tooltip template
	        $(this).children('div#tooltip').remove();
	         
	    });
	    
	    $('.section-photos').remove('.gallery');



	    // Tabbing - TABS FUNCTION

		$('.tabs-wrapper').each(function() {
			$(this).find(".tab-content").hide(); //Hide all content
			$(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
			$(this).find(".tab-content:first").show(); //Show first tab content
		});

		$("ul.tabs li").click(function(e) {
			$(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(this).parents('.tabs-wrapper').find(".tab-content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$("li.tab-item:first-child").css("background", "none" );
			$(this).parents('.tabs-wrapper').find(activeTab).fadeIn(1000); //Fade in the active ID content
			e.preventDefault();
		});

		$("ul.tabs li a").click(function(e) {
			e.preventDefault();
		})

		$("li.tab-item:last-child").addClass('last-item');




		// iosslider

		
	


		// Sidebar not working fix

		$("body a").attr('data-ajax', false);

		$('.section-photos li').bind("vmousedown", function(){});

		$('.thumbgal li').bind("vmousedown", function(){});

	});



	$( function() {

		// Quotes Rotator

		$( '#cbp-qtrotator' ).cbpQTRotator();

	} );



	// Sticky Nav

	



	// FadeIn logo

	 $(window).scroll(function() {
		        
        var verschil = ($(window).scrollTop() / 5);
    
      if (verschil > 40) 
            
           $('.droplogo').addClass('jumpshot');
        
        else if (verschil < 40)
            
           $('.droplogo').removeClass('jumpshot');
    });



	 // Calendar in Navigation

	 $(function() {

	 	if ($(window).width() < 940) {
			   
		   var pos 	= 'mm-top mm-right mm-bottom',
				zpos	= 'mm-front mm-next';

			var $html 	= $('html'),
				$menu	= $('nav#menu'),
				$both	= $html.add( $menu );

			$menu.mmenu();

			//	Add the position-classnames onChange
			$('input[name="pos"]').change(function() {
				$both.removeClass( pos ).addClass( 'mm-' + this.value );
			});
			$('input[name="zpos"]').change(function() {
				$both.removeClass( zpos ).addClass( 'mm-' + this.value );
			});

		}

	 	$( window ).resize(function() {

			if ($(window).width() > 940) {

				var $menu	= $('nav#menu');
				$menu.removeClass()
				$('nav#menu ul').removeClass()
				$('#primary-nav .container').prepend($menu);

			} else {

				var $menu	= $('nav#menu');
				$menu.addClass('fl mm-menu mm-horizontal mm-ismenu')
				$('nav#menu ul').addClass('mm-list mm-panel mm-opened mm-current')
				$('html').prepend($menu);

			}

		});
			
	});



</script>	

<?php
	/****************** DO NOT REMOVE **********************
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

</head>