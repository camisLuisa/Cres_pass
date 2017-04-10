var viewsPath = 'public/views/';
var directivesPath = 'public/js/directives/';

/* ----------------------------------------
 * 
 * ----------------------------------------
 */
var app = angular.module('app', ['ui.router', 'ngMask']);

app.service('user', function($http, $state) {

	this.onlyUsers = function(){
    	$http.get('system/User/get_infos')
    	.then(
    		function success(response){
    			if(!response.data.success)
					$state.go('base.home');
    		}, function error(response){
    			console.log('HTTP ERROR: '+response.status);
    		}
    	);
	}

    this.loadInfos = function(){
    	return $http.get('system/User/get_infos')
    	.then(
    		function success(response){
    			if(response.data.success){
    				return response.data.user;
    			} else {
    				return null;
    			}
    		}, function error(response){
    			console.log('HTTP ERROR: '+response.status);
    		}
    	);
    }
	this.infos = this.loadInfos();
});