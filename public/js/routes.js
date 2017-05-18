/* ------------------------------
 * 
 * ------------------------------
 */
app.config(function($stateProvider, $locationProvider, $urlRouterProvider){
 	$locationProvider.html5Mode(true);

	$stateProvider
	.state({
		name: 'base',
		templateUrl: viewsPath+'base.php',
		controller: 'BaseController'
	})
	.state({
		name: 'base.home',
		url: '/',
		templateUrl: viewsPath+'home.php',
		controller: 'HomeController'
	})
	.state({
		name: 'base.signup',
		url: '/cadastro',
		templateUrl: viewsPath+'signup.php',
		controller: 'SignUpController'
	})
	.state({
		name: 'base.panel',
		url: '/painel',
		templateUrl: viewsPath+'panel.php',
		controller: 'PanelController'
	})

	.state({
		name: 'base.panel.signup',
		templateUrl: viewsPath+'signup.php',
		controller: 'SignUpController'
	})
	;

 	$urlRouterProvider.otherwise('/');
});