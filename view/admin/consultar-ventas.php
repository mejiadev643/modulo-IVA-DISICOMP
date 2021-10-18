
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
							<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de registros								
							</div>

							<div class="full-width panel-content">

							<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">

								<thead>
								<th>TRANSACCION</th>
								<th class="mdl-data-table__cell--non-numeric">PROVEEDOR</th>		
								<th>COMPROBANTE</th>
								<th>FORMULARIO UNICO</th>
								<th>SERIE</th>
								<th>FECHA</th>
								<th>VALOR</th>
								
								</thead>
									<tr>
									<form  action="#">
									
										<?php $contador = 1; ?>
		                                <?php foreach($this->model->listarVentas() as $r): ?>
		                                   
												<?php echo $r->IDVENTA; ?>. <?php echo $r->COMPRO; ?>

												<a class="mdl-list__item-secondary-action" onclick=mostrar(<?php echo $r->IDVENTA; ?>)><i class="zmdi zmdi-more"></i></a>

									

										<td id="tt <?php echo $r->IDVENTA; ?>" style="display:none;">
											<?php echo "Transaccion: "; ?> <?php echo $r->TT; ?>
										</td>	

										<td id="registro<?php echo $r->IDVENTA; ?>" style="display:none;">										
											<?php echo "REGISTRO: "; ?> <?php echo $r->REGISTRO; ?>
										</td>

									<td id="compro <?php echo $r->IDVENTA; ?>" style="display:none;">
											<?php echo "Comprobante : "; ?> <?php echo $r->COMPRO; ?>
									</td>

									<td id="nounico <?php echo $r->IDVENTA; ?>" style="display:none;">
											<?php echo "Formulario Unico: "; ?> <?php echo $r->NOUNICO; ?>
									</td>

									<td id="serie<?php echo $r->IDVENTA; ?>" style="display:none;">
											<?php echo "Numero de serie: "; ?> <?php echo $r->SERIE	; ?>	
									</td>


									<td id="fecha<?php echo $r->IDVENTA; ?>" style="display:none;">
											<?php echo "Fecha documento: "; ?> <?php echo $r->FECHA; ?>
									</td>

									<td id="valor<?php echo $r->IDVENTA; ?>" style="display:none;">
										<?php echo "Valor Gravado: "; ?> <?php echo $r->VALOR; ?>
										
									</td>
									<td id="iva13<?php echo $r->IDVENTA; ?>" style="display:none;">
										<?php echo "IVA 13%: "; ?> <?php echo $r->IVA13; ?>
										
									</td>

									<td id="iva1<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "IVA 1%: "; ?> <?php echo $r->IVA1; ?>
										
									</td>
									<td id="iva2<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "IVA 2%: "; ?> <?php echo $r->IVA2; ?>
										
									</td>
									<td id="exentas<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Valor Exento: "; ?> <?php echo $r->EXENTAS; ?>
										
									</td>
									<td id="fovial<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Valor Fovial: "; ?> <?php echo $r->FOVIAL; ?>
										
									</td>
									<td id="cotran<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Valor Cotran: "; ?> <?php echo $r->COTRAN; ?>
									</td>
									<td id="total<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Valor Total: "; ?> <?php echo $r->TOTAL; ?>
									</td>
																		
									<td id="usuario<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Usuario que lo registro: "; ?> <?php echo $r->USUARIO; ?>
									</td>
									<td  id="fechaope<?php echo $r->IDVENTA; ?>" style="display:none;">
										<?php echo "Fecha del registro: "; ?> <?php echo $r->FECHAOPE; ?>
											
									</td>
									<td id="maquina<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Maquina de donde se registro: "; ?> <?php echo $r->MAQUINA; ?>
										
									</td>
									<td id="hora<?php echo $r->IDVENTA; ?>" style="display:none;">
										
											<?php echo "Hora en que se registro: "; ?> <?php echo $r->HORA; ?>
										
									</td>
								</tr>
							</tbody>




									<p class="text-center">
										<a href="?c=Ventas&a=Crud&id=<?php echo base64_encode($r->IDVENTA); ?>" >											
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
                    </table>				
	</section>
	<script>
		function mostrar(id){
			let Transaccion = document.querySelector("#tt"+id);
			let sucursal = document.querySelector("#sucursal"+id);
			let comprobante = document.querySelector("#compro"+id);
			let formulario unico = document.querySelector("#nounico"+id);
			let fechadoc = document.querySelector("#fecha"+id);
			let registro = document.querySelector("#registro"+id);
			let serie = document.querySelector("#serie"+id);
			let fecopera = document.querySelector("#fecopera"+id);
			let valor = document.querySelector("#valor"+id);
			let iva13 = document.querySelector("#iva13"+id);
			let iva1 = document.querySelector("#iva1"+id);
			let iva2 = document.querySelector("#iva2"+id);
			let exento = document.querySelector("#exento"+id);
			let fovial = document.querySelector("#fovial"+id);
			let cotran = document.querySelector("#cotran"+id);
			let total = document.querySelector("#total"+id);			
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
				compro.setAttribute("style","");
				nounico.setAttribute("style","");
				fecha.setAttribute("style","");
				registro.setAttribute("style","");
				serie.setAttribute("style","");
				fecopera.setAttribute("style","");
				valor.setAttribute("style","");
				iva13.setAttribute("style","");
				iva1.setAttribute("style","");
				iva2.setAttribute("style","");
				exentas.setAttribute("style","");
				fovial.setAttribute("style","");
				cotran.setAttribute("style","");
				total.setAttribute("style","");				
				maquina.setAttribute("style","");
				hora.setAttribute("style","");
				editar.setAttribute("style","");
				eliminar.setAttribute("style","");
				
			}else{
				transaccion.setAttribute("style","display:none;");
				sucursal.setAttribute("style","display:none;");
				compro.setAttribute("style","display:none;");
				nounico.setAttribute("style","display:none;");
				fecha.setAttribute("style","display:none;");
				registro.setAttribute("style","display:none;");
				serie.setAttribute("style","display:none;");
				fecopera.setAttribute("style","display:none;");
				valor.setAttribute("style","display:none;");
				iva13.setAttribute("style","display:none;");
				iva1.setAttribute("style","display:none;");
				iva2.setAttribute("style","display:none;");
				exento.setAttribute("style","display:none;");
				fovial.setAttribute("style","display:none;");
				cotran.setAttribute("style","display:none;");
				total.setAttribute("style","display:none;");				
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