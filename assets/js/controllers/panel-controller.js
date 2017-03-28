app.controller('PanelController', function($scope, $location, $routeParams, $http){
	$http.get('system/user/get_infos')
	.then(function (response){
		if(response.data.success){
			$scope.user = response.data.user;
		}
		else{
			console.log('No logged user');
		}
	});
});