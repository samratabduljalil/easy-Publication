<?php
session_start();

require_once('connection.php');
$a=$_GET['name'];
$b=$_GET["email"];
$e=$_GET["pass"];


 $sql="INSERT INTO `customer`( `c_name`, `c_email`, `c_password`)  VALUES ('{$a}','{$b}','{$e}')";
  $con->query($sql);
  
  header("location: LoginUser.php");

?>