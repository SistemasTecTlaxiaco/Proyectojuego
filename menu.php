<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: login.php");
}else{
    echo "<a href='logica/salir.php' class='boton rojo'>Salir</a>";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo_menu.css">
</head>

<body>
    <center>
        <h1>Bienvenido <?php echo $usuario;?></h1>
    </center>
    <table width="50%">
        <tr>
            <td data-label="uno" width="100" height="100"> </td>
            <td data-label="dos" width="100" height="100">
                <img src="css/Imagenes/voocales.png" width="300" height="150">
                <div align="center"><a href="#" class="boton amarillo">PLAY</a> </div>
            </td>
            <td data-label="tres" width="100" height="100"> </td>
            <td data-label="cuatro" width="100" height="100"> <img src="css/Imagenes/numeros.jpg" width="300" height="150">
                <div align="center"> <a href="#" class="boton verde">PLAY</a> </div>
            </td>
            <td data-label="cinco" width="100" height="100"> </td>
        </tr>
        <tr>
            <td data-label="uno" width="100" height="100">
                <img src="css/Imagenes/letras.jpeg" width="300" height="150">
                <div align="center"> <a href="#" class="boton azul   ">PLAY</a></div>
            </td>
            <td data-label="dos" width="100" height="100"> </td>
            <td data-label="tres" width="100" height="100">
                <img src="css/Imagenes/figuras.jpg" width="300" height="150">
                <div align="center"> <a href="#" class="boton violeta">PLAY</a></div>
            </td>
            <td data-label="cuatro" width="100" height="100"> </td>
            <td data-label="cinco" width="100" height="100">

        </tr>
    </table>
</body>