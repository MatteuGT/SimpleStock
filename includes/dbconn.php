<?php
  $servername = "localhost (if it's a remote database, please change the localhost to the appropriate server name/address";
  $username = "(your database username here)";
  $password = "(your database password here)";
  $dbname = "(the database name goes here)";
  
  //This connects the whole website to the database:
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  //Error handler:
  if(!$conn){
    exit("Couldn't establish a database conection! Please refresh this page.");
  }
?>
