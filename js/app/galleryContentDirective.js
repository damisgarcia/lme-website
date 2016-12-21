var galleryContent = function($rootScope){
  return {
    restrict: 'E',
    transclude: true,
    link: function($scope, element, attrs, ctrl, transclude){
      transclude(function(clone, scope){
        scope.currentItem = {}

        $rootScope.$on('item:change', function(e, data){
          $.magnificPopup.open({
            items: {
                src: '#gallery-popup-' + data.id,
            },
            removalDelay: 500,
            callbacks: {
              open: function(){
                plyr.setup()
              },
              beforeOpen: function() {
                 this.st.mainClass = 'mfp-zoom-in';
              }
            },
            midClick: true,
            type: 'inline'
          })
        })


        element.append(clone)
      })
    }
  }
}

angular.module('app').directive('galleryContent', galleryContent)


galleryContent.$inject = ['$rootScope']