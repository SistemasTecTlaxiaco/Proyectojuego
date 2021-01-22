<?php

require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) AS contar FROM alumnos WHERE Nombre_alumno='$usuario' and 	Ap_paterno='$clave'";
$consulta = pg_query($conexion, $query);

$array = pg_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']=$usuario;

    header("location: ../Models/menu.php");


}else{
    echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../login.php"</script>';
}



?>