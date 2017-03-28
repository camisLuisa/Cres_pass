/* ------------------------------
 * 
 * ------------------------------
 */
app.config(function($routeProvider, $locationProvider){
 	$locationProvider.html5Mode(true);

	//Define the custom routes
	$routeProvider
	.when('/', {
		templateUrl: viewsPath+'home.php',
		controller: 'HomeController'
	})
	.when('/cadastro', {
		templateUrl: viewsPath+'signup.php',
		controller: 'SignUpController'
	})
	.when('/painel', {
		templateUrl: viewsPath+'panel.php',
		controller: 'PanelController'
	})
	.otherwise({redirectTo: '/'});
});