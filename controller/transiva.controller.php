<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta a la transacción IVA
*/

#utilizaremos la clase Transiva
require_once 'model/Transiva.php';

class TransivaController{  
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Transiva
        $this->model = new Transiva();
    }
       
    public function Index(){        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/home.php';
    }

    public function Crud(){
        $transiva = new Transiva();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $usuario = $this->model->obtenertransiva($_REQUEST['id']);
        }

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-transiva.php';
    }
    
    public function Guardar(){
        $transiva = new Transiva();
        
        //captura todos los datos
        $transiva->idiva = $_REQUEST['idiva'];
        $transiva->codtran = $_REQUEST['codtran'];
        $transiva->nombre = $_REQUEST['nombre'];
        $transiva->signo = $_REQUEST['signo'];
        $transiva->sinoiva = $_REQUEST['sinoiva'];

        //si el id es mayor que cero Actualiza si no registra
        $transiva->idiva > 0 
            ? $this->model->modificarTransiva($transiva)
            : $this->model->guardarTransiva($transiva);
        
        // //redirecciona a la vista de consultar usuario
         header('Location: index.php?c=Transiva&a=Consultar');
    }

    public function Consultar(){
        //llama todas las partes para consultar      
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-transiva.php';
    }

    
}

?>