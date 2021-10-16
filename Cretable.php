<?php
require_once ('conn.php');
try {
  $db = DB::getInstance();
	    DB::setCharsetEncoding();
  // sql to create table
    $sql = "CREATE TABLE Hello (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    email VARCHAR(50),
    birthday DATE NOT NULL,
    gender VARCHAR(50),
    
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

  // use exec() because no results are returned
  $db->exec($sql);
  echo "Table created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$db = null;
?>