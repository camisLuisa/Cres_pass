
<div ng-controller="HeaderController">
	<nav class="navbar navbar-default"><!-- queria por o navbar fixed mas aconteceu um problema semelhante a algo que alyson uma vez falou... perguntar a ele como resolver -->

		<div class="navbar-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1 class="navbar-brand" href="#">{{title}}</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<a href="http://localhost/Cres_pass/" title="crescendo e passando"><img src="http://www.mibebeyyo.com/images/home/seguridad-objetos-cocina-1293.jpg" class="img-circle" width="100" height="100"></a>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				 	<form class="navbar-form navbar-right" ng-submit="search(searchInput)">
				 		<div class="form-group">
				 			<input ng-model="searchInput" type="text class="form-control" placeholder="Digite o nome do produto, marca ou lojinha">
				 		</div>
				 		<button type="submit">Buscar</button>
					</form>
				 </div>

				 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				 		<button ng-click="go('/login')">LOGIN</button>

				 		<button ng-click="go('/cadastro')">CADASTRO</button>
				</div> 
			</div>
		</div>	
			
		<div class="container">
			<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a class="dropbtn" data-toggle="dropdown" href="#">Produtos<span class="caret"></span></a>
					        <ul class="dropdown-content">
					          <li><a href="#">Page 1-1</a></li>
					          <li><a href="#">Page 1-2</a></li>
					          <li><a href="#">Page 1-3</a></li>
					        </ul>
					      </li>
						<li class="dropdown"><a class="dropbtn" data-toggle="dropdown" href="#">Marcas<span class="caret"></span></a>
					        <ul class="dropdown-content">
					          <li><a href="#">Page 1-1</a></li>
					          <li><a href="#">Page 1-2</a></li>
					          <li><a href="#">Page 1-3</a></li>
					        </ul>
					      </li>
						<li><a href="#">Lojinhas</a></li>
					</ul>
				</div>
			</div>
		</div>

	</nav>
</div>