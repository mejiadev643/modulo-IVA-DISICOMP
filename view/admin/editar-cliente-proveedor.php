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
					Este formulario esta diseñado para guardar los clientes y proveedores
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
								Nuevo cliente o proveedor
							</div>
							<div class="full-width panel-content">
								<form action="?c=ClienteProveedor&a=ActualizarClienteProveedor" method="post">
											<h5 class="text-condensedLight text-center">Ingresar datos del nuevo Cliente o Proveedor</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="IDCLIENTE" value="<?php echo $clienteproveedor->IDCLIENTE; ?>" />
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="[0-9\-]+" id="codigocliente" maxlength="10" minlength="10" name="CODCLIENT" title="Digite código sin guión" value="<?php echo $clienteproveedor->CODCLIENT; ?>" required>
												<label class="mdl-textfield__label" for="codigocliente">Código de cliente</label>
												<span class="mdl-textfield__error">Numero de cliente invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin" name="NOMBCLIENT" title="Digite su nombre completo" value="<?php echo $clienteproveedor->NOMBCLIENT; ?>" required>
												<label class="mdl-textfield__label" for="NameAdmin">Nombre Completo</label>
												<span class="mdl-textfield__error">Nombre invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="[A-Za-záéíóúÁÉÍÓÚ\ .]+" id="Denominacion" name="DENOMCLIENT" title="Digite la denominación" value="<?php echo $clienteproveedor->DENOMCLIENT; ?>" required>
												<label class="mdl-textfield__label" for="Denominacion">Denominación</label>
												<span class="mdl-textfield__error">Denominación invalida</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input cero" type="tel" pattern="([1-9-][0-9\-]+)?"  id="registro" name="REGCLIENT" title="Digite registro de cliente" value="<?php echo $clienteproveedor->REGCLIENT; ?>" required>
												<label class="mdl-textfield__label" for="registro">Registro de cliente</label>
												<span class="mdl-textfield__error">Registro invalido</span>
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="[A-Za-záéíóúÁÉÍÓÚ\ .]+" id="direccion" name="DIRNEG" title="Digite la dirección del negocio" value="<?php echo $clienteproveedor->DIRNEG; ?>" required>
												<label class="mdl-textfield__label" for="dirección">Dirección del negocio</label>
												<span class="mdl-textfield__error">Dirección del negocio invalida</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="ciudad" name="CIUDAD" title="Digite la ciudad del negocio" value="<?php echo $clienteproveedor->CIUDAD; ?>" required>
												<label class="mdl-textfield__label" for="ciudad">Ciudad del negocio</label>
												<span class="mdl-textfield__error">Ciudad del negocio invalida</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="departamento" name="DEPTO" title="Digite el departamento del negocio" value="<?php echo $clienteproveedor->DEPTO; ?>" required>
												<label class="mdl-textfield__label" for="departamento">Departamento del negocio</label>
												<span class="mdl-textfield__error">Departamento del negocio invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" id="telefono" name="TELEFONO"  maxlength="8" pattern="[0-9\-]+" title="Digite su numero teléfono" value="<?php echo $clienteproveedor->TELEFONO; ?>" required>
												<label class="mdl-textfield__label" for="telefono">Numero de teléfono</label>
												<span class="mdl-textfield__error">Numero de teléfono invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="giro" name="GIRONEG" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" title="Digite el giro de su negocio" value="<?php echo $clienteproveedor->GIRONEG; ?>" required>
												<label class="mdl-textfield__label" for="giro">Giro del negocio</label>
												<span class="mdl-textfield__error">Giro de negocio invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="[0-9]+" id="nit" minlength="14"  maxlength="14" name="NUMNIT" title="Digite su numero de nit" value="<?php echo $clienteproveedor->NUMNIT; ?>" required>
												<label class="mdl-textfield__label" for="nit">Numero de Nit</label>
												<span class="mdl-textfield__error">Numero de nit invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Tipo de cliente</p>
											<?php 
												if ($clienteproveedor->TIPOCLIENT==1) {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  													<input type="radio" id="option-1" class="mdl-radio__button" name="TIPOCLIENT" value="1" checked>
  													<span class="mdl-radio__label">Cliente</span>
												</label>

												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  													<input type="radio" id="option-2" class="mdl-radio__button" name="TIPOCLIENT" value="2">
  													<span class="mdl-radio__label">Proveedor</span>
												</label>
												
											<?php
												} else {
													?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  													<input type="radio" id="option-1" class="mdl-radio__button" name="TIPOCLIENT" value="1" checked>
  													<span class="mdl-radio__label">Cliente</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  													<input type="radio" id="option-2" class="mdl-radio__button" name="TIPOCLIENT" value="2" checked>
  													<span class="mdl-radio__label">Proveedor</span>
												</label>

											<?php
												}
												
											?>
												
												
											</div>
											
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											
											
											
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="serie"  maxlength="13" name="NUMSERIE"  pattern="-?[A-Za-záéíóúÁÉÍÓÚ0-9 ]*(\.[]+)?" title="Digite su numero de serie" value="<?php echo $clienteproveedor->NUMSERIE; ?>" required>
												<label class="mdl-textfield__label" for="serie">Numero de Serie</label>
												<span class="mdl-textfield__error">Numero de serie invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="nombrenit" name="NOMBRENIT" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" title="Digite su nombre segun nit" value="<?php echo $clienteproveedor->NOMBRENIT; ?>" required>
												<label class="mdl-textfield__label" for="nombrenit">Nombre segun nit</label>
												<span class="mdl-textfield__error">Nombre segun Nit invalido</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Tipo de Documento</p>
											<?php foreach($this->model2->listarTipoVenta() as $r): ?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="<?php echo $r->IDCODIGO; ?>">
  													<input type="radio" id="<?php echo $r->IDCODIGO; ?>" class="mdl-radio__button" name="TIPODOCUCRFCOF" value="<?php echo $r->CODIGO; ?>"  <?php if($clienteproveedor->TIPODOCUCRFCOF==$r->CODIGO) echo "checked"; ?> required>
  													<span class="mdl-radio__label"><?php echo $r->NOMBRE; ?></span>
												</label>
												<?php endforeach; ?>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Estado del cliente</p>
											
											<?php 
												if ($clienteproveedor->ESTADO=="A") {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
  													<input type="radio" id="option-6" class="mdl-radio__button" name="ESTADO" value="A" checked>
  													<span class="mdl-radio__label">Activo</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-7">
  													<input type="radio" id="option-7" class="mdl-radio__button" name="ESTADO" value="I">
  													<span class="mdl-radio__label">Inactivo</span>
												</label>
											<?php
												} else {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
  													<input type="radio" id="option-6" class="mdl-radio__button" name="ESTADO" value="A" >
  													<span class="mdl-radio__label">Activo</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-7">
  													<input type="radio" id="option-7" class="mdl-radio__button" name="ESTADO" value="I" checked>
  													<span class="mdl-radio__label">Inactivo</span>
												</label>
											<?php
												}
												
											?>
												
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">¿Emite formulario unico?</p>

											<?php 
												if ($clienteproveedor->DOCUNICO=="Si") {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-8">
  													<input type="radio" id="option-8" class="mdl-radio__button" name="DOCUNICO" value="Si" checked>
  													<span class="mdl-radio__label">Si</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-9">
  													<input type="radio" id="option-9" class="mdl-radio__button" name="DOCUNICO" value="No">
  													<span class="mdl-radio__label">No</span>
												</label>
											<?php
												} else {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-8">
  													<input type="radio" id="option-8" class="mdl-radio__button" name="DOCUNICO" value="Si" >
  													<span class="mdl-radio__label">Si</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-9">
  													<input type="radio" id="option-9" class="mdl-radio__button" name="DOCUNICO" value="No" checked>
  													<span class="mdl-radio__label">No</span>
												</label>
											<?php
												}
												
											?>
												
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Gran Contribuyente</p>
											<?php 
												if ($clienteproveedor->GRANCONTRIB=="S") {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-10">
  													<input type="radio" id="option-10" class="mdl-radio__button" name="GRANCONTRIB" value="S" checked>
  													<span class="mdl-radio__label">Si</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-11">
  													<input type="radio" id="option-11" class="mdl-radio__button" name="GRANCONTRIB" value="N" >
  													<span class="mdl-radio__label">No</span>
												</label>
											<?php
												} else {
											?>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-10">
  													<input type="radio" id="option-10" class="mdl-radio__button" name="GRANCONTRIB" value="S" >
  													<span class="mdl-radio__label">Si</span>
												</label>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-11">
  													<input type="radio" id="option-11" class="mdl-radio__button" name="GRANCONTRIB" value="N" checked>
  													<span class="mdl-radio__label">No</span>
												</label>
											<?php
												}
												
											?>
											
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ0-9 ]*(\.[]+)?" id="usuario" name="USUARIO" title="Este es el usuario que ara el registro" value="<?php echo $clienteproveedor->USUARIO; ?>">
												<label class="mdl-textfield__label" for="dirección">Usuario que ara el registro</label>
												<span class="mdl-textfield__error">Usuario invalido</span>
											</div>

											

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