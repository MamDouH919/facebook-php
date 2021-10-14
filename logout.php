<?php
session_start();
$_SESSION['id'] = "";
$_SESSION['firstname'] = "";
$_SESSION['lastname'] = "";
if(empty($_SESSION['id'])) header("location: facebook.php");
?>