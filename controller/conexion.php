<?php
 $server ="localhost";
$user = "root";
$password = "";
$database = "usuario";

try {
    $conn =  new PDO ("mysql:host=$server;dbname=$database;",$username,$password); 
} catch  (PDOException $error)  { 
    die ('conneted failed: ' .$error->getMessage());
    //throw $th;
}


?>