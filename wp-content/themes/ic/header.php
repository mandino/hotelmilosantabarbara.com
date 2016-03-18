<?php 

	require_once TEMPLATEPATH.'/library/mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();

	$check = $detect->isMobile();

?>
<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="p:domain_verify" content="b064c45724dfd80702c16b1d08c28d8a"/>
	<meta name="google-site-verification" content="PLMRblpH5jD6eiEzVXnTlu33LL379Jk97ncPlPQ4d_A" />
	<title>
		<?php global $page, $paged; wp_title( '|', true, 'right' );
		
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'cebolang' ), max( $paged, $page ) );
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('cebo_custom_favicon') == '') { ?>
	
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/cebo_options/<?php bloginfo ('template_url'); ?>/images/admin_sidebar_icon.png" type="image/x-ico"/>
	
	<? } else { ?>
	
	<link rel="icon" href="<?php echo get_option('cebo_custom_favicon'); ?>" type="image/x-ico"/>
	
	<? } ?>
	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('cebo_feedburner_url') <> "" ) { echo get_option('cebo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
	<!-- favicon -->

	<!-- MILO -->

	<link rel="shortcut icon" href="<?php bloginfo ('template_url'); ?>/icfavicon.png" type="image/png">
	<link rel="icon" href="icfavicon.png" type="image/png">
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/custom.css">

	<!-- Fonts -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/quotes-rotator/component.css" />
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/slidejs.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/js/flexslider/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/jquery.mmenu.css">

	<?php if ( 'rooms' == get_post_type() ) 	{ ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/iosslider.css">
	<?php } ?>

	<!-- Custom Plugin Settings -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/custom-plugins.css">

	<!-- Color Override CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/oceana-hotel.css">
	
	<!-- Lightbox - Prettyphoto -->	
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"/>
	
	<!-- responsive style -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/media.css">
	
	<style>
		<?php include(TEMPLATEPATH. "/library/inset.php"); ?>
	</style>

	<!-- Jquery -->
	<?php //include(TEMPLATEPATH. "/library/jquery.php"); ?>
	<!--
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script type='text/javascript' src='<?php bloginfo ('url'); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
	-->
	
	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>

<!-- NAVIS script -->
<script language="javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15407&jspass=s019eeaiszmi3itqbduy&dflt=8663200339"></script>
<script language="javascript">ProcessNavisNCKeyword();</script>


	<script type="application/ld+json">
		{
		"@context": "http://schema.org",
		"@type": "NewsArticle",
		"headline": "Article headline",
		"alternativeHeadline": "The headline of the Article",
		"image": [
		"thumbnail1.jpg",
		"thumbnail2.jpg"
		],
		"datePublished": "2015-02-05T08:00:00+08:00",
		"description": "A most wonderful article",
		"articleBody": "The full body of the article"
		}
	</script> 

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1701093870106348');
	fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1701093870106348&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
</head> 
	
<body id="oceana" <?php body_class($class); ?>>

	<div id="navigation">
			
			
			<div class="ressys">
				
				
				<div class="whippapeal">
				<div class="formfields">
				
					<div class="reservationform">
					
					
						<form method="get" action="<?php echo get_option('cebo_genbooklink'); ?>/search?" target="_self">

							<input type="hidden" value="1" name="rooms">
							
							<span class="calsec">
								<input type="text"  id="arrival_date" name="arrival_date" placeholder="<?php _e('Arrival','cebolang'); ?>" class="calendarsection" />
								<input type="hidden"  id="arv">
								<i class="fa fa-calendar"></i>
							</span>
							
							<span class="calsec">
								<input type="text" id="departure_date" name="departure_date" placeholder="<?php _e('Departure','cebolang'); ?>" class="calendarsection" />
								<input type="hidden" id="dep">
								<i class="fa fa-calendar"></i>
							</span>
							
							<span class="dropsec" style="margin-right: 6px">
								<select id="adults"  name="adults[]" class="halfsies">
									<option value="1"><?php _e('1 Adult','cebolang'); ?></option>
									<option value="2" selected="selected"><?php _e('2 Adults','cebolang'); ?></option>
									<option value="3"><?php _e('3 Adults','cebolang'); ?></option>
									<option value="4"><?php _e('4 Adults','cebolang'); ?></option>
								</select>
							</span>
							
							<span class="dropsec">
								<select  id="children" name="children[]" class="halfsies">
									<option value="0"><?php _e('0 Kids','cebolang'); ?></option>
									<option value="1"><?php _e('1 Kid','cebolang'); ?></option>
									<option value="2"><?php _e('2 Kids','cebolang'); ?></option>
									<option value="3"><?php _e('3 Kids','cebolang'); ?></option>
								</select>
							</span>

							<button class="button" type="submit" onClick="ga('send', 'event', 'Booking-widget', 'Search-now', 'Search dates with booking widget');"><?php _e('Search Now','cebolang'); ?></button>
							
							<!-- <a href="#" class="button" onclick="_gaq.push(['_trackEvent', 'Booking-widget', 'Search-now', 'Search dates with booking widget']);">Search Now</a>	 -->
							
						
						</form>
				
					</div>

				<!-- flex dates -->

					<div class="reservationform flexdate">
					
						<p><a href="https://hotelmilosantabarbara.reztrip.com" onclick="ga('send', 'event', 'Flexible Dates', 'click', 'Booking-widget');">Flexible dates?</a> Search for our best available rate</p>
						
					</div>

				<!-- end flex datess -->

				</div>
				
				<div class="calendars">
					
					 <div class="datepicker"></div>
				
				
				</div>
				
				</div>
			</div>
			
		<div id="property-nav">
			
			<nav class="click-nav">

				<a id="lnkP2Talk" href="http://www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407" target="new"><span class="ic-navis"><i class="fa fa-phone"></i> <span id="NavisTFN_ic"><?php echo get_option('cebo_tele'); ?></span></span></a>

				<script type="text/javascript">
					SetElementToNavisNCPhoneNumber("NavisTFN_ic");
					SetNavisP2TalkLink("lnkP2Talk");
				</script>
						
				<ul class="container no-js">
					<li><a href="http://independentcollection.com" target="_blank" class="clicknav-clicker"></a></li>
				</ul>
			</nav>
	
		</div>
	
		<div id="primary-nav" style="overflow:visible;">
		
			<a href="<?php bloginfo('url'); ?>" class="logo<?php if(is_home()) { ?> droplogo<?php } ?>"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php echo the_title(); ?>" /></a>

			<a href="<?php bloginfo('url'); ?>" class="logo mobile"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php echo the_title(); ?>" /></a>
			
			<a class="reserve fixeer button fr input-append date" id="idp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy" onclick="_gaq.push(['_link', this.href]);return false;">RESERVE</a>

			<a class="reserve fixeer mobile button fr" id="idp4" href="<?php echo get_option('cebo_genbooklink'); ?>" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;">RESERVE</a>

			<!--
			<?php if ( function_exists('icl_get_languages') ) { ?>

				<div class="language">
					<?php language_selector_flags_current(); ?>
					<i class="fa fa-angle-down"></i>
				
					<ul class="molang">
						<?php language_selector_flags(); ?>
					</ul>
				</div>

			<?php } ?>
			-->

			
			<div class="language">
					<a class="current-language" href="http://hotelmilosantabarbara.com/a-propos-de-nous/chambres/" data-ajax="false">en</a>
					<i class="fa fa-angle-down"></i>
			
					<ul class="molang">
						<li><a class="de-lang" href="http://hotelmilosantabarbara.com/uber-uns/" data-ajax="false">de</a></li>
						<li><a class="fr-lang" href="http://hotelmilosantabarbara.com/a-propos-de-nous/" data-ajax="false">fr</a></li>
						<li><a class="pt-lang" href="http://hotelmilosantabarbara.com/sobre-nos/" data-ajax="false">pt-pt</a></li>
					</ul>
				</div>
			

			<div class="container" style="float: right;">

				<a class="mmenu-icon" href="#menu"><i class="fa fa-bars"></i></a>
	
				<nav id="menu" class="fl" style="z-index:1">
					<ul>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
						
						<li class="navis-mobile">
						 	<a id="lnkP2Talkmobile" href="http://www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407" target="new"><span class="ic-navis"><i class="fa fa-phone"></i> <span id="NavisTFNmobnav"><?php echo get_option('cebo_tele'); ?></span></span></a>

							<script type="text/javascript">
								SetElementToNavisNCPhoneNumber("NavisTFNmobnav");
								SetNavisP2TalkLink("lnkP2Talkmobile");
							</script>
						</li>

					</ul>
				</nav>
	
			</div>	
	
		</div>

	</div>
	
	<div id="quiet"></div>
   