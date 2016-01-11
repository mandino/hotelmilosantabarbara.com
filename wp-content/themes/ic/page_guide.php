<?php 

/* Template Name: Neighborhood Guide

*/
 get_header(); ?>



<?php if (is_page('45')) { ?>
  <ul class="right-links right" id="toggles">
										
		<li class="dine"><a data-id="eatl"  class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=48" title="Dining">Eat</a></li>
		<li class="shop"><a data-id="shopl" class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=68" title="Dining">Shop</a></li>
		<li class="arts"><a data-id="cult" class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=66" title="Dining">Culture</a></li>
		<li class="sights"><a data-id="landl" class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=160" title="Dining">Landmarks</a></li>
		<!--<li class="events"><a class="linkerd active" href="http://hotelmilosantabarbara.com/?page_id=157" title="Events">Events</a></li>	-->
		
	</ul>
<?php } ?>

<?php if (is_page('1682')) {  /**EAT PAGE **/ ?>
<ul class="right-links right" id="toggles">

		<li class="dine"><a data-id="eatl"  class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=48" title="Dining">Eat</a></li>
		<li class="shop"><a data-id="shopl" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=68" title="Dining">Shop</a></li>
		<li class="arts"><a data-id="cult" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=66" title="Dining">Culture</a></li>
		<li class="sights"><a data-id="landl" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=160" title="Dining">Landmarks</a></li>

</ul>
<?php } ?>

<?php if (is_page('1684')) {  /**SHOP PAGE **/ ?>
<ul class="right-links right" id="toggles">

		<li class="dine"><a data-id="eatl"  class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=48" title="Dining">Eat</a></li>
		<li class="shop"><a data-id="shopl" class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=68" title="Dining">Shop</a></li>
		<li class="arts"><a data-id="cult" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=66" title="Dining">Culture</a></li>
		<li class="sights"><a data-id="landl" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=160" title="Dining">Landmarks</a></li>

</ul>
<?php } ?>

<?php if (is_page('1686')) {  /**CULTURE PAGE **/ ?>
<ul class="right-links right" id="toggles">

		<li class="dine"><a data-id="eatl"  class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=48" title="Dining">Eat</a></li>
		<li class="shop"><a data-id="shopl" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=68" title="Dining">Shop</a></li>
		<li class="arts"><a data-id="cult" class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=66" title="Dining">Culture</a></li>
		<li class="sights"><a data-id="landl" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=160" title="Dining">Landmarks</a></li>

</ul>
<?php } ?>


<?php if (is_page('1688')) {  /**LANDMARK PAGE **/ ?>
<ul class="right-links right" id="toggles">

		<li class="dine"><a data-id="eatl"  class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=48" title="Dining">Eat</a></li>
		<li class="shop"><a data-id="shopl" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=68" title="Dining">Shop</a></li>
		<li class="arts"><a data-id="cult" class="linkerd" href="<?php bloginfo('url'); ?>/?page_id=66" title="Dining">Culture</a></li>
		<li class="sights"><a data-id="landl" class="linkerd active" href="<?php bloginfo('url'); ?>/?page_id=160" title="Dining">Landmarks</a></li>

</ul>
<?php } ?>
						
						
						<a href="#features-1" id="link" class="navigateTo page-down"></a>
						
						
    <!-- begins map area -->
	<div id="maparea" style="width: 100%; height: 500px;">
	
	
	
	</div>
    <!-- begins map area -->


<div id="neighborhood-guide" class="section" style="padding: 20px 0 30px; border-bottom: 1px solid #D1D1D1;">
		
		<div class="container">

			<div class="section-header">
					
				<div class="fl">
	
					<?php if(get_option('cebo_shorttitle')) { ?>
					
					<h2 class="section-pre-title fl"><?php echo get_option('cebo_shorttitle'); ?></h2>

					<div class="section-header-divider fl"></div>
					
					<?php } ?>

		
					<h1 style="font-size: 34px;" class="section-title fr"><?php the_title(); ?></h2>
	
				</div>
	
				<div class="fr">
					
					<ul class="social-buttons">
					<?php if(get_option('cebo_facebook')) { ?>
					
						<li class="facebook"><a href="http://facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i><span>facebook</span></a></li>
						
					<?php } ?>
					<?php if(get_option('cebo_twitter')) { ?>
					
						<li class="twitter"><a href="http://twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>
					<?php if(get_option('cebo_instagram')) { ?>
					
						<li class="instagram"><a href="http://instagram.com/<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>					
					</ul>
	
				</div>
	
			</div>
		
		</div>
			
		<div id="tabs-wrapper" class="tabs-wrapper">
		
			<ul class="tabs">
				<li class="eat"><a id="eatl" href="<?php echo get_permalink( $post->post_parent ); ?>eat">Eat</a></li>
				<li class="shop"><a id="shopl" href="<?php echo get_permalink( $post->post_parent ); ?>shop">Shop</a></li>
				<li class="culture"><a id="cult" href="<?php echo get_permalink( $post->post_parent ); ?>culture">Culture</a></li>
				<li class="landmarks"><a id="landl" href="<?php echo get_permalink( $post->post_parent ); ?>landmarks">Landmarks</a></li>
			</ul>

			<div class="tabs-container">
				
				
				<div id="eat" class="tab-content">
					
					<div class="container">
						
						
						<?php query_posts('post_type=page&p=48'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						<!--
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'dining',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC'
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'dining',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'offset' => 1
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>

					-->
						
						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Dining Around Town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=48'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
								<ul>
							
									 <?php
									              
										    $gallery = get_post_gallery_images();
										
										
										                        
										    foreach( $gallery as $image ) {// Loop through each image in each gallery
										        $image_list .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$image) . ' "><img src="'. str_replace('-150x150','',$image) . '"  /></li></a>';
										    }                  
										    echo $image_list;                       
										                     
										?>
										
										<div class="clear"></div>
								</ul>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
							</div>
							
						</div>
						
					</div>

				</div>
				
				
				
				
				
				
				
				
				<!-- begin shopping tab -->
				
				
				
				
			
				<div id="shop" class="tab-content">
					
					<div class="container">
						
							
						<?php query_posts('post_type=page&p=68'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						<!--
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'shopping',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC'
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'shopping',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'offset' => 1
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
						-->

						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Shopping Around Town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=68'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
								<ul>
							
									 <?php
									              
										    $gallery = get_post_gallery_images('68');
										
										
										                        
										    foreach( $gallery as $images ) {// Loop through each image in each gallery
										        $image_lists .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$images) . ' "><img src=" ' . str_replace('-150x150','',$images) . ' "  /></li></a>';
										    }                  
										    echo $image_lists;                       
										                     
										?>
										
										<div class="clear"></div>
								</ul>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

				</div>
				
				
				
				
				
				
				<!-- begin sight seeing tab -->
				
				
				
				
			
				<div id="culture" class="tab-content">
					
					<div class="container">
						
							
						<?php query_posts('post_type=page&p=66'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						<!--
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'sights',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC'
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						
					
						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'sights',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'offset' => 1
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
						-->

						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Arts & Culture Around Town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=160'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
								<ul>
							
									 <?php
									              
										    $gallery = get_post_gallery_images( 160 );
										
										
										                        
										    foreach( $gallery as $imager ) {// Loop through each image in each gallery
										        $image_listr .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$imager) . ' "><img src=" ' . str_replace('-150x150','',$imager) . ' "  /></li></a>';
										    }                  
										    echo $image_listr;                       
										                     
										?>
										
										<div class="clear"></div>
								</ul>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

				</div>
				
				
				
				
				
				<!-- begin arts tab -->
				
				
				
				
			
				<div id="landmarks" class="tab-content">
					
					<div class="container">
						
							
						<?php query_posts('post_type=page&p=160'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
					<!--	
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'arts',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC'
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'arts',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'offset' => 1
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
					-->	

						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Things to See Around town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=66'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
								<ul>
							
									 <?php
									              
										    $gallery = get_post_gallery_images(66);
										
										
										                        
										    foreach( $gallery as $imaged ) {// Loop through each image in each gallery
										        $image_listd .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$imaged) . ' "><img src=" ' . str_replace('-150x150','',$imaged) . ' "  /></li></a>';
										    }                  
										    echo $image_listd;                       
										                     
										?>
										
										<div class="clear"></div>
								</ul>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

				</div>




				
				
				
				
			</div>
			<div class="clear"></div>
			
			
		<div class="container">
		
		
			<div class="upcoming-events">

				<h2>Upcoming Events</h2>

				<div class="upcoming-calendar fl tribe_mini_calendar_widget">
					
					 <!-- widgetized  -->

		     		<?php if ( !function_exists('dynamic_sidebar')
							|| !dynamic_sidebar('Footer Column 2') ) : ?>
					<?php endif; ?> 

					<a href="<?php bloginfo('url'); ?>/events" style="text-align: center; margin-top: 10px; display: inline-block;">See all events</a>
		
		     		<!-- widgetized  -->						
				
				</div>

				<div class="fr">
					<ul>
					
						
						
		            	<?php $count = 1; $query = new WP_Query( array( 'post_type' => 'tribe_events','eventDisplay' => 'upcoming', 'posts_per_page' => 4
							) ); if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
						<li<?php if($count == 2 || $count == 4) { ?> class="even"<?php } ?>>
							
							
							<a href="<?php the_permalink(); ?>"><img src="<?php echo tt($imgsrc[0], 275, 160); ?>"  alt="<?php the_title();?>"/>
							
							
							<?php $shortdater = tribe_get_start_date($post->ID, true, 'M'); $shortdaterz = substr($shortdater, 0, 3);  ?>
							
							<?php $shortdate = tribe_get_start_date($post->ID, true, 'j'); $shortdatez = substr($shortdate, 0, 2);  ?>
							
							<div class="event-date"><?php echo $shortdaterz; ?> <span><?php echo $shortdatez; ?></span></div>
							<div class="event-description">
								<p><?php the_title(); ?></p>
							</div>
							
							</a>
						</li>
						
						
						<?php $count++;  endwhile; endif; wp_reset_query(); ?>	
						

					</ul>
				</div>

			</div>
			
			<div class="clear"></div>
		
		</div>
		
		<div class="heater">
					
			<div class="container">

				<div class="whats-hot">
	
					<h2>What's Hot</h2>
	
					<div>
						<ul>
						
							<?php query_posts('post_type=post&posts_per_page=2&offset=1&cat=-10'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
							<li>
								<a href="<?php the_permalink(); ?>"><img src='<?php echo tt($imgsrc[0], 240, 129); ?>' alt='<?php the_title(); ?>' /></a>
								<a href="<?php the_permalink(); ?>"><h3 style="margin-top: 15px;"><?php the_title(); ?></h3></a>
									<span><?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></span>

								<p><?php echo excerpt(10); ?></p>
							</li>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
							
						</ul>
						<ul class="hot-featured">
						
						<?php query_posts('post_type=post&posts_per_page=1&cat=-10'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><img src='<?php echo tt($imgsrc[0], 540, 540); ?>' alt='<?php the_title(); ?>' /></a>
								<a href="<?php the_permalink(); ?>"><h3 style="margin-top: 15px;"><?php the_title(); ?></h3></a>
								<span><?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></span>
								
								<p><?php echo excerpt(80); ?></p>
							</li>
						</ul>
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						
						<ul>
						
							<?php query_posts('post_type=post&posts_per_page=2&offset=3&cat=-10'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
							<li>
								<a href="<?php the_permalink(); ?>"><img src='<?php echo tt($imgsrc[0], 240, 129); ?>' alt='<?php the_title(); ?>' /></a>
								<a href="<?php the_permalink(); ?>"><h3 style="margin-top: 15px;"><?php the_title(); ?></h3></a>
									<span><?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></span>

								<p><?php echo excerpt(10); ?></p>
							</li>
						<?php endwhile; endif; wp_reset_query(); ?>	
						</ul>
						
						<div class="clear"></div>
						
						<?php $projects = get_page_with_template('page_blog');
				  				$projecturl= get_permalink($projects);	
									?>

						<a href="<?php echo $projecturl; ?>" style="width: 99%; display: block; padding: 20px 0; font-family: didot, serif; font-size: 20px;" class="button">View All Posts</a>
					</div>
	
				</div>
				
				<div class="clear"></div>
			</div>

		</div>

	</div>
	
	<div class="clear"></div>

	</div>


<?php include (TEMPLATEPATH . '/library/super-map.php'); ?>
<?php get_footer(); ?>