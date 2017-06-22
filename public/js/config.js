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
		name: 'root',
		templateUrl: pathTo.viewsFolder+'root.php', /*TESTING NEW ROOT PAGE*/
		controller: 'RootController'
	})
	.state({
		name: 'root.home',
		url: '/',
		templateUrl: pathTo.viewsFolder+'home.php',
		controller: 'HomeController'
	})
	.state({
		name: 'root.signup',
		url: '/cadastro',
		templateUrl: pathTo.viewsFolder+'signup.php',
		controller: 'SignUpController'
	})
	.state({
		name: 'root.panel',
		templateUrl: pathTo.viewsFolder+'panel.php',
		controller: 'PanelController'
	})
	.state({
		name: 'root.panel.home',
		url: '/painel',
		templateUrl: pathTo.viewsFolder+'panelHome.php',
		controller: 'PanelHomeController'
	})
	.state({
		name: 'root.panel.products',
		templateUrl: pathTo.viewsFolder+'panelProducts.php',
		controller: 'PanelProductsController'
	})
	.state({
		name: 'root.panel.signup',
		templateUrl: pathTo.viewsFolder+'panelSignup.php',
		controller: 'PanelSignupController'
	})
	.state({
		name: 'root.panel.createStore',
		templateUrl: pathTo.viewsFolder+'panelCreateStore.php',
		controller: 'PanelCreateStoreController'
	})
	.state({
		name: 'root.viewStore',
		url: '/loja/:name',
		templateUrl: pathTo.viewsFolder+'viewStore.php',
		controller: 'ViewStoreController'
	})
	.state({
		name: 'root.panel.myStore',
		templateUrl: pathTo.viewsFolder+'myStore.php',
		controller: 'MyStoreController'
	})
	;

 	$urlRouterProvider.otherwise('/');
});
