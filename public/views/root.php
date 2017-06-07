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

<!-- CONTENT -->
<div class="w3-container w3-mobile margin-fixed-top">
	<ui-view></ui-view>
</div>

<!-- FOOTER -->
<div class="w3-container footer">
	<div class="w3-row copyright">
		<p>&reg; Crescendo e Passando - 2017</p>
	</div>
</div>

<!-- MODAL -->
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
