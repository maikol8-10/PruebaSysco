<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
extract($_REQUEST);
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$usuario = $_POST['user'];
$pass = md5($_POST['contrasena']);
$myUser = "maikol8-10";
$myPass = "123";
if ($usuario == $myUser and $pass == $myPass) {
    session_start();
    $_SESSION['user'] = $usuario;
    header('location: producto.php');
} else {
    header('location: index.php');
}




