var scrollSref = function(){
  return {
    restrict: 'A',
    scope: true,
    link: function(scope, element, attrs){
      element.on('click', function(e){
        e.preventDefault()
        $(attrs.href).animatescroll({easing:'easeInOutCubic'})
      })
    }
  }
}
angular.module('app').directive('scrollSref', scrollSref)
