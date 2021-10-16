<?php
require_once ('conn.php');
try {
  $db = DB::getInstance();
	    DB::setCharsetEncoding();
  $sql = "CREATE DATABASE users";
  // use exec() because no results are returned
  $db->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$db = null;
?>