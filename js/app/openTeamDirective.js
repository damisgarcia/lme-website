function _buildCarousel(){
  $('#members').removeClass('hidden')
  $('#members').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true
  });
  setTimeout(function(){
    $('#members').removeClass('invisible')
  }, 300)
}

function destroyCarousel(){
  $('#members').addClass('invisible, hidden')
  $('#members').slick('destroy')
}

function buildCarousel(){
  setTimeout(_buildCarousel, 500)
}

var openTeam = function(){
  return {
    restrict: 'A',
    scope: true,
    link: function(scope, element, attrs){
      angular.element(element).on('click', function(){
        $.magnificPopup.open({
          items: { src: '#team-popup' },
          callbacks: {
            close: destroyCarousel,
            open: buildCarousel,
            beforeOpen: function() {
               this.st.mainClass = 'mfp-zoom-in';
            }
          },
          removalDelay: 500,
          midClick: true,
          type: 'inline'
        });
      });
    }
  }
}
angular.module('app').directive('openTeam', openTeam)
