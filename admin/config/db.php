<?php   

  $host = 'localhost';
  $dbName ='lamp';
  $pwd = 'root';
  $user = 'root';

  try {
    $dsn =  "mysql:host=$host;dbname=$dbName";

    $conn = new PDO($dsn, $user, $pwd);
  } catch ( PDOException $e) {
     echo $e->getMessage();
    }


    
        
    
 