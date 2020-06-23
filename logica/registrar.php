<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$Ap = $_POST['Ap'];
$Am = $_POST['Am'];
$edad = $_POST['edad'];

$query = "INSERT INTO public.alumnos(Nombre_alumno,Ap_paterno,Ap_materno,Edad) VALUES('$nombre','$Ap','$Am','$edad')";

if (mysqli_query($conexion, $query)){
    echo '<script language="javascript">alert("Alumno agregado");window.location.href="../Registro.php"</script>';
    } else {
    echo '<script language="javascript">alert("Error al agregar el alumno");window.location.href="../Registro.php"</script>';
    }



?>