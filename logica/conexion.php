  
<?php

$host = "ec2-35-173-94-156.compute-1.amazonaws.com";
$user = "mvlidosdeycbmw";
$password = "dd04ab8b36a634960ab8354aef3159cb100cd52cabdb4f48757b0230bc0397d3";
$dbname = "d5ku9iavksiii9";
$port = "5432";

$strCnx = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conexion = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
//echo "Conexion exitosa<br>";
      
  ?>