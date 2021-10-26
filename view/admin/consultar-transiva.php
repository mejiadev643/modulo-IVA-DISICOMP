
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-card"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Lista de registro de las Transacciones
				</p>
			</div>
		</section>
		<div class="mdl-tabs  mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
            <a href="?c=Transiva&a=Crud" class="mdl-tabs__tab">Nuevo</a>
           <a href="?c=Transiva&a=Consultar" class="mdl-tabs__tab is-active">Listar</a>
			</div>
			<div class="mdl-tabs__panel">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de las Transacciones
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
                                <?php foreach($this->model->listarTransiva() as $r): ?>
                                    <li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-label mdl-list__item-avatar"></i>
											<span><?php echo $contador; ?>)
												<?php echo $r->CODTRAN; ?>
											</span>
											<span class="mdl-list__item-sub-title"><?php echo $r->NOMBRE; ?>
											</span>
										</span>
										<a class="mdl-list__item-secondary-action" onclick=mostrar(<?php echo $r->IDIVA; ?>)><i class="zmdi zmdi-more"></i></a>
									</div>
									<div class="mdl-list__item " id="codtran<?php echo $r->IDIVA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Codigo = "; ?> <?php echo $r->CODTRAN; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="nombre<?php echo $r->IDIVA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Nombre de la Transaccón = "; ?> <?php echo $r->NOMBRE; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="signo<?php echo $r->IDIVA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Signo de Aplicación = "; ?> <?php echo $r->SIGNO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="sinoiva<?php echo $r->IDIVA; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Separa IVA 1(Si)  2(No) = "; ?> <?php echo $r->SINOIVA; ?></span>
										</span>
									</div>
									<p class="text-center">
										<a href="?c=Transiva&a=Crud&log=<?php echo base64_encode($r->IDIVA); ?>" >
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab"  id="editar<?php echo $r->IDIVA; ?>" type="button" name="editar" style="display:none;">
												<i class="zmdi zmdi-edit"></i>
											</button>
										</a>
											<button onclick= elimina('<?php echo base64_encode($r->IDIVA); ?>') class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab  mdl-button--accent" id="eliminar<?php echo $r->IDIVA; ?>" type="button"   name="eliminar" style="display:none;">
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
			let codtran = document.querySelector("#codtran"+id);
			let nombre = document.querySelector("#nombre"+id);
			let signo = document.querySelector("#signo"+id);
			let sinoiva = document.querySelector("#sinoiva"+id);
			let editar = document.querySelector("#editar"+id);
			let eliminar = document.querySelector("#eliminar"+id);

			let estadocodtran = codtran.getAttribute("style");
			let estadonombre = nombre.getAttribute("style");
			let estadosigno = signo.getAttribute("style");
			let estadosinoiva = sinoiva.getAttribute("style");
			let estadoeditar = editar.getAttribute("style");
			let estadoeliminar = eliminar.getAttribute("style");

			if (estadocodtran){
				codtran.setAttribute("style","");
				nombre.setAttribute("style","");
				signo.setAttribute("style","");
				sinoiva.setAttribute("style","");
				editar.setAttribute("style","");
				eliminar.setAttribute("style","");
			}else{
				codtran.setAttribute("style","display:none;");
				nombre.setAttribute("style","display:none;");
				signo.setAttribute("style","display:none;");
				sinoiva.setAttribute("style","display:none;");
				editar.setAttribute("style","display:none;");
				eliminar.setAttribute("style","display:none;");
			}
			
		}
		function elimina(id){
			let con = confirm("Desea eliminar el elemento? Una vez eliminado no podra recuperarlo");
			if (con == true){
				window.location= "?c=Transiva&a=eliminar&usr="+id ;
			}
		}
	</script>
</body>
</html>