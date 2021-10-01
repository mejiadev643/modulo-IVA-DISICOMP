<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/

#utilizaremos la clase ClienteProveedor
require_once 'model/ClienteProveedor.php';

class ClienteProveedorController{  
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo ClienteProveedor
        $this->model = new ClienteProveedor();
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
    
    // public function Guardar(){
    //     $clienteproveedor = new ClienteProveedor();
        
    //     //captura todos los datos
    //     $clienteproveedor->idcliente = $_REQUEST['txtIdcliente'];
    //     $clienteproveedor->nombre = $_REQUEST['txtNombre'];
    //     $clienteproveedor->apellido = $_REQUEST['txtApellido'];
    //     $clienteproveedor->telefono = $_REQUEST['txtTelefono'];
    //     $clienteproveedor->direccion = $_REQUEST['txtDireccion'];
    //     $clienteproveedor->email = $_REQUEST['txtEmail'];

    //     //si el id es mayor que cero Actualiza si no registra
    //     $clienteproveedor->idcliente > 0 
    //         ? $this->model->modificarcliente($cliente)
    //         : $this->model->guardarcliente($cliente);
        
    //     //redirecciona a la vista index
    //     header('Location: index.php?c=cliente&a=Consultar');
    // }

    // public function Consultar(){
    //     //llama todas las partes de la vista principal       
    //     require_once 'view/gerente/cabecera_gerente.php';
    //     require_once 'view/gerente/consultar_cliente.php';
    //     require_once 'view/gerente/pie_consulta_gerente.php';
    // }

    
}

?>