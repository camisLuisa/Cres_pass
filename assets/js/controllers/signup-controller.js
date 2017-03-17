app.controller('SignUpController', function($scope, $location, $routeParams, $http){
	
	$scope.onlyNumber = function(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }



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