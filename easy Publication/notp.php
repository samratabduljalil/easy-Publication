<?php 
  require_once('connection.php');

  $a=$_GET['id'];
    $sql="DELETE FROM `book_review` WHERE review_id='$a' ";
  $con->query($sql);
    
    
    
    header("location: A_review.php");





  ?>