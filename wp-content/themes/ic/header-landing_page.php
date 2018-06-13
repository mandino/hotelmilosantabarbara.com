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

	<div id="navigation" class="lp-navigation">
			
			<div class="ressys">
				
				<div class="whippapeal">
				<div class="formfields">
				
					<div class="reservationform">
					
					
						<form method="get" action="https://theboxerboston.reztrip.com">

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
							<select name="adults[]" id="adults" class="halfsies">
								<option value="1"><?php _e('1 Adult','cebolang'); ?></option>
								<option value="2" selected="selected"><?php _e('2 Adults','cebolang'); ?></option>
								<option value="3"><?php _e('3 Adults','cebolang'); ?></option>
								<option value="4"><?php _e('4 Adults','cebolang'); ?></option>
							</select>
						</span>
						
						<span class="dropsec">
							<select name="children[]" id="children" class="halfsies">
								<option value="0"><?php _e('0 Kids','cebolang'); ?></option>
								<option value="1"><?php _e('1 Kid','cebolang'); ?></option>
								<option value="2"><?php _e('2 Kids','cebolang'); ?></option>
								<option value="3"><?php _e('3 Kids','cebolang'); ?></option>
							</select>
						</span>
						
						<button type="submit" class="button">Search Now</button>
						
					
						</form>
				
					</div>

				<!-- flex dates -->

					<div class="reservationform flexdate">
					
						<p><a href="https://theboxerboston.reztrip.com/calendar">Flexible dates?</a> Search for our best available rate</p>
						
					</div>

				<!-- end flex dates -->

				</div>
				
				<div class="calendars">
					
					 <div class="datepicker"></div>
				
				
				</div>
				
				</div>
			</div>
			
				
		<div id="primary-nav" class="landing-page display-none">
          <?php if ( have_rows('landing_page') ) : while( have_rows('landing_page') ) : the_row(); ?>
            <?php if(get_row_layout() == 'banner') :?>  
              <div class="landing-page-logo-header">
                  <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_sub_field('landing_page_logo')['url']?>" alt=""/></a>
              </div>
             <?php endif; ?>
        <?php endwhile; endif; ?>

           <a href="https://theboxerboston.reztrip.com" class="reserve fixeer button fr input-append date lp-button " rooms ="1" id="idp3" data-date="12-02-2012" data-date-format="mm-dd-yyyy">RESERVE</a>

			<a class="reserve fixeer mobile button fr lp-button" id="idp4"  onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo get_option('cebo_genbooklink'); ?>">RESERVE</a>
			
			
		</div>
	</div>
	
<!--	<div id="quiet"></div>-->