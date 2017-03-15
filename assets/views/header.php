
<div ng-controller="HeaderController">
	
		<!--talvez por a coluna mas n sei qual o tamanho-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-5">
				<a href="http://localhost/Cres_pass/" title="crescendo e passando"><img src="http://www.mibebeyyo.com/images/home/seguridad-objetos-cocina-1293.jpg" class="img-circle" width="100" height="100"></a>
			</div>
		</div>
	</div>		
					
	<div class="container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
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
						<li><a ng-click="go('/login')" class="btn btn-alert">login</a></li>
						<li><a ng-click="go('/cadastro')">cadastro</a></li>
					</ul>
					<form class="navbar-form" ng-submit="search(searchInput)">
				 		<div class="form-group">
				 			<input ng-model="searchInput" type="text class="form-control" placeholder="Procure">
				 		</div>
				 		<button type="submit">Buscar</button>
					</form>


				</nav>
			</div>
		</div>
	</div>
	
		
	
</div>