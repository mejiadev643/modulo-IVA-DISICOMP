
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Lista de registro de Administradores del sistema.
				</p>
			</div>
		</section>
		<div class="mdl-tabs  mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
            <a href="?c=Usuario&a=Crud" class="mdl-tabs__tab">Nuevo</a>
           <a href="?c=Usuario&a=Consultar" class="mdl-tabs__tab is-active">Listar</a>
			</div>
			<div class="mdl-tabs__panel">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de administradores
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
									
                                <?php foreach($this->model->listarUsuarios() as $r): ?>
                                    <li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span><?php echo $contador; ?>. <?php echo $r->NOMBRE; ?></span>
											<span class="mdl-list__item-sub-title"><?php echo $r->USERID; ?></span>
										</span>
										<a class="mdl-list__item-secondary-action" onclick=mostrar(<?php echo $r->IDLOGIN; ?>)><i class="zmdi zmdi-more"></i></a>
										
										
									</div>
									<div class="mdl-list__item " id="cargo<?php echo $r->IDLOGIN; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">
											<span><?php echo "Cargo: "; ?> <?php echo $r->CARGO; ?></span>
										</span>
									</div>
									<div class="mdl-list__item " id="empresa<?php echo $r->IDLOGIN; ?>" style="display:none;">
										<span class="mdl-list__item-primary-content">	
											<span><?php echo "Empresa: "; ?> <?php echo $r->EMPRESA; ?></span>
										</span>
									</div>
									<p class="text-center">
										<a href="?c=Usuario&a=Crud&log=<?php echo base64_encode($r->IDLOGIN); ?>" >
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab"  id="editar<?php echo $r->IDLOGIN; ?>" type="button" name="editar" style="display:none;">
												<i class="zmdi zmdi-edit"></i>
											</button>
										</a>
											<button onclick= elimina('<?php echo base64_encode($r->IDLOGIN); ?>') class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab  mdl-button--accent" id="eliminar<?php echo $r->IDLOGIN; ?>" type="button"   name="eliminar" style="display:none;">
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
			let cargo = document.querySelector("#cargo"+id);
			let empresa = document.querySelector("#empresa"+id);
			let editar = document.querySelector("#editar"+id);
			let eliminar = document.querySelector("#eliminar"+id);

			let estadocargo = cargo.getAttribute("style");//unico estado que se desea conocer para cambiar el estado de los demas


			if (estadocargo){
				cargo.setAttribute("style","");
				empresa.setAttribute("style","");
				editar.setAttribute("style","");
				eliminar.setAttribute("style","");
			}else{
				cargo.setAttribute("style","display:none;");
				empresa.setAttribute("style","display:none;");
				editar.setAttribute("style","display:none;");
				eliminar.setAttribute("style","display:none;");
			}
			
		}
		function elimina(id){
			let con = confirm("Desea eliminar el elemento? Una vez eliminado no podra recuperarlo");
			if (con == true){
				window.location= "?c=Usuario&a=eliminar&usr="+id ;
			}
		}
	</script>
</body>
</html>