<?php


try{

  $dsn = "mysql:host=localhost;dbname=lamp";
  $options = [ PDO::ATTR_EMULATE_PREPARES   => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  $conn = new PDO($dsn, "root", "root", $options);
  
}catch(PDOException $e){
  $e->getMessage();
}


 ?>
