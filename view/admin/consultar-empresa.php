
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-balance"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Lista de las Empresas
				</p>
			</div>
		</section>
		<div class="mdl-tabs  mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
            <a href="?c=Empresa&a=Crud" class="mdl-tabs__tab">Nueva</a>
           <a href="?c=Empresa&a=Consultar" class="mdl-tabs__tab is-active">Listar</a>
			</div>
			<div class="mdl-tabs__panel">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Datos de la Empresa
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
                                <?php foreach($this->model->listarEmpresa() as $r): ?>
                                    <li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-check-square mdl-list__item-avatar"></i>
											<span><?php echo $contador; ?>)
												<?php echo $r->CODIGO; ?>
											</span>
											<span class="mdl-list__item-sub-title"><?php echo $r->NOMBRE; ?>
											</span>
										</span>
										<a class="mdl-list__item-secondary-action" onclick=mostrar(<?php echo $r->IDEMPRESA; ?>)><i class="zmdi zmdi-swap-vertical"></i></a>
									</div>

									
									<div class="mdl-list__item " id="codigo<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Codigo:  "; ?> <?php echo $r->CODIGO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="nombre<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Nombre de la Empresa:  "; ?> <?php echo $r->NOMBRE; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="denomina<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Denominacion de la empresa:  "; ?> <?php echo $r->DENOMINA; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="teleycaja<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Tele y Caja:  "; ?> <?php echo $r->TELEYCAJA; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="registro<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Registro de la Empresa:  "; ?> <?php echo $r->REGISTRO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="nit<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "NIT de la Empresa:  "; ?> <?php echo $r->NIT; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="giro<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Giro de la Empresa:  "; ?> <?php echo $r->GIRO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="direccion<?php echo $r->IDEMPRESA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Direccion de la Empresa:  "; ?> <?php echo $r->DIRECCION; ?></span>
										</span>
									</div>
									<p class="text-center">
										<button onclick= elimina('<?php echo base64_encode($r->IDEMPRESA); ?>') class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab  mdl-button--accent" id="eliminar<?php echo $r->IDEMPRESA; ?>" type="button"   name="eliminar" style="display:none;">
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
			let codigo = document.querySelector("#codigo"+id);
			let nombre = document.querySelector("#nombre"+id);
			let denomina = document.querySelector("#denomina"+id);
			let teleycaja = document.querySelector("#teleycaja"+id);
			let registro = document.querySelector("#registro"+id);
			let nit = document.querySelector("#nit"+id);
			let giro = document.querySelector("#giro"+id);
			let direccion = document.querySelector("#direccion"+id);
			let eliminar = document.querySelector("#eliminar"+id);

			let estadocodigo = codigo.getAttribute("style");
			let estadonombre = nombre.getAttribute("style");
			let estadodenomina = denomina.getAttribute("style");
			let estadoteleycaja = teleycaja.getAttribute("style");
			let estadoregistro = registro.getAttribute("style");
			let estadonit = nit.getAttribute("style");
			let estadogiro = giro.getAttribute("style");
			let estadodireccion = direccion.getAttribute("style");
			let estadoeliminar = eliminar.getAttribute("style");

			if (estadocodigo){
				codigo.setAttribute("style","");
				nombre.setAttribute("style","");
				denomina.setAttribute("style","");
				teleycaja.setAttribute("style","");
				registro.setAttribute("style","");
				nit.setAttribute("style","");
				giro.setAttribute("style","");
				direccion.setAttribute("style","");
				eliminar.setAttribute("style","");
			}else{
				codigo.setAttribute("style","display:none;");
				nombre.setAttribute("style","display:none;");
				denomina.setAttribute("style","display:none;");
				teleycaja.setAttribute("style","display:none;");
				registro.setAttribute("style","display:none;");
				nit.setAttribute("style","display:none;");
				giro.setAttribute("style","display:none;");
				direccion.setAttribute("style","display:none;");
				eliminar.setAttribute("style","display:none;");
			}
			
		}
		function elimina(id){
			let con = confirm("Desea eliminar el elemento? Una vez eliminado no podra recuperarlo");
			if (con == true){
				window.location= "?c=Empresa&a=eliminar&usr="+id ;
			}
		}
	</script>
</body>
</html>