app.controller('LoginController', function($scope, $location, $routeParams, $http){
	$scope.login = function(field) {
		$http.post('url', field)
		.then(function(response) {
			if (response.data.success) {
				console.log('Usuário logado.');
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
});