<?php 
  require_once('connection.php');




  if(isset($_GET['id'])){
    $a=$_GET['id'];
    $sql="SELECT * FROM `book_review` WHERE review_id='$a'";
    $products=$con->query($sql);
    if($products->num_rows >0){
    while($product=$products->fetch_assoc()){
  
    
  
$sql="INSERT INTO `book`(`Title`, `catagory`,   `b_image`,  `Price`, `filelink`,preview,Publisher_id) VALUES ('{$product["Title"]}','{$product["catagory"]}','{$product["b_image"]}','{$product["Price"]}','{$product["filelink"]}','{$product["preview"]}','{$product["publisher_id"]}')";
  $con->query($sql);
  }


    }
    
    $sql="DELETE FROM `book_review` WHERE review_id='$a' ";
  $con->query($sql);
    
    
    
    header("location: A_review.php");

}



  ?>