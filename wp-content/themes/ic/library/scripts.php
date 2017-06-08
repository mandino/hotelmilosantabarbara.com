<script type="text/javascript">

	jQuery( document ).ready(function( $ ) {

		<?php if( is_page_template('page_guide.php') ) { ?>

			$('.tabs li').removeClass('active');
			$('.tabs .<?php echo $post->post_name; ?>').addClass('active');

			<?php if(!is_page(45)) { ?>

				$('.tabs-wrapper').each(function() {
					$(this).find(".tab-content").hide(); //Hide all content
					$(this).find("#<?php echo $post->post_name; ?>.tab-content").show(); //Hide all content
				});

				var container = $('html'),
			    	scrollTo = $('#neighborhood-guide');

			    container.scrollTop(0),
				container.scrollTop(
				    10 + scrollTo.offset().top - container.offset().top + container.scrollTop()
				);


			<?php } else { ?>

				$('.tabs-wrapper').each(function() {
					$(this).find(".tab-content").hide(); //Hide all content
					$(this).find(".tab-content:first").show(); //Show first tab content
				});

				$('.tabs li:first-child').addClass('active');

			<?php } ?>

		<?php } ?>

		
		
		// iosslider

		<?php if ( 'rooms' == get_post_type() ) 	{ ?>

			$('#room-details-slider .iosSlider').iosSlider({
				snapToChildren: true,
				desktopClickDrag: true,
				infiniteSlider: true,
				snapSlideCenter: true,
				onSlideChange: slideChange,
				autoSlideTransTimer: 2000,
				keyboardControls: true,
				onSlideComplete: slideComplete,
				navNextSelector: $('.iosslider-next'),
			    navPrevSelector: $('.iosslider-prev'),
			});

			function slideComplete(args) {
					
				$('.iosslider-next, .iosslider-prev').removeClass('unselectable');
			    if(args.currentSlideNumber == 1) {
			        $('.iosslider-prev').addClass('unselectable');
			    } else if(args.currentSliderOffset == args.data.sliderMax) {
			        $('.iosslider-next').addClass('unselectable');
		    	}

		    }

			function slideChange(args) {

				try {
					console.log('changed: ' + (args.currentSlideNumber - 1));
				} catch(err) {
				}
				
				$('.indicators .item').removeClass('selected');
				$('.indicators .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

				$('.slideSelectors .item').removeClass('selected');
				$('.slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

				$('.iosSlider .item').removeClass('current');
			    $(args.currentSlideObject).addClass('current');

			}

			$('.iosSlider').bind('mousewheel', function(event, delta) {

			    var currentSlide = $('.iosSlider').data('args').currentSlideNumber;

			    //if delta is a positive number, go to prev slide. If delta is a negative number, go to next slide.
			    if(delta > 0) {

			        $('.iosSlider').iosSlider('goToSlide', currentSlide - 1);

			    } else {

			        $('.iosSlider').iosSlider('goToSlide', currentSlide + 1);

			    }

			});

		<?php } ?>



		<?php if( $check ) { ?>

			$('.hover-effect').hide();
			
			$('.section-photos li, .imagegal li').toggle( function(){

				// $(this).children('.hover-effect').addClass('mobile-hovered');

				$(this).children('.hover-effect').fadeIn(500);

			}, function(){

				// $(this).children('.hover-effect').removeClass('mobile-hovered');

				$(this).children('.hover-effect').fadeOut(500).hide();

			});

			$('.special-external, .special-copy-link').click(function(){
				window.location.href = $(this).attr('href');
			});

		<?php  } ?>

		$(".hamburgermenu a").click(function(e){
			e.preventDefault();
			$(".mm-page").addClass("opened");
			$(".rightnav").addClass("rightready");
			$("section.stophovering").css("display","block");
		});

		$('.royale,.stophovering').click(function(e){
			e.preventDefault();
			$(".mm-page").removeClass("opened");
			$(".rightnav").removeClass("rightready");
			$("section.stophovering").css("display","none");
			$(".closer").removeClass("open-left");
		});

		$('#navmenumob li').each(function() {
			if ($(this).hasClass('menu-item-has-children')) {
				$(this).find('.tnbox').append('<i class="fa fa-plus"></i>');
			}
		});

		$('.topnavigationmob li i.fa-plus').click(function() {
			if ($(this).hasClass('fa-plus')) {
				$(this).removeClass('fa-plus');
				$(this).addClass('fa-minus');
				$(this).addClass('active');
				$(this).closest('li').find('.sub-menu').addClass('open');
			} else {
				$(this).addClass('fa-plus');
				$(this).removeClass('fa-minus');
				$(this).removeClass('active');
				$(this).closest('li').find('.sub-menu').removeClass('open');
			}
			
		});

	});
	
</script>