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
      

        //llama todas las partes de la vista para guardar        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-cliente-proveedor.php';
        
       
 		
    }
    public function Editar(){
        $clienteproveedor = new ClienteProveedor();
      
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $clienteproveedor = $this->model->obtenerClienteProveedor(base64_decode($_REQUEST['id']));
        }

        //llama todas las partes de la vista para editar        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/editar-cliente-proveedor.php';
        
       
 		
    }

    
    public function Guardar(){
        $clienteproveedor = new ClienteProveedor();
        
        //captura todos los datos
        $clienteproveedor->IDCLIENTE = $_REQUEST['IDCLIENTE'];
        $clienteproveedor->CODCLIENT = $_REQUEST['CODCLIENT'];
        $clienteproveedor->NOMBCLIENT = $_REQUEST['NOMBCLIENT'];
        $clienteproveedor->DENOMCLIENT = $_REQUEST['DENOMCLIENT'];
        $clienteproveedor->REGCLIENT = $_REQUEST['REGCLIENT'];
        $clienteproveedor->GIRONEG = $_REQUEST['GIRONEG'];
        $clienteproveedor->NUMNIT = $_REQUEST['NUMNIT'];
        $clienteproveedor->TELEFONO = $_REQUEST['TELEFONO'];
        $clienteproveedor->DIRNEG = $_REQUEST['DIRNEG'];
        $clienteproveedor->CIUDAD = $_REQUEST['CIUDAD'];
        $clienteproveedor->DEPTO = $_REQUEST['DEPTO'];
        $clienteproveedor->TIPODOCUCRFCOF = $_REQUEST['TIPODOCUCRFCOF'];
        $clienteproveedor->NOMBRENIT = $_REQUEST['NOMBRENIT'];
        $clienteproveedor->GRANCONTRIB = $_REQUEST['GRANCONTRIB'];
        $clienteproveedor->ESTADO = $_REQUEST['ESTADO'];
        $clienteproveedor->NUMSERIE = $_REQUEST['NUMSERIE'];
        $clienteproveedor->DOCUNICO = $_REQUEST['DOCUNICO'];
        $clienteproveedor->USUARIO = $_REQUEST['USUARIO'];
        $clienteproveedor->TIPOCLIENT = $_REQUEST['TIPOCLIENT'];

        // //si el id es mayor que cero Actualiza si no registra
        $clienteproveedor->IDCLIENTE > 0 
            ? $this->model->modificarcliente($clienteproveedor)
            : $this->model->guardarcliente($clienteproveedor);
        
        //redirecciona a la vista consultar
        header('Location: index.php?c=clienteProveedor&a=Consultar');
    }

    public function Consultar(){
        //llama todas las partes de la vista Consultar       
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-cliente-proveedor.php';
    }
    public function ActualizarClienteProveedor(){
        $clienteproveedor = new ClienteProveedor();
        
        //captura todos los datos
        $clienteproveedor->IDCLIENTE = $_REQUEST['IDCLIENTE'];
        $clienteproveedor->CODCLIENT = $_REQUEST['CODCLIENT'];
        $clienteproveedor->NOMBCLIENT = $_REQUEST['NOMBCLIENT'];
        $clienteproveedor->DENOMCLIENT = $_REQUEST['DENOMCLIENT'];
        $clienteproveedor->REGCLIENT = $_REQUEST['REGCLIENT'];
        $clienteproveedor->GIRONEG = $_REQUEST['GIRONEG'];
        $clienteproveedor->NUMNIT = $_REQUEST['NUMNIT'];
        $clienteproveedor->TELEFONO = $_REQUEST['TELEFONO'];
        $clienteproveedor->DIRNEG = $_REQUEST['DIRNEG'];
        $clienteproveedor->CIUDAD = $_REQUEST['CIUDAD'];
        $clienteproveedor->DEPTO = $_REQUEST['DEPTO'];
        $clienteproveedor->TIPODOCUCRFCOF = $_REQUEST['TIPODOCUCRFCOF'];
        $clienteproveedor->NOMBRENIT = $_REQUEST['NOMBRENIT'];
        $clienteproveedor->GRANCONTRIB = $_REQUEST['GRANCONTRIB'];
        $clienteproveedor->ESTADO = $_REQUEST['ESTADO'];
        $clienteproveedor->NUMSERIE = $_REQUEST['NUMSERIE'];
        $clienteproveedor->DOCUNICO = $_REQUEST['DOCUNICO'];
        $clienteproveedor->USUARIO = $_REQUEST['USUARIO'];
        $clienteproveedor->TIPOCLIENT = $_REQUEST['TIPOCLIENT'];

        //Actualizar
        $this->model->ActualizarClienteProveedor($clienteproveedor);
        
        //redirecciona a la vista Consultar
        header('Location: index.php?c=ClienteProveedor&a=Consultar');
    }

    public function Eliminar(){
        $clienteproveedor = new ClienteProveedor();
        
        //captura todos los datos
        $clienteproveedor->IDCLIENTE = base64_decode($_REQUEST['usr']);

        #var_dump($usuario);
        $this->model->eliminarClienteProveedor($clienteproveedor);

        header("Location:?c=ClienteProveedor&a=Consultar");

        

    }

   
    

   

    
}

?>