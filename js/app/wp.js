'use strict';
var WP = function($http){
  var self = this

  self.getPages = function(args,callback){
    var request = this.baseurl + "/index.php/wp-json/wp/v2/pages"
    $http({
      url: request,
      method: "GET",
      params: args
    }).then(callback)
  }

  self.getCategories = function(args,callback){
    var request = this.baseurl + "/index.php/wp-json/wp/v2/categories"
    $http({
      url:request,
      method: "GET",
      params: args
    }).then(callback)
  }

  self.getPagesCategory = function(callback){
    var request = this.baseurl + "/index.php/wp-json/wp/v2/categories"
    $http({
      url:request,
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
