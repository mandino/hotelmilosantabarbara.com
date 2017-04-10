<?php 

/* Template Name: Specials List Page

*/
 get_header(); ?>


<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="fullpic">

	<div class="slide-header">
		<a class="button" target="_blank" href="<?php if(get_post_meta ($post->ID, 'cebo_booklink', true)) { echo get_post_meta ($post->ID, 'cebo_booklink', true); } else { echo get_option('cebo_genbooklink'); } ?>" onclick="fbq('track', 'InitiateCheckout'); _gaq.push(['_link', this.href]);return false;"><?php _e('RESERVE NOW', 'cebolang'); ?></a>
	</div>
	<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true), 1400, 350); ?>" alt="<?php echo get_custom_image_thumb_alt_text(get_post_meta($post->ID, 'cebo_homethumb', true)); ?>"/>


</div>

<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>

	<div id="rooms" class="section">
		
		<div class="container">

			<div class="section-header">
					
				<div class="fl">

					<h1 class="section-title fr"><?php the_title(); ?></h1>
	
					<?php if(get_option('cebo_shorttitle')) { ?>
					
					<h2 class="section-pre-title fl"><?php echo get_option('cebo_shorttitle'); ?></h2>

					<div class="section-header-divider fl"></div>
					
					<?php } ?>
	
				</div>
	
				<div class="fr">
					
					<ul class="social-buttons">
					<?php if(get_option('cebo_facebook')) { ?>
					
						<li class="facebook"><a href="//facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i><span>facebook</span></a></li>
						
					<?php } ?>
					<?php if(get_option('cebo_twitter')) { ?>
					
						<li class="twitter"><a href="//twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>
					<?php if(get_option('cebo_instagram')) { ?>
					
						<li class="instagram"><a href="//instagram.com/<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>					
					</ul>
	
				</div>
	
			</div>
			
			<div class="wonderline"></div>
			
			<div class="post-content" style="width: 100%;">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>
				
				<?php endwhile; endif; wp_reset_query(); ?>	
					<div class="imagegal thumbgal">
						
						<ul>
							
							 <?php  query_posts(
					array(
					'post_type' => 'specials',
					'posts_per_page'=> 8
					
					)); $i = 0; if(have_posts()) : while(have_posts()) : the_post(); $i++;
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
							
							<li <?php if($i % 4 == 0) { echo 'class="four-last"';} else if ($i % 3 == 0) { echo 'class="three-last"';} else if ($i % 2 == 0) { echo 'class="two-last"';} else {} ?>>
							<a href="<?php the_permalink(); ?>" class="overlink"></a>
								<?php if(get_post_meta($post->ID, 'cebo_pricepoint', true)) { ?>
								
								<div class="from-price">
									<?php echo get_post_meta($post->ID, 'cebo_pricepoint', true); ?>
								</div>
								
								<?php } ?>
								
								<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { ?>
								
								<a href="<?php the_permalink(); ?>"><img src="<?php echo tt(get_post_meta($post->ID, 'cebo_homethumb', true), 262, 290); ?>"  style="width: 100%" alt="<?php echo get_custom_image_thumb_alt_text(get_post_meta($post->ID, 'cebo_homethumb', true)); ?>"></a>
								
								<?php } else { ?>
								
								<a href="<?php the_permalink(); ?>"><img src="<?php echo tt($imgsrc[0], 262, 290); ?>" style="width: 100%" alt="<?php echo get_custom_image_thumb_alt_text('',$post->ID); ?>"></a>
								
								<?php } ?>
								
								<?php if(get_post_meta($post->ID, 'cebo_subtagline', true)) { ?>
								
								<h3><?php echo get_post_meta($post->ID, 'cebo_subtagline', true); ?></h3>
								
								
								<?php } ?>

								<div class="hover-effect">
									
									<?php if(get_post_meta($post->ID, 'cebo_tagline', true)) { ?>
									
									<h4><a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'cebo_tagline', true); ?></a></h4>
									
									<?php } ?>
									
									
									<!-- , and Hotel Oceana Tote Bag., and breakfast at the Hotel. -->
									<a class="special-external" href="<?php the_permalink(); ?>"><i class="fa fa-chevron-right fa-lg"></i></a>
								</div>
								
							</li>
							
							<?php
								if($i % 4 == 0) { echo '<div class="clear four-col"></div>';}
								else if ($i % 3 == 0) { echo '<div class="clear three-col"></div>';}
								else if ($i % 2 == 0) { echo '<div class="clear two-col"></div>';}
								else {}
							?>
						
							
							<?php endwhile; endif; wp_reset_query(); ?>	
								
								<div class="clear"></div>
						</ul>
						
					<div class="clear"></div>
					</div>

			</div>

		</div>

	</div>
	
					
<?php get_footer(); ?>