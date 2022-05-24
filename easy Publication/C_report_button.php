<?php
 require_once('connection.php');
 session_start();
$a=$_GET['re'];
$sql="SELECT * FROM `printing_press` WHERE district='{$_SESSION['district']}'";
$products=$con->query($sql);
if($products->num_rows >0){
while($product=$products->fetch_assoc()){





$sql="INSERT INTO `report`(`Customer_id`, `press_id`, `report`) VALUES ('{$_SESSION['id']}','{$product['press_id']}','{$a}')";
$run=$con->query($sql);
$_SESSION['s']=1;
}}

header("location: C_report.php");