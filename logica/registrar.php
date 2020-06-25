<?php

require_once 'conexion.php';


$nombre = $_POST['nombre'];
$Ap = $_POST['Ap'];
$Am = $_POST['Am'];
$edad = $_POST['edad'];

$query ="INSERT INTO public.alumnos(nombre_alumno, ap_paterno, ap_materno, grado) VALUES ( '$nombre', '$Ap', '$Am', '$edad')";
$resul=pg_query($conexion, $query);
if ($resul){
    echo '<script language="javascript">alert("Alumno agregado");window.location.href="../Registro.php"</script>';
    } else {
    echo '<script language="javascript">alert("Error al agregar el alumno");window.location.href="../Registro.php"</script>';
    }



?>