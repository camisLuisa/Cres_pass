app.controller('ViewStoreController', function($scope, $state, $http, $stateParams){

	$http.post('system/Store/getLoja', $stateParams)
	.then(function(response){
		if(response.data.success){
			$scope.loja = response.data.loja;
		}	
	}).catch(function(error){
		console.log('Error');
	});

	
});