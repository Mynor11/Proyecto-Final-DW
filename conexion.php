<?php 

$mysqli=new mysqli("localhost:3306","root","","prueba"); //servidor, usuario, contraseña, bd
if ($mysqli->connect_errno) {
    echo 'Conexion fallo: ', mysqli_connect_error();
    exit();
} 
?>