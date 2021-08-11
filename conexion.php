<?php
$server="localhost";
$user="root";
$password="";
$nameBD="contactos";
$conexion = mysqli_connect($server,$user,$password,$nameBD);
mysqli_query($conexion,"SET NAMES 'UTF-8'");
?>