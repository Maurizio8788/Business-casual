<?php

session_start();

/**
 *  Booking
 */
class Booking
{

  private $PDO;

  public function __construct($PDOconn)
  {
    
    $this->PDO = $PDOconn;

  }

  public function booking_table($post){

    //print_r($post);

    $nome = trim($post["nome"]);
    $email = filter_var( filter_var( trim( $post["email"] ), FILTER_SANITIZE_EMAIL ), FILTER_VALIDATE_EMAIL );
    $tel = trim( $post["tel"] );
    $intolleranze = trim($post["intolleranza"]);
    $data = trim($post["date"]);
    $hour = trim($post["hour"]);


    
    /* Query  */

    $q = "INSERT INTO booking(nome,telefono,email,intolleranze,data_prenotazione,hour) VALUES( ?, ?, ?, ?, ?, ? )";

    try {
      $stmt = $this->PDO->query($q);
      $stmt->execute( [ $nome, $tel, $email, $intolleranze, $data, $hour ] );
      $stmt =null;
    } catch( PDOException $e ) {
      $e->getMessage();
    }


  }


}
