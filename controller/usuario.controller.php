<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/

#utilizaremos la clase Usuario
require_once 'model/Usuario.php';

class UsuarioController{  
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Usuario
        $this->model = new Usuario();
    }
       
    public function Index(){        
        # administrador
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/home.php';
    }

    public function Crud(){
        $usuario = new Usuario();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $usuario = $this->model->obtenerusuario($_REQUEST['id']);
        }

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-usuario.php';
    }
    
    public function Guardar(){
        $usuario = new Usuario();
        
        //captura todos los datos
        $usuario->idlogin = $_REQUEST['idlogin'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->cargo = $_REQUEST['cargo'];
        $usuario->sistema = $_REQUEST['sistema'];
        $usuario->empresa = $_REQUEST['empresa'];
        $usuario->userid = $_REQUEST['userid'];
        $usuario->pass = $_REQUEST['pass'];

        $conf=$usuario->usuarioReg($usuario);//confirmacion de usuario
        
        if (empty($conf) == 1) { //si se encuentra vacio se procede a guardar.
            #echo "vacio";
            //si el id es mayor que cero Actualiza si no registra
            $usuario->idlogin > 0 
                ? $this->model->modificarUsuario($usuario)
                : $this->model->guardarUsuario($usuario);
            //redirecciona a la vista de consultar usuario
            header('Location: index.php?c=Usuario&a=Consultar');
        }else{ //si esta lleno el array se procede a enviar datos de regreso
            
            $BadUser=["login"=>$usuario->idlogin,
                        "nombre"=>$usuario->nombre,
                        "cargo"=>$usuario->cargo,
                        "sistema"=>$usuario->sistema,
                        "empresa"=>$usuario->empresa,
                        "pass"=>$usuario->pass,
                        "error"=>"ID de usuario existe"];
            #echo $BadUser["nombre"];

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-usuario.php';
        }
    
    }

    public function Consultar(){
        //llama todas las partes para consultar      
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/consultar-usuario.php';
    }

    
}

?>