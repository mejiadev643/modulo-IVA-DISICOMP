<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/

#utilizaremos la clase Ventas
require_once 'model/Ventas.php';
require_once 'model/ConexionMovimientosDC.php';
require_once 'model/ConexionComunDc.php';
require_once 'model/Transiva.php';
require_once 'model/ClienteProveedor.php';

class VentasController{  
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Ventas
        $this->model = new Ventas();
        $this->model2 =new Transiva();
        $this->model3 =new ClienteProveedor();
    }
       
    public function Index(){        
        # ventas
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/home.php';
        
    }

    public function Crud(){
        $ventas = new Ventas();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $ventas = $this->model->obtenerventas($_REQUEST['id']);
        }

        //llama todas las partes de la vista para guardar        
        # ventas
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-ventas.php';
    }

    public function Guardar(){
        $rventas = new Ventas();
        
        //captura todos los datos
        $rventas->IDVENTA  = $_REQUEST['IDVENTA'];
        $rventas->SUCURSAL = $_REQUEST['SUCURSAL'];
        $rventas->FECHA    = $_REQUEST['FECHA'];
        $rventas->COMPRO   = $_REQUEST['COMPRO'];
        $rventas->REGISTRO = $_REQUEST['REGISTRO'];
        $rventas->NOUNICO  = $_REQUEST['NOUNICO'];              
        $rventas->SERIE    = $_REQUEST['SERIE'];
        $rventas->VALOR    = $_REQUEST['VALOR'];
        $rventas->IVA13    = $_REQUEST['IVA13'];
        $rventas->IVA1     = $_REQUEST['IVA1'];
        $rventas->IVA2     = $_REQUEST['IVA2'];
        $rventas->TT       = $_REQUEST['TT'];
        $rventas->EXENTAS  = $_REQUEST['EXENTAS'];
        $rventas->TOTAL    = $_REQUEST['TOTAL'];
        $rventas->FOVIAL   = $_REQUEST['FOVIAL'];
        $rventas->COTRAN   = $_REQUEST['COTRAN'];
        $rventas->FECOPERA = $_REQUEST['FECOPERA'];
        $rventas->MAQUINA  = $_REQUEST['MAQUINA'];
        $rventas->USUARIO  = $_REQUEST['USUARIO'];
        $rventas->FECHAOPE = $_REQUEST['FECHAOPE'];        
        $rventas->HORA     = $_REQUEST['HORA'];
        
        // //si el id es mayor que cero Actualiza si no registra
        $rventas->IDVENTA > 0 
            ? $this->model->modificarventas($rventas)
            : $this->model->guardarventa($rventas);
        
        //redirecciona a la vista consultar
        header('Location: index.php?c=Ventas&a=Consultar');
    }

    public function Consultar(){
        //llama todas las partes de la vista Consultar       
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-ventas.php';
    }

    public function Eliminar(){
        $ventas = new Ventas();
        
        //captura todos los datos
        $ventas->IDVENTA = base64_decode($_REQUEST['usr']);

        #var_dump($usuario);
        $this->model->eliminarVenta($ventas);

        header("Location:?c=Ventas&a=Consultar");
    }
}
?>