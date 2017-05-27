<div id="fixed-header" class="navbar-fixed-top">
	<div class="w3-container w3-light-blue">
		<div class="w3-content w3-center w3-padding-16">
			<div class="w3-row-padding">
				<div class="w3-col m3 hidden-xs">
					<a href="<?php echo $_SERVER['HTTP_HOST'] ?>" title="crescendo e passando">
					<img class="img-responsive center-block img-circle" src="{{imgFolder}}seguridad-objetos-cocina-1293.jpg" width="100" height="100">
					</a>
				</div>
				<div class="w3-col m6">
					<form ng-submit="search(searchInput)">
						<div class="input-group">
							<input ng-model="searchInput" type="text" class="form-control" placeholder="Procure...">
							<span class="input-group-btn">
							<button class="btn btn-primary" type="submit"><span class="fa fa-search"></span></button>
							</span>
						</div>
					</form>
				</div>

				<div class="w3-col m3">
					<div ng-if="user.store">
						<a ui-sref="root.panel.home">Olá, {{user.name}}</a>
					</div>
					<div ng-if="!user.store">
						<a data-toggle="modal" data-target="#loginModal">LOGIN</a> ou faça já o seu <a ui-sref="root.signup">CADASTRO</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Navbar -->
	<div class="w3-container w3-white">
		<div class="w3-content">
			<div class="w3-bar hidden-xs">
				<a href="#" class="w3-bar-item w3-mobile w3-button">Produtos</a>
				<div class="w3-dropdown-hover w3-mobile">
					<button class="w3-button ">Dropdown</button>
					<div class="w3-dropdown-content w3-bar-block w3-card-4">
						<a href="#" class="w3-bar-item w3-button">Link 1</a>
						<a href="#" class="w3-bar-item w3-button">Link 2</a>
						<a href="#" class="w3-bar-item w3-button">Link 3</a>
					</div>
				</div>
				<a href="#" class="w3-bar-item w3-mobile w3-button">Link 1</a>
			</div>
		</div>
	</div>
</div>
<!-- Content -->
<div class="w3-container w3-mobile margin-fixed-top">
	<ui-view></ui-view>
</div>
<div class="w3-container footer">
	<div class="row">
		<p>O que voce procura?</p>
		<ul>
			<li>Acessórios</li>
			<li>Alimentação</li>
			<li>Banho e Higiene</li>
			<li>Brinquedos</li>
			<li>Cama e Decoração</li>
			<li>Roupas</li>
		</ul>
	</div>
	<div class="row">
		<p>Formas de pagamento</p>
		<div class="imageCartao"></div>
	</div>
	<div class="row copyright">
		<p>&reg; Crescendo e Passando - 2017</p>
	</div>
</div>
<!--
<style type="text/css">
.affix ~ .container-fluid {
	 position: relative;
	 top: 50px;
  }
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<a href="http://localhost/Cres_pass/" title="crescendo e passando"><img class="img-responsive center-block img-circle" src="<?= IMG_LINK ?>seguridad-objetos-cocina-1293.jpg" width="100" height="100"></a>
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
		<a ng-click="go('root.signup')">CADASTRO</a>
	</div> 
</nav>

<ui-view></ui-view>

<div class="container-fluid footer">
	<div class="row">
		<p>O que voce procura?</p>
		<ul>
			<li>Acessórios</li>
			<li>Alimentação</li>
			<li>Banho e Higiene</li>
			<li>Brinquedos</li>
			<li>Cama e Decoração</li>
			<li>Roupas</li>
		</ul>
	</div>
	<div class="row">
		<p>Formas de pagamento</p>
		<div class="imageCartao"></div>
	</div>
	<div class="row copyright">
		<p>&reg; Crescendo e Passando - 2017</p>
	</div>
</div>
-->
<modal class="text-center" modal-id="loginModal" modal-type="sm" modal-title="Login">
	<form name="Form" ng-submit="login(input)">
		<label>Email</label>
		<input type="email" name="Email" class="form-control" ng-model="input.email" placeholder="Seu email" required>
		<br>
		<div ng-if="Form.$submitted && Form.Email.$invalid">
				<span ng-if="Form.Email.$error.required">Este campo é obrigatório</span>
				<span ng-if="Form.Email.$error.email">Este não é um email valido</span>
			</div>
		<label>Senha</label>
		<input type="password" name="Password" class="form-control" ng-model="input.password" placeholder="Sua senha" required>
		<br>
		<div ng-if="Form.$submitted && Form.Password.$invalid">
				<span ng-if="Form.Password.$error.required">Este campo é obrigatório</span>
			</div>
		<button class="btn btn-primary btn-block" type="submit">Acessar</button>
	</form>
</modal>

<script type="text/javascript">
	$('#myNavbar').on('shown.bs.collapse', function () {
	   $("#toggleIcon").removeClass("fa-caret-square-o-down").addClass("fa-caret-square-o-up");
	});

	$('#myNavbar').on('hidden.bs.collapse', function () {
	   $("#toggleIcon").removeClass("fa-caret-square-o-up").addClass("fa-caret-square-o-down");
	});
</script>
