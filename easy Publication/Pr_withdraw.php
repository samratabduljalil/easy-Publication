<?php
session_start();

require_once('connection.php');

$b=$_GET["am"];


$book;
$sql="SELECT * FROM `payment_press` where press_id='{$_SESSION["id"]}'";
$books=$con->query($sql);
while($book=$books->fetch_assoc()){


if($b>$book['available']){
    $_SESSION["d"]=1;
    header("location: Pr_payment.php");

}else{


$t=$book['withdro']+$b;
$z=$book['available']-$b;



$sql="UPDATE `payment_press` SET `withdro`='{$t}',`available`='{$z}' where press_id='{$_SESSION["id"]}'";
$con->query($sql);
}}

header("location: Pr_payment.php");
  

?>