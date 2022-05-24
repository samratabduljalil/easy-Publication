<?php


require_once('connection.php');
session_start();
$a=$_GET['id'];
$b=$_SESSION["id"];

$sql="DELETE FROM `cart` WHERE  customer_id='{$b}' and product_id='{$a}'";
$rs=$con->query($sql);
$d=$_SESSION['cart'];

$d-=1;
 $_SESSION['cart']=$d;

  header("location: cart.php");

?>