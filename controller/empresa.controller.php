
<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta a la transacción IVA
*/

#utilizaremos la clase Transiva
require_once 'model/Empresa.php';

class EmpresaController{  
    
    private $model;
    
    public function __CONSTRUCT(){
        
        $this->model = new Empresa();
    }
       
    public function Index(){        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/home.php';
    }

    public function Crud(){
        $empresa = new Empresa();
        
        if(isset($_REQUEST['log'])){
            //si tiene el parámetro asignado ejecutamos el método
            $empresa = $this->model->obtenerempresa(base64_decode($_REQUEST['log']));
        }

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-empresa.php';
    }
    
    public function Guardar(){
        $empresa = new Empresa();
        
        //captura todos los datos
        $empresa->idempresa = $_REQUEST['idempresa'];
        $empresa->codigo = $_REQUEST['codigo'];
        $empresa->nombre = $_REQUEST['nombre'];
        $empresa->denomina = $_REQUEST['denomina'];
        $empresa->teleycaja = $_REQUEST['teleycaja'];
        $empresa->registro = $_REQUEST['registro'];
        $empresa->nit = $_REQUEST['nit'];
        $empresa->giro = $_REQUEST['giro'];
        $empresa->direccion = $_REQUEST['direccion'];

        $conf=$empresa->empresaReg($empresa);

       if (empty($conf) == true or $empresa->idempresa > 0) { /*si se encuentra vacio o el atributo idiva esta lleno se procede a guardar.
            en este caso pregunte si el array $conf estaba vacio y me tirara que no, pero el idlogin esta lleno
            asi que:  0 or 1 = 1
            pasara al else solo si empty es 0 y el idlogin no este lleno
            osea: 0 or 0 = 0
            */
            #echo "vacio";
            //si el id es mayor que cero Actualiza si no registra
            $empresa->idempresa > 0 
                ? $this->model->modificarEmpresa($empresa)
                : $this->model->guardarEmpresa($empresa);
            //redirecciona a la vista de consultar usuario
            header('Location: index.php?c=Empresa&a=Consultar');
        }else{ //si esta lleno el array se procede a enviar datos de regreso
            
            $BadEmpresa=["idempresa"=>$empresa->idempresa,
                        "codigo"=>$empresa->codigo,
                        "nombre"=>$empresa->nombre,
                        "denomina"=>$empresa->denomina,
                        "teleycaja"=>$empresa->teleycaja,
                        "registro"=>$empresa->registro,
                        "nit"=>$empresa->nit,
                        "giro"=>$empresa->giro,
                        "direccion"=>$empresa->direccion];

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-empresa.php';
        }

    }

    public function Consultar(){
        //llama todas las partes para consultar      
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-empresa.php';
    }

    public function Eliminar(){
        $empresa = new Empresa();
        
        //captura todos los datos
        $empresa->idempresa = base64_decode($_REQUEST['usr']);

        #var_dump($usuario);
        $this->model->eliminarEmpresa($empresa);

        header("Location:?c=Empresa&a=Consultar"); 
    }

    
}


?>