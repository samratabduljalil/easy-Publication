<?php
session_start();

require_once('connection.php');

$b=$_GET["bid"];
$w=$_GET["cid"];
$d=$_GET["item"];
$m=$_GET["district"];
$u=$_GET["pid"];
$l=$_GET["pr"];

 $sql="INSERT INTO `delivered`(`book_id`, `Customer_id`,item,district,Publisher_id,Press_id) VALUES ('{$b}','{$w}','{$d}','{$m}','{$u}','{$_SESSION['id']}')";
  $con->query($sql);

$sql="DELETE FROM `printing_book` WHERE customer_id='{$w}' and book_id='{$b}'";
$con->query($sql);

$j=$d*$l;
$k=($j/100)*60;




$sql="SELECT * FROM `payment_press` where press_id='{$_SESSION['id']}'";
$books=$con->query($sql);
while($book=$books->fetch_assoc()){

$t=$k+$book['total'];
$y=$k+$book['available'];


$sql="UPDATE `payment_press` SET `total`='{$t}' , available='{$y}' WHERE press_id='{$_SESSION['id']}'";
$con->query($sql);

}
$k=($j/100)*20;

$sql="SELECT * FROM `payment_publisher` where publisher_id='{$u}'";
$books=$con->query($sql);
while($book=$books->fetch_assoc()){

$kl=$k+$book['total'];
$yt=$k+$book['available'];


$sql="UPDATE `payment_publisher` SET `total`='{$kl}',available='{$yt}'  WHERE publisher_id='{$u}'";
$con->query($sql);

}
$k=($j/100)*20;

$sql="SELECT * FROM `payment_admin` where Admin_id='1'";
$books=$con->query($sql);
while($book=$books->fetch_assoc()){

$kl=$k+$book['total'];
$yt=$k+$book['available'];


$sql="UPDATE `payment_admin` SET `total`='{$kl}',available='{$yt}'  WHERE Admin_id='1'";
$con->query($sql);

}
header("location: Pr_start_printing.php");
  

?>