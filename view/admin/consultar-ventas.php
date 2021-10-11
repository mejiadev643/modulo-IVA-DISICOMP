
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Lista de Registros de IVA almacenados
				</p>
			</div>
		</section>
		<div class="mdl-tabs  mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
            <a href="?c=Ventas&a=Crud" class="mdl-tabs__tab">Nuevo</a>
            <a href="?c=Ventas&a=Consultar" class="mdl-tabs__tab is-active">Listar</a>
			</div>
			<div class="mdl-tabs__panel">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de registros
							</div>
							<div class="full-width panel-content">
								<form action="#">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchAdmin">
											<label class="mdl-textfield__label"></label>
										</div>
									</div>
								</form>
								<div class="mdl-list">
								<?php $contador = 1; ?>
                                <?php foreach($this->model->listarVentas() as $r): ?>
                                    <li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span><?php echo $r->IDVENTA; ?>. <?php echo $r->COMPRO; ?></span>
											
										</span>

										<a class="mdl-list__item-secondary-action" onclick=mostrar(<?php echo $r->IDVENTA; ?>)><i class="zmdi zmdi-more"></i></a>
									</div>
									<div class="mdl-list__item " id="transaccion<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Transaccion: "; ?> <?php echo $r->TT; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="sucursal<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Sucursal: "; ?> <?php echo $r->SUCURSAL; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="comprobante<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Comprobantel: "; ?> <?php echo $r->COMPRO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="formunico<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Formulario Unico: "; ?> <?php echo $r->NOUNICO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="fechadoc<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Fecha documento: "; ?> <?php echo $r->FECHA; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="registro<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "REGISTRO: "; ?> <?php echo $r->REGISTRO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="serie<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Numero de serie: "; ?> <?php echo $r->SERIE	; ?></span>
										</span>	
									</div>									
									<div class="mdl-list__item " id="valor<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Valor Gravado: "; ?> <?php echo $r->VALOR; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="iva13<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "IVA 13%: "; ?> <?php echo $r->IVA13; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="iva1<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "IVA 1%: "; ?> <?php echo $r->IVA1; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="iva2<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "IVA 2%: "; ?> <?php echo $r->IVA2; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="exento<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Valor Exento: "; ?> <?php echo $r->EXENTAS; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="fovial<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Valor Fovial: "; ?> <?php echo $r->FOVIAL; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="cotran<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Valor Cotran: "; ?> <?php echo $r->COTRAN; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="total<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Valor Total: "; ?> <?php echo $r->TOTAL; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="fecopera<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Fecha de IVA: "; ?> <?php echo $r->FECOPERA; ?></span>
										</span>
									</div>
									
									<div class="mdl-list__item " id="usuario<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Usuario que lo registro: "; ?> <?php echo $r->USUARIO; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="fechaope<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Fecha del registro: "; ?> <?php echo $r->FECHAOPE; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="maquina<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Maquina de donde se registro: "; ?> <?php echo $r->MAQUINA; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="hora<?php echo $r->IDVENTA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Hora en que se registro: "; ?> <?php echo $r->HORA; ?></span>
										</span>	
									</div>
									<p class="text-center">
										<a href="#" >
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab"  id="editar<?php echo $r->IDVENTA; ?>" type="button" name="editar" style="display:none;">
												<i class="zmdi zmdi-edit"></i>
											</button>
										</a>
											<button onclick= elimina('<?php echo base64_encode($r->IDVENTA); ?>') class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab  mdl-button--accent" id="eliminar<?php echo $r->IDVENTA; ?>" type="button"   name="eliminar" style="display:none;">
												<i class="zmdi zmdi-delete"></i>
											</button>
									</p>
                                    <li class="full-width divider-menu-h"></li>
                                <?php $contador++; endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
            </div>
	</section>
	<script>
		function mostrar(id){
			let transaccion = document.querySelector("#transaccion"+id);
			let sucursal = document.querySelector("#sucursal"+id);
			let comprobante = document.querySelector("#comprobante"+id);
			let formulario unico = document.querySelector("#formunico"+id);
			let fechadoc = document.querySelector("#fechadoc"+id);
			let registro = document.querySelector("#registro"+id);
			let serie = document.querySelector("#serie"+id);
			let valor = document.querySelector("#valor"+id);
			let iva13 = document.querySelector("#iva13"+id);
			let iva1 = document.querySelector("#iva1"+id);
			let iva2 = document.querySelector("#iva2"+id);
			let exento = document.querySelector("#exento"+id);
			let fovial = document.querySelector("#fovial"+id);
			let cotran = document.querySelector("#cotran"+id);
			let total = document.querySelector("#total"+id);
			let fecopera = document.querySelector("#fecopera"+id);			
			let usuario = document.querySelector("#usuario"+id);
			let fechaope = document.querySelector("#fechaope"+id);
			let maquina = document.querySelector("#maquina"+id);
			let hora = document.querySelector("#hora"+id);
			let editar = document.querySelector("#editar"+id);
			let eliminar = document.querySelector("#eliminar"+id);



			

			let estadoregistroventa = registroventas.getAttribute("style");
			
			

			if (estadoregistroventa){
				transaccion.setAttribute("style","");
				sucursal.setAttribute("style","");
				comprobante.setAttribute("style","");
				formunico.setAttribute("style","");
				fechadoc.setAttribute("style","");
				registro.setAttribute("style","");
				serie.setAttribute("style","");
				valor.setAttribute("style","");
				iva13.setAttribute("style","");
				iva1.setAttribute("style","");
				iva2.setAttribute("style","");
				exento.setAttribute("style","");
				fovial.setAttribute("style","");
				cotran.setAttribute("style","");
				total.setAttribute("style","");
				fecopera.setAttribute("style","");
				maquina.setAttribute("style","");
				hora.setAttribute("style","");
				editar.setAttribute("style","");
				eliminar.setAttribute("style","");
				
			}else{
				transaccion.setAttribute("style","display:none;");
				sucursal.setAttribute("style","display:none;");
				comprobante.setAttribute("style","display:none;");
				formunico.setAttribute("style","display:none;");
				fechadoc.setAttribute("style","display:none;");
				registro.setAttribute("style","display:none;");
				serie.setAttribute("style","display:none;");
				valor.setAttribute("style","display:none;");
				iva13.setAttribute("style","display:none;");
				iva1.setAttribute("style","display:none;");
				iva2.setAttribute("style","display:none;");
				exento.setAttribute("style","display:none;");
				fovial.setAttribute("style","display:none;");
				cotran.setAttribute("style","display:none;");
				total.setAttribute("style","display:none;");
				fecopera.setAttribute("style","display:none;");
				maquina.setAttribute("style","display:none;");
				hora.setAttribute("style","display:none;");
				editar.setAttribute("style","display:none;");
				eliminar.setAttribute("style","display:none;");
				
			}
			
		}
		function elimina(id){
			let con = confirm("Desea eliminar el elemento? Una vez eliminado no podra recuperarlo");
			if (con == true){
				window.location= "?c=ventas&a=eliminar&usr="+id ;
			}
		}
		
	</script>
</body>
</html>