<?php
session_start();

require_once('connection.php');

$b=$_GET["am"];


$book;
$sql="SELECT * FROM `payment_publisher` where publisher_id='{$_SESSION["id"]}'";
$books=$con->query($sql);
while($book=$books->fetch_assoc()){


if($b>$book['available']){
    $_SESSION["d"]=1;
    header("location: P_pay.php");

}else{


$t=$book['withdro']+$b;
$z=$book['available']-$b;



$sql="UPDATE `payment_publisher` SET `withdro`='{$t}',`available`='{$z}' where publisher_id='{$_SESSION["id"]}'";
$con->query($sql);
}}

header("location: P_pay.php");
  

?>