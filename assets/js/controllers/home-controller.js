app.controller('HomeController', function($scope, $state, $http){
	$scope.home = "HOME";
	$scope.go = function(path) {
		$location.path(path);
	}
});