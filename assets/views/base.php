<!-- HEADER -->
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
		<a ng-click="go('base.signup')">CADASTRO</a>
	</div> 
</nav>
<!-- END HEADER -->

	<ui-view></ui-view>

	<!-- FOOTER -->
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
	<!-- END FOOTER -->

<!-- LOGIN MODAL -->
<modal class="text-center" modal-id="loginModal" modal-type="sm" modal-title="Login">
	<form name="Form" ng-submit="login(input)">
		<label>Email</label>
		<input type="email" name="Email" class="form-control" ng-model="input.email" placeholder="Seu email" required>
		<br>
		<div ng-if="(Form.Email.$touched || Form.$submitted) && Form.Email.$invalid">
				<span ng-if="Form.Email.$error.required">Este campo é obrigatório</span>
				<span ng-if="Form.Email.$error.email">Este não é um email valido</span>
			</div>
		<label>Senha</label>
		<input type="password" name="Password" class="form-control" ng-model="input.password" placeholder="Sua senha" required>
		<br>
		<div ng-if="(Form.Password.$touched || Form.$submitted) && Form.Password.$invalid">
				<span ng-if="Form.Password.$error.required">Este campo é obrigatório</span>
			</div>
		<button class="btn btn-primary btn-block" type="submit">Acessar</button>
	</form>
</modal>
<!-- END LOGIN MODAL -->

<!-- Nav bar icon toggler -->
<script type="text/javascript">
	$('#myNavbar').on('shown.bs.collapse', function () {
       $("#toggleIcon").removeClass("fa-caret-square-o-down").addClass("fa-caret-square-o-up");
    });

    $('#myNavbar').on('hidden.bs.collapse', function () {
       $("#toggleIcon").removeClass("fa-caret-square-o-up").addClass("fa-caret-square-o-down");
    });
</script>