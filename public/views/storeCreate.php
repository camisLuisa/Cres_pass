<div class="container-fluid signup">
	<div class="row">
		<div class="col-md-4">
			<form name="signupForm" ng-submit="signup(field)" novalidate>
				Vamos lá! primeiro, nos diga o nome de sua lojinha...
				<input type="text" name="name" class="form-control" id="name" maxlength="50" placeholder="Nome da sua lojinha" required ng-model="field.name">
				<div ng-if="(signupForm.name.$touched || signupForm.$submitted) && signupForm.name.$invalid">
					<span ng-if="signupForm.name.$error.required">Este campo é obrigatório</span>
				</div>
				O seu endereço será: www.crescendoepassando.com.br/loja/{{field.name.replace(/ /gi, '-')}}
				
				<input type="text" class="form-control" id="lastName" maxlength="50" placeholder="Sobrenome" required ng-model="field.last_name">

				<input name="cpf1" type="text" class="form-control" id="cpf" placeholder="CPF" required ng-model="field.cpf" mask ="999.999.999-99">
				<div ng-if="(signupForm.cpf1.$touched || signupForm.$submitted) && signupForm.cpf1.$invalid">
					<span ng-if="signupForm.cpf1.$error.required">Este campo é obrigatório</span>
				</div>
				
				<input name="rg1" type="text" class="form-control" id="rg" maxlength="50" placeholder="RG" required ng-model="field.rg" mask ="9.999.999">
				<div ng-if="(signupForm.rg1.$touched || signupForm.$submitted) && signupForm.rg1.$invalid">
					<span ng-if="signupForm.rg1.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="ddd11" type="text" class="form-control" id="ddd1" placeholder="DDD 1" required ng-model="field.ddd_1" mask ="999">
				<div ng-if="(signupForm.ddd11.$touched || signupForm.$submitted) && signupForm.ddd11.$invalid">
					<span ng-if="signupForm.ddd11.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="tel11" type="tel" class="form-control" id="tel1" maxlength="11" placeholder="telefone fixo" required ng-model="field.tel_1" mask ="9999-9999">
				<div ng-if="(signupForm.tel11.$touched || signupForm.$submitted) && signupForm.tel11.$invalid">
					<span ng-if="signupForm.tel11.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="ddd22" type="text" class="form-control" id="ddd2" placeholder="DDD 2" required  ng-model="field.ddd_2" mask ="999">
				<div ng-if="(signupForm.ddd22.$touched || signupForm.$submitted) && signupForm.ddd22.$invalid">
					<span ng-if="signupForm.ddd22.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="tel22" type="tel" class="form-control" id="tel2" maxlength="11" placeholder="telefone 2" required ng-model="field.tel_2" mask ="99999-9999">
				<div ng-if="(signupForm.tel22.$touched || signupForm.$submitted) && signupForm.tel22.$invalid">
					<span ng-if="signupForm.tel22.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="email1" type="email" class="form-control" id="email" maxlength="50" placeholder="email" required ng-model="field.email">
				<div ng-if="(signupForm.email1.$touched || signupForm.$submitted) && signupForm.email1.$invalid">
					<span ng-if="signupForm.email1.$error.required">Este campo é obrigatório</span>
					<span ng-if="signupForm.email1.$error.email">Este não é um email valido</span>
				</div>
				
				<input name="password1" type="password" class="form-control" id="password" maxlength="50" placeholder="Senha" required ng-model="field.password">
				<div ng-if="(signupForm.password1.$touched || signupForm.$submitted) && signupForm.password1.$invalid">
					<span ng-if="signupForm.password1.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="passwordcheck1" type="password" class="form-control" id="passwordcheck" maxlength="50" placeholder="Confirmar senha" required ng-model="field.passwordcheck">
				<div ng-if="(signupForm.passwordcheck1.$touched || signupForm.$submitted) && signupForm.passwordcheck1.$invalid">
					<span ng-if="signupForm.passwordcheck1.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="cep1" type="text" class="form-control" id="cep" placeholder="CEP" required title="Insira apenas números" ng-model="field.cep" mask ="99999-999">
				<div ng-if="(signupForm.cep1.$touched || signupForm.$submitted) && signupForm.cep1.$invalid">
					<span ng-if="signupForm.cep1.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="street1" type="text" class="form-control" id="street" maxlength="50" placeholder="Rua" required ng-model="field.street">
				<div ng-if="(signupForm.street1.$touched || signupForm.$submitted) && signupForm.street1.$invalid">
					<span ng-if="signupForm.street1.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="number1" type="text" class="form-control" id="number" maxlength="50" placeholder="Número" required title="Insira apenas números" ng-model="field.number" mask ="999">
				<div ng-if="(signupForm.number1.$touched || signupForm.$submitted) && signupForm.number1.$invalid">
					<span ng-if="signupForm.number1.$error.required">Este campo é obrigatório</span>
				</div>

				<input type="text" class="form-control" id="complement" maxlength="50" placeholder="Complemento" required ng-model="field.complement">

				<input name="neighborhood1" type="text" class="form-control" id="neighborhood" maxlength="50" placeholder="Bairro" required ng-model="field.neighborhood">
				<div ng-if="(signupForm.neighborhood1.$touched || signupForm.$submitted) && signupForm.neighborhood1.$invalid">
					<span ng-if="signupForm.neighborhood1.$error.required">Este campo é obrigatório</span>
				</div>

				<input type="text" class="form-control" id="reference" maxlength="50" placeholder="referência" required ng-model="field.reference">

				<input name="city1" type="text" class="form-control" id="city" maxlength="50" placeholder="Cidade" required ng-model="field.city">
				<div ng-if="(signupForm.city1.$touched || signupForm.$submitted) && signupForm.city1.$invalid">
					<span ng-if="signupForm.city1.$error.required">Este campo é obrigatório</span>
				</div>

				<input name="state1" type="text" class="form-control" id="state" maxlength="50" placeholder="Estado" required ng-model="field.state">
				<div ng-if="(signupForm.state1.$touched || signupForm.$submitted) && signupForm.state1.$invalid">
					<span ng-if="signupForm.state1.$error.required">Este campo é obrigatório</span>
				</div>

				<button class="btn btn-primary" type="submit">Salvar</button>
			</form>
		</div>
	</div>	
</div>