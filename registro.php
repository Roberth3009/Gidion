<?php
if(isset($_POST)){
    require_once 'conexion.php';
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];  
 
    //INGRESO A LA BASE DE DATOS
    $sql ="INSERT INTO mensajes VALUES(null,'$nombre','$email','$mensaje')";
    var_dump($sql);
    $guardar = mysqli_query($conexion, $sql);
    if($guardar){
        echo "mensaje enviado";
        header('location: index.php');
    }else{
        echo "mensaje no enviado error";
    }
} 
?>

