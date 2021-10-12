
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-card"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Formulario para el registro de Transacciones IVA
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
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="idiva" value="<?php echo $transiva->idiva; ?>" />
											<h5 class="text-condensedLight">Ingresar datos de la Nueva Transacción</h5>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="codtran">
												<label class="mdl-textfield__label" for="NameAdmin">Codigo de la Transacción</label>
												<span class="mdl-textfield__error">Transacción Invalida</span>
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="nombre">
												<label class="mdl-textfield__label" for="NameAdmin">Nombre de la Transacción</label>
												<span class="mdl-textfield__error">Nombre Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneAdmin" name="signo">
												<label class="mdl-textfield__label" for="phoneAdmin">Signo</label>
												<span class="mdl-textfield__error">Signo Invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="sinoiva">
												<label class="mdl-textfield__label" for="NameAdmin">Si (1) O No(2) IVA</label>
												<span class="mdl-textfield__error">Invalida</span>
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