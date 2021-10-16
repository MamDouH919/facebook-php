<?php 
require_once ('conn.php');
include("function.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
          echo "Only letters allowed";
          exit;
        }

        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
          echo "Only letters Allowed";
          exit;
        }
      
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email format";
          exit;
        }

        $pass = test_input($_POST["pass"]);
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$])[a-zA-Z0-9!$ ]{8,20}$/",$pass)) {
          echo "Your password must have capital letter and Number and special character ! , $";
          exit;
        }
        $day = test_input($_POST["day"]);
        $month = test_input($_POST["month"]);
        $year = test_input($_POST["year"]);
        $currentYear = date("Y");
        if ($currentYear - $year < 18 ){
          echo "Your Age must be over 18";
          exit;
        }
        if (empty($_POST["gender"])) {
          echo "Gender is required";
          exit;
        }
        else{
          $gender = $_POST["gender"];
          $date = $year. "/" . $month . "/" . $day;
        insertDB($fname ,$lname,$email,$pass,$gender,$date);
      }
    }

function insertDB($fname ,$lname, $email , $pass ,$gender,$date){
  // include("db.php");
try {
  $db = DB::getInstance();
	DB::setCharsetEncoding();
  $enc = sha1($pass);
  $sql = "INSERT INTO Guests (firstname,lastname, email,pass ,gender ,birthday)
  VALUES ( '$fname','$lname' , '$email' , '$enc' ,'$gender','$date')";
  // use exec() because no results are returned
  $db->exec($sql);
  echo "Your Account has been created";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$db = null;
}
?>