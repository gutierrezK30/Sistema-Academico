<?php
include "../include/conexion.php"; //incluye el archivo de la conexion
include "../include/busquedas.php";
$id = $_POST['id']; //recibe datos y guarda en una variable llamada $docente
$descripcion = $_POST['descripcion']; //recibe datos y guarda en una variable llamada $usuario


$consulta = "INSERT INTO cargo ( descripcion) VALUES ( '$descripcion')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../cargo.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}