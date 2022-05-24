<?php
session_start();

require_once('connection.php');

$b=$_SESSION["id"];
$w=$_SESSION["district"];
$sql="SELECT * FROM `cart` WHERE customer_id='{$b}' ";
$rs=$con->query($sql);
$d;
while($r=$rs->fetch_assoc()){


$d=$r['item'];

$e=$r['product_id'];

 $sql="INSERT INTO `orders`(`book_id`, `Customer_id`,item,district) VALUES ('{$e}','{$b}','{$d}','{$w}')";
  $con->query($sql);
}
$sql="DELETE FROM `cart` WHERE customer_id='{$b}'";
$con->query($sql);
$_SESSION['cart']="0";
  header("location: index.php");

?>