<?php
define('IMG_LINK', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/Cres_pass/public/img/');
?>
<div class="container-fluid intro">
	<div class="row">
		<div class="col-md-6 introImg">
			<img src="<?= IMG_LINK ?>ninos_moda.jpg">
		</div>
		<div class="col-md-6 introTxt">
			<h1>Lorem Ipsum</h1>
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			<a class="btn btn-primary" ng-click="go('/cadastro')">QUERO COMPRAR</a>
			<a class="btn btn-primary" ng-click="go('/cadastro')">QUERO VENDER</a>
		</div>
	</div>
</div>
<div class="w3-container text-center">
	<h1>Produtos em Destaque</h1>
	<div class="w3-row" style="overflow-x:scroll">
		<ul class="w3-ul" style="display:inline-flex">
			<div ng-repeat="x in [1,2,3,4,5,6,7,8,9,10]">
				<li class="w3-col m3">
					<div class="w3-card">
						<img src="<?= IMG_LINK ?>1610259691_vitrine.jpg"> <!-- IMAGEM -->
					</div>
				</li>
			</div>
		</ul>
	</div>
</div>
<br>
<div class="w3-container text-center">
	<h1>Lojinhas em Destaque</h1>
	<div class="w3-row" style="overflow-x:scroll">
		<ul class="w3-ul" style="display:inline-flex">
			<div ng-repeat="x in [1,2,3,4,5,6,7,8,9,10]">
				<li class="w3-col m3">
					<div class="w3-card">
						<img src="<?= IMG_LINK ?>1610259691_vitrine.jpg"> <!-- IMAGEM -->
					</div>
				</li>
			</div>
		</ul>
	</div>
</div>