app.controller('BaseController', function($scope, $state, $http, $pathTo){
	$scope.imgFolder = $pathTo.imgFolder;

	$scope.go = function(state) {
		$state.go(state);
	}

	$scope.search = function(input) {
		// $http.post('url', input)
		// .then(function(response){
		// 	console.log(input);
		// }).catch(function(erro){
		// 	console.log(input);
		// });
		console.log(input);
	};

	$scope.login = function(input) {
		// $scope.Form.$setDirty();
		// if ($scope.Form.$invalid) {
		// 	return;
		// }
		$http.post('system/user/login', input)
		.then(function(response) {
			if (response.data.success) {
				$('#loginModal').modal('hide');
				$state.go('base.panel');
			}
			else{
				console.log(response.data.error);
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
	$(document).ready(function(){
		$(".margin-fixed-top").css("margin-top",$(".navbar-fixed-top").height()+"px");
	});
});