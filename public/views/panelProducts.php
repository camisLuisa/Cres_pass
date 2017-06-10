<style type="text/css">
	.drop-area{
		height: 100px;
		background-color: grey;
	}
	#FileUploadInput {
		width: 0.1px;
		height: 0.1px;
		opacity: 0;
		overflow: hidden;
		position: absolute;
		z-index: -1;
	}
</style>

<div class="container">
	<div class="row">
		Products content
		<button data-toggle="modal" data-target="#ProductModal">Adicionar produto</button>
	</div>
</div>

<modal modal-id="ProductModal" modal-type="lg" modal-title="Produto">
	<form class="container-fluid" name="productForm" ng-submit="login(field)">
		<div class="row">
			<div class="col-md-12">
				<label>Nome do produto</label>
				<input type="text" name="name" class="w3-input w3-border w3-round" ng-model="field.name">
				<div ng-if="productForm.$submitted && productForm.name.$invalid">
					<span ng-if="productForm.name.$error.required">Este campo é obrigatório</span>
				</div>
			</div>
			<div class="col-md-4">
				<label>Marca</label>
				<input type="text" name="mark" class="w3-input w3-border w3-round" ng-model="field.mark">
			</div>
			<div class="col-md-4">
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
			<div class="col-md-4">
				<label>Gênero do produto</label>
				<select name="category" class="w3-input w3-border w3-round" ng-model="field.category">
					<option disabled selected hidden></option>
					<option value="1">Meninos e meninas</option>
					<option value="2">Meninos</option>
					<option value="3">Meninas</option>
				</select>
			</div>
			<!-- Modal inside form -->
			<button data-toggle="modal" data-target="#ImageUploadModal">Modal2</button>
			<modal modal-id="ImageUploadModal" modal-type="md" modal-title="Imagens">
				<div nv-file-drop uploader="uploader" class="container-fluid drop-area">
						<div ng-repeat="item in uploader.queue">
							<div ng-show="uploader.isHTML5" ng-thumb="{ file: item._file, height: 100 }"></div>
						</div>
				</div>
				<label for="FileUploadInput">
					<div class="w3-btn w3-green">Escolha um arquivo</div>
				</label>
				<input id="FileUploadInput" type="file" nv-file-select uploader="uploader" multiple/>
			</modal>
		</div>
		<div class="row text-center" style="padding-top: 10px">
			<div class="col-md-4 col-md-offset-4">
				<button class="w3-btn w3-green" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
			</div>
		</div>
	</form>
</modal>
