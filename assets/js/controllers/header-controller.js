app.controller('HeaderController', function($scope, $location, $routeParams, $http){
	$scope.title = "HEADER";

	$scope.search = function(input) {
		// $http.post('url', input)
		// .then(function(response){
		// 	console.log(input);
		// }).catch(function(erro){
		// 	console.log(input);
		// });
		console.log(input);
	};

	$scope.go = function(path) {
		$location.path(path);
	}
});