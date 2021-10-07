<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/

#utilizaremos la clase ClienteProveedor
require_once 'model/ClienteProveedor.php';
require_once 'model/TipoVenta.php';

class ClienteProveedorController{  
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo ClienteProveedor
        $this->model = new ClienteProveedor();
        $this->model2 = new TipoVenta();
    }
       
    public function Index(){        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/home.php';
        
    }

    public function Crud(){
        $clienteproveedor = new ClienteProveedor();
      
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $clienteproveedor = $this->model->obtenercliente($_REQUEST['id']);
        }

        //llama todas las partes de la vista para guardar        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-cliente-proveedor.php';
        
       
 		
    }
    
    public function Guardar(){
        $clienteproveedor = new ClienteProveedor();
        
        //captura todos los datos
        $PRUEBA1=$clienteproveedor->IDCLIENTE = $_REQUEST['IDCLIENTE'];
        echo $PRUEBA1;
        echo "<br>";
        $PRUEBA2= $clienteproveedor->CODCLIENT = $_REQUEST['CODCLIENT'];
        echo $PRUEBA2;
        echo "<br>";
        $PRUEBA3=$clienteproveedor->NOMBCLIENT = $_REQUEST['NOMBCLIENT'];
        echo $PRUEBA3;
        echo "<br>";
        $PRUEBA4=$clienteproveedor->DENOMCLIENT = $_REQUEST['DENOMCLIENT'];
        echo $PRUEBA4;
        echo "<br>";
        $PRUEBA5=$clienteproveedor->REGCLIENT = $_REQUEST['REGCLIENT'];
        echo $PRUEBA5;
        echo "<br>";
        $PRUEBA6=$clienteproveedor->GIRONEG = $_REQUEST['GIRONEG'];
        echo $PRUEBA6;
        echo "<br>";
        $PRUEBA7=$clienteproveedor->NUMNIT = $_REQUEST['NUMNIT'];
        echo $PRUEBA7;
        echo "<br>";
        $PRUEBA8=$clienteproveedor->TELEFONO = $_REQUEST['TELEFONO'];
        echo $PRUEBA8;
        echo "<br>";
        $PRUEBA9=$clienteproveedor->DIRNEG = $_REQUEST['DIRNEG'];
        echo $PRUEBA9;
        echo "<br>";
        $PRUEBA10=$clienteproveedor->CIUDAD = $_REQUEST['CIUDAD'];
        echo $PRUEBA10;
        echo "<br>";
        $PRUEBA11=$clienteproveedor->DEPTO = $_REQUEST['DEPTO'];
        echo $PRUEBA11;
        echo "<br>";
        $PRUEBA12=$clienteproveedor->TIPODOCUCRFCOF = $_REQUEST['TIPODOCUCRFCOF'];
        echo $PRUEBA12;
        echo "<br>";
        $PRUEBA13=$clienteproveedor->NOMBRENIT = $_REQUEST['NOMBRENIT'];
        echo $PRUEBA13;
        echo "<br>";
        $PRUEBA14=$clienteproveedor->GRANCONTRIB = $_REQUEST['GRANCONTRIB'];
        echo $PRUEBA14;
        echo "<br>";
        $PRUEBA15=$clienteproveedor->ESTADO = $_REQUEST['ESTADO'];
        echo $PRUEBA15;
        echo "<br>";
        $PRUEBA16=$clienteproveedor->NUMSERIE = $_REQUEST['NUMSERIE'];
        echo $PRUEBA16;
        echo "<br>";
        $PRUEBA17=$clienteproveedor->DOCUNICO = $_REQUEST['DOCUNICO'];
        echo $PRUEBA17;
        echo "<br>";
        $PRUEBA18=$clienteproveedor->USUARIO = $_REQUEST['USUARIO'];
        echo $PRUEBA18;
        echo "<br>";
        $PRUEBA19=$clienteproveedor->FECHAOPE = $_REQUEST['FECHAOPE'];
        echo $PRUEBA19;
        echo "<br>";
        $PRUEBA20=$clienteproveedor->MAQUINA = $_REQUEST['MAQUINA'];
        echo $PRUEBA20;
        echo "<br>";
        $PRUEBA21=$clienteproveedor->HORA = $_REQUEST['HORA'];
        echo $PRUEBA21;
        echo "<br>";
        $PRUEBA22=$clienteproveedor->TIPOCLIENT = $_REQUEST['TIPOCLIENT'];
        echo $PRUEBA22;
        echo "<br>";

        // //si el id es mayor que cero Actualiza si no registra
        $clienteproveedor->IDCLIENTE > 0 
            ? $this->model->modificarcliente($clienteproveedor)
            : $this->model->guardarcliente($clienteproveedor);
        
        //redirecciona a la vista index
        echo "Exito";
        // header('Location: index.php?c=clienteProveedor&a=Consultar');
    }

    public function Consultar(){
        //llama todas las partes de la vista Consultar       
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-cliente-proveedor.php';
    }

    
}

?>