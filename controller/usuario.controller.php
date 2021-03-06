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
        
        if(isset($_REQUEST['log'])){
            //si tiene el parámetro asignado ejecutamos el método
            $usuario = $this->model->obtenerusuario(base64_decode($_REQUEST['log']));
        }
        #var_dump($usuario);

        //llama todas las partes de la vista para guardar        
        require_once 'view/admin/header.php';
        require_once 'view/admin/notifications.php';
        require_once 'view/admin/navLateral.php';
        require_once 'view/admin/registro-usuario.php';
        
    }
    
    public function Guardar(){
        $usuario = new Usuario();
        
        //captura todos los datos
        $usuario->idlogin = $_REQUEST['idusu'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->cargo = $_REQUEST['cargo'];
        $usuario->sistema = $_REQUEST['sistema'];
        $usuario->empresa = $_REQUEST['empresa'];
        $usuario->userid = $_REQUEST['userid'];
        $usuario->pass = $_REQUEST['pass'];

        $conf=$usuario->usuarioReg($usuario);//confirmacion de usuario
        
        if (empty($conf) == true or $usuario->idlogin > 0) { /*si se encuentra vacio o el atributo idlogin esta lleno se procede a guardar.
            en este caso pregunte si el array $conf estaba vacio y me tirara que no, pero el idlogin esta lleno
            asi que:  0 or 1 = 1
            pasara al else solo si empty es 0 y el idlogin no este lleno
            osea: 0 or 0 = 0
            */
            #echo "vacio";
            //si el id es mayor que cero Actualiza si no registra
            #echo $usuario->idlogin;
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
                        "userid"=>$usuario->userid,
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

    public function Eliminar(){
        $usuario = new Usuario();
        
        //captura todos los datos
        $usuario->idlogin = base64_decode($_REQUEST['usr']);

        #var_dump($usuario);
        $this->model->eliminarUsuario($usuario);

        header("Location:?c=Usuario&a=Consultar");

        

    }



    
}

?>