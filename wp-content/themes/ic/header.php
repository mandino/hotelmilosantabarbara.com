<?php 
	require_once get_stylesheet_directory().'/library/mobile-detect.php';
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion = $detect->getScriptVersion();
	$check = $detect->isMobile();
?>
<!DOCTYPE HTML>
<html <?php language_attributes( 'html' ); ?> >
<head>
    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-P2GL4QL':true});</script>
    
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P2GL4QL');</script>
	<!-- End Google Tag Manager -->

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
		<?php include(get_stylesheet_directory(). "/library/inset.php"); ?>
	</style>

	<script type="text/javascript" src="https://www.navistechnologies.com/JavascriptPhoneNumber/js.aspx?account=15407&jspass=s019eeaiszmi3itqbduy&dflt=8446025284"></script>

	<script type="text/javascript">ProcessNavisNCKeyword();</script>

	<script id="navis-fusion-loader" src="https://assets.navisperformance.com/NWRC/Fusion/navis-fusion-loader.js" data-accountid="15407" data-secret="s019eeaiszmi3itqbduy"></script>

<!--
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
-->

</head> 
<body id="oceana" <?php body_class($class); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2GL4QL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="menu-wrap">
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
							<button class="button" type="submit"><?php _e('Search Now','cebolang'); ?></button>
							<!-- <a href="#" class="button" onclick="_gaq.push(['_trackEvent', 'Booking-widget', 'Search-now', 'Search dates with booking widget']);">Search Now</a>	 -->
						</form>
					</div>
				<!-- flex dates -->
					<div class="reservationform flexdate">
						<p><a href="https://hotelmilosantabarbara.reztrip.com/calendar">Flexible dates?</a> Search for our best available rate</p>
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
					<li><a href="//iclocalrewards.com/en-US/Login?ReturnUrl=%2F#signup" target="_blank" class="clicknav-clicker">Join The IC Local Perks Program & Get Rewarded With Every Stay</a></li>
					<li class="blue-btn"><a href="<?php bloginfo('url'); ?>/blue/"><i class="fa fa-info-circle"></i><span class="blue-mobile">why blue?</span></a></li>
				</ul>
			</nav>
		</div>
		<div id="primary-nav" style="overflow:visible;">
			<a href="<?php bloginfo('url'); ?>" class="logo droplogo>"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php echo the_title(); ?>" /></a>
			<a href="<?php bloginfo('url'); ?>" class="logo mobile"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php echo the_title().'-mobile'; ?>" /></a>

			<?php 
				$arg = array(
							'post_type' => array('specials', 'tribe_events'),
							'value' => time(),
							'meta_key' => 'ticker_date_end',
							'order' => 'ASC',
							'meta_query' => array(
								'relation' => 'AND',
								array(
									'key' => 'ticker_status',
									'value' => 'On',
									'compare' => '='
								),
								array(
									'relation' => 'OR',
									array(
										'key' => 'ticker_date_start',
										'value' => date('Ymd'),
										'compare' => '<='
									),
									array(
										'relation' => 'AND',
										array(
											'key' => 'ticker_date_start',
											'value' => date('Ymd'),
											'compare' => '>='
										),
										array(
											'key' => 'ticker_date_end',
											'value' => date('Ymd'),
											'compare' => '<='
										),
									)
								)
							)
						);
				$text = new WP_Query($arg);
				if ($text->posts) {
					foreach ($text->posts as $post) {
						$tickerName = $post->post_title;
						$tickerDate = date('m/d/Y H:i:s', strtotime(get_field('ticker_date_end')));
						$tickerId = $post->ID;
						if (strtotime("now") < strtotime($tickerDate)) {
			?>
							<div class="ticker">
								<span><?php echo get_field('ticker_offer') ?></span>
								<a class="close">X</a>
								<div class="ticker-content">
									<h3><?php echo get_field('ticker_title') ?></h3>
									<div id="ticker">
										<?php echo $tickerDate; ?>
									</div>
									<div class="clear"></div>
										<a href="<?php echo get_field('ticker_cta_url'); ?>"><?php echo get_field('ticker_cta_text') ?></a>
									<?php // } ?>
								</div>
							</div>
							<?php break; ?>
						<?php } ?>
					<?php } ?>
				<?php } ?>
				<?php wp_reset_postdata(); ?>

			<a class="reserve fixeer button fr input-append date" id="idp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy" onclick="_gaq.push(['_link', this.href]);return false;">RESERVE</a>
			<a class="reserve fixeer mobile button fr" id="idp4" href="<?php echo get_option('cebo_genbooklink'); ?>"  onclick="_gaq.push(['_link', this.href]);return false;">RESERVE</a>
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

			<div style="display:block;postion:relative;">
                <div class="newsletter-form-hamburger__container" >
                    <div class="newsletter-form-hamburger">
					
                            <form action="https://web2.cendynhub.com/FormPost/FormPost.ashx" method="post">
                            <input name="emailAddress" required="" type="text" value="" placeholder="Your Email" />

                            <input name="formId" type="hidden" value="962957B9-AB18-4E39-BE42-D7709B48A8C2" />
                            <input name="CompanyID" type="hidden" value="1148" />
                            <input type="submit" value="Submit" />
                            </form>
						
                    </div>
                </div>
            </div>
            
			<div class="container" style="float: right;"> 
				<a class="mmenu-icon"><i class="fa fa-bars"></i></a>
				<nav id="menus" class="fl" style="z-index:1">
					<ul id="menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu' => 'Header',
								'items_wrap' => home_nav_wrap(),
								'container' => '',
								'menu_class' => 'navitem'
							) );
						?>
					</ul>
					<div class="push-container">
						<a style="color:#000 !important;" class="push-container-number" href="tel:<?php echo get_option('cebo_tele'); ?>">
							<span class="ic-navis"><div><i class="fa fa-phone"></i> <span>Reservations</span></div> 
							<span><?php echo get_option('cebo_tele'); ?></span></span>
						</a>
					</div>
				</nav>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="quiet"></div>
    
    <div class="cookie-consent">
	 	<p>
	 		<?php echo get_bloginfo( 'name' ); ?> site uses cookies. By using this site, you are agreeing to our <a href="<?php bloginfo('url'); ?>/privacy-policy/" target="_blank" target="_blank">Privacy Policy</a>.
	 	</p>
	 	<a class="cookie-consent__accept-btn button">accept</a>
	 </div>