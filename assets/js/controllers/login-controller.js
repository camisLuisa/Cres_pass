app.controller('LoginController', function($scope, $location, $routeParams, $http){
	$scope.login = function(field) {
		$http.post('system/user/login', field)
		.then(function(response) {
			if (response.data.success) {
				console.log('Usuário logado.');
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
});
