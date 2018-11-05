/* Smooth Scrolling Snippet taken from https://css-tricks.com/snippets/jquery/smooth-scrolling/ */
(function($) {

  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
  
  // $ Works! You can test it with next line if you like
  // console.log($);
  
})( jQuery );