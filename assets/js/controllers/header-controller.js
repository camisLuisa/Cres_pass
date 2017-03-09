app.controller('HeaderController', function($scope, $location, $routeParams, $http){
	$scope.title = "HEADER";

	$scope.search = function(input) {
		// $http.post('url', input)
		// .success(function(data){
		// }).error(function(erro){
		// });
		console.log(input);
	};

	$scope.go = function(path) {
		$location.path(path);
	}
});