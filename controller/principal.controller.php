<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/

#utilizaremos la clase Usuario para encontrar el total de usuarios
require_once 'model/Usuario.php';
require_once 'model/ClienteProveedor.php';
require_once 'model/Transiva.php';

class PrincipalController{
    
    private $admin;
    private $cliente;
    private $transiva;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Usuario para usar el metodo listar usuario
        $this->admin= new Usuario();
        $this->cliente = new ClienteProveedor();
        $this->transiva = new Transiva();
    }
       
    public function Index(){    

        #mostrar el index de cada usuario según sus privilegios
        session_start();
        if(isset($_SESSION['EMPRESA'])){
            #validar el privilegios
            if ($_SESSION['EMPRESA'] == "Todas") {
                # administrador
                require_once 'view/admin/header.php';
                require_once 'view/admin/notifications.php';
                require_once 'view/admin/navLateral.php';
                require_once 'view/admin/home.php';
                

            } 
            //elseif {
            //     # persona x
                

            // }else{
            //     # persona x
               
            // }
            
        }else{            
            # enviar al login
            header('Location: index.php?c=Login&a=Index');
        }

        
    }
    
}

?>