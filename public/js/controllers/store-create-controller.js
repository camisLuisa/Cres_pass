app.controller('StoreCreateController', function($scope,$http){


	//Show on view the link that will be created for the store 
	$scope.parseToLink = function(str){
		return (str)?str.replace(/ /gi,'-').toLowerCase():null;
	};
});