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
					<li class="phone"><i class="fa fa-mobile-phone fa-lg"></i> <?php echo get_option('cebo_tele'); ?> <?php if(get_option('cebo_fax')) { ?>| Fax: <?php echo get_option('cebo_fax'); ?><?php } ?></li>
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

		<a href="http://independentcollection.com/" target="_blank"><div id="property-name"></div></a>

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
					<span class="mobile-number">805.965.4577</span></p>
					<?php } ?>
			</div>
		</div>

	</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
$(document).ready(function(){
   
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
<!-- <div id="fb-root"></div> -->
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<?php if(get_option('cebo_tracking_code')) {

	echo get_option('cebo_tracking_code');

} ?>
		
</body>
</html>