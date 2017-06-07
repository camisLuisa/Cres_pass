<div class="container">
	<div class="row">
		Products content
		<button data-toggle="modal" data-target="#ProductModal">Adicionar produto</button>
	</div>
</div>

<modal modal-id="ProductModal" modal-type="lg" modal-title="Produto">
	<form class="w3-container" name="productForm" ng-submit="login(field)">
		<div class="w3-row-padding">
			<div class="w3-col">
				<label>Nome do produto</label>
				<input type="text" name="name" class="w3-input w3-border w3-round" ng-model="field.name">
				<div ng-if="productForm.$submitted && productForm.name.$invalid">
					<span ng-if="productForm.name.$error.required">Este campo é obrigatório</span>
				</div>
			</div>
			<div class="w3-third">
				<label>Marca</label>
				<input type="text" name="mark" class="w3-input w3-border w3-round" ng-model="field.mark">
			</div>
			<div class="w3-third">
				<label>Categoria</label>
				<select name="category" class="w3-input w3-border w3-round" ng-model="field.category">
								<option disabled selected hidden></option>
								<option value="1">Acessórios</option>
								<option value="2">Alimentação</option>
								<option value="3">Banho e Higiene</option>
								<option value="4">Brinquedos</option>
								<option value="5">Cama e Decoração</option>
								<option value="6">Carrinho e Cia</option>
								<option value="7">Festas Infantis</option>
								<option value="8">Livros e DVD`s</option>
								<option value="9">Móveis</option>
								<option value="10">Roupas</option>
								<option value="11">Sapatos</option>
				</select>
			</div>
			<div class="w3-third">
				<label>Gênero do produto</label>
				<select name="category" class="w3-input w3-border w3-round" ng-model="field.category">
								<option disabled selected hidden></option>
								<option value="1">Meninos e meninas</option>
								<option value="2">Meninos</option>
								<option value="3">Meninas</option>
				</select>
			</div>
		</div>
		<div class="w3-row text center">
			<button class="w3-btn w3-green" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
		</div>
	</form>
</modal>