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

						<a id="lnkP2TalkFTN" href="http://www.navistechnologies.info/p2talk/p2talk.aspx?Account=15407" target="new"><span id="NavisTFN"><?php echo get_option('cebo_tele'); ?></span></a>

						<script type="text/javascript">
							SetElementToNavisNCPhoneNumber("NavisTFN");
							SetNavisP2TalkLink("lnkP2TalkFTN");
						</script>

						<?php if(get_option('cebo_fax')) { ?>| Fax: <?php echo get_option('cebo_fax'); ?><?php } ?>

					</li>
					<?php } ?>
					<?php if(get_option('cebo_email')) { ?>
					<li class="email"><i class="fa fa-envelope fa-lg"></i> <a href="mailto:<?php echo get_option('cebo_email'); ?>"><?php echo get_option('cebo_email'); ?></a></li>
					<?php } ?>
				</ul>
	
				<div class="newsletter-form">
					
					<form name="surveys" action="http://zmaildirect.com/app/new/MTIwODQ2MDg1" method="get">  

					<input type="hidden" name="formId" value="MTIwODQ2MDg1">
					    <div>
					<input type="text" name="email" placeholder="Exclusive offers">
						</div>
					  <div>	
					<input type="submit" value="Sign Up">
						</div>
					</form>	
	
				</div>
				
			</div>

		</div>

		<div id="property-name">
			<a href="http://www.independentcollection.com/ic-local/" target="_blank"><i class="sprite sprite-ic_01"></i></a>
			<a href="http://www.independentcollection.com/" target="_blank"><i class="sprite sprite-ic_02"></i></a>
		</div>

		<div class="footer-nav container">

			<nav>
		
				<ul class="fl footling">
					 <?php wp_nav_menu( array( 'theme_location' => 'footer' ,  'items_wrap' => '%3$s', 'container' => '', 'menu_class' => 'navitem' ) ); ?>
				</ul>

				<ul class="social-buttons fr">

					<?php if(get_option('cebo_twitter')) { ?>
					
						<li class="twitter"><a href="http://twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>
				
					<?php if(get_option('cebo_facebook')) { ?>
					
						<li class="facebook"><a href="http://facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i><span>facebook</span></a></li>
						
					<?php } ?>
					
					<?php if(get_option('cebo_instagram')) { ?>

						<li class="instagram"><a href="http://instagram.com/<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i><span>instagram</span></a></li>

					<?php } ?>
					
					<?php if(get_option('cebo_youtube')) { ?>
					
						<li class="youtube"><a href="http://youtube.com/<?php echo get_option('cebo_youtube'); ?>" target="_blank"><i class="fa fa-youtube fa-2x"></i><span>youtube</span></a></li>
					
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
		</div>

	</footer>

<?php wp_footer(); ?>

<!-- Scripts -->
<?php include(TEMPLATEPATH. "/library/scripts.php"); ?>

<script type="text/javascript">
//$(document).ready(function(){
jQuery( document ).ready(function( $ ) {
   
	var url_trigger = window.location.pathname;
	var url_trim = url_trigger.split("/")[1];

		if (url_trim == 'uber-uns') {
			$('.current-language').text('de');
			$('.current-language').attr('href','http://hotelmilosantabarbara.com/uber-uns/');
			$('.de-lang').text('en');
			$('.de-lang').attr('href','http://hotelmilosantabarbara.com/');
		} else if (url_trim == 'a-propos-de-nous') {
			$('.current-language').text('fr');
			$('.current-language').attr('href','http://hotelmilosantabarbara.com/a-propos-de-nous/');
			$('.fr-lang').text('en');
			$('.fr-lang').attr('href','http://hotelmilosantabarbara.com/');
		} else if (url_trim == 'sobre-nos') {
			$('.current-language').text('pt-pt');
			$('.current-language').attr('href','http://hotelmilosantabarbara.com/sobre-nos/');
			$('.pt-lang').text('en');
			$('.pt-lang').attr('href','http://hotelmilosantabarbara.com/');
		} else {
			$('.current-language').text('en');
			$('.current-language').attr('href','http://hotelmilosantabarbara.com/');
		}

});
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

<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- VOYAT CODE -->
<script> (function(){ var v = document.createElement('script'); var s = document.getElementsByTagName('script')[0]; v.src = '//io.voyat.com/v.js'; v.async = true; s.parentNode.insertBefore(v, s); })(); </script>
<!-- VOYAT CODE -->	
		
</body>
</html>