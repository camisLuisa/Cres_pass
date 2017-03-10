<div class="container login">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>LOGIN</h1>
			<form ng-submit="login(field)">
				<input type="text" class="form-control" id="user" placeholder="Usuário" required ng-model="field.username">
				<input type="password" class="form-control" id="password" placeholder="Senha" required ng-model="field.password">
				<button type="submit">LOGIN</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
