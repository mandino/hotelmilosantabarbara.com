<?php 

/* Basic Single Post Template 

*/
 get_header(); ?>





<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="fullpic">

	<div class="slide-header">
		<a class="button" target="_blank" href="<?php if(get_post_meta ($post->ID, 'cebo_booklink', true)) { echo get_post_meta ($post->ID, 'cebo_booklink', true); } else { echo get_option('cebo_genbooklink'); } ?>" onclick="_gaq.push(['_link', this.href]);return false;"><?php _e('RESERVE NOW', 'cebolang'); ?></a>
	</div>
	<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" />


</div>


<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>

<div class="wonderline"></div>
	<div id="page-content" class="section">
		
		<div class="container">

			<div class="post-title section-header">

				<div class="fl">
	
					<?php if(get_option('cebo_shorttitle')) { ?>
					
					<h2 class="section-pre-title fl"><?php echo get_option('cebo_shorttitle'); ?></h2>

					<div class="section-header-divider fl"></div>
					
					<?php } ?>

		
					<h2 class="section-title fr"><?php wp_title(); ?></h2>
	
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
			
			
			<?php
$children = get_pages('child_of='.$post->ID);
if( count( $children ) != 0 ) { ?>
			
			<div class="post-tags">
				<ul>
	
				<?php  $ancestors = get_post_ancestors($post->ID);
  $parent = $ancestors[0]; query_posts(
					array(
					'post_type' => 'page',
					'post_parent' => $parent,
					'posts_per_page'=> 8
					
					)); if(have_posts()) : while(have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php wp_title(); ?></a></li>
				<?php endwhile; endif; wp_reset_query(); ?>	
			</ul>
			</div>
			
			<?php } else { ?>
			
			<div class="wonderline"></div>
			<?php } ?>			
			
			<div class="post-content fl">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	

			</div>

			<div class="sidebar fr">
										
			<!-- widgetized  -->

	     		<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('Sidebar') ) : ?>
				<?php endif; ?>  
	
	     	<!-- widgetized  -->	
	
			</div>
		
			<div class="clear"></div>

		</div>

	</div>


<div class="clear"></div>
	
					
<?php get_footer(); ?>