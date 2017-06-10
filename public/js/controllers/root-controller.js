app.controller('RootController', function($scope, $state, $http, $pathTo, $rootScope){
	$scope.imgFolder = $pathTo.imgFolder;

	//Show on view the link that will be created for the store 
	$rootScope.parseToLink = function(str){
		return (str)?str.replace(/ /gi,'-').toLowerCase():null;
	};
	
	$http.get("system/User/get_infos").then(function(response){
		$rootScope.user = response.data.user;	
		$http.get("system/Store/get_infos").then(function(response){
			$rootScope.user.store = response.data.store;
			console.log($rootScope.user);
		});
	});

	$scope.go = function(state) {
		$state.go(state);
	}

	$scope.login = function(input) {
		$http.post('system/user/login', input)
		.then(function(response) {
			if (response.data.success) {
				$('#loginModal').modal('hide');
				$state.go('root.panel');
			}
			else{
				console.log(response.data.error);
			}
		}).catch(function(error) {
			console.log('Erro!');
		});
	};
	
	// Add top margin to elements bellow the fixed header based on its height
	var marginTopSize = $("#fixed-header").height()+(isMobile()?30:70);
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