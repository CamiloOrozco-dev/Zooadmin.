<?php
require 'conexion.php';
$message="";
//TODO: validar campos requeridos
if (!empty($_POST['DNI']&& !empty($_POST['nombre'] && !empty($_POST['rpassword'])))) {

    $sql= "INSERT INTO usuario (DNI, nombre, rpassword) VALUES (:DNI, :nombre, :rpassword)";
    $stmt = $conn->prepare ($sql);
    $stmt->bindParam(':DNI',$_POST['DNI']);
    $stmt->bindParam(':tipo_DNI',$_POST['tipo_DNI']);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $stmt->bindParam(':apellido',$_POST['apellido']);
    $stmt->bindParam(':telefono',$_POST['telefono']);
    $stmt->bindParam(':email',$_POST['email']);
    $rpassword = password_hash($_POST['rpassword'], PASSWORD_BCRYPT);
    $stmt->bindParam(':rpassword',$rpassword);
  
    if ($stmt->execute()) {

       $message ='Successfully created new user ';
    } else {
        $message ='Sorry there must have been an issue creating your account  ';
    }
}
?>