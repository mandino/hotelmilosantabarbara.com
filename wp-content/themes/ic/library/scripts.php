
<script type="text/javascript">

	jQuery( document ).ready(function( $ ) {
		$(document).on('keydown', function(e) {			
			var input = $('#login-portal').find('input');
			if ((e.keyCode || e.which) == 9) {
	        	var focused = $(':focus');
		        if ($(focused).hasClass('login-portal__trigger')) {  	
		        	if ($('.login-portal').is(':visible')) {
		        		
						$('.login-portal').focus();
					}
		        }
	    	}
		    
		});
		
		$('.login-portal__trigger--container, .click-nav ul li').on('touchstart click', function(e) {
			if(event.handled === false) return
			event.stopPropagation();
			event.preventDefault();
			event.handled = true;
			if (!$('body').hasClass('portal-active')) {
				if (!$('.login-portal').is(':visible')) {
					$('.login-portal').slideDown(1000);
					$('#primary-nav').addClass('open-portal');
					$('.login-portal__text').addClass('hidden');
					$('.login-portal__close-btn').addClass('show');
					$('body').addClass('portal-active');
					if (e.keyCode === 13) {
						if ($('.login-portal').is(':visible')) {
							$('#login-portal').find('input[name="fname"]').addClass('first-item');
							$('.login-portal').focus();
						}
					}

					
				}
			} else {

				if ($('.login-portal').is(':visible')) {
					$('.login-portal').slideUp(1000);
					$('#primary-nav').removeClass('open-portal');
					$('.login-portal__text').removeClass('hidden');
					$('.login-portal__close-btn').removeClass('show');
					$('body').removeClass('portal-active');
				}
				if (e.keyCode === 13) {
					if ($('.login-portal').is(':visible')) {
						$('body').removeClass('portal-active');
					}
				}
			}


	
		});

		$(window).scroll(function() {
			var verschil = ($(window).scrollTop() / 5);
			console.log(verschil);
		  if (verschil > 40)
				if ($('.login-portal__trigger--secondary').hasClass('desktop')) {
					$('.login-portal__trigger--secondary.desktop').addClass('active');
		        	$('.login-portal__trigger').addClass('inactive');
				}

				if ($('.login-portal__trigger--secondary').hasClass('mobile') && $('.login-portal__trigger--secondary').is(':visible')) {
					$('.login-portal__trigger--secondary.mobile').addClass('active');
		        	$('.login-portal__trigger').addClass('inactive');
				}
			else if (verschil < 40)
				$('.login-portal__trigger--secondary.desktop').removeClass('active');
		       	$('.login-portal__trigger').removeClass('inactive');

		       	if ($('.login-portal__trigger--secondary').hasClass('mobile')) {
	    			$('.login-portal__trigger--secondary.mobile').removeClass('active');
		        	$('.login-portal__trigger').removeClass('inactive');
	    		}
		});

		$( window ).resize(function() {

			if (typeof($('.read-more-button').get(0)) !== "undefined") {
				if ($(window).width() > 1024) {

					$('.read-more').attr('style', '');
					$('.read-more-button').get(0).firstChild.nodeValue = "Read More";
					$('.read-more-button').parent().addClass('relative');
					$('.read-more-button i').removeClass('fa-angle-up');
					$('.read-more-button i').addClass('fa-angle-down');

				}
			}
			

			if ($(window).width() > 1024 ) {
				$('#home-slider.home-video').css('height', 'calc(' + $(window).height() + 'px - ' + ($('.section-header').height() + $('#primary-nav .reserve').outerHeight() + $('#property-nav').height() + 30) + 'px)');
			} else {
				$('#home-slider.home-video').css('height', '');
			}
		});

		if ($(window).width() < 1024) {
			$('.menu-list.left-menu').removeClass('two-col');
		}
		
		$(".eat-tab-button").click(function() {
			var id = "#"+$(this).data('class');
			$('.eat-menu-container').removeClass('showMenu');
			$('.eat-menu-container').addClass('hideMenu');
			$(id).removeClass('hideMenu');
			$(id).addClass('showMenu');
		});

		$(".drink-tab-button").click(function() {
			var id = "#"+$(this).data('class');
			$('.drink-menu-container').removeClass('showMenu');
			$('.drink-menu-container').addClass('hideMenu');
			$(id).removeClass('hideMenu');
			$(id).addClass('showMenu');
		});


        $('.white-shadow').parent().addClass('relative');
		$('.read-more-button').click(function() {
			if ($(window).width() <= 1024) {
				if($(this).parent().hasClass('relative')) {
					$(this).parent().removeClass('relative');
					$('.read-more-button i').removeClass('fa-angle-down');
					$('.read-more').slideDown(1000);
					$(this).get(0).firstChild.nodeValue = "Read Less";
					$('.read-more-button i').addClass('fa-angle-up');
				} else {
					$(this).parent().addClass('relative');
					$('.read-more').slideUp(1000);
					$(this).get(0).firstChild.nodeValue = "Read More";
					$('.read-more-button i').removeClass('fa-angle-up');
					$('.read-more-button i').addClass('fa-angle-down');
				}
			}
		});

        		// ACCORDION BOX
		$('.accbox-btn').click(function() {
			var accBoxItem = $(this).parent().parent();
			if ( accBoxItem.hasClass('active') ) {
				accBoxItem.removeClass('active');
				accBoxItem.find('.accbox-hidden').slideUp();
			} else {
				accBoxItem.addClass('active');
				accBoxItem.find('.accbox-hidden').slideDown();
			}
		});

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

		if ($(window).width() > 1024 ) {
			$('#home-slider.home-video').css('height', 'calc(' + $(window).height() + 'px - ' + ($('.section-header').height() + $('#primary-nav .reserve').outerHeight() + $('#property-nav').height() + 30) + 'px)');
		} else {
			$('#home-slider.home-video').css('height', '');
		}

	});
    
    jQuery( document ).ready(function( $ ) {
        if ($(window).width() < 768) {
            $('.button').removeAttr('target');
       }
        
              if (!localStorage.getItem("cookies")) {
			$('.cookie-consent').css("display", "block");
	   	}
		$('.cookie-consent__accept-btn').on('click', function () {
		    if (typeof(Storage) !== "undefined") {
		    	if (!localStorage.getItem("cookies")) {
					localStorage.cookies = "accept";
					$('.cookie-consent').css("display", "none");
		    	}
			}
		});
		
    });
    
// landing-page
    
  
$(window).on("scroll", function(e) {
    
//	$trigger = $('.banner').height();

	if ( $(window).scrollTop() >= 250 ) {
        $('')
		$('body').addClass('onscroll');
        $('.landing-page').removeClass('display-none');
        $(".landing-page").fadeIn(700);
       
		
       // $('landing-page-logo img').fadeIn(500);
	} else {
		$('body').removeClass('onscroll');
        $(".landing-page").fadeOut(300);
       // $('landing-page-logo img').fadeIn(500);
		$('.landing-page').addClass('display-none');
	}

});        
    
//slick
$(document).ready(function() {
    

 $('.lp-slider, .lp-slider-no-map').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      arrows: true,
      fade: true,
      cssEase: 'linear',
      prevArrow: $('.lp-slider-prev'),
      nextArrow: $('.lp-slider-next')
  });
    
    var gallery_magnific_popup = {
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'gallery-mfp',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
	}
    
  $('.lp-icon-link').magnificPopup(gallery_magnific_popup);    
    
  $('.accordion-titlebox').on('click', function() {
		$btn = $(this).find('.accordion-btn');
		$hiddenContent = $(this).parent().find('.accordion-contentbox');

		if( $btn.hasClass('accordion-btn-plus') ) {
			$btn.removeClass('accordion-btn-plus');
			$btn.addClass('accordion-btn-minus');

			$hiddenContent.slideDown();
		} else {
			$btn.removeClass('accordion-btn-minus');
			$btn.addClass('accordion-btn-plus');

			$hiddenContent.slideUp();
		}

  });    
     docReady_winResize_functions();
});    

$(window).resize(function() {
	docReady_winResize_functions();
});
    
function fullBleedImage( elem, multiplier ) {
	var getHeight = $(window).height();
	var getWidth = $(window).width();

	elem.css('height', ''); // reset

	elem.height(getHeight * multiplier);

}    
    
function docReady_winResize_functions() {
	fullBleedImage( $('.banner--40'), 0.4 );
	fullBleedImage( $('.banner--50'), 0.5 );
	fullBleedImage( $('.banner--60'), 0.6 );
	fullBleedImage( $('.banner--70'), 0.7 );
	fullBleedImage( $('.banner--80'), 0.8 );
	fullBleedImage( $('.banner--90'), 0.9 );
	fullBleedImage( $('.banner--100'), 1 );
	
}        
    
</script>