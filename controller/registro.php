<?php
require 'conexion.php';
$message="";
//TODO: validar campos requeridos
if (!empty($_POST['DNI']&& !empty($_POST['nombre'] && !empty($_POST['password'])))) {

    $sql= "INSERT INTO usuario (DNI, nombre, password) VALUES (:DNI, :nombre, :password)";
    $stmt = $conn->prepare ($sql);
    $stmt->bindParam(':DNI',$_POST['DNI']);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);
  
    if ($stmt->execute()) {

       $message ='Successfully created new user ';
    } else {
        $message ='Sorry there must have been an issue creating your account  ';
    }
}
?>