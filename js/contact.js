var contactApp = angular.module("contactApp", []);

contactApp.controller("ContactCtrl", function($scope, $http, $timeout, $q) {
    $scope.contact = {};

    var contactRequest = null;
    $scope.contactSend = function() {
        if(contactRequest) { contactRequest.resolve(); }
        contactRequest = $q.defer();

        $scope.err = {};

        $http({
            method: 'POST',
            url: "contact.php",
            data: $scope.contact,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
        .success(function(data) {
            if(!data.success) {
                $scope.err = data.err;
            }
            else {
                $("#message").removeClass("alert error").addClass("alert success").slideDown("fast");
                $scope.message = "Success, message has been sent!";
                $timeout(function() {
                    $("#message").slideUp("slow");
                }, 2000);
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