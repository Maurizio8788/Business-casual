<?php


try{

  $dsn = "mysql:host=localhost;dbName=lamp";
  $options = [ PDO::ATTR_EMULATE_PREPARES   => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  $conn = new PDO($dsn, "root", "root", $options);

  echo 'Connessione avvenuta correttamente';
  
}catch(PDOException $e){
  $e->getMessage();
}


 ?>
