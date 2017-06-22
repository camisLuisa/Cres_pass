<div class="container-fluid text-center"> <!-- layout-base-container -->
	<div class="row root-background-image"> <!-- layout-base-row -->
		<div class="col-md-10 col-md-offset-1 no-padding"> <!-- layout-base-column -->
			
			<header class="container-fluid w3-white">
				<div class="row">
					<a href="<?php echo $_SERVER['HTTP_HOST'] ?>" title="crescendo e passando">
						<img src="{{imgFolder}}logo.png" height="150">
				 	</a>
				</div>
			</header>

			<nav class="navbar no-margin"> <!-- affix-navbar -->
				<div class="container-fluid"> <!-- navbar-content-container -->
					<div class="row"> <!-- navbar-options-row -->
						<ul class="nav navbar-nav"> <!-- navbar-options -->
							<li><a href="#">PRODUTOS</a></li>
							<li><a href="#">MARCAS</a></li>
							<li><a href="#">LOJINHAS</a></li>
						</ul> <!-- END navbar-options -->
						<form class="navbar-form navbar-left">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" style="border:none">
								<div class="input-group-btn">
									<button class="btn bg-color-2y" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right no-margin">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Cadastro</a></li>
							<li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div> <!-- END navbar-options-row -->
					<div class="row w3-white"> <!-- navbar-decoration-row -->
						<div class="navbar-decoration"></div>
					</div><!-- END navbar-decoration-row -->
				</div> <!-- END affix-content-container -->
			</nav> <!-- END affix-navbar -->
			<div class="container-fluid w3-white" style="padding-bottom: 300px">
				<ui-view></ui-view>
			</div>
			<footer class="container-fluid base-padding bg-color-2y">
				<div class="">
					©2017 - Crescendo e Passando - Todos os direitos reservados - CNPJ nnn <br>
					<a href="#" data-toggle="modal" data-target="#TermsAndConditionsModal">Termos e Condições de Uso</a> | <a href="#" data-toggle="modal" data-target="#PrivacyPolicyModal">Política de Privacidade</a> | <a href="#" data-toggle="modal" data-target="#ContactUsModal">Entre em contato</a>
				</div>
			</footer>

		</div> <!-- END layout-base-column -->
	</div> <!-- END layout-base-row -->
</div> <!-- END layout-base-container -->

<!-- LOGIN MODAL -->
<modal class="text-center" modal-id="loginModal" modal-type="sm" modal-title="Login">
	<form name="Form" ng-submit="login(input)">
		<label>Email</label>
		<input type="email" name="Email" class="form-control" ng-model="input.email" placeholder="Seu email" required>
		<br>
		<div ng-if="Form.$submitted && Form.Email.$invalid">
				<span ng-if="Form.Email.$error.required">Este campo é obrigatório</span>
				<span ng-if="Form.Email.$error.email">Este não é um email valido</span>
			</div>
		<label>Senha</label>
		<input type="password" name="Password" class="form-control" ng-model="input.password" placeholder="Sua senha" required>
		<br>
		<div ng-if="Form.$submitted && Form.Password.$invalid">
				<span ng-if="Form.Password.$error.required">Este campo é obrigatório</span>
			</div>
		<button class="btn btn-primary btn-block" type="submit">Acessar</button>
	</form>
</modal>

<!-- TERMS AND CONDITIONS MODAL -->
<modal class="text-center" modal-id="TermsAndConditionsModal" modal-type="md" modal-title="Termos e Condições de Uso">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut lacinia enim. Donec non mi tincidunt, accumsan magna eu, finibus tellus. In nec erat sit amet turpis vulputate fringilla. Morbi vel convallis nulla, et auctor felis. Vestibulum id dapibus turpis. Nullam dictum erat nec diam vestibulum molestie a sed sapien. Nulla facilisi. Aenean tincidunt ante eget risus luctus pretium a ut justo. Aenean a cursus diam. Nulla facilisi. Sed sed erat tortor.
</modal>

<!-- PRIVACY POLICY MODAL -->
<modal class="text-center" modal-id="PrivacyPolicyModal" modal-type="md" modal-title="Termos e Condições de Uso">
</modal>

<!-- CONTACT US MODAL -->
<modal class="text-center" modal-id="ContactUsModal" modal-type="md" modal-title="Termos e Condições de Uso">
</modal>