app.controller('LoginController', function($scope, $location, $routeParams, $http){
	$scope.login = "LOGIN";

	$scope.return;

	$scope.link = function(){
		$location.path("/page/50");
	}

	$http.post('system/test/square', {num: 10})
	.then(function(response){
		$scope.return = response.data;
	});
});