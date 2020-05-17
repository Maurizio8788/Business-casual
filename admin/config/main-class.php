<?php  


class Dashboard{

    private $conn;

    public function __construct($PDOconn){
        try {
            $this->conn = $PDOconn;
            
        } catch ( PDOException $e) {
            echo $e->getMessage();
        }
        
    }

    public function bookingTable(){
            $q = 'SELECT * FROM booking';

            $stmt = $this->conn->prepare( $q );
            $stmt->execute();

            while( $row = $stmt->fetch( PDO::FETCH_ASSOC) ){
                try {
                    

                    $nome = $row['nome'];
                    $tel = $row['telefono'];
                    $email = $row['email'];
                    $intolleranze = $row['intolleranze'];
                    $data = $row['data_prenotazione'];
                    $hour = $row['hour'];


                    $item = <<<BOOKING
                    <tr>
                      <td>"$nome"</td>
                      <td>"$tel"</td>
                      <td>"$email"</td>
                      <td>"$intolleranze"</td>
                      <td>"$data"</td>
                      <td>"$hour"</td>
                    </tr>
BOOKING;

                    echo $item;
                } catch ( PDOException $e ) {
                    echo $e->getMessage();
                }
               
            }

        
    }

}