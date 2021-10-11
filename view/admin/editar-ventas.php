<?php
date_default_timezone_set("America/El_Salvador");
	$hora = date('H:i:s',time()); 
	$fecha = date('Y-m-d', time());
	$maquina = gethostname();
?>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Edición de registros de IVA
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
			<a href="?c=ClienteProveedor&a=Crud" class="mdl-tabs__tab is-active">Nuevo</a>
           <a href="?c=ClienteProveedor&a=Consultar" class="mdl-tabs__tab">Listar</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								edición registros de IVA
							</div>
							<div class="full-width panel-content">
								<form action="?c=ClienteProveedor&a=Guardar" method="post">
											<h5 class="text-condensedLight text-center">Ingresar datos del Registro de IVA</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="IDVENTA" value="<?php echo $ventas->IDVENTA; ?>" />
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="[0-9]+" id="compro" name="compro" value="<?php echo $ventas->COMPRO; ?>" title="Digite Numero de comprobante">
												<label class="mdl-textfield__label" for="compro">Numero de comprobante</label>
												<span class="mdl-textfield__error">No ha digitado comprobante</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="NOMBCLIENT" value="<?php echo $clienteproveedor->NOMBCLIENT; ?>" title="Digite su nombre completo">
												<label class="mdl-textfield__label" for="NameAdmin">Nombre Completo</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="[A-Za-záéíóúÁÉÍÓÚ\ .]+" id="Denominacion" name="DENOMCLIENT" value="<?php echo $clienteproveedor->DENOMCLIENT; ?>" title="Digite la denominación">
												<label class="mdl-textfield__label" for="Denominacion">Denominación</label>
												<span class="mdl-textfield__error">Invalid Denominación</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="[0-9\-]+" id="registro" name="REGCLIENT" value="<?php echo $clienteproveedor->REGCLIENT; ?>" title="Digite registro de cliente">
												<label class="mdl-textfield__label" for="registro">Registro de cliente</label>
												<span class="mdl-textfield__error">Invalid registro</span>
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="[A-Za-záéíóúÁÉÍÓÚ\ .]+" id="direccion" name="DIRNEG" value="<?php echo $clienteproveedor->DIRNEG; ?>" title="Digite la dirección del negocio">
												<label class="mdl-textfield__label" for="dirección">Dirección del negocio</label>
												<span class="mdl-textfield__error">Invalid dirección del negocio</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="ciudad" name="CIUDAD" value="<?php echo $clienteproveedor->CIUDAD; ?>" title="Digite la ciudad del negocio">
												<label class="mdl-textfield__label" for="ciudad">Ciudad del negocio</label>
												<span class="mdl-textfield__error">Invalid ciudad del negocio</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="departamento" name="DEPTO" value="<?php echo $clienteproveedor->DEPTO; ?>" title="Digite el departamento del negocio">
												<label class="mdl-textfield__label" for="departamento">Departamento del negocio</label>
												<span class="mdl-textfield__error">Invalid departamento del negocio</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" id="telefono" name="TELEFONO" value="<?php echo $clienteproveedor->TELEFONO; ?>" pattern="[0-9\-]+" title="Digite su numero teléfono">
												<label class="mdl-textfield__label" for="telefono">Numero de teléfono</label>
												<span class="mdl-textfield__error">Invalid numero de teléfono</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="giro" name="GIRONEG" value="<?php echo $clienteproveedor->GIRONEG; ?>" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" title="Digite el giro de su negocio">
												<label class="mdl-textfield__label" for="giro">Giro del negocio</label>
												<span class="mdl-textfield__error">Invalid giro de negocio</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="[0-9]+" id="nit" name="NUMNIT" value="<?php echo $clienteproveedor->NUMNIT; ?>" title="Digite su numero de nit">
												<label class="mdl-textfield__label" for="nit">Numero de Nit</label>
												<span class="mdl-textfield__error">Invalid numero de nit</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Tipo de cliente</p>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  													<input type="radio" id="option-1" class="mdl-radio__button" name="TIPOCLIENT" value="1" checked>
  													<span class="mdl-radio__label">Cliente</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  													<input type="radio" id="option-2" class="mdl-radio__button" name="TIPOCLIENT" value="2">
  													<span class="mdl-radio__label">Proveedor</span>
												</label>
											</div>
											
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											
											
											
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="serie" name="NUMSERIE"  pattern="-?[A-Za-záéíóúÁÉÍÓÚ0-9 ]*(\.[]+)?" title="Digite su numero de serie">
												<label class="mdl-textfield__label" for="serie">Numero de Serie</label>
												<span class="mdl-textfield__error">Invalid numero de serie</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="nombrenit" name="NOMBRENIT" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" title="Digite su nombre segun nit">
												<label class="mdl-textfield__label" for="nombrenit">Nombre segun nit</label>
												<span class="mdl-textfield__error">Invalid nombre</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Tipo de Documento</p>
											<?php foreach($this->model2->listarTipoVenta() as $r): ?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="<?php echo $r->IDCODIGO; ?>">
  													<input type="radio" id="<?php echo $r->IDCODIGO; ?>" class="mdl-radio__button" name="TIPODOCUCRFCOF" value="<?php echo $r->CODIGO; ?>">
  													<span class="mdl-radio__label"><?php echo $r->NOMBRE; ?></span>
												</label>
												<?php endforeach; ?>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Estado del cliente</p>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
  													<input type="radio" id="option-6" class="mdl-radio__button" name="ESTADO" value="A" checked>
  													<span class="mdl-radio__label">Activo</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-7">
  													<input type="radio" id="option-7" class="mdl-radio__button" name="ESTADO" value="I">
  													<span class="mdl-radio__label">Inactivo</span>
												</label>
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">¿Emite formulario unico?</p>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-8">
  													<input type="radio" id="option-8" class="mdl-radio__button" name="DOCUNICO" value="Si" checked>
  													<span class="mdl-radio__label">Si</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-9">
  													<input type="radio" id="option-9" class="mdl-radio__button" name="DOCUNICO" value="No">
  													<span class="mdl-radio__label">No</span>
												</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Gran Contribuyente</p>
											<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-10">
  													<input type="radio" id="option-10" class="mdl-radio__button" name="GRANCONTRIB" value="S">
  													<span class="mdl-radio__label">Si</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-11">
  													<input type="radio" id="option-11" class="mdl-radio__button" name="GRANCONTRIB" value="N" checked>
  													<span class="mdl-radio__label">No</span>
												</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ0-9 ]*(\.[]+)?" id="usuario" name="USUARIO" title="Este es el usuario que ara el registro" value="<?php echo $_SESSION["USERID"]; ?>">
												<label class="mdl-textfield__label" for="dirección">Usuario que ara el registro</label>
												<span class="mdl-textfield__error">Invalid usuario</span>
											</div>
											<input type="hidden" name="FECHAOPE" value="<?php echo $fecha?>" />
											<input type="hidden" name="MAQUINA" value="<?php echo $maquina ?>" />
											<input type="hidden" name="HORA" value="<?php echo date("g:i a", strtotime($hora)) ?>" />

											

											<!-- Faltan datos segun casillas de formularios -->
											
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin" type="submit" name="registrar">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin">Add Administrator</div>
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