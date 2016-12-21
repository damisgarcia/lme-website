var FilterByCategory = function(){
  return function(input, categoryId){
    var result = []

    if(!angular.isDefined(input)){
      return false
    }

    input.forEach(function(item){
      item.categories.includes(categoryId) || categoryId == undefined ? result.push(item) : false
    })
    return result
  }
}

angular.module('app').filter('filterByCategory', FilterByCategory)
