var PageCtrl = function($rootScope, $http, $scrollDown, WP){
  function getRandomProfission(array){
    min = 0
    max = array.length -1
    rdm = Math.random() * (max - min) + min
    return array[Math.round(rdm)]
  }

  function loadMembers(){
    var profissions = [ 'Desginer', 'Desginer', 'Gerente de Projeto', 'Programador', 'Ilustrador', 'Marketing', 'Programador', 'Programador' ]
    var totalMembers = new Array(26)
    // Populate Array
    for(var i=0;i<totalMembers.length;i++){
      totalMembers[i] = ''
    }
    // Create Members Entity
    var members = totalMembers.map(function(m, index, array){
      return { name: 'Lorem', profission: getRandomProfission(profissions), image: 'wp-content/themes/default-lme/images/members/' + (index + 1) + '.png' }
    })

    members = _.chunk(members, 8)

    return members
  }

  function getNextPageUrl(p, index, array){
    return p.id === self.postId ? self.nextPage = array[index+1] : false
  }

  function getBeforePageUrl(p, index, array){
    array[-1] = null
    return p.id === self.postId ? self.beforePage = array[index-1] : false
  }

  function removeCurrentPostFromList(p, index, array){
    p.id === self.postId ? array.splice(index, 1) : false
  }

  function mergeFeaturesMedia(p){
    $http.get(p._links["wp:featuredmedia"][0].href).then(function(image){
      angular.extend(p, { images: image.data.media_details.sizes })
    })
  }

  $scrollDown.init()

  // @public

  var self = this

  self.onInit = function(baseurl, args){
    angular.extend(self, args)
    WP.baseurl = baseurl
    // @private
    Waves.attach('.wave-box', ['waves-block', 'waves-float', 'waves-light'])
    Waves.init()
  }

  self.getPagesByCategory = function(categories){
    WP.getPages({},function(response){
      response.data.forEach(getBeforePageUrl)
      response.data.forEach(getNextPageUrl)
    })

    WP.getPages({categories: categories},function(response){
      self.pages = response.data
      self.pages.forEach(removeCurrentPostFromList)
      self.pages.forEach(mergeFeaturesMedia)
    })
  }

  self.mapStyle = [{'featureType':'water','elementType':'geometry','stylers':[{'color':'#e9e9e9'},{'lightness':17}]},{'featureType':'landscape','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':20}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#ffffff'},{'lightness':17}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#ffffff'},{'lightness':29},{'weight':0.2}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':18}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':16}]},{'featureType':'poi','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':21}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#dedede'},{'lightness':21}]},{'elementType':'labels.text.stroke','stylers':[{'visibility':'on'},{'color':'#ffffff'},{'lightness':16}]},{'elementType':'labels.text.fill','stylers':[{'saturation':36},{'color':'#333333'},{'lightness':40}]},{'elementType':'labels.icon','stylers':[{'visibility':'off'}]},{'featureType':'transit','elementType':'geometry','stylers':[{'color':'#f2f2f2'},{'lightness':19}]},{'featureType':'administrative','elementType':'geometry.fill','stylers':[{'color':'#fefefe'},{'lightness':20}]},{'featureType':'administrative','elementType':'geometry.stroke','stylers':[{'color':'#fefefe'},{'lightness':17},{'weight':1.2}]}]

  self.gallery_filter = false

  self.members = loadMembers()

  $rootScope.$on('gallery:update', function(e){
    setTimeout(function(){
      $('.lme-gallery').removeClass('invisible')
    }, 500);
  });

  return self
}

PageCtrl.$inject = ['$rootScope', '$http', '$scrollDown', 'WP']

angular.module('app').controller('PageCtrl', PageCtrl)
