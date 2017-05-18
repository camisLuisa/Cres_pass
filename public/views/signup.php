<div class="container signup">
	<div class="row">
		<div class="col-md-4"></div><!--por que tem essa div sem nada?-->
		<div class="col-md-4">
			<h1>CADASTRO</h1>
			<form name="form1" ng-submit="signup(field)" novalidate>
				<div ng-hide="proximo >= 1">	
					<h2>Seus dados pessoais</h2>

					<input type="text" name="nameUser" class="form-control" id="user" maxlength="50" placeholder="Nome" required ng-model="field.name">
					<div ng-if="(form1.nameUser.$touched || form1.$submitted) && form1.nameUser.$invalid">
						<span ng-if="form1.nameUser.$error.required">Este campo é obrigatório</span>
					</div>
					
					<input type="text" class="form-control" id="lastName" maxlength="50" placeholder="Sobrenome" required ng-model="field.last_name">

					<input name="cpf1" type="text" class="form-control" id="cpf" placeholder="CPF" required ng-model="field.cpf" mask ="999.999.999-99">
					<div ng-if="(form1.cpf1.$touched || form1.$submitted) && form1.cpf1.$invalid">
						<span ng-if="form1.cpf1.$error.required">Este campo é obrigatório</span>
					</div>
					
					<input name="rg1" type="text" class="form-control" id="rg" maxlength="50" placeholder="RG" required ng-model="field.rg" mask ="9.999.999">
					<div ng-if="(form1.rg1.$touched || form1.$submitted) && form1.rg1.$invalid">
						<span ng-if="form1.rg1.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="ddd11" type="text" class="form-control" id="ddd1" placeholder="DDD 1" required ng-model="field.ddd_1" mask ="999">
					<div ng-if="(form1.ddd11.$touched || form1.$submitted) && form1.ddd11.$invalid">
						<span ng-if="form1.ddd11.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="tel11" type="tel" class="form-control" id="tel1" maxlength="11" placeholder="telefone fixo" required ng-model="field.tel_1" mask ="9999-99999">
					<div ng-if="(form1.tel11.$touched || form1.$submitted) && form1.tel11.$invalid">
						<span ng-if="form1.tel11.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="ddd22" type="text" class="form-control" id="ddd2" placeholder="DDD 2" required  ng-model="field.ddd_2" mask ="999">
					<div ng-if="(form1.ddd22.$touched || form1.$submitted) && form1.ddd22.$invalid">
						<span ng-if="form1.ddd22.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="tel22" type="tel" class="form-control" id="tel2" maxlength="11" placeholder="telefone 2" required ng-model="field.tel_2" mask ="99999-9999">
					<div ng-if="(form1.tel22.$touched || form1.$submitted) && form1.tel22.$invalid">
						<span ng-if="form1.tel22.$error.required">Este campo é obrigatório</span>
					</div>
				</div>

				<div ng-show = "proximo == 1">
					<h2>Dados para login</h2>				

					<input name="email1" type="email" class="form-control" id="email" maxlength="50" placeholder="email" required ng-model="field.email">
					<div ng-if="(form1.email1.$touched || form1.$submitted) && form1.email1.$invalid">
						<span ng-if="form1.email1.$error.required">Este campo é obrigatório</span>
						<span ng-if="form1.email1.$error.email">Este não é um email valido</span>
					</div>
					
					<input name="password1" type="password" class="form-control" id="password" maxlength="50" placeholder="Senha" required ng-model="field.password">
					<div ng-if="(form1.password1.$touched || form1.$submitted) && form1.password1.$invalid">
						<span ng-if="form1.password1.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="passwordcheck1" type="password" class="form-control" id="passwordcheck" maxlength="50" placeholder="Confirmar senha" required ng-model="field.passwordcheck">
					<div ng-if="(form1.passwordcheck1.$touched || form1.$submitted) && form1.passwordcheck1.$invalid">
						<span ng-if="form1.passwordcheck1.$error.required">Este campo é obrigatório</span>
					</div>
				</div>

				<div ng-show = "proximo == 2">

					<h2>Seu endereço</h2>
					
					<input name="cep1" type="text" class="form-control" id="cep" placeholder="CEP" required title="Insira apenas números" ng-model="field.cep" mask ="99999-999">
					<div ng-if="(form1.cep1.$touched || form1.$submitted) && form1.cep1.$invalid">
						<span ng-if="form1.cep1.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="street1" type="text" class="form-control" id="street" maxlength="50" placeholder="Rua" required ng-model="field.street">
					<div ng-if="(form1.street1.$touched || form1.$submitted) && form1.street1.$invalid">
						<span ng-if="form1.street1.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="number1" type="text" class="form-control" id="number" maxlength="50" placeholder="Número" required title="Insira apenas números" ng-model="field.number" mask ="999">
					<div ng-if="(form1.number1.$touched || form1.$submitted) && form1.number1.$invalid">
						<span ng-if="form1.number1.$error.required">Este campo é obrigatório</span>
					</div>

					<input type="text" class="form-control" id="complement" maxlength="50" placeholder="Complemento" required ng-model="field.complement">

					<input name="neighborhood1" type="text" class="form-control" id="neighborhood" maxlength="50" placeholder="Bairro" required ng-model="field.neighborhood">
					<div ng-if="(form1.neighborhood1.$touched || form1.$submitted) && form1.neighborhood1.$invalid">
						<span ng-if="form1.neighborhood1.$error.required">Este campo é obrigatório</span>
					</div>

					<input type="text" class="form-control" id="reference" maxlength="50" placeholder="referência" required ng-model="field.reference">

					<input name="city1" type="text" class="form-control" id="city" maxlength="50" placeholder="Cidade" required ng-model="field.city">
					<div ng-if="(form1.city1.$touched || form1.$submitted) && form1.city1.$invalid">
						<span ng-if="form1.city1.$error.required">Este campo é obrigatório</span>
					</div>

					<input name="state1" type="text" class="form-control" id="state" maxlength="50" placeholder="Estado" required ng-model="field.state">
					<div ng-if="(form1.state1.$touched || form1.$submitted) && form1.state1.$invalid">
						<span ng-if="form1.state1.$error.required">Este campo é obrigatório</span>
					</div>

					<button class="btn btn-primary" type="submit">CADASTRAR</button>
				</div>

				<button type="button" ng-click="proximo = proximo+1" ng-init = "proximo = 0" ng-hide = "proximo==2">proximo</button>
				<button type="button" ng-click="proximo = proximo-1" ng-hide = "proximo ==0">anterior</button>
			</form>
		</div>	
	</div>
	<div class="col-md-4"></div>
</div>