<?php
session_start();

require_once('connection.php');
$a=$_GET['id'];
$b=$_SESSION["id"];

$sql="SELECT * FROM `cart` WHERE customer_id='{$b}' and product_id='{$a}'";
$rs=$con->query($sql);
$d;
while($r=$rs->fetch_assoc()){


$d=$r['item'];

}


$d+=1;





 $sql="UPDATE `cart` SET `item`='{$d}' WHERE customer_id='{$b}' and product_id='{$a}'";
  $con->query($sql);
 

  header("location: cart.php");

?>
