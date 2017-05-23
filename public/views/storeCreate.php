<div class="container signup">
	<div class="row">
		<div class="col-md-6">
			<form name="signupForm" ng-submit="signup(field)" novalidate>
				Vamos lá! primeiro, nos diga o nome de sua lojinha...
				<input type="text" name="name" class="form-control" id="name" maxlength="50" placeholder="Nome da sua lojinha" required ng-model="field.name">
				<div ng-if="(signupForm.name.$touched || signupForm.$submitted) && signupForm.name.$invalid">
					<span ng-if="signupForm.name.$error.required">Este campo é obrigatório</span>
				</div>
				O seu endereço será: www.crescendoepassando.com.br/loja/<span ng-bind="parseToLink(field.name)"></span>
				<button class="btn btn-primary" type="submit">Criar minha loja!</button>
			</form>
		</div>
	</div>	
</div>