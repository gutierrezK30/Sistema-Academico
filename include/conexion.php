<?php
// conexion utiliza servidor-usuario-password-base de datos
//$conexion = mysqli_connect("localhost", "root", "root", "SisAcad");

$conexion = mysqli_connect("localhost", "desarro1_katia", "RG6yHK8QuJsq", "desarro1_katiagutierrez");

if ($conexion) {

} else {
   echo "Error de conexion a la base de datos";
}
?>