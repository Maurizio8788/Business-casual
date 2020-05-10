<?php


try{

  $dsn = "mysql:host=localhost;dbName=lamp";
  $options = [ PDO::ATTR_EMULATE_PREPARES   => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  $conn = new PDO($dsn, "root", "root", $options);

  echo 'Connessione avvenuta correttamente';
  
}catch(PDOException $e){
  $e->getMessage();
}




// /**
//  * Database
//  */
// class Database
// {
//
//   private $host = "192.168.1.102";
//   private $user = "root";
//   private $password = "StraMa87";
//   private $db_name = "lamp";
//
//   private $conn;
//
//
//   public function dbConnect()
//   {
//
//     $this->conn = null;
//
//     try{
//       $this->conn = new PDO( "mysql:host= ". $this->host .";dbname= ". $this->db_name, $this->user, $this->password );
//       $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//
//     } catch(PDOException $e){
//       $e->getMessage();
//     }
//     return $this->conn;
//   }
//
// }




 ?>
