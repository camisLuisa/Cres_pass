var viewsPath = 'public/views/';
var directivesPath = 'public/js/directives/';

/* ----------------------------------------
 * 
 * ----------------------------------------
 */
var app = angular.module('app', ['ui.router', 'ngMask']);

app.provider("$pathTo", function(){
	var base = Window.PUBLIC_FOLDER_BASE_LINK;
	var paths = {};
	return{
		addPath: function(param){
			var newPath =
				((typeof param.parent === "undefined")?
					base:
					paths[param.parent]
				)+param.folder+'/';
			paths[param.name] = newPath;
			return this;
		},
		$get: function(){
			return paths
		}
	}
});

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
});