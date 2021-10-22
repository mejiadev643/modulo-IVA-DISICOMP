    <!-- pageContent -->
    <section class="full-width pageContent">
        <section class="full-width text-center" style="padding: 40px 0;">
            <h3 class="text-center tittles">SECCIONES</h3>
            <!-- Tiles -->
            <article class="full-width tile">
                <a href="?c=Usuario&a=Crud">
                    <div class="tile-text">
                        <?php
                        $ctadmin=0;
                        foreach ($this->admin->listarUsuarios() as $r){
                            $ctadmin++;
                        }
                        
                        ?>
                        <span class="text-condensedLight">
						    <?php echo $ctadmin; ?><br>
						    <small>Administradores</small>
					    </span>
                    </div>
                    <i class="zmdi zmdi-account tile-icon"></i>
                </a>
            </article>

            <article class="full-width tile">

            <a href="?c=ClienteProveedor&a=Consultar">

                <div class="tile-text">
                  <?php
                    $proveedor=0;
                    foreach ($this->cliente->listarClientesProveedores() as $r){
                            $proveedor++;
                    }
                  ?>
                    <span class="text-condensedLight">
						 <?php echo $proveedor; ?> <br>
						<small>Clientes y Proveedores</small>
					</span>
                    
                </div>
                <i class="zmdi zmdi-accounts tile-icon"></i>
            </a>
            </article>

            <article class="full-width tile">

            <a href="?c=ClienteProveedor&a=Consultar">

                <div class="tile-text">
                    <span class="text-condensedLight">
						<br>
						<small>Empresa</small>
					</span>
                </div>
                <i class="zmdi zmdi-balance tile-icon"></i>
            </a>
            </article>

            <article class="full-width tile">
                <a href="?c=Transiva&a=Crud">
                    <div class="tile-text">
                        <?php
                    $transac=0;
                    foreach ($this->transiva->listarTransiva() as $r){
                            $transac++;
                    }
                  ?>
                    <span class="text-condensedLight">
                         <?php echo $transac; ?> <br>
                        <small>Transacciones IVA</small>
                    </span>
                </div>
                    <i class="zmdi zmdi-card tile-icon"></i>
                </a>
            </article>

            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
						<br>
						<small>Productos</small>
					</span>
                </div>
                <i class="zmdi zmdi-washing-machine tile-icon"></i>
            </article>
            <article class="full-width tile">
                <a href="?c=Ventas&a=Consultar">

                    <div class="tile-text">
                        <span class="text-condensedLight">
						  <br>
						  <small>Ventas</small>
					   </span>
                    </div>
                    <i class="zmdi zmdi-shopping-cart tile-icon"></i>
                </a>
            </article>
        </section>
    </section>
</body>


</html>