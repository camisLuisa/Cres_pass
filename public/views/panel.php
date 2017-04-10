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
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<div class="list-group">
				<button class="list-group-item active" ng-click="loadContent('account')">
					<h3>Olá {{user.name}}</h3>
					<p>{{user.email}}</p>
				</button>
				<button class="list-group-item" ng-click="loadContent('createStore')">
					<i class="fa fa-home" aria-hidden="true"></i> CRIAR LOJINH
				</button>
				<button class="list-group-item" ng-click="loadContent('purchaseHistory')">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i> HISTÓRICO DE COMPRAS
				</button>
				<button class="list-group-item" ng-click="loadContent('signup')">
					<i class="fa fa-user" aria-hidden="true"></i> CADASTRO
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