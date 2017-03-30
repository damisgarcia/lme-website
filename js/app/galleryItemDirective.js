var galleryItem = function($rootScope){
  return {
    restrict: 'EA',
    transclude: true,
    scope:{
      galleryItem: '='
    },
    link: function(scope, element, attrs, ctrl, transclude){
      element.on('click', function(e){
        e.preventDefault()
        window.location.href = scope.galleryItem.link
      })

      transclude(function(clone, scope){
        element.append(clone)
      })
    }
  }
}

angular.module('app').directive('galleryItem', galleryItem)

galleryItem.$inject = ['$rootScope']

var galleryItemFilter = function($rootScope){
  return {
    restrict: 'A',
    transclude: true,
    scope:{
      galleryItemFilter: '='
    },
    link: function(scope, element, attrs, ctrl, transclude){
      $rootScope.$currentCategory = undefined

      element.on('click', function(e){
        if($rootScope.$currentCategory == scope.galleryItemFilter){
          return false
        }

        angular.element('[gallery-item-filter]').removeClass('active')
        angular.element(element).addClass('active')

        $('.lme-gallery').addClass('invisible')

        $rootScope.$currentCategory = scope.galleryItemFilter

        setTimeout($rootScope.$apply, 300)

        scope.$emit('gallery:update')
      })

      transclude(function(clone, scope){
        element.append(clone)
      })
    }
  }
}

angular.module('app').directive('galleryItemFilter', galleryItemFilter)

galleryItemFilter.$inject = ['$rootScope']
