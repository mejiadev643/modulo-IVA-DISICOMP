
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Formulario para el registro de administradores del sistema
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
           <a href="?c=Usuario&a=Crud" class="mdl-tabs__tab is-active">Nuevo</a>
           <a href="?c=Usuario&a=Consultar" class="mdl-tabs__tab">Listar</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo administrador
							</div>
							<div class="full-width panel-content">
								<form action="?c=Usuario&a=Guardar" method="post">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="idlogin" value="<?php echo $usuario->idlogin; ?>" />
											<h5 class="text-condensedLight">Ingresar datos del nuevo Usuario</h5>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" value='<?php if(isset($BadUser)){echo $BadUser["nombre"];}?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nombre" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Nombre Completo</label>
												<span class="mdl-textfield__error">Caracteres invalidos</span>
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" value='<?php if(isset($BadUser)){echo $BadUser["cargo"];}?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="cargo" name="cargo" required>
												<label class="mdl-textfield__label" for="NameAdmin">Cargo</label>
												<span class="mdl-textfield__error">Caracteres invalidos</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="2" value='<?php if(isset($BadUser)){echo $BadUser["sistema"];}?>' pattern="-?[0-9]*[A-Za-z]?" id="phoneAdmin" name="sistema" required>
												<label class="mdl-textfield__label" for="phoneAdmin">Numero de Sistema</label>
												<span class="mdl-textfield__error">Caracteres invalidos</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" value='<?php if(isset($BadUser)){echo $BadUser["empresa"];}?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin" name="empresa" required>
												<label class="mdl-textfield__label" for="LastNameAdmin">Nombre de la Empresa</label>
												<span class="mdl-textfield__error">Caracteres invalidos</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Credenciales de acceso</h5>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" value='<?php if(isset($BadUser)){echo $BadUser["pass"];}?>' pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin" name="userid" required>
												<label class="mdl-textfield__label" for="UserNameAdmin">Credencial de usuario</label>
												<span class="mdl-textfield__error">Caracteres invalidos</span>
												<span style="color:red;"><?php if(isset($BadUser)){echo $BadUser["error"];}?></span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="password" id="passwordAdmin" name="pass" required>
												<label class="mdl-textfield__label" for="passwordAdmin">Nueva contraseña de usuario</label>
												
												<span class="mdl-textfield__error">Contraseña invalida</span>
											</div>
											<div>
												<label onclick="descubrir()"><i class="zmdi zmdi-eye" id="iconoOjo"></i></label>
											</div>
											
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin" type="submit" name="registrar">
										<i class="zmdi zmdi-accounts-add"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar Usuario del sistema</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	</section>
	<script>
		var conta =0;
		function descubrir(){
			
			contra = document.querySelector('#passwordAdmin');
			imagen= document.querySelector('#iconoOjo');
			
			if (conta == 0) {
				
				contra.setAttribute("type","text");
				imagen.setAttribute("class","zmdi zmdi-eye-off");
				conta = 1
				
			}else{
				contra.setAttribute("type","password");
				imagen.setAttribute("class","zmdi zmdi-eye");
			conta=0;
			}
			
		}
	</script>
</body>
</html>