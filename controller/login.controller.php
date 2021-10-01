<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Usuario.php';


class LoginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Usuario
       $this->model = new Usuario();
    }
    
       
    public function Index(){
        //llama la vista del login
        require_once 'view/login.php';
    }

    public function Entrar(){
        $usuario = new Usuario();
        
        //captura todos los datos
        $userid = $_REQUEST['userid'];
        $password = $_REQUEST['clave'];

        //consultar los datos
        $usuario = $this->model->entrar($userid, $password);

        //condicionar el inicio de sesión
        if ($usuario != null) {
            #tomar los valores es variables de sesión
            session_start();
            $_SESSION["NOMBRE"] = $usuario->NOMBRE;
            $_SESSION["USERID"] = $usuario->USERID;
            $_SESSION["EMPRESA"] = $usuario->EMPRESA;
            # entrar
             header('Location: index.php?c=Principal&a=Index');
        } else {
            # enviar al login
            header('Location: index.php?c=Login&a=Index');
        }
        
        
    }
   
}

?>