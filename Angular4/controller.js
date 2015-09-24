/**
 * Created by interntwo on 9/24/15.
 */
calcModule.controller('calcController', function ($scope) {
    $scope.firstNumber = 0;
    $scope.secondNumber = 0;
    $scope.product = function() {
      return $scope.firstNumber * $scope.secondNumber;
    };
});