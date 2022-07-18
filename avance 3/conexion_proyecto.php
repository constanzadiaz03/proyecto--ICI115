<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kit_mascotas";

// Crea la conexión.............................
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Verifica la conexión.........................
if (!$conn) {
  die("Falló la conexión: " . mysqli_connect_error());
}
echo "Conexión exitosa a la BD $dbname  :D ";
?>