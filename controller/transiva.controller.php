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
        
        if(isset($_REQUEST['log'])){
            //si tiene el parámetro asignado ejecutamos el método
            $transiva = $this->model->obtenertransiva(base64_decode($_REQUEST['log']));
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

        $conf=$transiva->transivaReg($transiva);

       if (empty($conf) == true or $transiva->idiva > 0) { /*si se encuentra vacio o el atributo idiva esta lleno se procede a guardar.
            en este caso pregunte si el array $conf estaba vacio y me tirara que no, pero el idlogin esta lleno
            asi que:  0 or 1 = 1
            pasara al else solo si empty es 0 y el idlogin no este lleno
            osea: 0 or 0 = 0
            */
            #echo "vacio";
            //si el id es mayor que cero Actualiza si no registra
            $transiva->idiva > 0 
                ? $this->model->modificarTransiva($transiva)
                : $this->model->guardarTransiva($transiva);
            //redirecciona a la vista de consultar usuario
            header('Location: index.php?c=Transiva&a=Consultar');
        }else{ //si esta lleno el array se procede a enviar datos de regreso
            
            $BadTran=["idiva"=>$transiva->idiva,
                        "codtran"=>$transiva->codtran,
                        "nombre"=>$transiva->nombre,
                        "signo"=>$transiva->signo,
                        "sinoiva"=>$transiva->sinoiva];

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-transiva.php';
        }

    }

    public function Consultar(){
        //llama todas las partes para consultar      
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-transiva.php';
    }

    public function Eliminar(){
        $transiva = new Transiva();
        
        //captura todos los datos
        $transiva->idiva = base64_decode($_REQUEST['usr']);

        #var_dump($usuario);
        $this->model->eliminarTransiva($transiva);

        header("Location:?c=Transiva&a=Consultar"); 
    }

    
}

?>