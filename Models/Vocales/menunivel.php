<!DOCTYPE html>
<html>
<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../../login.php");


}
?>
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><button class="btn btn-primary invisible" type="button">Button</button></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><a class="btn btn-primary text-center" role="button" style="width: 300px;height: 200px;background-image: url(&quot;assets/img/voc_1.png&quot;);" href="nivel1.php"></a></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"><a class="btn btn-primary" role="button" style="width: 300px;height: 200px;background-image: url(&quot;assets/img/voc_2.png&quot;);" href="nivel2.php"></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><button class="btn btn-primary invisible" type="button"></button></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><a class="btn btn-primary" role="button" style="width: 300px;height: 200px;background-image: url(&quot;assets/img/voc_3.png&quot;);" href="nivel3.php"></a></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><button class="btn btn-primary invisible" type="button"></button></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-right"><a class="btn btn-primary border rounded-circle" role="button" style="width: 150px;height: 110px;background-image: url(&quot;assets/img/Grupo%2020.png&quot;);" href="vocales.php"></a></div>
            </div>
        </div>
    </div>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>