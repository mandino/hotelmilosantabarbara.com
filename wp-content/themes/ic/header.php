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

	<!-- Jquery -->
	<?php include(TEMPLATEPATH. "/library/jquery.php"); ?>	

	<!-- Scripts -->
	<?php include(TEMPLATEPATH. "/library/scripts.php"); ?>

	<style>
		<?php

			include(TEMPLATEPATH. "/library/inset.php");
		?>	
	</style>



	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>

<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-48295809-1', 'auto', {
		'allowLinker': true
	});
	ga('send', 'pageview');
	ga('require', 'linker');
	ga('linker:autoLink', ['reztrip.com'], false, true);

</script>



<!-- zdirect script -->
<script type="text/javascript" src="https://www.zdirect.com/scripts/newApp.js"></script>

<!-- sojern script -->
<script>
(function () {
var pl = document.createElement('script');
pl.type = 'text/javascript';
pl.async = true;
pl.src = 'https://beacon.sojern.com/pixel/p/3679?cid=[destination_searched]&ha1=[destination_searched]&et=hs';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
})();
</script>

</head> 
	
<body id="oceana" <?php body_class($class); ?>>

	<div id="navigation">
			
			
			<div class="ressys">
				
				
				<div class="whippapeal">
				<div class="formfields">
				
					<div class="reservationform">
					
					
						<form method="get" action="<?php echo get_option('cebo_genbooklink'); ?>/search?" target="_self">
							
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
									<option value="1" selected="selected"><?php _e('1 Adult','cebolang'); ?></option>
									<option value="2"><?php _e('2 Adults','cebolang'); ?></option>
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

							<button class="button" type="submit"><?php _e('Search Now','cebolang'); ?></button>
							
							<!-- <a href="#" class="button" onclick="_gaq.push(['_trackEvent', 'Booking-widget', 'Search-now', 'Search dates with booking widget']);">Search Now</a>	 -->
							
						
						</form>
				
					</div>

				<!-- flex dates -->

					<div class="reservationform flexdate">
					
						<p><a href="https://hotelmilosantabarbara.reztrip.com">Flexible dates?</a> Search for our best available rate</p>				
						
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
				<ul class="container no-js">
					<li>
	
						<a href="http://independentcollection.com" target="_blank" class="clicknav-clicker"></a>
	
					</li>
				</ul>
			</nav>
			
			
			
	
		</div>
	
		<div id="primary-nav">
		
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
					<a href="http://hotelmilosantabarbara.com/a-propos-de-nous/chambres/" data-ajax="false">en</a>
					<i class="fa fa-angle-down"></i>
			
					<ul class="molang">
						<li><a href="http://hotelmilosantabarbara.com/uber-uns/" data-ajax="false">de</a></li>
						<li><a href="http://hotelmilosantabarbara.com/a-propos-de-nous/" data-ajax="false">fr</a></li>
						<li><a href="http://hotelmilosantabarbara.com/sobre-nos/" data-ajax="false">pt-pt</a></li>
					</ul>
				</div>
			

			<div class="container" style="float: right;">

				<a class="mmenu-icon" href="#menu"><i class="fa fa-bars"></i></a>
	
				<nav id="menu" class="fl">
					<ul>
						 <?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
					</ul>
				</nav>
	
			</div>
	
				
				
				
	
		</div>

	</div>
	
	<div id="quiet"></div>
   