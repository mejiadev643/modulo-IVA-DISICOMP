
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
                                <?php foreach($this->model->listarTransiva() as $r): ?>
                                    <li class="full-width divider-menu-h"></li>
									<div class="mdl-list__item mdl-list__item--two-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span><?php echo $r->IDIVA; ?>. <?php echo $r->CODTRAN; ?></span>
											<span class="mdl-list__item-sub-title"><?php echo $r->NOMBRE; ?></span>
										</span>
										<a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
									</div>
                                    <li class="full-width divider-menu-h"></li>
                                <?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
	</section>
</body>
</html>