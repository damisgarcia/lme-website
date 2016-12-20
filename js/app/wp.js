'use strict';
var WP = function($http){
  var self = this

  self.getPages = function(args,callback){
    $http({
      url:"index.php/wp-json/wp/v2/pages",
      method: "GET",
      params: args
    }).then(callback)
  }

  self.getCategories = function(args,callback){
    $http({
      url:"index.php/wp-json/wp/v2/categories",
      method: "GET",
      params: args
    }).then(callback)
  }

  self.getPagesCategory = function(callback){
    $http({
      url:"index.php/wp-json/wp/v2/categories",
      method: "GET",
      params: {slug: 'pages'}
    }).then(function(response){
      callback(response.data[0])
    })
  }

  return self
}

WP.$inject = ['$http']

angular.module('app').factory('WP', WP)
