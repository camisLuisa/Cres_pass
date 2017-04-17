app.controller('PanelController', function($scope, $state, $http, user){
	user.onlyUsers();
	
	$scope.user = user.loadInfos();

	$scope.loadContent = function(state){
		switch(state){
			case 'account':
				$scope.contentTitle = 'Conta';
				break;
			case 'createStore':
				$scope.contentTitle = 'Criar Loja';
				break;
			case 'purchaseHistory':
				$scope.contentTitle = 'Histórico de Compras';
				break;
			case 'signup':
				$scope.contentTitle = 'Cadastro';
				break;
		}
		//$state.go(state);
	};

	// $http.get('system/user/get_infos')
	// .then(function (response){
	// 	if(response.data.success){
	// 		$scope.user = response.data.user;
	// 	}
	// 	else{
	// 		console.log('No logged user');
	// 	}
	// });
});