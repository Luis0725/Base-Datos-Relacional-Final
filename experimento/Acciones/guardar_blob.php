<?php
include '../Datos/conexion.php';

$experimentador = $_POST[Experimentador];
$resultado = $_POST[Resultados];
$lugar = $_POST[LugarExperimento];
$genero = $_POST[GeneroParticipante];
$fecha = $_POST[Fecha];
$video = addslashes(file_get_contents($_FILES['Video']['tmp_name']));
$audio = addslashes(file_get_contents($_FILES['ObsAudio']['tmp_name']));

$experimento = $mysqli->query("INSERT INTO experimento(IdExperimentador, idResultado, idLugar, IdGenero, Fecha, Video, ObsAudio) VALUES ('$experimentador','$resultado','$lugar','$genero','$fecha','$video','$audio')");


if($experimento){
    echo "<script> alert ('Correcto, Datos Guardados');
    location.href = '../Agregar.php';
    </script>";
}
else{
    echo "<script> alert ('Error, Datos No Guardados');
    location.href = '../Agregar.php';
    </script>";
}

?> 