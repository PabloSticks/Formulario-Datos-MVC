<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    
    $rut_alumno = "20.508.241-7"; 
    $nombre_alumno = "Pablo Bizama Valles"; 
    
    echo "$rut_alumno; $nombre_alumno; $nombre; $apellido_paterno; $apellido_materno; $fecha_nacimiento";
}
?>
