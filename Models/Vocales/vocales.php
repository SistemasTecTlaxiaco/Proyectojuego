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

<body style="background-image: url(&quot;assets/img/fondo.jpg&quot;);">
    <div>
        <div class="container">
            <div class="row">
                <div class="col text-center" style="width: 300px;"><img style="width: 300px;height: 150px;background-image: url(&quot;assets/img/voc_co.png&quot;);"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center border-info" style="background-color: #0f9224;background-image: url(&quot;assets/img/fondo.jpg&quot;);color: rgb(5,7,6);font-size: 80px;"><strong>Vocales</strong></h2>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><a class="btn btn-info btn-lg text-right border rounded-circle" role="button" style="width: 400px;height: 380px;background-image: url(&quot;assets/img/Grupo%201.png&quot;);" href="menunivel.php"></a></div>
                <div class="col-md-6 text-center"><a class="btn btn-outline-light btn-lg text-right border rounded-circle" role="button" href="../menu.php" style="width: 200px;height: 151px;background-image: url(&quot;assets/img/Grupo%202.png&quot;);"></a></div>
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