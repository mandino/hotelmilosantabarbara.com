//$(document).ready(function() {
jQuery( document ).ready(function( $ ) {

  /* Submit tweet */
  $('#twitter-form').submit(function(){  
      //setup variables  
      var form = $(this),  
      formData = form.serialize(),  
      formUrl = form.attr('action'),  
      formMethod = form.attr('method'),  
      responseMsg = $('#response')  

      //show response message - waiting  
      responseMsg.hide()  
                 .addClass('response-waiting')  
                 .text('Please Wait...')  
                 .fadeIn(200);  

         //send data to server for validation  
         $.ajax({  
             url: formUrl,  
             type: formMethod,  
             data: formData,  
             success:function(data){  
                 //setup variables  
                 var responseData = jQuery.parseJSON(data),  
                     klass = '';  

                 //response conditional  
                 switch(responseData.status){  
                     case 'error':  
                         klass = 'response-error';  
                     break;  
                     case 'success':  
                         klass = 'response-success';
                         $("#tweet").html("");
                     break;  
                 }  

                 //show reponse message  
                 responseMsg.fadeOut(200,function(){  
                     $(this).removeClass('response-waiting')  
                            .addClass(klass)  
                            .text(responseData.message)  
                            .fadeIn(200,function(){  
                                //set timeout to hide response message  
                                setTimeout(function(){  
                                    responseMsg.fadeOut(200,function(){  
                                        $(this).removeClass(klass);  
                                    });  
                                },3000);  
                             });  
                  });  
               }  
         });

      //prevent form from submitting  
      return false;  
  })
  
 $("#infoBox").show();

  /* Hide Sidebar */
  $("a#controlbtn").click(function(e) {
  
    e.preventDefault();
    
    var slidepx=$("div#sidebar").width() + 10;
	
	if ($('div#sidebar').hasClass("open")) {
	
		margin = -280;
		$('div#sidebar').removeClass("open");

	} else {
		margin = 0;
		$("div#sidebar").addClass("open");
	}
	
    	$("div#sidebar").animate({ 
    		marginLeft: margin
  		}, {
                duration: 'slow',
                easing: 'easeOutQuint'
            });


  }); 

});

//$(document).ready(function() {
jQuery( document ).ready(function( $ ) {

   $("#infoBox").show();

  /* Hide Sidebar */
  $("#closePanelButton").click(function(e) {
  
    e.preventDefault();
    
    var slidepx=$("div#sidepanelWrapper").width() + 10;
	
	if ($('div#sidepanelWrapper').hasClass("open")) {
	
		right = -215;
		$('div#sidepanelWrapper').removeClass("open");

	} else {
		right = 0;
		$("div#sidepanelWrapper").addClass("open");
	}
	
    	$("div#sidepanelWrapper").animate({ 
    		right: right
  		}, {
                duration: 'slow',
                easing: 'easeOutQuint'
            });
            
		
  }); 

});