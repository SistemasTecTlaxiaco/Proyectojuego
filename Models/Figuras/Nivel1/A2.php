<!DOCTYPE html>
<html lang="en">
 <!--- <div class="contenedor">--->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../estilos/EstiloA1.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  

    <script type="text/javascript">

 function cuadro(){
   var n_1= document.getElementById("a1");
   n_1.play();
 }
 function trian(){
   var n_2= document.getElementById("a2");
   n_2.play();
 }
 function circu(){
   var n_1= document.getElementById("a3");
   n_1.play();
 }
   
  </script>
  <embed src="audios/audio.mp3" hidden="true" type="audio/mp3" autostart="true"></embed>
</head>
<body><center>
<a  onclick="cuadro()" style=" background: url(../Imagenes/Nivel1/cuadrado.PNG) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 98%; 
height: 250px;  /* Alto del botón */ 
 width: 250px;  /* Ancho del botón */"class="boton"></a>
<a onclick="trian()" style=" background: url(../Imagenes/Nivel1/circulo.PNG) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 98%; 
height: 250px;  /* Alto del botón */ 
 width: 250px;  /* Ancho del botón */"class="boton"></a>
 <a  onclick="circu()" style=" background: url(../Imagenes/Nivel1/triangulo.PNG) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 98%; 
height: 250px;  /* Alto del botón */ 
 width: 250px;  /* Ancho del botón */"class="boton"></a>
<br>
</a> </center>
 
 <a href="Ejercicio1.php" style=" background: url(../Imagenes/Menu/btnSalir.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 80px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */"class="boton1"></a>


</section1>
<audio id="a1" src="../audios/cuadrado.mp3" preload></audio>
<audio id="a2" src="../audios/circulo.mp3" preload></audio>
<audio id="a3" src="../audios/triangulo.mp3" preload></audio>
</body>
</html>