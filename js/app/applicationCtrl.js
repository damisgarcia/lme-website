var ApplicationCtrl = function($rootScope, $http, WP){
  Waves.attach('.wave-box', ['waves-block', 'waves-float', 'waves-light'])
  Waves.init()

  WP.getPages(null,function(response){
    self.gallery = response.data

    self.gallery.forEach(function(page){
      $http.get(page._links["wp:featuredmedia"][0].href).then(function(image){
        angular.extend(page, { images: image.data.media_details.sizes })
        console.log(page)
      })
    })
  })
  WP.getPagesCategory(function(pages_category){
    WP.getCategories({parent: pages_category.id},function(response){
      self.categories = response.data
    })
  })


  var self = this

  self.mapStyle = [{'featureType':'water','elementType':'geometry','stylers':[{'color':'#e9e9e9'},{'lightness':17}]},{'featureType':'landscape','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':20}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#ffffff'},{'lightness':17}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#ffffff'},{'lightness':29},{'weight':0.2}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':18}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':16}]},{'featureType':'poi','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':21}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#dedede'},{'lightness':21}]},{'elementType':'labels.text.stroke','stylers':[{'visibility':'on'},{'color':'#ffffff'},{'lightness':16}]},{'elementType':'labels.text.fill','stylers':[{'saturation':36},{'color':'#333333'},{'lightness':40}]},{'elementType':'labels.icon','stylers':[{'visibility':'off'}]},{'featureType':'transit','elementType':'geometry','stylers':[{'color':'#f2f2f2'},{'lightness':19}]},{'featureType':'administrative','elementType':'geometry.fill','stylers':[{'color':'#fefefe'},{'lightness':20}]},{'featureType':'administrative','elementType':'geometry.stroke','stylers':[{'color':'#fefefe'},{'lightness':17},{'weight':1.2}]}]

  self.gallery_filter = false

  $rootScope.$on('gallery:update', function(e){
    setTimeout(function(){
      $('.lme-gallery').removeClass('invisible')
    }, 500);
  });

  return self
}

ApplicationCtrl.$inject = ['$rootScope', '$http', 'WP']

var FilterByCategory = function(){
  return function(input, categoryId){
    var result = []
    console.log(input, categoryId)
    input.forEach(function(item){
      item.categories.includes(categoryId) || categoryId == undefined ? result.push(item) : false
    })
    return result
  }
}

angular.module('app').filter('filterByCategory', FilterByCategory)

angular.module('app').controller('ApplicationCtrl', ApplicationCtrl)
