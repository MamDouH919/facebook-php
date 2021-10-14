<?php 
session_start(); 
include("db.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $user = test_input($_POST["User"]);
  $pass = test_input($_POST["Pass"]);
  if (empty($user)) {
    echo "err1";
    exit;
  }
  if (empty($pass)) {
    echo "err2";
    exit;
  }
  else {
    $enc = sha1($pass);
    try {
      $query = "SELECT * FROM Guests WHERE email = :user AND pass = :enc";
      $stmt = $db->prepare($query);
      $stmt->bindvalue('user', $user, PDO::PARAM_STR);
      $stmt->bindvalue('enc', $enc, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['id']   = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        echo "login-done.php";
      } 
      else {
        echo "invalid";
    }
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }        
  }
}
else {
  header('location: login-done.php');
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
?>