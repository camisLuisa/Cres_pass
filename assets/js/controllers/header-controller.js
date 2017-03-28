app.controller('HeaderController', function($scope, $location, $routeParams, $http){
	$scope.title = "HEADER";
	
	$scope.go = function(path) {
		$location.path(path);
	}

	$scope.search = function(input) {
		// $http.post('url', input)
		// .then(function(response){
		// 	console.log(input);
		// }).catch(function(erro){
		// 	console.log(input);
		// });
		console.log(input);
	};

	$scope.login = function(field) {
		$http.post('system/user/login', field)
		.then(function(response) {
			if (response.data.success) {
				console.log('Usuário logado.');
				$location.path('/painel');
			}
			else{
				console.log(response.data.error);
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
});