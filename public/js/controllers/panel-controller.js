app.controller('PanelController', function($scope, $state, $http, user){
	user.onlyUsers();

	$http.get("system/User/get_infos").then(function(response){
		$scope.user = response.data.user;	
		$http.get("system/Store/get_infos").then(function(response){
			$scope.user.store = response.data.user;
		});
	});

	$scope.loadContent = function(state){
		switch(state){
			case 'account':
				$scope.contentTitle = 'Conta';
				break;
			case 'editStore':
				$scope.contentTitle = 'Editar Loja';
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
		$state.go('base.panel.'+state);
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