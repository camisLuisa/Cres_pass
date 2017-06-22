<style type="text/css">
	.base-padding{
		padding: 20px;
	}
</style>

<div id="HomePage">	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<img class="img-responsive no-margin" src="{{imgFolder}}banner-2.png">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Lorem ipsum dolor sit amet!</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut lacinia enim. Donec non mi tincidunt, accumsan magna eu, finibus tellus. In nec erat sit amet turpis vulputate fringilla. Morbi vel convallis nulla, et auctor felis. Vestibulum id dapibus turpis. Nullam dictum erat nec diam vestibulum molestie a sed sapien. Nulla facilisi. Aenean tincidunt ante eget risus luctus pretium a ut justo. Aenean a cursus diam. Nulla facilisi. Sed sed erat tortor.</p>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<a class="w3-button w3-round-large bg-color-2y">QUERO COMPRAR</a>
			<a class="w3-button w3-round-large bg-color-2y">QUERO VENDER</a>
		</div>
	</div>
	<br>
	<div class="row bg-color-2y">
		<h4>PRODUTOS EM DESTAQUE</h4>
	</div>
	<div class="row">
		<div id="productCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner text-left">
					<div class="item active">
						<div ng-repeat="j in [1,2,3,4]">
							<a href="#">
								<div class="col-md-2 w3-card base-padding" ng-class="(j==1)?'col-md-offset-2':'hidden-sm hidden-xs'">
									<img class="img-responsive no-margin" src="{{imgFolder}}ex.png">
									Nome do Produto <br>
									Marca: Lorem<br>
									<span style="color:#87CEEB">R$ 00,00</span> <br>
									<span style="color:#fec860">12x R$ 00,00</span> <br>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div ng-repeat="j in [1,2,3,4]">
							<a href="#">
								<div class="col-md-2 w3-card base-padding" ng-class="(j==1)?'col-md-offset-2':'hidden-sm hidden-xs'">
									<img class="img-responsive no-margin" src="{{imgFolder}}ex.png">
									Nome do Produto <br>
									Marca: Lorem<br>
									<span style="color:#87CEEB">R$ 00,00</span> <br>
									<span style="color:#fec860">12x R$ 00,00</span> <br>
								</div>
							</a>
						</div>
					</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#productCarousel" target="_blank" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#productCarousel" target="_blank" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<br>
	<div class="row bg-color-2y">
		<h4>LOJINHAS EM DESTAQUE</h4>
	</div>
	<div class="row">
		<div id="storeCarousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner text-left">
					<div class="item active">
						<div ng-repeat="j in [1,2,3,4]">
							<a href="#">
								<div class="col-md-2 w3-card base-padding" ng-class="(j==1)?'col-md-offset-2':'hidden-sm hidden-xs'">
									<img class="img-responsive no-margin" src="{{imgFolder}}ex.png">
									Nome da Lojinha <br>
									Marca: Lorem<br>
									<span style="color:#87CEEB">R$ 00,00</span> <br>
									<span style="color:#fec860">12x R$ 00,00</span> <br>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div ng-repeat="j in [1,2,3,4]">
							<a href="#">
								<div class="col-md-2 w3-card base-padding" ng-class="(j==1)?'col-md-offset-2':'hidden-sm hidden-xs'">
									<img class="img-responsive no-margin" src="{{imgFolder}}ex.png">
									Nome da Lojinha <br>
									<span></span> 00 publicados<br>
									<span></span> 00 vendidos<br>
								</div>
							</a>
						</div>
					</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#storeCarousel" target="_blank" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#storeCarousel" target="_blank" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>