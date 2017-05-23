/* ------------------------------
 *
 * ------------------------------
 */
app.config(function($stateProvider,$pathToProvider, $locationProvider, $urlRouterProvider){
 	$locationProvider.html5Mode(true);

	/*Constant paths to public sub-folders*/
 	$pathToProvider
		.addPath({
			name:"jsFolder",
			folder:"js"
		})
		.addPath({
			name:"directivesFolder",
			folder:"directives",
			parent:"jsFolder"
		})
		.addPath({
			name:"viewsFolder",
			folder:"views"
		})
		.addPath({
			name:"imgFolder",
			folder:"img"
		});

	/*Getting the paths defined by pathToProvider*/
	var pathTo = $pathToProvider.$get();

	/*UI-Router states*/
	$stateProvider
	.state({
		name: 'base',
		templateUrl: pathTo.viewsFolder+'base.php',
		controller: 'BaseController'
	})
	.state({
		name: 'base.home',
		url: '/',
		templateUrl: pathTo.viewsFolder+'home.php',
		controller: 'HomeController'
	})
	.state({
		name: 'base.signup',
		url: '/cadastro',
		templateUrl: pathTo.viewsFolder+'signup.php',
		controller: 'SignUpController'
	})
	.state({
		name: 'base.panel',
		url: '/painel',
		templateUrl: pathTo.viewsFolder+'panel.php',
		controller: 'PanelController'
	})
	.state({
		name: 'base.panel.signup',
		templateUrl: pathTo.viewsFolder+'signup.php',
		controller: 'SignUpController'
	})
	.state({
		name: 'base.panel.storeCreate',
		templateUrl: pathTo.viewsFolder+'storeCreate.php',
		controller: 'StoreCreateController'
	})
	;

 	$urlRouterProvider.otherwise('/');
});
