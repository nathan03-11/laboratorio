<?php
$host = "localhost";
$user = "NMDB2025";     
$pass = "NMDB";          
$db   = "db_NMDB2025";  

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>


