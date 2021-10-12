<?php
  //destruir sesión
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login DISICOMP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="asset-login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="asset-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="asset-login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset-login/css/util.css">
    <link rel="stylesheet" type="text/css" href="asset-login/css/main.css">
<!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('asset-login/images/bg-01.jpg');">
            
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../asset-login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					ACCEDER
				</span>
				<form action="?c=Login&a=Entrar" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Digitar Usuario">
						<input class="input100" type="text" name="userid" id="usu" value="<?php if(isset($error)){echo $error["usuario"];} ?>" placeholder="Usuario">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digitar Contraseña">
						<input class="input100" type="password" name="clave" id="pass" value="<?php if(isset($error)){echo $error["clave"];} ?>" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>    
					</div>
                    <span ><?php if(isset($error)){echo $error["mensaje"];} ?></span> 

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" value="Iniciar sesión">
							Entrar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
        </div>
    </div>
    

   

    
<!--===============================================================================================-->
    <script src="asset-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="asset-login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="asset-login/vendor/bootstrap/js/popper.js"></script>
    <script src="asset-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="asset-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="asset-login/vendor/daterangepicker/moment.min.js"></script>
    <script src="asset-login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="asset-login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="asset-login/js/main.js"></script>

</body>
</html>