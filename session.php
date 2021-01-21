<?php
 
 include("validar.php");

session_start();
$nomUsu= $_SESSION['usuario'];

if($nomUsu == null || $nomUsu == ''){
    echo 'No tiene autorización para ingresar a esta página';
    die();
    //header("location: ../login.php");
   
}
?>