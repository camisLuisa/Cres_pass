app.controller('SignUpController', function($scope, $location, $routeParams, $http){

	$scope.signup = function(field) {
		$http.post('system/user/signup', field)
		.then(function(response) {
			if (response.data.success) {
				console.log('Usuário cadastrado.');
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
});