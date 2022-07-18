<?php
include("conexion_proyecto.php");
?>

<?php

$f_name = utf8_decode($_POST['nombre']);
$f_fecha = utf8_decode($_POST['fecha_nac']);
$f_esp = utf8_decode($_POST['especie']);

$sql = "INSERT INTO mascotas (nombre, fecha_nac, especie) 
VALUES ('$f_name','$f_fecha', '$f_esp' )";
if (mysqli_query($conn, $sql)) {
   echo "El registro se ingresó correctamente !";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<a href="http://localhost/index_inicio.php">Volver</a>