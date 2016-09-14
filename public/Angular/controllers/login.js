app2.controller('loginController',['$scope','$http', '$location',function($scope,$http,$location){
    angular.extend($scope,{
        doLogin: function(loginForm){
            $http({
                headers: {
                    'Content-Type': 'application/json'
                },
                url: API_URL + '/auth',
                method: "POST",
                data: {
                    email: $scope.login.email,
                    password: $scope.login.password
                }
            }).success(function(response){
                $location.path('/usersList')
            }).error(function(data,status,headers){
                console.log(data,status,headers);
                alert('Login Error');
            });
        }
    });
}]);
