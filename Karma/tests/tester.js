/**
 * Created by interntwo on 9/24/15.
 */

describe('Controller Testing', function () {
    beforeEach(module('calcApp'));

    var $controller;
    beforeEach(inject(function (_$controller_) {
       $controller = _$controller_;
    }));

    describe('$scope.product', function()
    {
        beforeEach(function () {
            var $scope = {};
            var controller = $controller('calcController', {$scope: $scope});
        });

        it('check if the product is okay', function () {
            $scope.firstNumber = 5;
            $scope.secondNumber = 25;
            expect($scope.product()).toEqual(125);
        });
    });
});