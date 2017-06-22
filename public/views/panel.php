<style type="text/css">
	.b{
		border: 1px solid black;
	}
	.equal {
		display: flex;
		flex-wrap: wrap;
	}
	.equal > div[class*='col-'] {  
		display: flex;
		flex-direction: column;
	}
</style>
<div class="container-fluid" ng-init="contentTitle='Cadastro'">
	<div class="row">
		<div class="col-sm-3">
			<div class="list-group text-center">
				<button class="list-group-item active" ng-click="loadContent('home')">
					<div ng-if="!user.store">
						<h3>Olá {{user.name}}</h3>
					</div>
					<div ng-if="user.store">
						<h3>{{user.store.name}}</h3>
						<p><a href="www.crescendoepassando.com.br/loja/{{parseToLink(user.store.name)}}">Ver minha lojinha</a></p>
					</div>
					<p>{{user.email}}</p>
				</button>
				<div ng-if="!user.store">
					<button class="list-group-item" ng-click="loadContent('createStore')">
						<i class="fa fa-home" aria-hidden="true"></i> CRIAR LOJINHA
					</button>
				</div>
				<div ng-if="user.store">
					<button class="list-group-item" ng-click="loadContent('products')">
						<i class="fa fa-cube" aria-hidden="true"></i> MEUS PRODUTOS
					</button>
					<button class="list-group-item" ng-click="loadContent('sales')">
						<i class="fa fa-usd" aria-hidden="true"></i> MINHAS VENDAS
					</button>
				</div>

				<button class="list-group-item" ng-click="loadContent('purchaseHistory')">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i> HISTÓRICO DE COMPRAS
				</button>
				<button class="list-group-item" ng-click="loadContent('signup')">
					<i class="fa fa-user" aria-hidden="true"></i> EDITAR CADASTRO
				</button>

				
			</div>
		</div>
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><h3>{{contentTitle}}</h3></div>
				<div class="panel-body">
					<ui-view></ui-view>
				</div>
			</div>
		</div>
	</div>
</div>