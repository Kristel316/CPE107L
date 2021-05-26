<?php

function OpenConnection(){
  $dbhost = "localhost";
  $dbname = "db_PokeMart";
  $dbuser = "root";
  $dbpass = "";


  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
}

function CloseConnection(){
  $conn -> close();
}
?>
