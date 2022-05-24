<?php
session_start();

require_once('connection.php');

$b=$_GET["bid"];
$w=$_GET["cid"];
$d=$_GET["item"];
$k=$_GET["district"];

 $sql="INSERT INTO `printing_book`(`book_id`, `Customer_id`,item,district) VALUES ('{$b}','{$w}','{$d}','{$k}')";
  $con->query($sql);

$sql="DELETE FROM `orders` WHERE customer_id='{$w}' and book_id='{$b}'";
$con->query($sql);
header("location: Pr_book_request.php");
  

?>