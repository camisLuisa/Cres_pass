<div class="container signup">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>CADASTRO</h1>
			<form ng-submit="signup(field)">
				<input type="text" class="form-control" id="user" placeholder="Usuário" required ng-model="field.username">
				<input type="email" class="form-control" id="email" placeholder="Email" required ng-model="field.email">
				<input type="password" class="form-control" id="password" placeholder="Senha" required ng-model="field.password">
				<input type="password" class="form-control" id="passwordcheck" placeholder="Confirmar senha" required ng-model="field.passwordcheck">
				<button type="submit">CADASTRAR</button>
			</form>
		</div>	
	</div>
	<div class="col-md-4"></div>
</div>