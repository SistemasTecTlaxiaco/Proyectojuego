<?php

require 'conexion.php';

$Nombre_alumno = $_POST['Nombre_alumno'];
$Ap_paterno= $_POST['Ap_paterno'];
$Ap_materno = $_POST['Ap_materno'];
$Edad = $_POST['Edad'];

$query = "INSERT INTO alumnos(Nombre_alumno,Ap_paterno,Ap_materno,Edad) 
VALUES('$Nombre_alumno','$Ap_paterno','$Ap_materno','$Edad')";

$verificardup = mysqli_query($conexion, "SELECT * FROM alumnos WHERE Nombre_alumno='$Nombre_alumno' AND Ap_paterno='$Ap_paterno' AND Ap_materno='$Ap_materno'");

if(mysqli_num_rows($verificardup)>0){
    
    echo '<script language="javascript">
    alert("El registro ya existe, intente de nuevo");window.location.href="../Registro.php"</script>';
}
$ejecutar =mysqli_query($conexion, $query);

if($ejecutar){
    echo '<script language="javascript">
    alert("Registro exitoso");window.location.href="../Registro.php"</script>';
}else{
    echo '<script language="javascript">
    alert("intente de nuevo");window.location.href="../Registro.php"</script>';
}
mysqli_close($conexion);
?>