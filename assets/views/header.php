
<div ng-controller="HeaderController">
	<div class="container-fluid">	
		<div class="row">	
			<nav class="navbar navbar-default text-center"><!-- queria por o navbar fixed mas aconteceu um problema semelhante a algo que alyson uma vez falou... perguntar a ele como resolver -->

				<div class="container">
					<div class="row">
						<!-- LOGO/BRAND/IMAGE -->
						<div class="col-md-4">
							<a href="http://localhost/Cres_pass/" title="crescendo e passando"><img src="http://www.mibebeyyo.com/images/home/seguridad-objetos-cocina-1293.jpg" class="img-circle" width="100" height="100"></a>
						</div>
						<!-- SEACH BOX -->
						<div class="col-md-4">
							<form class="navbar-form" ng-submit="search(searchInput)">
								<div class="form-group">
									<input ng-model="searchInput" type="text class="form-control" placeholder="Procure">
								</div>
								<button class="btn btn-primary" type="submit">Buscar</button>
							</form>
						</div>
						<!-- LOGIN BUTTON & MODAL -->
						<div class="col-md-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">LOGIN</button>
							<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="X"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<div ng-controller="LoginController">
												<h1>LOGIN</h1>
												<form ng-submit="login(field)">
													<input type="text" class="form-control" id="user" placeholder="Usuário" required ng-model="field.username">
													<input type="password" class="form-control" id="password" placeholder="Senha" required ng-model="field.password">
													<button class="btn btn-primary pull-right" type="submit">LOGIN</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SIGN UP BUTTON -->
							<button class="btn btn-primary" ng-click="go('/cadastro')">CADASTRO</button>
						</div> 
					</div>
				</div>	

				<!-- NAVBAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="nav navbar-nav">
								<li class="dropdown"><a class="dropbtn" data-toggle="dropdown" href="#">Produtos<span class="caret"></span></a>
									<ul class="dropdown-content">
										<li><a href="#">Page 1-1</a></li>
										<li><a href="#">Page 1-2</a></li>
										<li><a href="#">Page 1-3</a></li>
									</ul>
								</li>
								<li class="dropdown"><a class="dropbtn" data-toggle="dropdown" href="#">Marcas<span class="caret"></span></a>
									<ul class="dropdown-content">
										<li><a href="#">Page 1-1</a></li>
										<li><a href="#">Page 1-2</a></li>
										<li><a href="#">Page 1-3</a></li>
									</ul>
								</li>
								<li><a href="#">Lojinhas</a></li>
							</ul>
						</div>
					</div>
				</div>

			</nav>
		</div>
	</div>

</div> <!-- .HeaderController -->