<?php
$server ="localhost";
$username = "root";
$password = "";
$database = "vetadmin";

try {
    $conn =  new PDO ("mysql:host=$server;dbname=$database;",$username,$password); 
} catch  (PDOException $error)  { 
    die ('conneted failed: ' .$error->getMessage());
    //throw $th;
}


?>