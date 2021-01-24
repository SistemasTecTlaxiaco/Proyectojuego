<!DOCTYPE html>
<html lang="en">
 <!--- <div class="contenedor">--->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../estilos2/EstilosA1.css" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <a href="../../menu.php" style=" background: url(../Imagenes/este.PNG) /* Url de la imagen */ no-repeat center center, 
#62BC0F /* Color del botón */; background-size: 110%; height: 55px;  /* Alto del botón */
  width: 110px;  /* Ancho del botón */"class="leekids" ></a>
  
<a href="Seleccion.php" style=" background: url(../Imagenes/Menu/btnSalir.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 90px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */"class="boton"></a>
</head>
<body>

<section1><center>
<br>
<br>

<canvas id="pizarra"></canvas>

<br>
<br>
<a class="botonr" role="button" style="width: 370px;height: 100px;background-image: url(../Imagenes/Nivel2/Grupo%203.png); float: center;" href="A10.php"></a>

<a href="A19.php" style=" background: url(../Imagenes/Menu/flecharegresa.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 90px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */ float: left; "class="botonR"></a>



<a class="boton" role="button" style="width: 420px;height: 100px;background-image: url(../Imagenes/Nivel2/Grupo%204.png); float: right;" href="Seleccion.php"></a>

</section1>
<br>
<br>
  <script>
    //======================================================================
    // VARIABLES
    //======================================================================
    let miCanvas = document.querySelector('#pizarra');
    let lineas = [];
    let correccionX = 0;
    let correccionY = 0;
    let pintarLinea = false;
    // Marca el nuevo punto
    let nuevaPosicionX = 0;
    let nuevaPosicionY = 0;

    let posicion = miCanvas.getBoundingClientRect()
    correccionX = posicion.x;
    correccionY = posicion.y;

    miCanvas.width = 1100;
    miCanvas.height = 400;

    //======================================================================
    // FUNCIONES
    //======================================================================
    var canvas = document.getElementById("pizarra");
var ctx = canvas.getContext("2d");
var img = new Image();
img.src = "../Imagenes/Nivel2/planilla0.jpg";
ctx.drawImage(img, 0, 0);

img.onload = function(){
  ctx.drawImage(img, 0, 0);
}
    /**
     * Funcion que empieza a dibujar la linea
     */
    function empezarDibujo () {
        pintarLinea = true;
        lineas.push([]);
    };
    
    /**
     * Funcion que guarda la posicion de la nueva línea
     */
    function guardarLinea() {
        lineas[lineas.length - 1].push({
            x: nuevaPosicionX,
            y: nuevaPosicionY
        });
    }

    /**
     * Funcion dibuja la linea
     */
    function dibujarLinea (event) {
        event.preventDefault();
        if (pintarLinea) {
            let ctx = miCanvas.getContext('2d')
            // Estilos de linea
            ctx.lineJoin = ctx.lineCap = 'round';
            ctx.lineWidth = 48;
            // Color de la linea
            ctx.strokeStyle = '#0B68F1';
            // Marca el nuevo punto
            if (event.changedTouches == undefined) {
                // Versión ratón
                nuevaPosicionX = event.layerX;
                nuevaPosicionY = event.layerY;
            } else {
                // Versión touch, pantalla tactil
                nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
                nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
            }
            // Guarda la linea
            guardarLinea();
            // Redibuja todas las lineas guardadas
            ctx.beginPath();
            lineas.forEach(function (segmento) {
                ctx.moveTo(segmento[0].x, segmento[0].y);
                segmento.forEach(function (punto, index) {
                    ctx.lineTo(punto.x, punto.y);
                });
            });
            ctx.stroke();
        }
    }

    /**
     * Funcion que deja de dibujar la linea
     */
    function pararDibujar () {
        pintarLinea = false;
        guardarLinea();
    }

    //======================================================================
    // EVENTOS
    //======================================================================

    // Eventos raton
    miCanvas.addEventListener('mousedown', empezarDibujo, false);
    miCanvas.addEventListener('mousemove', dibujarLinea, false);
    miCanvas.addEventListener('mouseup', pararDibujar, false);

    // Eventos pantallas táctiles
    miCanvas.addEventListener('touchstart', empezarDibujo, false);
    miCanvas.addEventListener('touchmove', dibujarLinea, false);

</script>

</body>
</html>