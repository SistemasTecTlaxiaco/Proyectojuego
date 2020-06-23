  
<?php

$host = "ec2-35-173-94-156.compute-1.amazonaws.com";
$user = "mvlidosdeycbmw";
$password = "dd04ab8b36a634960ab8354aef3159cb100cd52cabdb4f48757b0230bc0397d3";
$dbname = "d5ku9iavksiii9";
$port = "5432";

 try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  ?>