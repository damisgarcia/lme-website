var ngLazy = function(){
  return {
    restrict: 'A',
    scope: true,
    link: function(scope, element, attrs){
      $(element).lazyload({effect:"fadeIn"})
    }
  }
}
angular.module('app').directive('ngLazy', ngLazy)
