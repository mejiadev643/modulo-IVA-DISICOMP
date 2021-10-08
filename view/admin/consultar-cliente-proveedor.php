
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Lista de Clientes y Proveedores
				</p>
			</div>
		</section>
		<div class="mdl-tabs  mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
            <a href="?c=ClienteProveedor&a=Crud" class="mdl-tabs__tab">Nuevo</a>
           <a href="?c=ClienteProveedor&a=Consultar" class="mdl-tabs__tab is-active">Listar</a>
			</div>
			<div class="mdl-tabs__panel">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de Clientes y administradores
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
                                <?php foreach($this->model->listarClientesProveedores() as $r): ?>
                                    <li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span><?php echo $r->IDCLIENTE; ?>. <?php echo $r->NOMBCLIENT; ?></span>
											<span class="mdl-list__item-sub-title"><?php echo $r->DENOMCLIENT; ?></span>
										</span>
										<a class="mdl-list__item-secondary-action" onclick=mostrar(<?php echo $r->IDCLIENTE; ?>)><i class="zmdi zmdi-more"></i></a>
									</div>
									<div class="mdl-list__item " id="registrocliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Registro de cliente: "; ?> <?php echo $r->REGCLIENT; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="girocliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Giro del negocio: "; ?> <?php echo $r->GIRONEG; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="nitcliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Numero de nit: "; ?> <?php echo $r->NUMNIT; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="telefonocliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Telefono: "; ?> <?php echo $r->TELEFONO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="direccioncliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Direccion: "; ?> <?php echo $r->DIRNEG; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="ciudadcliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Ciudad: "; ?> <?php echo $r->CIUDAD; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="departamentocliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Departamento: "; ?> <?php echo $r->DEPTO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="tipocliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Tipo de cliente: "; ?> <?php echo $r->TIPOCLIENT; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="tipodcliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Tipo de documento: "; ?> <?php echo $r->TIPODOCUCRFCOF; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="nombrenitcliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Nombre segun nit: "; ?> <?php echo $r->NOMBRENIT; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="contribcliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Gran contribuyente: "; ?> <?php echo $r->GRANCONTRIB; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="seriecliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Numero de serie: "; ?> <?php echo $r->NUMSERIE	; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="usuariocliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Usuario que lo registro: "; ?> <?php echo $r->USUARIO; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="fechacliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Fecha del registro: "; ?> <?php echo $r->FECHAOPE; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="maquinacliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Maquina de donde se registro: "; ?> <?php echo $r->MAQUINA; ?></span>
										</span>	
									</div>
									<div class="mdl-list__item " id="horacliente<?php echo $r->IDCLIENTE; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Hora en que se registro: "; ?> <?php echo $r->HORA; ?></span>
										</span>	
									</div>
									<p class="text-center">
										<a href="#" >
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab"  id="editar<?php echo $r->IDCLIENTE; ?>" type="button" name="editar" style="display:none;">
												<i class="zmdi zmdi-edit"></i>
											</button>
										</a>
											<button onclick= elimina('<?php echo base64_encode($r->IDCLIENTE); ?>') class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab  mdl-button--accent" id="eliminar<?php echo $r->IDCLIENTE; ?>" type="button"   name="eliminar" style="display:none;">
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
			let registrocliente = document.querySelector("#registrocliente"+id);
			let girocliente = document.querySelector("#girocliente"+id);
			let nitcliente = document.querySelector("#nitcliente"+id);
			let telefonocliente = document.querySelector("#telefonocliente"+id);
			let direccioncliente = document.querySelector("#direccioncliente"+id);
			let ciudadcliente = document.querySelector("#ciudadcliente"+id);
			let departamentocliente = document.querySelector("#departamentocliente"+id);
			let tipocliente = document.querySelector("#tipocliente"+id);
			let tipodcliente = document.querySelector("#tipodcliente"+id);
			let nombrenitcliente = document.querySelector("#nombrenitcliente"+id);
			let contribcliente = document.querySelector("#contribcliente"+id);
			let seriecliente = document.querySelector("#seriecliente"+id);
			let usuariocliente = document.querySelector("#usuariocliente"+id);
			let fechacliente = document.querySelector("#fechacliente"+id);
			let maquinacliente = document.querySelector("#maquinacliente"+id);
			let horacliente = document.querySelector("#horacliente"+id);
			let editar = document.querySelector("#editar"+id);
			let eliminar = document.querySelector("#eliminar"+id);



			

			let estadoregistrocliente = registrocliente.getAttribute("style");
			
			

			if (estadoregistrocliente){
				registrocliente.setAttribute("style","");
				girocliente.setAttribute("style","");
				nitcliente.setAttribute("style","");
				telefonocliente.setAttribute("style","");
				direccioncliente.setAttribute("style","");
				ciudadcliente.setAttribute("style","");
				departamentocliente.setAttribute("style","");
				tipocliente.setAttribute("style","");
				tipodcliente.setAttribute("style","");
				nombrenitcliente.setAttribute("style","");
				contribcliente.setAttribute("style","");
				seriecliente.setAttribute("style","");
				usuariocliente.setAttribute("style","");
				fechacliente.setAttribute("style","");
				maquinacliente.setAttribute("style","");
				horacliente.setAttribute("style","");
				editar.setAttribute("style","");
				eliminar.setAttribute("style","");
				
			}else{
				registrocliente.setAttribute("style","display:none;");
				girocliente.setAttribute("style","display:none;");
				nitcliente.setAttribute("style","display:none;");
				telefonocliente.setAttribute("style","display:none;");
				direccioncliente.setAttribute("style","display:none;");
				ciudadcliente.setAttribute("style","display:none;");
				departamentocliente.setAttribute("style","display:none;");
				tipocliente.setAttribute("style","display:none;");
				tipodcliente.setAttribute("style","display:none;");
				nombrenitcliente.setAttribute("style","display:none;");
				contribcliente.setAttribute("style","display:none;");
				seriecliente.setAttribute("style","display:none;");
				usuariocliente.setAttribute("style","display:none;");
				fechacliente.setAttribute("style","display:none;");
				maquinacliente.setAttribute("style","display:none;");
				horacliente.setAttribute("style","display:none;");
				editar.setAttribute("style","display:none;");
				eliminar.setAttribute("style","display:none;");
				
			}
			
		}
		function elimina(id){
			let con = confirm("Desea eliminar el elemento? Una vez eliminado no podra recuperarlo");
			if (con == true){
				window.location= "?c=ClienteProveedor&a=eliminar&usr="+id ;
			}
		}
		
	</script>
</body>
</html>