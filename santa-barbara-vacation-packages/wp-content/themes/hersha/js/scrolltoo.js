$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);

      if ($(window).width() >= 640) {

        var moreoffset = 120;

      } else {

        var moreoffset = 164;

      }

      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - moreoffset
        }, 1000);
        return false;
      }
    }
  });
});