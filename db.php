<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dba ="users";

try {
  $db = new PDO("mysql:host=$servername;dbname=$dba", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
} catch (PDOException $e) {
  echo "Connection failed : ". $e->getMessage();
}
?>