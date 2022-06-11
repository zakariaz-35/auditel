<?php  

 class Connecter { 
  private $cnx = null;

  function __construct()
  {
      
  }

  function connect(){
    $this->cnx = new mysqli("localhost","root",null,"pfr");
    // Check connection
    if ($this->cnx -> connect_errno) {
      echo "Failed to connect to MySQL: " . $this->cnx-> connect_error;
      exit();
    }

  }

  function select($query){
      if( $this->cnx == null ){
          $this->connect();
      }
    $result = $this->cnx->query( $query );
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows ; 
  }



}

$connection = new Connecter();

?>