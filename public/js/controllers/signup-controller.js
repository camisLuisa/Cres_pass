app.controller('SignUpController', function($scope, $state, $http){

	$scope.field = {name: 'walace', last_name: 'florentino', cpf: '096.943.344-54', rg: '3.444.333', ddd_1: '813', tel_1: '9999-99999', ddd_2: '332', tel_2: '2323-4323', email: 'fwefwf@fsdfs.com', password: '123', cep: '54800-000', street: 'rweded', number: '999', complement:'fddaewd', neighborhood: 'froefkw', reference: '432fdwefd', city:'wed', state: 'fw'};

	$scope.signup = function(field) {

		$scope.form1.$setDirty();


		if ($scope.form1.$invalid) {
			return;
		}

		$http.post('system/user/signup', field)
		.then(function(response) {
			
			if (response.data.success) {
				console.log('Usuário cadastrado.');
			}
		}).catch(function(error) {
			console.log('Erro!');
		});

		$scope.proximo;/*variavel para transição da etapa de cadastro*/


	};
});