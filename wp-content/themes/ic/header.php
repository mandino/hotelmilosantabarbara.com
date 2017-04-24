<?php 
	require_once TEMPLATEPATH.'/library/mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();
	$check = $detect->isMobile();
?>
<!DOCTYPE HTML>
<html <?php language_attributes( 'html' ); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="p:domain_verify" content="b064c45724dfd80702c16b1d08c28d8a"/>
	<meta name="google-site-verification" content="PLMRblpH5jD6eiEzVXnTlu33LL379Jk97ncPlPQ4d_A" />
	<meta http-equiv="Expires" content="30" />
	<title>
		<?php global $page, $paged; wp_title( '|', true, 'right' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'cebolang' ), max( $paged, $page ) );
		?>
	</title>
	<?php 
		if ( file_exists( dirname( __FILE__ ) . '/noindex.php' ) ) {
		    include( dirname( __FILE__ ) . '/noindex.php' );
		}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="//gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('cebo_custom_favicon') == '') { ?>
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/cebo_options/<?php bloginfo ('template_url'); ?>/images/admin_sidebar_icon.png" type="image/x-ico"/>
	<?php } else { ?>
	<link rel="icon" href="<?php echo get_option('cebo_custom_favicon'); ?>" type="image/x-ico"/>
	<?php } ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('cebo_feedburner_url') <> "" ) { echo get_option('cebo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<!-- favicon -->
	<!-- MILO -->
	<link rel="shortcut icon" href="<?php bloginfo ('template_url'); ?>/icfavicon.png" type="image/png">
	<link rel="icon" href="icfavicon.png" type="image/png">

	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>

	<style>
		<?php include(TEMPLATEPATH. "/library/inset.php"); ?>
	</style>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TW66C6C');</script>
	<!-- End Google Tag Manager -->

	<!-- GA CODE -->
	 <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
	Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-48295809-1', 'auto',{'allowLinker': true });
	ga('require', 'linker'); ga('linker:autoLink', ['hotelmilosantabarbara.reztrip.com','hotelmilosantabarbara.reztripmobile.com']);
	ga('send', 'pageview');
	</script>

	<script type="application/ld+json">
		{
		"@context": "//schema.org",
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

	<script> function ViewContent(){ fbq('track', 'ViewContent'); } </script>

</head> 
<body id="oceana" <?php body_class($class); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW66C6C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div id="navigation">
			<div class="ressys">
				<div class="whippapeal">
				<div class="formfields">
					<div class="reservationform">
						<form method="get" action="<?php echo get_option('cebo_genbooklink'); ?>">
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
							<button class="button" type="submit" onClick="ga('send', 'event', 'Booking-widget', 'Search-now', 'Search dates with booking widget'); fbq('track', 'Lead');"><?php _e('Search Now','cebolang'); ?></button>
							<!-- <a href="#" class="button" onclick="_gaq.push(['_trackEvent', 'Booking-widget', 'Search-now', 'Search dates with booking widget']);">Search Now</a>	 -->
						</form>
					</div>
				<!-- flex dates -->
					<div class="reservationform flexdate">
						<p><a href="https://hotelmilosantabarbara.reztrip.com" onclick="ga('send', 'event', 'Flexible Dates', 'click', 'Booking-widget'); fbq('track', 'Lead');">Flexible dates?</a> Search for our best available rate</p>
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
				<a style="color:#000 !important;" id="lnkP2Talk" href="//www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407">
					<span class="ic-navis"><div><i class="fa fa-phone"></i> <span>Reservations</span></div> 
					<span id="NavisTFN_ic"><?php echo get_option('cebo_tele'); ?></span></span>
				</a>

				<div class="navis-footer">
					<a class="ptt" id="lnkP2Chatheader" href="//www.navistechnologies.info/p2talk/P2ChatIni.aspx?Account=15407">Push to Chat</a>
					<a class="ptt" id="lnkP2Talkheader" href="//www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407">Push to Talk</a>
				</div>

				<ul class="container no-js">
					<li><a href="//www.iclocalrewards.com" target="_blank" class="clicknav-clicker">Join IC Local and Start Receiving Perks with Every Stay</a></li>
					<li class="blue-btn"><a href="<?php bloginfo('url'); ?>/blue/"><i class="fa fa-info-circle"></i><span class="blue-mobile">why blue?</span></a></li>
				</ul>
			</nav>
		</div>
		<div id="primary-nav" style="overflow:visible;">
			<a href="<?php bloginfo('url'); ?>" class="logo<?php if(is_home()) { ?> droplogo<?php } ?>"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php echo the_title(); ?>" /></a>
			<a href="<?php bloginfo('url'); ?>" class="logo mobile"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php echo the_title().'-mobile'; ?>" /></a>
			<a class="reserve fixeer button fr input-append date" id="idp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy" onclick="ga('send', 'event', 'reserve-now', 'click','reserve-button-header'); _gaq.push(['_link', this.href]);return false;">RESERVE</a>
			<a class="reserve fixeer mobile button fr" id="idp4" href="<?php echo get_option('cebo_genbooklink'); ?>" target="_blank" onclick="ga('send', 'event', 'reserve-now', 'click','reserve-button-header'); _gaq.push(['_link', this.href]);return false;">RESERVE</a>
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
					<a class="current-language" href="//hotelmilosantabarbara.com/a-propos-de-nous/chambres/" data-ajax="false">en</a>
					<i class="fa fa-angle-down"></i>
					<ul class="molang">
						<li><a class="de-lang" href="//hotelmilosantabarbara.com/uber-uns/" data-ajax="false">de</a></li>
						<li><a class="fr-lang" href="//hotelmilosantabarbara.com/a-propos-de-nous/" data-ajax="false">fr</a></li>
						<li><a class="pt-lang" href="//hotelmilosantabarbara.com/sobre-nos/" data-ajax="false">pt-pt</a></li>
					</ul>
				</div>
			<div class="container" style="float: right;">
				<a class="mmenu-icon" href="#menu"><i class="fa fa-bars"></i></a>
				<nav id="menu" class="fl" style="z-index:1">
					<ul>
						<li class="navis-mobile">
						 	<a id="lnkP2Talkmobile" href="//www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407" target="new"><span class="ic-navis"><i class="fa fa-phone"></i> <span id="NavisTFNmobnav"><?php echo get_option('cebo_tele'); ?></span></span></a>
						</li>
						<?php wp_nav_menu( array( 'walker' => new MV_Cleaner_Walker_Nav_Menu(), 'theme_location' => 'primary' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
						<li class="navis-mobile2">
							<span>
								<a class="ptt" id="lnkP2Chatheader-mobile" href="//www.navistechnologies.info/p2talk/P2ChatIni.aspx?Account=15407">Push to Chat</a>
								<a class="ptt" id="lnkP2Talkheader-mobile" href="//www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407">Push to Talk</a>
							</span>	
						</li>
					</ul>
				</nav>
			</div>	
		</div>
	</div>
	<div id="quiet"></div>