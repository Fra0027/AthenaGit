<?php
  $conn = new mysqli("104.27.130.118","prova0027","","my_prova0027");
  if(!$conn){
    echo "Impossibile connettersi al server".$conn->connect_error;
    exit;
  }
?>
