<!DOCTYPE html>
<html lang="en">
 <!--- <div class="contenedor">--->
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
    <link rel="stylesheet" type="text/css" href="estilos/EstiloSeleccion.css" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">

   
<a href="../menu.php" style=" background: url(Imagenes/este.PNG) /* Url de la imagen */ no-repeat center center, 
#62BC0F /* Color del botón */; background-size: 110%; height: 55px;  /* Alto del botón */
  width: 110px;  /* Ancho del botón */"class="leekids" ></a>
</head>

<body>
<section> 
  
<a href="Nivel1/Ejercicio1.php" style=" background: url(Imagenes/Menu/Uno1.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 215px;  /* Alto del botón */ 
 width: 225px;  /* Ancho del botón */"class="boton"></a>

 <a href="Nivel2/Seleccion.php" style=" background: url(Imagenes/Menu/Dos2.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 215px;  /* Alto del botón */ 
 width: 225px;  /* Ancho del botón */"class="boton2"></a>

<a href="Nivel3/Seleccion.php" style=" background: url(Imagenes/Menu/Tres3.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 215px;  /* Alto del botón */ 
 width: 225px;  /* Ancho del botón */"class="boton3"></a>

<a href="Menu.php" style=" background: url(Imagenes/Menu/btnSalir.png) /* Url de la imagen */ no-repeat center center, #62BC0F /* Color del botón */; 
background-size: 115%;
 height: 90px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */"class="boton4"></a> 
</section>
</body>
</html>