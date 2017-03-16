app.controller('LoginController', function($scope, $location, $routeParams, $http){	
	$scope.login = function(field) {
		$location.path('/admin');
		var user = $scope.field.username;
		$http.post('system/user/login', field)
		.then(function(response) {
			if (response.data.success) {
				console.log('Usuário logado.');
				$location.path('/admin');
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
});
	