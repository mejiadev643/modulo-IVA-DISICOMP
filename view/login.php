<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="materializecss/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="materializecss/css/normalize.css">
    <link rel="stylesheet" href="materializecss/css/style.css">
</head>

<body>
    <div class="login">
        <div class="image">
            <i class="zmdi zmdi-account-circle  zmdi-hc-5x"></i>
            <h2 class= "inicio">Inicie sesión</h2>
        </div>
        <form class="formulario_login" action="?c=Login&a=Entrar" method="post">
            <div class="form-icon col s12">
                <label for="Usuario">Usuario</label>
                <input type="text" placeholder="Usuario" name="userid">
                <span class="zmdi zmdi-account"></span>
            </div>
            <div class="form-icon">
                <label for="contraseña">Contraseña</label>
                <input type="password" placeholder="Contraseña" name="clave">
                <span class="zmdi zmdi-lock"></span>
            </div>
            <button>Aceptar</button>
        </form>
    </div>
</body>

</html>
