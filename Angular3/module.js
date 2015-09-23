var phoneApp = angular.module("phoneApp", ['ngRoute']);
phoneApp.config(['$routeProvider', function($routeProvider) {
   $routeProvider. 

   when('/display', {
      templateUrl: 'views/display.html',
      controller: 'displayController'
   }).

   when('/add', {
       templateUrl: 'views/add.html',
       controller: 'addController'
    }).

   when('/review', {
      templateUrl: 'views/review.html',
      controller: 'reviewController'
   }).

   otherwise({
      redirectTo: '/display'
   });
}]);

phoneApp.directive('phone', function() {
   var directive = {};
   directive.restrict = 'E';
   directive.template = "<div><img src={{phone.img}}><p>Phone: <b>{{phone.name}}</b></p><p>Price: <b>{{phone.price}}</b></p><p>Shop: <b>{{phone.shop}}</b></p></div>";
   
   directive.scope = {
      phone : "=name"
   }
   
   directive.compile = function(element, attributes) {
      
      var linkFunction = function($scope, element, attributes) {
         element.html("<div><img src='"+$scope.phone.img+"'><p>Phone: <b>"+$scope.phone.name +"</b></p><p>Price: <b>"+$scope.phone.price+"</b></p><p>Shop: <b>"+$scope.phone.shop+"</b></p><br/></div>");
      }
      return linkFunction;
   }
   
   return directive;
});