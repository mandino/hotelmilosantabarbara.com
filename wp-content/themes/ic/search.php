<?php 

/* Search Results Template

*/
get_header(); ?>   

	<div id="rooms" class="section">
		
		<div class="container">

			<div class="section-header">
					
				<div class="fl">
	
					
					<h2 class="section-pre-title fl">Your Search</h2>

					<div class="section-header-divider fl"></div>
				

		
					<h2 class="section-title fr"><?php the_search_query() ?></h2>
	
				</div>

			</div>

			<div class="wonderline"></div>

			<div class="fl room-list catlist">
				
				<ul>
					
							
		<?php  if(have_posts()) :
		       $postcount=1;
		      while(have_posts()) : the_post();
		           
		        if( ($postcount % 2) == 0 ) $post_class = ' leftimg';
		        else $post_class = ' rightimg'; 
		        
		      
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
		        ?>
					
					<li class="room-box">
						<div class="fl" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { ?><?php echo get_post_meta($post->ID, 'cebo_homethumb', true); ?><?php } else { ?><?php echo $imgsrc[0]; ?><?php } ?>);">
								
							</div>

						<div class="fr">
							
							<h3><?php the_title(); ?></h3>
								<span><?php the_time('F jS, Y') ?>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></span>

							<p><?php echo excerpt(15); ?></p>

							<div class="room-list-buttons">
								
								<a class="button" href="<?php the_permalink(); ?>"><?php _e('Continue Reading', 'cebolang'); ?></a>

							</div>

						</div>
					</li>
					
					<?php $postcount++;  endwhile; ?>
					

				

				</ul>
				
				
                    <div class="navigation">
                        <div class="alignleft"><?php next_posts_link('&laquo;' .   __(' Older Entries' , 'cebolang')) ?></div>
                        <div class="alignright"><?php previous_posts_link( __('Newer Entries ', 'cebolang') .  '&raquo;') ?></div>
                        <div class="clear"></div>
                    </div>
					<?php else : ?>
					
					<p><?php _e('Sorry, no posts in this category' , 'cebolang'); ?></p>
					
					 <?php endif; ?>

			</div>
			
			<div class="sidebar fr" style="padding: 40px 20px 0">
	
				  <!-- widgetized  -->

		     		<?php if ( !function_exists('dynamic_sidebar')
							|| !dynamic_sidebar('Sidebar') ) : ?>
					<?php endif; ?>  
		
		     	<!-- widgetized  -->	
		     	
		     	
			</div>
				<div class="clear"></div>

		</div>

	<div class="clear"></div>
	</div>

	<?php get_footer(); ?>