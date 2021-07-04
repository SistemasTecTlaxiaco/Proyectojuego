<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../login.php");
}else{
    echo "<a href='../logica/salir.php' class='boton rojo' >Salir</a>";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <LINK REL="stylesheet" TYPE="text/css" HREF="estilo_menu.css">
</head>

<body background="../css/Imagenes/niveles.png" > <!--style="background-size: cover;"-->
    <center>
        <h1>Bienvenido <?php echo $usuario;?></h1>
    </center>
    <table width="80%">
        <tr>
            <td data-label="uno" width="100" height="100"> </td>
            <td data-label="dos" width="100" height="100">
                <img src="Imagenes/vocales.svg" width="350" height="150">
                <div align="center"><a href="Vocales/vocales.php" class="boton amarillo">Jugar</a> </div>
            </td>
            <td data-label="tres" width="100" height="100"> </td>
            <td data-label="cuatro" width="100" height="100"> <img src="Imagenes/Numero.svg" width="350" height="150">
                <div align="center"> <a href="Numeros/Menu.php" class="boton verde">Jugar</a> </div>
            </td>
            <td data-label="cinco" width="100" height="100"> </td>
        </tr>
        <tr>
            <td data-label="uno" width="150" height="150">
                <img src="Imagenes/letras.svg" width="350" height="180">
                <div align="center"> <a href="Abecedario/index.html" class="boton azul">Jugar</a></div>
            </td>
            <td data-label="dos" width="100" height="100"> </td>
            <td data-label="tres" width="100" height="100">
                <img src="Imagenes/formas.svg" width="350" height="180">
                <div align="center"> <a href="Figuras/Menu.php" class="boton violeta">Jugar</a></div>
            </td>
            <td data-label="cuatro" width="100" height="-100"> </td>
            <td data-label="cinco" width="100" height="100">
                
        </tr>
    </table>
</body>