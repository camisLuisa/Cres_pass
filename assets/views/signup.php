<div class="container signup">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>CADASTRO</h1>
			<form ng-submit="signup(field)">
				<input type="text" class="form-control" id="user" maxlength="50" placeholder="Nome" required ng-model="name">
				<input type="text" class="form-control" id="lastName" maxlength="50" placeholder="Sobrenome" required ng-model="last_name">
				<input type="email" class="form-control" id="email" maxlength="50" placeholder="email" required ng-model="email">
				<input type="number" class="form=control" id="cep" maxlength="8" placeholder="CEP" required ng-model="cep">
				<input type="text" class="form-control" id="cpf" placeholder="CPF" maxlength="14" required ng-model="cpf"">
				<input type="password" class="form-control" id="password" placeholder="Senha" required ng-model="field.password">
				<input type="number" class="form-control" id="ddd1" maxlength="2" placeholder="DDD 1" required ng-model="ddd_1">
				<input type="tel" class="form-control" id="tel1" maxlength="11" placeholder="telefone 1" required ng-model="tel_1">
				<input type="number" class="form-control" id="ddd2" maxlength="2" placeholder="DDD 2" required ng-model="ddd_2">
				<input type="tel" class="form-control" id="tel2" maxlength="11" placeholder="telefone 2" required ng-model="tel_2">
				<input type="text" class="form-control" id="street" maxlength="50" placeholder="Rua" required ng-model="street">
				<input type="number" class="form-control" id="number" maxlength="50" placeholder="Número" required ng-model="number">
				<input type="text" class="form-control" id="complement" maxlength="50" placeholder="Complemento" required ng-model="complement">
				<input type="text" class="form-control" id="neighborhood" maxlength="50" placeholder="Bairro" required ng-model="neighborhood">
				<input type="text" class="form-control" id="reference" maxlength="50" placeholder="reference" required ng-model="reference">

				<input type="text" class="form-control" id="city" maxlength="50" placeholder="Cidade" required ng-model="city">
				<input type="text" class="form-control" id="state" maxlength="50" placeholder="Estado" required ng-model="state">
				<input type="number" class="form-control" id="rg" maxlength="50" placeholder="RG" required ng-model="rg">
				<input type="password" class="form-control" id="password" maxlength="50" placeholder="Senha" required ng-model="password">
				<input type="password" class="form-control" id="passwordcheck" maxlength="50" placeholder="Confirmar senha" required ng-model="passwordcheck">
				<button class="btn btn-primary" type="submit">CADASTRAR</button>
			</form>
		</div>	
	</div>
	<div class="col-md-4"></div>
</div>