<?php
  //validar la sesión
  @session_start();
  if(!isset($_SESSION["USERID"])){
    header('Location: index.php?c=Login&a=Login');
  } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
	<link rel="stylesheet" href="materializecss/css/normalize.css">
	<link rel="stylesheet" href="materializecss/css/sweetalert2.css">
	<link rel="stylesheet" href="materializecss/css/material.min.css">
	<link rel="stylesheet" href="materializecss/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="materializecss/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="materializecss/css/main.css">
	<link rel="shortcut icon" href="materializecss/img/disicomp.ico" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="materializecss/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="materializecss/js/material.min.js" ></script>
	<script src="materializecss/js/sweetalert2.min.js" ></script>
	<script src="materializecss/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="materializecss/js/main.js" ></script>
</head>