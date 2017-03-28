app.controller('HomeController', function($scope, $location, $routeParams, $http){
	$scope.home = "HOME";
	$scope.go = function(path) {
		$location.path(path);
	}
});