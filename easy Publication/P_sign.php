<?php
session_start();

require_once('connection.php');
$a=$_GET['name'];
$b=$_GET["email"];
$e=$_GET["pass"];


 $sql="INSERT INTO `publisher`( `p_name`, `p_email`, `p_password`)  VALUES ('{$a}','{$b}','{$e}')";
  $con->query($sql);
  
  header("location: LoginPublisher.php");

?>