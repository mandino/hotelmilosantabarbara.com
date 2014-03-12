<div id="home-slider">
	
	<div class="flexslider">
		<ul class="slides">
		
			<!-- loop for the slides -->
		
			<?php query_posts('post_type=slides&posts_per_page=5'); if(have_posts()) : while(have_posts()) : the_post(); 
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");?>
			
			
			<li>
				<div class="slide-header">
					
					<?php if(get_post_meta($post->ID, 'logopic', true)) { ?>
					
					<div class="slicer" style="background-image: url(<?php echo get_post_meta($post->ID, 'logopic', true); ?>);"></div>
										
					<?php } ?>
					
					
					<?php if(get_post_meta($post->ID, 'bigtitle', true)) { ?>
					
					<h2><?php echo get_post_meta($post->ID, 'bigtitle', true); ?></h2>
					
					<?php } ?>
					
					<?php if(get_post_meta($post->ID, 'littletitle', true)) { ?>
					
					<h3><?php echo get_post_meta($post->ID, 'littletitle', true); ?></h3>
					
					<?php } ?>
					
				</div>
				<img src="<?php echo $imgsrc[0]; ?>" alt="<?php get_post_meta($post->ID, 'bigtitle', true); ?>" />
			</li>
			
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
			<!-- end loop for the slides -->
			
		</ul>
	</div>
		
	<div class="specialsbox">
		
		<div class="closebox"><a href="#">X</a></div>
		
		
		<div class="specialtab">
			
			<a href="#"><h3 style="font-size: 40px;"><span>Hotel Oceana Is Now</span>Hotel Milo<br><span>Santa Barbara</span></h3></a>
		
		
		</div>
		



		
		<!--
		
		<div class="span">
			from $240
		
		</div>
		
		
		<div class="specialtab">
			
			<a href="#"><h3>Jeep ride and wine tasting<br><span>Ocean to Vineyards</span></h3></a>
		
		
		</div>
		
		-->
	
	</div>
</div>