/**
 * Created by interntwo on 9/24/15.
 */

describe('calcController', function () {
    beforeEach(module('calcApp'));

    var $controller;
    beforeEach(inject(function (_$controller_) {
       $controller = _$controller_;
    }));

    describe('$scope.product', function()
    {
        beforeEach(function () {
            $scope = {};
            controller = $controller('calcController', {$scope: $scope});
        });

        it('check if the product is okay', function () {
            $scope.firstNumber = 50;
            $scope.secondNumber = 20;
            $scope.product();
            expect($scope.product()).toEqual(100)
        });
    });
});