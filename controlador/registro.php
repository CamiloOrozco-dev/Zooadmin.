<?php

    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //Encriptamiento de contraseña
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
             VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("intentalo de nuevo, usuario no almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>