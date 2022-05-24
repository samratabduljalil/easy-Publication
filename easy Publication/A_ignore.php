<?php 
  require_once('connection.php');

  $a=$_GET['id'];
    $sql="DELETE FROM `report` WHERE report_id='$a' ";
  $con->query($sql);
    
    
    
    header("location: A_report_r.php");





  ?>