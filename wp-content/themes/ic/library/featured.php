<?php if(get_option('cebo_video_homepage_hero_banner') && is_home()) : $video_class = ' class="home-video"'; else : $video_class = ''; endif; ?>
<div id="home-slider" <?php echo $video_class; ?>>
	<?php if(get_option('cebo_video_homepage_hero_banner') && is_home()) : ?>

		<div class="video-banner" data-vide-bg="<?php echo preg_replace('/\\.[^.\\s]{3,4}$/', '',get_option('cebo_video_homepage_hero_banner')) ?>" style="background-image: url('<?php echo get_option("cebo_video_thumbnail_homepage_hero_banner") ?>');">

		</div>

	<?php else : ?>

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

					<!--<img src="<?php //echo tt($imgsrc[0], 1400, 472); ?>" alt="<?php //get_post_meta($post->ID, 'bigtitle', true); ?>" />-->
					<img src="<?php echo $imgsrc[0]; ?>" alt="<?php echo (get_post_meta($post->ID, 'bigtitle', true))?(get_post_meta($post->ID, 'bigtitle', true)):get_custom_image_thumb_alt_text('',$post->ID); ?>" />
					</a>

				</li>

				<?php endwhile; endif; wp_reset_query(); ?>	

				<!-- end loop for the slides -->

			</ul>

		</div>

	<?php endif; ?>

	<?php 

		$popout_query = new WP_Query(
			array(
				'post_type' => 'popout-box', 
				'posts_per_page' => 1,
			)
		);

		if($popout_query->have_posts()) :

	?>
		<div class="specialsbox">

			<div class="closebox"><a href="#">X</a></div>

			<?php while($popout_query->have_posts()) : $popout_query->the_post(); ?>

				<?php if(get_post_meta($post->ID, 'cebo_popout_welcome', true)) { ?>
					<span class="welcome-text"><?php echo get_post_meta($post->ID, 'cebo_popout_welcome', true); ?></span>
				<?php } ?>

				<div class="specialtab">

					<a href="<?php if (get_post_meta($post->ID, 'cebo_popout_url', true)) { echo get_post_meta($post->ID, 'cebo_popout_url', true); } else { ?>#<?php } ?>"><h3 style="font-size: 25px;">

						<span><?php echo get_post_meta($post->ID, 'cebo_popout_subtitle', true); ?></span>

						<?php echo get_post_meta($post->ID, 'cebo_popout_title', true); ?><br>

						<span><?php echo get_post_meta($post->ID, 'cebo_popout_tagline', true); ?></span></h3>
					</a>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

</div>