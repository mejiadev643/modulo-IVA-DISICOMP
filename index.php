<?php
require_once 'model/Conexion.php';  

  $controller = 'login';

  // Toda esta lógica hara el papel de un FrontController
  if(!isset($_REQUEST['c']))
  {
      //si el parámetro no ha sido definido cargará login.controller.php
      require_once "controller/$controller.controller.php";
      //Da un formato igual al nombre de la clase controlador
      $controller = ucwords($controller) . 'Controller';
      //instancia la clase del controlador
      $controller = new $controller;
      //método  de la clase Index()
      $controller->Index();    
  }
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion (método)
    call_user_func(array( $controller, $accion ) );
}

?>