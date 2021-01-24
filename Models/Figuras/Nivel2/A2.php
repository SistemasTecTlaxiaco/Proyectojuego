<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrastrar</title>
    <link rel="stylesheet" type="text/css" href="../estilos2/EstilosA2.css" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
      
    <a href="../../menu.php" style=" background: url(../Imagenes/este.PNG) /* Url de la imagen */ no-repeat center center, 
#62BC0F /* Color del botón */; background-size: 110%; height: 55px;  /* Alto del botón */
  width: 110px;  /* Ancho del botón */"class="leekids" ></a> 
    <a href="Seleccion.php" style=" background: url(../Imagenes/Menu/btnSalir.png) /* Url de la imagen */ no-repeat center center 
/* Color del botón */; background-size: 125%; 
height: 90px;  /* Alto del botón */
  width: 100px;  /* Ancho del botón */"class="boton"></a>
 


<style>
body
{
margin: 0px;
padding: 0px;
font-family:Arial, Helvetica, sans-serif;
}
.clear { clear: both; display: block; }
.f_right { float: right; }
.f_left { float: left; }
.hidden { display: none; }

#main
#one { height: 150px;width: 270px; }
#two { height: 150px;width: 270px;  }
#three {height: 150px;width: 270px;  }
#four {height: 150px;width: 270px;  }

.left_side
{
width: 220px;   
border:  2px solid #039;
text-align: center !important;
float: left;
margin: 0px auto 0px 7px;

}

#dragcenter
{
padding: 0px auto 0px auto;
text-align: center;
border: 0px dashed #ff0000;
width:800px;
height:150px;
margin-top:10px;
margin-left:5px;
}

#object1, #object2, #object3, #object4, #object5, #object6, #object7,
#object8, #object9, #object10, #object11, #object12
{
font-size:.95em;
width:;
background-color:;
border:;
color:black;
cursor: pointer;
text-align: center;
padding: 6px;
margin: 4px;
float: left;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
/* Prevent text from being selectable */
-webkit-touch-callout: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}

#feedback
{
border: 0px solid #ff0000;
float: left;
background-color:;
color: green;
width: 100%;
margin:0px;
padding:0px 0px 0px 0px;
}
</style>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="http://ontrack-media.net/AF/js/tpunch.js"></script>
<script type="text/javascript" >
var object1 = document.getElementById('object1');
var object2 = document.getElementById('object2');
var object3 = document.getElementById('object3');
var object4 = document.getElementById('object4');
var object5 = document.getElementById('object5');
var object6 = document.getElementById('object6');
var object7 = document.getElementById('object7');
var object8 = document.getElementById('object8');
var object9 = document.getElementById('object9');
var object10 = document.getElementById('object10');
var object11 = document.getElementById('object11');
var object12 = document.getElementById('object12');


var objArray = ['#object1', '#object2', '#object3', '#object4', '#object5', '#object6','#object7', '#object8', '#object9', '#object10',
'#object11', '#object12'];
var startDrag = '';
var resetter = 0;

var j = jQuery.noConflict();
j(document).ready(function()
{
j('#object1, #object2, #object3, #object4, #object5, #object6,#object7, #object8, #object9, #object10, #object11, #object12').draggable
({
start: function(event,ui) {
startDrag = ui.position;

},
    containment: '#main',
    cursor: 'move',

    revert: function(valid)
        {
        if(!valid)
            {
            j('#feedback').html('<h3>INTENTA DE NUEVO!</h3>');
            return true;
            }
        }, 
    stack: 'div',
    drag: clearer,
    stop: function(event,ui)
        {
        
        }
    });
     
j('#one').droppable
    ({
    drop: right,
    accept: '#object3,#object6,#object9,#object7,#object10'
    
    });
    
j('#two').droppable
    ({
    drop: right,
    accept: '#object1,#object8,#object10,#object2'
    });
   
j('#three').droppable
    ({
    drop: right,
    accept: '#object2,#object7,#object12,#object8'
    });


});
function clearer(event, ui)
{ j('#feedback').html(''); }

function right(event, ui)
{
j('#feedback').html('<h2>FELICIDADES LO HAS ECHO BIEN!</h2>');
var draggable = ui.draggable;
draggable.draggable('disable');
draggable.draggable('option', 'revert', false);
draggable.css('background-color','#ffffff');
draggable.css('color','#09C');
resetter++;
if (resetter == 12)
    {
   
    j('#feedback').html('<h1 class="greentext">Bien echo! All correct!</h1>');

    }
else
    {
    }
}
</script>
</head>
<body>
<center>
<div id="main">
<table >
<tbody >
<tr>
<td> <h5> Triangulo </h5>  <div id="one" class="left_side"><img src="../Imagenes/Nivel2/tri1.png" width="200" height="150" /></div></td>
<td><h5> Circulo </h5> <div id="two" class="left_side"><img src="../Imagenes/Nivel2/cir1.png" width="200" height="150" /> </div></td>
<td><h5> cuadrado      </H5> <div id="three" class="left_side"><img src="../Imagenes/Nivel2/cua1.png" width="200" height="150" /></div></td>
</tr>
</tr>
</tbody>
</table>
<div class="clear"></div>
<font size="5" style="font-family:verdana;">FIGURAS</font>
<table class="id2116">
<tbody>
<tr>
<td><div id="object1"<!-- thermal --><p><img alt="" class="" src="../Imagenes/Nivel2/C.png" style="width: 200px;"  /></p><figcaption class="captionStyle">Circulo
</figcaption></div></td>
</figcaption></div></td>
<td><div id="object3"<!-- elec --><p><img alt="" class="" src="../Imagenes/Nivel2/T.png"  style="width: 200px;" /></p><figcaption class="captionStyle">Triangulo
</figcaption></div></td>
<td><div id="object7"<!-- Light --><p><img alt="" class="" src="../Imagenes/Nivel2/CU.png" style="width: 200px;" /></p><figcaption class="captionStyle">cuadrado
</tr>
</tbody>
</table>
<br>
<br>
<br>
<br>
<div id="feedback" ></div>
<div class="clear"></div>
</div><!-- main-->
</center>
  
<div align="center"><button type="reset" value="Reset"><a href=""><font size="3">jUGAR DE NUEVO</font></a></button></div>


</html>
</body>