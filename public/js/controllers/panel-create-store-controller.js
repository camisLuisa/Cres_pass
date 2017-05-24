app.controller('PanelCreateStoreController', function($scope,$http,$state){

	$scope.submitForm = function(fields){
		$scope.storeCreateForm.$setDirty();
		if (!$scope.storeCreateForm.$invalid) {
			$http.post('system/store/createStore', fields)
			.then(function(response){
				if (response.data.success) {
					console.log('Loja criada');
					$state.go('root.panel.home', {}, {reload:true});
				}
				else console.log(response.data.error);
			}, function(response){
				console.log("HTTP ERROR #"+response.statusText+": "+response.status);
			});
		}
	};
});