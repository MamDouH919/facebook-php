<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
    $sql = "CREATE TABLE Guests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    birthday DATE NOT NULL,
    gender VARCHAR(50),
    
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>