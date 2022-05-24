<?php
session_start();

require_once('connection.php');
$a=$_GET['id'];
$b=$_SESSION["id"];


 $sql="INSERT INTO `cart`(`product_id`, `customer_id`,item) VALUES ('{$a}','{$b}','1')";
  $con->query($sql);
  $sql="SELECT * FROM `cart` WHERE customer_id='{$b}'";
  $rs=$con->query($sql);
  $d=0;
  while($r=$rs->fetch_assoc()){


$d+=1;

  }
  $_SESSION['cart']=$d;
  header("location: index.php");

?>