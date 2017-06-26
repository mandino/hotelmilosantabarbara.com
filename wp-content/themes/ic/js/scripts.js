jQuery( document ).ready(function( $ ) {

	SetElementToNavisNCPhoneNumber("NavisTFN");
	SetNavisP2TalkLink("lnkP2TalkFTN");

	SetElementToNavisNCPhoneNumber("NavisTFNmobnav");
	SetNavisP2TalkLink("lnkP2Talk");
	SetNavisP2TalkLink("lnkP2Talkheader");
	SetNavisP2ChatLink("lnkP2Chatheader");

	SetNavisP2TalkLink("lnkP2Talkmobile");

	SetNavisP2TalkLink("lnkP2Talkheader-mobile");
	SetNavisP2ChatLink("lnkP2Chatheader-mobile");
		
	$('img.lazy').each(function() {
		var img = $(this);
		var width = img.width();
		var ratio = img.data('aspectratio');
		var height = width / ratio;
		$(this).css('height', height+'px');
	});
	
	$("img.lazy").lazyload({
		effect : "fadeIn",
	});

	if ($(window).width() > 399) {
		$("a[rel^='prettyPhoto']").prettyPhoto({
	    	default_width: 800,
	    	default_height: 600,

	    });
	}
    
	$(".closebox a").click(function(e) {
		e.preventDefault();
		
		$(".specialsbox").addClass("shutit");

		
	})

    // Hidden calendar

    $("#primary-nav .button.input-append.date").hover(function() {
				
		$(".ressys").addClass("dropit");
		$(this).removeClass("fixeer");
	
	},function(){
	
		$(".ressys").removeClass("dropit");
	
	
	});
	
	


	// Reserve button hover
	
	 $('.ressys').hover(function() {
		$("#primary-nav .button").stop().addClass("nothingness");
		
		
	 	}, function() {
 		$("#primary-nav .button").removeClass("nothingness");			
	 });

	$('.slides-mini').slidesjs({
	    width: 540,
	    height: 292,
	    navigation: false,
	    effect: {
		      slide: {
		        // Slide effect settings.
		        speed: 500
		          // [number] Speed in milliseconds of the slide animation.
		      },
		      fade: {
		      	speed: 1000,
		      	crossfade: true
		      }
		  },
		  navigation: {
		      active: false,
		        // [boolean] Generates next and previous buttons.
		        // You can set to false and use your own buttons.
		        // User defined buttons must have the following:
		        // previous button: class="slidesjs-previous slidesjs-navigation"
		        // next button: class="slidesjs-next slidesjs-navigation"
		      effect: "fade"
		        // [string] Can be either "slide" or "fade".
		    },
	    pagination: {
	    	effect: 'fade',
	    }
	});



	// Flexslider

	$('.flexslider').flexslider({
		animation: "fade",
		animationSpeed: 1200,
		slideshowSpeed: 3500,
		pauseOnAction: false,
	});



	// Datepicker
	$.datepicker._defaults.dateFormat = 'yy-mm-dd';
	
	$(".datepicker").datepicker({
        firstDay: 0,
		minDate: 0,
		numberOfMonths: [2,1],
		beforeShowDay: function(date) {
			var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
			var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
			return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
		},
		onSelect: function(dateText, inst) {
			var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
			var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
            var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

            
            if (!date1 || date2) {
				$("#arrival_date").val(dateText);
				$("#departure_date").val("");
                $(this).datepicker();
            } else if( selectedDate < date1 ) {
                $("#departure_date").val( $("#arrival_date").val() );
                $("#arrival_date").val( dateText );
                $(this).datepicker();
            } else {
				$("#departure_date").val(dateText);
                $(this).datepicker();
			}
		}
	});



	// Question box

	 $("input.check").click(function(){
        if($(this).is(":checked")){
            $(this).parent().addClass("question-box-active");
        }
    });



	// Pretty Photo

    $('a[rel=tooltip]').mouseover(function(e) {
         
        //Grab the title attribute's value and assign it to a variable
        var tip = $(this).attr('title');   
         
        //Remove the title attribute's to avoid the native tooltip from the browser
        $(this).attr('title','');
         
        //Append the tooltip template and its value
        $(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');    
         
        //Set the X and Y axis of the tooltip
        $('#tooltip').css('top', e.pageY + 10 );
        $('#tooltip').css('left', e.pageX + 20 );
         
        //Show the tooltip with faceIn effect
        $('#tooltip').fadeIn('500');
        $('#tooltip').fadeTo('10',0.8);
         
    }).mousemove(function(e) {
     
        //Keep changing the X and Y axis for the tooltip, thus, the tooltip move along with the mouse
        $('#tooltip').css('top', e.pageY + 10 );
        $('#tooltip').css('left', e.pageX + 20 );
         
    }).mouseout(function() {
     
        //Put back the title attribute's value
        $(this).attr('title',$('.tipBody').html());
     
        //Remove the appended tooltip template
        $(this).children('div#tooltip').remove();
         
    });
    
    $('.section-photos').remove('.gallery');

	$("li.tab-item:last-child").addClass('last-item');



	// Sidebar not working fix

	$("body a").attr('data-ajax', false);
	$('.section-photos li').bind("vmousedown", function(){});
	$('.thumbgal li').bind("vmousedown", function(){});		
	$( '#cbp-qtrotator' ).cbpQTRotator();
	
	

	// Sticky Nav
	$(".searchbox").sticky({ topSpacing: 61, className: 'sticky', wrapperClassName: 'my-wrapper' });
	$("#navigation").sticky({ topSpacing: 0, className: 'sticky', wrapperClassName: 'my-wrapper' });
	$("#quiet").sticky({ topSpacing: 0, className: 'unstick'});


	// FadeIn logo
		$(window).scroll(function() {	
			var verschil = ($(window).scrollTop() / 5);
		  if (verschil > 40) 
			   $('.droplogo').addClass('jumpshot');
			else if (verschil < 40)
			   $('.droplogo').removeClass('jumpshot');
		});
	


	// Calendar in Navigation

		var $html 	= $('html'),
			$menu	= $('nav#menu'),
			$both	= $html.add( $menu );

		$menu.mmenu();

		if ($(window).width() < 1000) {
			   
		   var pos 	= 'mm-top mm-right mm-bottom',
				zpos	= 'mm-front mm-next';

			//	Add the position-classnames onChange
			$('input[name="pos"]').change(function() {
				$both.removeClass( pos ).addClass( 'mm-' + this.value );
			});
			$('input[name="zpos"]').change(function() {
				$both.removeClass( zpos ).addClass( 'mm-' + this.value );
			});

		} else {
		
		var $menu	= $('nav#menu');
				$menu.removeClass()
				$('nav#menu ul').removeClass()
				$('#primary-nav .container').prepend($menu);
		
		}


		$( window ).resize(function() {

			if ($(window).width() >1000) {

				var $menu	= $('nav#menu');
				$menu.removeClass()
				$('nav#menu ul').removeClass()
				$('#primary-nav .container').prepend($menu);

			} else {

				var $menu	= $('nav#menu');
				$menu.addClass('fl mm-menu mm-horizontal mm-ismenu')
				$('nav#menu ul').addClass('mm-list mm-panel mm-opened mm-current')
				$('html').prepend($menu);

			}

		});

		$('.hover').bind('touchstart mouseover', function(e) {
			//e.preventDefault();
			$(this).toggleClass('hover_effect');
		});

	var url_trigger = window.location.pathname;
	var url_trim = url_trigger.split("/")[1];

	if (url_trim == 'uber-uns') {
		$('.current-language').text('de');
		$('.current-language').attr('href','//hotelmilosantabarbara.com/uber-uns/');
		$('.de-lang').text('en');
		$('.de-lang').attr('href','//hotelmilosantabarbara.com/');
	} else if (url_trim == 'a-propos-de-nous') {
		$('.current-language').text('fr');
		$('.current-language').attr('href','//hotelmilosantabarbara.com/a-propos-de-nous/');
		$('.fr-lang').text('en');
		$('.fr-lang').attr('href','//hotelmilosantabarbara.com/');
	} else if (url_trim == 'sobre-nos') {
		$('.current-language').text('pt-pt');
		$('.current-language').attr('href','//hotelmilosantabarbara.com/sobre-nos/');
		$('.pt-lang').text('en');
		$('.pt-lang').attr('href','//hotelmilosantabarbara.com/');
	} else {
		$('.current-language').text('en');
		$('.current-language').attr('href','//hotelmilosantabarbara.com/');
	}

});

$('#lnkP2Talkheader-mobile').prop('href','tel:'+NavisConvertTagToPhoneNumberBasic(jQuery('#NavisTFNmobnav').text()));	
$('#lnkP2Chatheader-mobile').prop('href','tel:'+NavisConvertTagToPhoneNumberBasic(jQuery('#NavisTFNmobnav').text()));	
$('#lnkP2Talkmobile').prop('href','tel:'+NavisConvertTagToPhoneNumberBasic(jQuery('#NavisTFNmobnav').text()));
$('#lnkP2Talkheader').prop('href','tel:'+NavisConvertTagToPhoneNumberBasic(jQuery('#NavisTFNmobnav').text()));
$('#lnkP2Chatheader').prop('href','tel:'+NavisConvertTagToPhoneNumberBasic(jQuery('#NavisTFNmobnav').text()));
$('#lnkP2Talk').prop('href','tel:'+NavisConvertTagToPhoneNumberBasic(jQuery('#NavisTFNmobnav').text()));