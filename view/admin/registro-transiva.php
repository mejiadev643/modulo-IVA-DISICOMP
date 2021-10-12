
	<!-- pageContent -->
	<section class="full-width pageContent">

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-card"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
				<?php echo $transiva->IDIVA != null ? 'Editar transiva '.'<strong>'.$transiva->CODTRAN.'</strong>' : 'Formulario para el registro de las Transacciones IVA'; ?>
					
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
           <a href="?c=Transiva&a=Crud" class="mdl-tabs__tab is-active">Nuevo</a>
           <a href="?c=Transiva&a=Consultar" class="mdl-tabs__tab">Listar</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nueva Transacción
							</div>
							<div class="full-width panel-content">
								<form action="?c=Transiva&a=Guardar" method="post">
									<h5 class="text-condensedLight text-center">Ingresar datos de la Nueva Transacción Iva</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="idiva" value="<?php echo $transiva->IDIVA; ?>" />

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" maxlength="2" value='<?php if(isset($BadTran)){echo $$BadTran["codtran"];} echo $transiva->CODTRAN;?>' pattern="[0-9]" id="codtran" name="codtran" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Codigo de la Transacción</label>
												<span class="mdl-textfield__error">Transacción Invalida</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="50" value='<?php if(isset($BadTran)){echo $BadTran["nombre"];} echo $transiva->NOMBRE;?>' pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="nombre" name="nombre" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Nombre de la Transacción</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>


											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="1" value='<?php if(isset($BadTran)){echo $$BadTran["signo"];} echo $transiva->SIGNO;?>' pattern="[+ -]" id="signo" name="signo" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Signo</label>
												<span class="mdl-textfield__error">Signo Invalido</span>
											</div>


											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" maxlength="1" value='<?php if(isset($BadTran)){echo $BadTran["sinoiva"];} echo $transiva->SINOIVA;?>' pattern="[1 2]" id="sinoiva" name="sinoiva" required>
												<label class="mdl-textfield__label"  for="NameAdmin">Si (1) O No(2) IVA</label>
												<span class="mdl-textfield__error">Occión Invalida</span>
											</div>

										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin" type="submit" name="registrar">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Agregar Transacción</div>
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