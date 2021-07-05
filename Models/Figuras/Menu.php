<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../../login.php");


}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos/EstiloMenu.css" />
  <center> 
</head>
<body> 

<head>
   
 <center>
 <br><br>
    <a href="Seleccion.php" style=" background: url(Imagenes/Menu/btnInicio.png) /* Url de la imagen */ no-repeat center center, #62BC0F /* Color del botón */; background-size: 105%; height: 150px;  /* Alto del botón */
  width: 150px; margin:260px 10px;   /* Ancho del botón */"class="boton" ></a>
    <a href="../menu.php" style=" background: url(Imagenes/Menu/btnSalir.png) /* Url de la imagen */ no-repeat center center, #62BC0F /* Color del botón */; background-size: 105%; height: 80px;  /* Alto del botón */
  width: 100px; margin:260px 10px; /* Ancho del botón */"class="boton"></a> 
  
<a href="../menu.php" style=" background: url(Imagenes/041-home.png) no-repeat center center;
 background-size: 50%; height: 75px;
  width: 110px; margin:70px 50px;" class="leekids" ></a>
   </center>
 
    </head>
</body>
</html>
