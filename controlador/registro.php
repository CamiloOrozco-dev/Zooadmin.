<?php

    include 'conexion.php';

    $nombre_completo = trim($_POST['nombre_completo']);
    $correo = trim ($_POST['correo']);
    $usuario = trim( $_POST['usuario']);
    $contrasena = trim( $_POST['contrasena']);
    $verificar = trim ($_POST ['verificar']);

    //Encriptamiento de contraseña
    $contrasena = hash('sha512', $contrasena); 

     if ($nombre_completo == "" ){

     }
     if ( $correo == "" ){

     }
     if ( $usuario == "" ){

     }
     if ( $contrasena == "" ){

     }

        
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