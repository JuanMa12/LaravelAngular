app1.controller('usersController', function($scope, $http, API_URL) {
    //retrieve employees listing from API
    $http.get(API_URL + "users")
        .success(function (response) {
            $scope.users = response;
        });
});
