<?php 
  require_once('connection.php');




  if(isset($_GET['id'])){
    $a=$_GET['id'];
    $sql="SELECT * FROM `report` WHERE report_id='$a'";
    $products=$con->query($sql);
    if($products->num_rows >0){
    while($product=$products->fetch_assoc()){
  
    
  
$sql="INSERT INTO `block`( `Customer_id`, `press_id`, `report`) VALUES ('{$product['Customer_id']}','{$product['press_id']}','{$product['report']}')";
  $con->query($sql);
  }


    }
    
    $sql="DELETE FROM `report` WHERE report_id='$a' ";
  $con->query($sql);
    
    
    
    header("location: A_report_r.php");

}



  ?>