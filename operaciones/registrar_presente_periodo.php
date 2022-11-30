<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$id = $_POST['id']; //recibir datos y guarda en la variable $genero
$periodo_academico = $_POST['id_periodo_acad']; //recibir datos y guarda en una variable $genero




$consulta = "INSERT INTO presente_periodo_acad(id,id_periodo_acad) VALUES ('$id','$periodo_academico')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../periodo_academico.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar el presente periodo');
        window.history.back();
    </script>";
}

?>
