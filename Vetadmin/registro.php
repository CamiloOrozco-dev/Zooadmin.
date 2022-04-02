<?php
$DNI = "";
$tipo_DNI = "";
$nombre = "";
$apellido = "";
$telefono = "";
$correo = "";
$contraseña = "";
// Create connection
$conn = mysqli_connect($DNI, $tipo_DNI, $nombre, $apellido, $telefono, $correo);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>