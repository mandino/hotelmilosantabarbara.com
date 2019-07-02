<?php
/**
 * The template for displaying the footer.
 *
**/
?>

	

<footer>

		<div id="footer-newsletter" class="section"<?php if(get_option('cebo_footerpic')) { ?> style="background-image:url(<?php echo get_option('cebo_footerpic'); ?>);"<?php } ?>>
			
			<div class="container">
				
				<?php if(get_option('cebo_foottitle')) { ?>
				
				
				<h2 class="newsletter-title"><?php echo get_option('cebo_foottitle'); ?></h2>
			
				<?php } ?>
				
				<?php if(get_option('cebo_footdesc')) { ?>
				
				<p><?php echo get_option('cebo_footdesc'); ?></p>
				
				<?php } ?>
				
				<ul class="contact-details">
					
					<?php if(get_option('cebo_address')) { ?>
					<li class="locationa"><i class="fa fa-map-marker fa-lg"></i> <?php echo get_option('cebo_address'); ?></li>
					<?php } ?>
					<?php if(get_option('cebo_tele')) { ?>
					<li class="phone"><i class="fa fa-mobile-phone fa-lg"></i> 

						<a href="tel:<?php echo get_option('cebo_tele'); ?>" target="new"><span><?php echo get_option('cebo_tele'); ?></span></a>

						<?php if(get_option('cebo_fax')) { ?>| Fax: <?php echo get_option('cebo_fax'); ?><?php } ?>

					</li>
					<?php } ?>
					<?php if(get_option('cebo_email')) { ?>
					<li class="email"><i class="fa fa-envelope fa-lg"></i> <a href="mailto:<?php echo get_option('cebo_email'); ?>"><?php echo get_option('cebo_email'); ?></a></li>
					<?php } ?>
				</ul>
                <div class="clear"></div>
	            <p class="sub_text">Sign up below to enjoy exclusive perks and member offers</p>
				<div class="newsletter-form">
					
					<form action="https://web2.cendynhub.com/FormPost/FormPost.ashx" method="post">
					<label for="email-newsletter" class="visuallyhidden">Your Email</label>
					<input id="email-newsletter" name="emailAddress" required="" type="text" value="" placeholder="Your Email" />

					<input name="formId" type="hidden" value="8360A196-38AE-4980-91F4-A2E8A7F39D6D" />
					<input name="CompanyID" type="hidden" value="1153" />
					<input type="submit" value="Submit" />
					</form>
	
				</div>
				
			</div>

		</div>

		<div id="property-name">
			<a href="https://www.theindependenthotel.com/ic-local/" target="_blank" aria-label="Ic local"><i class="sprite sprite-ic_01"></i></a>
			<a href="https://www.theindependenthotel.com/" target="_blank" aria-label="Home"><i class="sprite sprite-ic_02"></i></a>
		</div>

		<div class="footer-nav container">

			<nav>
		
				<ul class="fl footling">
					 <?php wp_nav_menu( array( 'theme_location' => 'footer' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
				</ul>

				<ul class="social-buttons fr">

					<?php if(get_option('cebo_twitter')) { ?>
					
						<li class="twitter"><a href="//twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank" aria-label="twitter"><i class="fa fa-twitter fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>
				
					<?php if(get_option('cebo_facebook')) { ?>
					
						<li class="facebook"><a href="//facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank" aria-label="facebook"><i class="fa fa-facebook fa-2x"></i><span>facebook</span></a></li>
						
					<?php } ?>
					
					<?php if(get_option('cebo_instagram')) { ?>

						<li class="instagram"><a href="//instagram.com/<?php echo get_option('cebo_instagram'); ?>" target="_blank" aria-label="Instagram"><i class="fa fa-instagram fa-2x"></i><span>instagram</span></a></li>

					<?php } ?>
					
					<?php if(get_option('cebo_spotify')) { ?>
					
						<li class="spotify"><a href="<?php echo get_option('cebo_spotify'); ?>" target="_blank" aria-label="spotify"><i class="fa fa-spotify fa-2x"></i><span>spotify</span></a></li>
						
					<?php } ?>
				</ul>

			</nav>

		</div>		

		<div id="footer-details">
			<div class="container">
			
				<?php if(get_option('cebo_address')) { ?>
					<p><?php echo get_option('cebo_address'); ?><br />
					<span class="mobile-number">(866)320-0339</span></p>
					<?php } ?>
			</div>
            <?php if(get_option('cebo_locb-schema')) 
                echo get_option('cebo_locb-schema');
            ?>
		</div>

	</footer>
</div>
	<section class="rightnav">
		<section class="stophovering">&nbsp;</section>
		<div class="royalewrap">
			<a class="royale" href="#">Close Menu</a>
		</div>
		
		<div class="spacer"><a href="/" title="go to homepage"><img src="<?php echo get_option('cebo_logo'); ?>" alt="<?php bloginfo('name'); ?> Rightnav Logo" /></a></div>
		<div id="navmenumob">
			<div class="topnavigationmob">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'slideoutnav' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem', 'before' => '<div class="tnbox">', 'after' => '</div>' ) ); ?>

					<li class="social_share_side noborder"><a href="https://twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank" aria-label="twitter"><i class="fa fa-twitter"></i></a><a  href="https://facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank" aria-label="facebook"><i class="fa fa-facebook"></i></a><a href="https://instagram.com/<?php echo get_option('cebo_instagram'); ?>" target="_blank" aria-label="instagram"><i class="fa fa-instagram"></i></a></li>
					<li class="locationa noborder"><a href="https://goo.gl/maps/JsLU8Cw1agN2" target="_blank" aria-label="Location"><i class="fa fa-map-marker fa-lg"></i><span><?php echo get_option('cebo_address'); ?></span></a></li>
				</ul>
			</div>
		</div>
	</section>	


<!-- WIDGET VERSION 3.0 June 2019 | SBV - Santa Barbara Harbor Overview -->
<div class="sl-cam-embed" style="position:relative; padding-bottom:calc(56.25% + 40px);">
	<iframe style="position:absolute; top:0; left:0; width:100%; height:100%;" src="https://embed.cdn-surfline.com/cam/5834a02b3421b20545c4b582.html" frameborder="0" allowfullscreen></iframe>
</div>
<!-- WIDGET CONTENTS COPYRIGHT SURFLINE.COM2019 -->

<?php 

	wp_footer();
	
	if(is_home() || is_front_page() || is_page_template('page_guide.php')) {
		include (get_stylesheet_directory() . '/library/super-map.php'); 
	}
	
	include(get_stylesheet_directory(). "/library/scripts.php"); 

?>

<!-- sojern script -->
<script>
(function () {
var pl = document.createElement('script');
pl.type = 'text/javascript';
pl.async = true;
pl.src = 'https://beacon.sojern.com/pixel/p/3679?cid=[destination_searched]&ha1=[destination_searched]&et=hs';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
})();

$('.gm-control-active img').attr('alt', 'map image');
</script>

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</body>
</html>