<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form name="storeCreateForm" ng-submit="submitForm(fields)" novalidate>
				Vamos lá! primeiro, nos diga o nome de sua lojinha...
				<input type="text" name="name" class="form-control" id="name" maxlength="50" placeholder="Nome da sua lojinha" required ng-model="fields.name">
				<div ng-if="(storeCreateForm.name.$touched || storeCreateForm.$submitted) && storeCreateForm.name.$invalid">
					<span ng-if="storeCreateForm.name.$error.required">Este campo é obrigatório</span>
				</div>
				O seu endereço será: www.crescendoepassando.com.br/loja/<span ng-bind="parseToLink(fields.name)"></span>
				<button class="btn btn-primary" type="submit">Criar minha loja!</button>
			</form>
		</div>
	</div>	
</div>