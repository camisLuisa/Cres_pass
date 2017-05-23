app.controller('CreateStoreController', function($scope,$http){

	$scope.submitForm = function(fields){
		$scope.storeCreateForm.$setDirty();
		if (!$scope.storeCreateForm.$invalid) {
			$http.post('system/store/createStore', fields)
			.then(function(response){
				if (response.data.success) {
					console.log('Loja criada');
				}
				else console.log(response.data.error);
			}, function(response){
				console.log("HTTP ERROR #"+response.statusText+": "+response.status);
			});
		}
	};

	//Show on view the link that will be created for the store 
	$scope.parseToLink = function(str){
		return (str)?str.replace(/ /gi,'-').toLowerCase():null;
	};
});