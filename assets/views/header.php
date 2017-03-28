<div ng-controller="HeaderController" class="text-center">
	
	<!--talvez por a coluna mas n sei qual o tamanho-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<a href="http://localhost/Cres_pass/" title="crescendo e passando"><img class="img-responsive center-block img-circle" src="http://www.mibebeyyo.com/images/home/seguridad-objetos-cocina-1293.jpg" width="100" height="100"></a>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default" data-spy="affix" data-offset-top="100">
		<div class="col-md-4">
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropbtn" data-toggle="dropdown" href="#">Produtos<span class="caret"></span></a>
						<ul class="dropdown-content">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropbtn" data-toggle="dropdown" href="#">Marcas<span class="caret"></span></a>
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
		<div class="navbar-header">
			<div class="col-xs-6 col-xs-offset-3">
				<button type="button" class="navbar-toggle btn-block text-center" data-toggle="collapse" data-target="#myNavbar">
					<i id="toggleIcon"class="fa fa-caret-square-o-down" aria-hidden="true"></i>
				</button>
			</div>
		</div>
		<div class="col-md-4">
			<form class="navbar-form" ng-submit="search(searchInput)">
				<div class="input-group">
					<input ng-model="searchInput" type="text" class="form-control" placeholder="Procure">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="submit"><span class="fa fa-search"></span></button>
					</span>
				</div>
			</form>
		</div>
		<div class="nav navbar-nav text-center">
			<a data-toggle="modal" data-target="#loginModal">LOGIN</a>
			ou faça seu
			<a ng-click="go('/cadastro')">CADASTRO</a>
		</div> 
	</nav>
	<!-- LOGIN MODAL -->
	<modal modal-id="loginModal" modal-type="sm" modal-title="Login">
		<form ng-submit="login(field)">
			<label>Email</label>
			<input type="text"  class="form-control" ng-model="input.email" placeholder="Seu email">
			<br>
			<label>Senha</label>
			<input type="text"  class="form-control" ng-model="input.pass" placeholder="Sua senha">
			<br>
			<button class="btn btn-primary btn-block" type="submit">Acessar</button>
		</form>
	</modal>
	<!-- END LOGIN MODAL -->
</div> <!-- .HeaderController -->

<!-- Nav bar icon toggler -->
<script type="text/javascript">
	$('#myNavbar').on('shown.bs.collapse', function () {
       $("#toggleIcon").removeClass("fa-caret-square-o-down").addClass("fa-caret-square-o-up");
    });

    $('#myNavbar').on('hidden.bs.collapse', function () {
       $("#toggleIcon").removeClass("fa-caret-square-o-up").addClass("fa-caret-square-o-down");
    });
</script>
