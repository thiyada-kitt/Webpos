<?php
$host = "localhost";
$username = "root"; //username
$password = "1234"; //password
$dbname = "pos_db";

try{
  $pdo = new PDO("mysql:host=$host;dbname=pos_db", "root", "1234");

}catch (PDOException $e) {
  // Log the error or handle it in a way that suits your application
  error_log("Connection failed: " . $e->getMessage());
  echo 'Connection failed';
}
?> 