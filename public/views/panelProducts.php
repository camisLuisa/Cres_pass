<div class="container">
	<div class="row">
		Products content
		<button data-toggle="modal" data-target="#ProductModal">Adicionar produto</button>
	</div>
</div>

<modal modal-id="ProductModal" modal-type="lg" modal-title="Produto">
	<form class="w3-container" name="productForm" ng-submit="login(field)">
		<div class="w3-row">
			<label>Nome do produto</label>
			<input type="text" name="name" class="w3-input w3-border w3-round" ng-model="field.name" placeholder="Digite o nome do produto">
			<div ng-if="productForm.$submitted && productForm.name.$invalid">
				<span ng-if="productForm.name.$error.required">Este campo é obrigatório</span>
			</div>
			<div class="w3-third">
				<label>Marca</label>
				<input type="text" name="name" class="w3-input w3-border w3-round" ng-model="field.name" placeholder="Digite o nome do produto">
			</div>
		</div>
		<div class="w3-row">
			<button class="w3-btn w3-green" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
		</div>
	</form>
</modal>