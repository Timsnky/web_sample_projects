phoneApp.controller('displayController', function($scope, $http) {
    $http.get("test.php").success(function (response) {
            $scope.phones = response.phones;
        });
});

phoneApp.controller('addController', function($scope, $http) {
    $http.get("test.php").success(function (response) {
        $scope.phones = response.phones;
    });
});

phoneApp.controller('reviewController', function($scope) {
   $scope.Sony = {};
   $scope.Sony.name = "Sony Xperia Z5";
   $scope.Sony.price  = 60000;
   $scope.Sony.shop = "Al Amana";
   $scope.Sony.img = "img/phone2.jpg";

   $scope.reviews = [
      {name:'Timothy',email:'timsnky@gmail.com', comment:'Very Nice phone i like the premium finish on the back and its sleek feel'},{name:'Kimathi',email:'tkimathi@cytonn.com', comment:'The camera has never been any better than this and even its response time is awesome. This was money well spent '}];

   $scope.submitReview = function() {
      $scope.singleReview = {};
      $scope.singleReview.name = $scope.user;
      $scope.singleReview.email = $scope.email;
      $scope.singleReview.comment = $scope.comment;
      $scope.reviews.push($scope.singleReview);
   }
});