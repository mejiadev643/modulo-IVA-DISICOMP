	<!-- pageContent -->
	<section class="full-width pageContent">

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-balance"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
				<?php echo $empresa->IDEMPRESA != null ? 'Editar empresa '.'<strong>'.$empresa->CODIGO.'</strong>' : 'Formulario para el registro de la Empresa'; ?>
					
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
           <a href="?c=Empresa&a=Crud" class="mdl-tabs__tab is-active">Nuevo</a>
           <a href="?c=Empresa&a=Consultar" class="mdl-tabs__tab">Listar</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nueva Empresa
							</div>
							<div class="full-width panel-content">
								<form action="?c=Empresa&a=Guardar" method="post">
									<h5 class="text-condensedLight text-center">Ingresar los datos de la Empresa</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="idempresa" value="<?php echo $empresa->IDEMPRESA; ?>" />

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" maxlength="10" value='<?php if(isset($BadEmpresa)){echo $$BadEmpresa["codigo"];} echo $empresa->CODIGO;?>' pattern="[0-9]" id="codigo" name="codigo" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Codigo de la Empresa</label>
												<span class="mdl-textfield__error">Codigo Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="50" value='<?php if(isset($BadEmpresa)){echo $BadEmpresa["nombre"];} echo $empresa->NOMBRE;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚñ ]*(\.[0-9]+)?" id="NameAdmin" name="nombre" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Nombre de la Empresa</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="35" value='<?php if(isset($BadEmpresa)){echo $BadEmpresa["denomina"];} echo $empresa->DENOMINA;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="denomina" name="denomina" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Nombre de la Denominación</label>
												<span class="mdl-textfield__error">Denominación Invalido</span>
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" maxlength="35" value='<?php if(isset($BadEmpresa)){echo $BadEmpresa["teleycaja"];} echo $empresa->TELEYCAJA;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="teleycaja" name="teleycaja" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Número de Tele y Caja</label>
												<span class="mdl-textfield__error">Tele y Caja Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" maxlength="35" value='<?php if(isset($BadEmpresa)){echo $BadEmpresa["registro"];} echo $empresa->REGISTRO;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="registro" name="registro" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Número del Registro</label>
												<span class="mdl-textfield__error">Registro Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" maxlength="14" value='<?php if(isset($BadEmpresa)){echo $$BadEmpresa["nit"];} echo $empresa->NIT;?>' pattern="[0-9]" id="nit" name="nit" required>
												<label class="mdl-textfield__label"  for="NameAdmin">NIT de la Empresa</label>
												<span class="mdl-textfield__error">NIT Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="35" value='<?php if(isset($BadEmpresa)){echo $BadEmpresa["giro"];} echo $empresa->GIRO;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="giro" name="giro" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Giro de la Empresa</label>
												<span class="mdl-textfield__error">Giro Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="35" value='<?php if(isset($BadEmpresa)){echo $BadEmpresa["direccion"];} echo $empresa->DIRECCION;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="direccion" name="direccion" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Dirección de la Empresa</label>
												<span class="mdl-textfield__error">Dirección Invalida</span>
											</div>

										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin" type="submit" name="registrar">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar Empresa</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	</section>
</body>

</html>