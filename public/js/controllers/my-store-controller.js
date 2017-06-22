app.controller('MyStoreController',function($scope,$state,$http){

	$http.get('system/Store/myLoja')
	.then(function(response){
		if(response.data.success){
			$scope.loja = response.data.loja
			console.log(response.data)
		}
	}).catch(function(error){
		console.log('Error');
	});

});