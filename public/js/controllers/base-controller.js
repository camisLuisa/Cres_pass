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
	
	// Add top margin to elements bellow the fixed header based on its height
	var marginTopSize = $("#fixed-header").height()+(isMobile()?0:50);
	$(document).ready(function(){
		$(".margin-fixed-top").css("margin-top",marginTopSize+"px");
	});
});

function isMobile()
{
	var userAgent = navigator.userAgent.toLowerCase();
	if( userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i)!= -1 )
		return true;
}