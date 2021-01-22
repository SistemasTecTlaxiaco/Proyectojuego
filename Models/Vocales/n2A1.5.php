<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>lu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
</head>

<body style="background-color: rgb(239,206,204);">
<section1><center>
<br>
<br>

<canvas id="pizarra"></canvas>

<br>
<br>

<a href="n2A1.4.php" style=" background: url(&quot;assets/img/flecharegresa.png&quot;) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 90px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */ float: left; "class="botonR"></a>

<a href="nivel2.php" style=" background: url(&quot;assets/img/Grupo%204.png&quot;) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 250px;  /* Alto del botón */
  width: 250px;  /* Ancho del botón */  float: right; "class="boton2"></a>
<br>


<a class="btn btn-primary text-right" role="button" style="width: 250px;height: 100px;background-image: url(&quot;assets/img/Grupo%203.png&quot;);  "href="n2A1.5.php"></a>
<br>
<br>
<br>
<br>
<a class="btn btn-primary border rounded-circle" role="button" style="width: 150px;height: 110px;background-image: url(&quot;assets/img/Grupo%2020.png&quot;);" href="nivel2.php">



</section1>
            
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

    miCanvas.width = 800;
    miCanvas.height = 532;

    //======================================================================
    // FUNCIONES
    //======================================================================
    var canvas = document.getElementById("pizarra");
var ctx = canvas.getContext("2d");
var img = new Image();
img.src = "assets/img/n2u1.jpg";
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
            ctx.lineWidth = 65;
            // Color de la linea
            ctx.strokeStyle = '#8408DE';
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>