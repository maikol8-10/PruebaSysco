<?php
session_start();
require './vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/orders/getOrders');
$body = $res->getBody();
$data = json_decode($body, TRUE);
?>
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
        <title></title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="assets/navbar.css"/>
        <div class="topnav">
            <a class="active" href="logout.php">Cerrar Sesión</a>
            <!--<a href="#news"></a>-->
            <a href="productos.php">Productos</a>
            <a href="#home">Ordenes</a>
            <h1><?php echo $_SESSION['user']; ?></h1>
        </div>
        <div class="container">
            <div class="row">
                <h1 class="container"> Ordenes</h1>
                <ul class="list-unstyled">
                    <?php
                    foreach ((array) $data as $ordenes) {
                        foreach ((array) $ordenes as $orden => $value) {
                            $user = $value["user"];
                            $estado = $value["state"];
                            echo "
                        <li class='container'>
                        <div class='container'>
                            <h5 class='container'> $user</h5>
                                <h4 class='container'> $estado</h4>
                        </div>
                    </li> <br><br><br>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <?php
// put your code here
        ?>
    </body>
</html>

