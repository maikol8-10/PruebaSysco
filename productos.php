
<?php
session_start();
require './vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/products/getProducts');
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
            <a href="ordenes.php">Ordenes</a>
            <h1><?php echo $_SESSION['user']; ?></h1>
        </div>
        <div class="container">
            <div class="row">
                <h1 class="container"> Productos</h1>
                <br>
                <?php
                foreach ((array) $data as $productos) {
//                        print_r($productos);
                    foreach ((array) $productos as $producto => $value) {
                        $name = $value["name"];
                        $image = $value["image"];
                        $description = $value["description"];
                        $price = $value["price"];
                        echo "
                        <li class='media mr-4'>
                        <img class='mr-3' src='$image' alt='' width='128' height='128'>
                        <div class='media-body'>
                            <h4 class='container'> $name</h4>
                                <br>
                                <h5 class='container'> $description</h5>
                                <h3 class='container'> $price</h3>
                        </div>
                    </li> <br><br><br>";
                    }
                }
                ?>

            </div>
        </div>
        <?php
// put your code here
        ?>
    </body>
</html>
