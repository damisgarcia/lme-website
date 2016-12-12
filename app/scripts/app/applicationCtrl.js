var ApplicationCtrl = function($rootScope){
  Waves.attach('.wave-box', ['waves-block', 'waves-float', 'waves-light'])
  Waves.init()

  var self = this

  self.mapStyle = [{'featureType':'water','elementType':'geometry','stylers':[{'color':'#e9e9e9'},{'lightness':17}]},{'featureType':'landscape','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':20}]},{'featureType':'road.highway','elementType':'geometry.fill','stylers':[{'color':'#ffffff'},{'lightness':17}]},{'featureType':'road.highway','elementType':'geometry.stroke','stylers':[{'color':'#ffffff'},{'lightness':29},{'weight':0.2}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':18}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#ffffff'},{'lightness':16}]},{'featureType':'poi','elementType':'geometry','stylers':[{'color':'#f5f5f5'},{'lightness':21}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#dedede'},{'lightness':21}]},{'elementType':'labels.text.stroke','stylers':[{'visibility':'on'},{'color':'#ffffff'},{'lightness':16}]},{'elementType':'labels.text.fill','stylers':[{'saturation':36},{'color':'#333333'},{'lightness':40}]},{'elementType':'labels.icon','stylers':[{'visibility':'off'}]},{'featureType':'transit','elementType':'geometry','stylers':[{'color':'#f2f2f2'},{'lightness':19}]},{'featureType':'administrative','elementType':'geometry.fill','stylers':[{'color':'#fefefe'},{'lightness':20}]},{'featureType':'administrative','elementType':'geometry.stroke','stylers':[{'color':'#fefefe'},{'lightness':17},{'weight':1.2}]}]

  self.gallery_filter = false

  self.gallery = [
    {image_url: 'images/behance-1.png', categories: ['sistemas-web-app']},
    {image_url: 'images/behance-2.png', categories: ['sistemas-web-app']},
    {image_url: 'images/behance-3.png', categories: ['hq','modelagem-3d']},
    {image_url: 'images/behance-4.png', categories: ['modelagem-3d']},
    {image_url: 'images/behance-5.png', categories: ['hq']},
    {image_url: 'images/behance-6.png', categories: ['jogos','modelagem-3d']},
    {image_url: 'images/behance-7.png', categories: ['jogos']},
    {image_url: 'images/behance-8.png', categories: ['sistemas-web-app', 'hq']}
  ]


  $rootScope.$on('gallery:update', function(e){
    setTimeout(function(){
      $('.lme-gallery').removeClass('animated')
    }, 600)
    !$('.lme-gallery').hasClass('animated') ? $('.lme-gallery').addClass('animated') : false
  })

  $('.lme-gallery').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(e){
    setTimeout(function(){
      $('.lme-gallery').removeClass('animated')
    }, 600)
  })

  return self
}

ApplicationCtrl.$inject = ['$rootScope']

var FilterByCategory = function(){
  return function(input, categoryName){
    var result = []
    input.forEach(function(item){
      item.categories.includes(categoryName) || categoryName == 'all' ? result.push(item) : false
    })
    return result
  }
}

angular.module('app').filter('filterByCategory', FilterByCategory)

angular.module('app').controller('ApplicationCtrl', ApplicationCtrl)
