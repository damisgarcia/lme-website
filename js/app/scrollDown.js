'use strict'
var scrollDown = function(){
  var didScroll, lastScrollTop, delta, navbarHeight;

  function hasScrolled(self) {
    var st = $(self).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header > .navbar').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
          $('header > .navbar').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
  }

  // @public
  return {
    init: function(){
      lastScrollTop = 0;
      delta = 5;
      navbarHeight = $('header > .navbar').outerHeight();

      $(window).scroll(function(event){
        didScroll = true;
      });

      setInterval(function() {
        if (didScroll) {
          hasScrolled(window);
          didScroll = false;
        }
      }, 250);
    }
  }
}

angular.module('app').factory('$scrollDown', scrollDown)
