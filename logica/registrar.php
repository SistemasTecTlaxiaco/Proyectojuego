<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$Ap = $_POST['Ap'];
$Am = $_POST['Am'];
$edad = $_POST['edad'];


$query = "INSERT INTO public.alumnos(nombre_alumno, ap_paterno,ap_materno,grado) 
VALUES('$nombre','$Ap','$Am','$edad')";

$verificardup = pg_query($conexion, "SELECT * FROM public.alumnos WHERE nombre_alumno='$nombre' AND ap_paterno='$Ap' AND ap_materno='$Am'");

if(pg_affected_rows($verificardup)>0){

    
    echo '<script language="javascript">
    alert("El registro ya existe, intente de nuevo");window.location.href="../Registro.php"</script>';
}

$ejecutar = pg_query($conexion, $query);


if($ejecutar){
    echo '<script language="javascript">
    alert("Registro exitoso");window.location.href="../Registro.php"</script>';
}else{
    echo '<script language="javascript">
    alert("intente de nuevo");window.location.href="../Registro.php"</script>';
}

pg_close($conexion);

?>