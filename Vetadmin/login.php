<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/master.css">
    <title>VetAdmin Registro</title>
</head>

<body>
    <?php $DNI = "";
$tipo_DNI = "";
$nombre = "";
$apellido = "";
$telefono = "";
$correo = "";
    
    
    ?>

    <div class="loginbox">
        <img class="avatar" src="/img/Vet admin (1).png" alt="zoo">
        <h1>Registrate aquí</h1>
        <form>
            <label for="username">Nombre de Usuario</label>
            <input type="text" placeholder="Ingresa tu nombre ">
            <br>

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingresa tu Contraseña" background="transparent">
            <br>

            <input type="submit" value="Iniciar"> <br>

            <a href="#">Olvidaste tu contraseña?</a> <br>
            <a href="#">¿No estás registrado?</a>

        </form>



    </div>

</body>

</html>