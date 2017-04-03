<?php get_header(); ?>

<body id="ocean-view-king" class="room-details">
	<div id="navigation">
		<img class="brand" src="//sphericalcommunications.com/microsite/images/ic_gray.png" />
	</div>
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="slide-header">
					        <h1><?php echo get_option('cebo_primarytitle'); ?></h1>
							<h4><?php echo get_option('cebo_subtitle'); ?></h4>
						<!-- <a class="button" href="<?php echo get_option('cebo_genbooklink'); ?>" style="margin-top: 20px;">RESERVE NOW</a> -->
					</div>
					<a href="<?php echo get_option('cebo_genbooklink'); ?>"><img src="<?php echo get_option('cebo_homeimage'); ?>" /></a>
				</li>
			</ul>
		</div>
	<!-- start big wrapper -->
	<div class="big-wrap">
	<div id="room-details-slider">	
		<div class='iosSlider'>
			<div class='slider'>

				<?php 

					$hotels_query = new wp_query(array(
						'post_type' => 'hotels', 
						'posts_per_page' => -1,
					)); 
					$counter = 0;
					if($hotels_query->have_posts()) : while($hotels_query->have_posts()) : $hotels_query->the_post(); 
				?>

					<div class='item item1 current'>	
						<div class="hotel-meta">
							
							<div class="meta-title-area">

								<h3><?php the_title(); ?></h3>
								<h5><!-- <i class="fa fa-map-marker"></i> <?php echo get_post_meta($post->ID, 'cebo_location', true); ?> --></h5>

							</div>

							<div class="meta-hovered">

								<h3><?php the_title(); ?></h3>

								<h4><?php echo get_post_meta($post->ID, 'cebo_intro', true); ?></h4>

								<ul class="hotel-details">

									<li><a href="<?php echo get_post_meta($post->ID, 'cebo_reasonlink1', true); ?>"><i class="fa fa-arrow-right"></i><?php echo get_post_meta($post->ID, 'cebo_reason1', true); ?></a></li>
									
									<li><a href="<?php echo get_post_meta($post->ID, 'cebo_reasonlink2', true); ?>"><i class="fa fa-arrow-right"></i><?php echo get_post_meta($post->ID, 'cebo_reason2', true); ?></a></li>

									<?php if( get_post_meta($post->ID, 'cebo_reason3', true) ) { ?>
										<li><a href="<?php echo get_post_meta($post->ID, 'cebo_reasonlink3', true); ?>"><i class="fa fa-arrow-right"></i><?php echo get_post_meta($post->ID, 'cebo_reason3', true); ?></a></li>
									<?php } ?>

									<?php if( get_post_meta($post->ID, 'cebo_reason4', true) ) { ?>
										<li><a href="<?php echo get_post_meta($post->ID, 'cebo_reasonlink4', true); ?>"><i class="fa fa-arrow-right"></i><?php echo get_post_meta($post->ID, 'cebo_reason4', true); ?></a></li>
									<?php } ?>

								</ul>

								<div class="find-dates-hovered">
									<a target="_blank" href="<?php echo get_post_meta($post->ID, 'cebo_booklink', true); ?>" class="button">Book Now</a>
								</div>							
							</div>

							<div class="overlay"></div>

							<img src="<?php echo get_post_meta($post->ID, 'cebo_sliderthumb', true); ?>" />

							<div class="find-dates">
								<a href="<?php echo get_post_meta($post->ID, 'cebo_booklink', true); ?>" class="button">Book Now</a>
							</div>

						</div>
					</div>

				<?php endwhile; endif; wp_reset_query(); ?>	
				
			</div>
		
		</div>

		<div class="iosslider-prev"><i class="fa fa-chevron-left"></i></div>
		<div class="iosslider-next"><i class="fa fa-chevron-right"></i></div>

	</div> 

	<!-- booking widget area -->

		<div class="below-slider half-top">

	<div class="halfgray">
		
		<a name="book-now"></a>
		
		<div class="halffloat">
	
			<div class="form-error">Please select a hotel</div>

			<form id="home-booking">
			<!--	
			<div class="selectcontainer">
			<i class="fa fa-map-marker"></i>	
			<select id="local" name="adults[]">
			 	<option value="1">Select A Location</option>
			 	                <option value="2">New York City</option>
                               <option value="2">Boston</option>
                               <option value="2">Santa Barbara</option>
                               <option value="2">Philadelphia</option>
                               <option value="2">Washington DC</option>
                               <option value="2">South Beach</option>
               	                             
			</select>
			</div>	
			-->
			<div class="selectcontainer">
			 <select id="hotell" name="hotell">
			 	<option value="nuhotelbrooklyn"></option>

			 	<?php 

					$widget_query = new wp_query(array(
						'post_type' => 'hotels', 
						'posts_per_page' => -1,
					)); 
					$counter = 0;
					if($hotels_query->have_posts()) : while($hotels_query->have_posts()) : $hotels_query->the_post(); 
				?>

				 	<?php if( get_post_meta($post->ID, 'cebo_from', true) && get_post_meta($post->ID, 'cebo_to_widget', true) == true ) { ?>
	                	<option value="<?php echo get_post_meta($post->ID, 'cebo_from', true)?>"><?php the_title(); ?></option>
	                <?php } ?>

                <?php endwhile; endif; wp_reset_query(); ?>	

	                <!-- <option value="thegrahamgeorgetown">The Graham Georgetown</option>
	                <option value="duanestreethotel">Duane Street Hotel</option>
	                <option value="theboxerboston">The Boxer Boston</option>
	                <option value="capitolhillhotel-dc">Capitol Hill Hotel</option>
					<option value="theindependenthotel">The Independent Hotel</option>
					<option value="nuhotelbrooklyn">Nu Hotel</option>
					<option value="winterhaven">Winter Haven</option>
					<option value="bluemoon">Blue Moon</option>
					<option value="hotel373">Hotel 373</option> -->
					
			 </select>
			</div>	
							
				<div class="calspacer">
				
					<div class="books">
					<i class="fa fa-arrows-h"></i>
					
					<span id="depart-cal">
						
						<div class="squaredance">
							<input name="departure_date" type="hidden" id="departure_date" placeholder="" class="calendarsection" value="">
							<input type="text" id="dep" value="">
							<input type="text" id="depee" value="" autocomplete="on">
							
						</div>
						
						<div class="departdatepicker"></div>
					</span>

					<span id="arrive-cal">
						
						<div class="squaredance">
							<input type="hidden" name="arrival_date" id="arrival_date" placeholder="" class="calendarsection" value="">
							<input type="text" id="arv" value="">
							<input type="text" id="arve" value="" autocomplete="on">
							
						</div>
						
						<div class="datepicker"></div>
					</span>

					<div class="clear"></div>
					</div>

				</div>
				
				
				<span class="lowselect">
				<i class="fa fa-users"></i>
							<select id="adcount" name="adults[]">
							 	<option value="1" selected="selected">Total Number of Adults</option>
							 	<option value="1">1</option>
			                    <option value="2">2</option>
			                    <option value="3">3</option>
			                    <option value="4">4</option>                                
							</select>
							
							
					</span>
					
									
					<div class="clear"></div>
					
					<a href="#" class="button">Check Availability</a>
			
			</form>

		
		</div>
	
	</div>
	
	
	<div class="halfwhite">
		
		<div class="halffloat">

			<?php 

				$post_query = new wp_query(array(
					'post_type' => 'post', 
					'posts_per_page' => 1,
				)); 
				$counter = 0;
				if($post_query->have_posts()) : while($post_query->have_posts()) : $post_query->the_post(); 
			?>

				<h1><?php the_title(); ?></h1>
		
        		<?php the_content(); ?>

        	<?php endwhile; endif; wp_reset_query(); ?>

		</div>
		
	
	</div>
	
	<div class="clear"></div>

</div>
</div>
<!-- end big wrapper -->
	

	<!-- end booking widget area -->

<?php get_footer(); ?>