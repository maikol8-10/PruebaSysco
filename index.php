<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/less.css"/>
        <link rel="stylesheet" type="text/css" href="assets/navbar.css"/>
        <script type="text/javascript" src="assets/JavaScript.js"></script>
        <script src="../Cafeteria/assets/JavaScript.js" ></script>
        <title></title>
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="index.php">Iniciar Sesión</a>
            <!--<a href="#news"></a>-->
            <!--            <a href="#contact">Contacto</a>
                        <a href="#home">Inicio</a>-->
        </div>
        <div class="login-page">
            <div class="form">
<!--                <form class="register-form " action="codigoLogin.php" method="POST" >
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>-->
                <form class="login-form" role="form" action="codigoLogin.php" method="POST">
                    <input type="text" id="user" name="user" placeholder="Usuario"/>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña"/>
                    <button type="submit" name="btn" value="entrar" >Ingresar</button>
                    <p class="message">No registrado? <a href="index.php">Crear una cuenta</a></p>
                </form>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
