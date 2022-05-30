<?php

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0 ){
        header('location: ../vista/bienvenido.php');
        exit;
    }else{
        echo'
            <script>
                alert("usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>