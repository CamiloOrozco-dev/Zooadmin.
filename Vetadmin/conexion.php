<?php
require_once 'login.php';
 
// TODO: Falta la lógica del login
try {
    $conn = new PDO("mysql:DNI=$DNI; tipo_DNI=$tipo_DNI", $username, $password);
    echo "Connected to $DNI at $tipo_DNI to successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}