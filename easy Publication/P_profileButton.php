<?php 
session_start();
$a=$_SESSION["id"] ;
require_once('connection.php');


$fileName2 = $_FILES['image']['name'];
$fileTmpName2 = $_FILES['image']['tmp_name'];
$path2 = "Profile/".$fileName2;

if($fileName2!=NULL){

    $sql="UPDATE `publisher` SET `p_image`='$fileName2' WHERE publisher_id='{$_SESSION["id"] }'";
    $con->query($sql);
    $_SESSION["image"] = $_POST['image'];
    move_uploaded_file($fileTmpName2,$path2);

}


$sql="UPDATE `publisher` SET `p_name`='{$_POST['name']}',`p_email`='{$_POST['email']}',`p_phone`='{$_POST['phone']}',`district`='{$_POST['district']}',`upazila`='{$_POST['upazila']}',`street`='{$_POST['street']}' WHERE publisher_id='{$_SESSION["id"] }'";
    $con->query($sql);

   
    $_SESSION['update']=1;
  
    $_SESSION["image"]=$fileName2;

    $_SESSION["username"] = $_POST['name'];
  
    
    
    $_SESSION["district"] = $_POST['district'];
    $_SESSION["street"] = $_POST['street'];
    $_SESSION["upazila"] = $_POST['upazila'];
    $_SESSION["phone"] = $_POST['phone'];
    $_SESSION["email"] = $_POST['email'];
   

    header("location: Pr_dashboard.php");


?>