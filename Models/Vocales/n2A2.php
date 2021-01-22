<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Juego_i</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body style="background-image: url(&quot;assets/img/fondo3.jpg&quot;);">
<style>
body
{
margin: 0px;
padding: 0px;
font-family:Arial, Helvetica, sans-serif;
}.clear { clear: both; display: block; }
.f_right { float: right; }
.f_left { float: left; }
.hidden { display: none; 
}
#main
#one { height: 100px;width: 200px; }
#two { height: 100px;width: 200px;  }
#three {height: 100px;width: 200px;  
 }
 .left_side
{
width: 150px;   
border:  2px solid #fff;
text-align: center !important;
float: left;
margin: 0px auto 0px 7px;
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
},containment: '#main',
    cursor: 'move',
    revert: function(valid)
        {
        if(!valid)
            {
            j('#feedback').html('<h3>intenta de nuevo!</h3>');
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
    //tolerance: intersect
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

j('#four').droppable
    ({
    drop: right,
    accept: '#object4,#object5,#object11'
    });});
function clearer(event, ui)
{ j('#feedback').html(''); }
function right(event, ui)
{
j('#feedback').html('<h2>bien echo :3 !</h2>');
var draggable = ui.draggable;
draggable.draggable('disable');
draggable.draggable('option', 'revert', false);
draggable.css('background-color','#ffffff');
draggable.css('color','#09C');
resetter++;
if (resetter == 12)
    {
    j('#feedback').html('<h1 class="greentext">felicitaciones!</h1>');

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
<td><img src="assets/img/voc_abej.jpg" style="width: 90px; margin-bottom: 10px;" /><h5>Abeja</h5> <div id="one" class="left_side"></div></td>
<td><img src="assets/img/voc_oso.jpg" style="width: 90px; margin-bottom: 10px;" /><h5>Oso </h5> <div id="two" class="left_side"></div></td>
<td><img src="assets/img/voc_ele.jpg" style="width: 90px; margin-bottom: 10px;" /><h5> Elefante</H5> <div id="three" class="left_side"></div></td>
</tr>
</tbody>
</table>
<table class="id2116">
<tbody>
<tr>
<td><div id="object1" <p><img alt="" class="" src="assets/img/voc_osoo.PNG" style="width: 200px; margin-bottom: 10px;" /></p>
</div></td>
<td><div id="object2" <p><img alt="" class="" src="assets/img/voc_elefa.png" style="width: 200px; margin-bottom: 10px;" /></p></div></td>
<td><div id="object3" <p><img alt="" class="" src="assets/img/voc_abeja.PNG" style="width: 200px; margin-bottom: 10px;" /></p>
</tr>
</tbody>
</table>
<br>
<br>
<br>
<br>

<div id="feedback" ></div>

<div class="clear"></div>

    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><button class="btn btn-primary invisible" type="button">Button</button></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group" role="group"><a class="btn btn-primary border rounded-circle" role="button" style="width: 120px;height: 120px;background-image: url(&quot;assets/img/Voc_botos.jpg&quot;);" href="nivel2.php"></a></div>
                </div>
                <div class="col-md-6 text-right"><a class="btn btn-primary" role="button" style="width: 120px;height: 120px;background-image: url(&quot;assets/img/Voc_botob.png&quot;);" href="nivel2.php"></a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
