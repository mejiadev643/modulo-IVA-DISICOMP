<?php
date_default_timezone_set("America/El_Salvador");
	$hora = date('H:i:s',time()); 
	$fechaope = date('Y-m-d', time());
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
					Este formulario esta diseñado para Editar Registro de Ventas y Compras
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
			<a href="?c=Ventas&a=Crud" class="mdl-tabs__tab is-active">Nuevo</a>
           <a href="?c=Ventas&a=Consultar" class="mdl-tabs__tab">Listar</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Registro de Ventas y Compras
							</div>
							<div class="full-width panel-content">
								<form action="?c=Ventas&a=Guardar" method="post">
											<h5 class="text-condensedLight text-center">Editar Registro de Ventas y Compras</h5>

									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
										<input type="hidden" name="IDVENTA" value="<?php echo $ventas->IDVENTA; ?>" />
											
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Seleccione Transaccion</p>
											<select class="custom-select" name="TT"  required >
												

											<?php foreach($this->model2->listarTransiva() as $t): ?>
																					
																	
		         									<option value="<?php echo $t->CODTRAN; ?>" <?php  
		         										if ($t->CODTRAN == $ventas->TT) {
		         											echo "selected";
		         										}
		         									?> >
		         										<?php echo $t->NOMBRE; ?>
		         									</option> 	

											<?php endforeach; ?>

											</select>
										</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="sucursal" name="SUCURSAL" title="Digite código de sucursal" value="<?php echo $ventas->SUCURSAL; ?>" required>
												<label class="mdl-textfield__label" for="sucursal">Código de sucursal</label>
												<span class="mdl-textfield__error">sucursal digitada invalida</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="[0-9\-]+" id="COMPRO" name="COMPRO" value="<?php echo $ventas->COMPRO; ?>" title="Digite el numero de comprobante del documento">
												<label class="mdl-textfield__label" for="COMPRO">Numero de comprobante</label>
												<span class="mdl-textfield__error">no ha digitado comprobante</span>
											</div>

											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="[0-9\-]+" id="nounico" name="NOUNICO" title="Digite numero de formulario Unico" value="<?php echo $ventas->NOUNICO; ?>" required>

												<label class="mdl-textfield__label" for="nounico">Numero de formulario Unico</label>
												<span class="mdl-textfield__error">No ha digitado comprobante de formulario unico</span>
												
											</div>


											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<label for="fecha">Seleccione fecha</label>
												<input type="date"  id="fecha" name="FECHA" title="Digite fecha de documento" value="<?php echo $ventas->FECHA; ?>" required >							
											</div>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<p class="text-condensedLight">Seleccione Cliente/Proveedor
											<select onchange=Verificar() class="custom-select" id="ClienteP" required >
											
											<?php foreach($this->model3->listarClientesProveedores() as $cli): ?>		
																	
		         									<option value="<?php echo $cli->CODCLIENT; ?>" <?php  
		         										if ($cli->CODCLIENT == $ventas->REGISTRO) {
		         											echo "selected";

		         										}
		         									?>> <?php echo $cli->NOMBCLIENT; ?></option> 				
								
											<?php endforeach; ?>


											</select></p>
										</div>
										
											
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="SERIE"  maxlength="13" name="SERIE"  pattern="-?[A-Za-záéíóúÁÉÍÓÚ0-9 ]*(\.[]+)?" title="Digite su numero de serie" value="<?php echo $ventas->SERIE; ?>"  required>
												
												<span class="mdl-textfield__error">Numero de serie invalido</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<label for="valor">Fecha de Iva</label>
												<input type="date" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="fecopera" name="FECOPERA" value="<?php echo $ventas->FECOPERA ?>"  required>
												
												<span class="mdl-textfield__error">seleccione fecha</span>
											</div>	

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<label for="valor" >Gran contribuyente: </label>
												<i class="zmdi zmdi-circle-o" id="boton"></i>

											</div>
										</div><!--end of form left-->

										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="valor" name="VALOR" title="Digite valor gravado" value="<?php echo $ventas->VALOR; ?>" onkeyup=imprimevalor()  required>
												<label class="mdl-textfield__label" for="valor">Valor gravado</label>
												<span class="mdl-textfield__error">No ha digitado valor</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="iva13" name="IVA13" title="Valor iva" value="<?php echo $ventas->IVA13; ?>" readonly required>
												<label class="mdl-textfield__label" for="valor">Valor Iva 13 %</label>
												<span class="mdl-textfield__error">No ha digitado valor</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="iva1" name="IVA1" title="valor retencion/percepcion" value="<?php echo $ventas->IVA1; ?>" readonly required>
												<label class="mdl-textfield__label" for="valor">Valor retencion/percepcion</label>
												<span class="mdl-textfield__error">No ha digitado valor</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="iva2" name="IVA2" title="valor retencion/percepcion" value="<?php echo $ventas->IVA2; ?>" onkeyup=imprimevalor() required>
												<label class="mdl-textfield__label" for="valor">Valor retencion 2%</label>
												<span class="mdl-textfield__error">No ha digitado valor</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="exentas" name="EXENTAS" title="Valor exento" value="<?php echo $ventas->EXENTAS; ?>" onkeyup=imprimevalor() >
												<label class="mdl-textfield__label" for="valor exento">Valor exento</label>
												<span class="mdl-textfield__error">No ha digitado valor exento</span>
											</div>
																					
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="fovial" name="FOVIAL" title="valor fovial" value="<?php echo $ventas->FOVIAL; ?>" onkeyup=imprimevalor() required>
												<label class="mdl-textfield__label" for="fovial">Valor fovial</label>
												<span class="mdl-textfield__error">No ha digitado valor de fovial</span>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="cotran" name="COTRAN" title="valor cotran" value="<?php echo $ventas->COTRAN; ?>" onkeyup=imprimevalor() required>
												<label class="mdl-textfield__label" for="valor">Valor cotran</label>
												<span class="mdl-textfield__error">No ha digitado valor de cotran</span>
											</div>	
										
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="vtotal" name="TOTAL" title="valor total" value="<?php echo $ventas->TOTAL; ?>" readonly required>
												<label class="mdl-textfield__label" for="valor">Valor Total documento</label>
												
											</div>						
											
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ0-9 ]*(\.[]+)?" id="usuario" name="USUARIO" title="Este es el usuario que  realiza el registro" value="<?php echo $_SESSION["USERID"]; ?>" >
												<label class="mdl-textfield__label" for="usuario">Usuario que realiza el registro</label>
												<span class="mdl-textfield__error">Usuario invalido</span>
											</div>

											<!-- Faltan datos segun casillas de formularios -->
											<input type="hidden" name="FECHAOPE" value="<?php echo $fechaope?>" />
											<input type="hidden" name="MAQUINA" value="<?php echo $maquina ?>" />
											<input type="hidden" name="HORA" value="<?php echo date("g:i a", strtotime($hora)) ?>" />
											
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addVentas" type="submit" name="registrar">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addVentas">Add Administrator</div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	</section>
	<script type="text/javascript" src="js/calculos.js"></script>
	<script type="text/javascript">
		<?php 

			$prov = $this->model3->listarDatosClienProv();
		?>

		 var str = <?php echo json_encode($prov);  ?>;

	</script>
	<script type="text/javascript" src="js/procesos.js"></script>
	<script>
	Window.onLoad = Verificar();//ejecuta una comprobacion para efectuar automaticamente descuentos si es que hay
	</script>
</body>
</html>	