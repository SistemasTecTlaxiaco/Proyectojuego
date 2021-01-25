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
  <center><br>  <img src="Imagenes/Menu/numeros.png"  width="65%"
     height="70">
</head>
<body> 

<head>
   
 <center>
 <br><br>
    <a href="Seleccion.php" style=" background: url(Imagenes/Menu/btnInicio.png) /* Url de la imagen */ no-repeat center center, #62BC0F /* Color del botón */; background-size: 105%; height: 150px;  /* Alto del botón */
  width: 150px;  /* Ancho del botón */"class="boton" ></a>
    <a href="../menu.php" style=" background: url(Imagenes/Menu/btnSalir.png) /* Url de la imagen */ no-repeat center center, #62BC0F /* Color del botón */; background-size: 105%; height: 80px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */"class="boton"></a> 
  
<a href="../menu.php" style=" background: url(Imagenes/este.PNG) /* Url de la imagen */ no-repeat center center, 
#62BC0F /* Color del botón */; background-size: 110%; height: 55px;  /* Alto del botón */
  width: 110px;  /* Ancho del botón */"class="boton1" ></a>
   </center>
 
    </head>
</body>
</html>