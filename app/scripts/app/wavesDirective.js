var WavesDirective = function(){
  return {
    restrict: 'A',
    scope:{
      wave: "="
    },
    link: function(scope, element, attrs){      
      Waves.attach(element, scope.wave)
    }
  }
}
angular.module('app').directive('wave', WavesDirective)
