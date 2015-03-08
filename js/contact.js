var contactApp = angular.module("contactApp", []);

contactApp.controller("ContactCtrl", function($scope, $http) {
    $scope.contact = {};
    $scope.err = {};

    $scope.Steps = [0, 1, 2];
    $scope.currentStep = 0;

    $scope.contactSend = function() {
        $scope.err = {};
        $http({
            method: 'POST',
            url: "contact.php",
            data: $scope.contact,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function(data) {
            if(!data.success) {
                $scope.err = data.err;
            }
            else {
                $("#message").removeClass("alert error").addClass("alert success").slideDown("fast");
                $scope.message = "Success, message has been sent!";
            }
        });
    };

    $scope.close = function(id) {
        $("#"+id).slideUp();
    };
});

$(function() {
    $(":input").on("keydown change", function() {
        $(this).removeClass("error");
    });
});