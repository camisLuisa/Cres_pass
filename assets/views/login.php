<!-- LOGIN MODAL -->
	<div id="loginModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body text-center">
					<div class="well">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<h1>LOGIN</h1>
								<form ng-submit="login(field)">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="user" placeholder="Usuário" required ng-model="field.email">
									<label for="email">Senha</label>
									<input type="password" class="form-control" id="password" placeholder="Senha" required ng-model="field.password">
									<br>
									<button class="btn btn-primary" type="submit">LOGIN</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div> <!-- /#modal -->