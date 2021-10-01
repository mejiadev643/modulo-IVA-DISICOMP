<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
class PrincipalController{  
       
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