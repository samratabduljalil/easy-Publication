<?php 

 
session_start();
$a=$_SESSION["id"] ;
require_once('connection.php');
$fileName1 = $_FILES['book']['name'];
$fileTmpName1 = $_FILES['book']['tmp_name'];
$path1 = "book/".$fileName1;

$fileName2 = $_FILES['img']['name'];
$fileTmpName2 = $_FILES['img']['tmp_name'];
$path2 = "bookcover/".$fileName2;

$fileName3 = $_FILES['pre']['name'];
$fileTmpName3 = $_FILES['pre']['tmp_name'];
$path3 = "preview/".$fileName3;


if($fileName3!=NULL){


    $sql="UPDATE `book` SET `preview`='$fileName3' WHERE book_id='{$_POST['id']}'";
    $con->query($sql);
    move_uploaded_file($fileTmpName3,$path3);

}
if($fileName1!=NULL){

    $sql="UPDATE `book` SET `filelink`='$fileName1' WHERE book_id='{$_POST['id']}'";
    $con->query($sql);

    move_uploaded_file($fileTmpName1,$path1);

}
if($fileName2!=NULL){

    $sql="UPDATE `book` SET `b_image`='$fileName2' WHERE book_id='{$_POST['id']}'";
    $con->query($sql);

    move_uploaded_file($fileTmpName2,$path2);

}


$sql="UPDATE `book` SET `Title`='{$_POST['bn']}',`Price`='{$_POST['price']}' WHERE book_id='{$_POST['id']}'";
    $con->query($sql);

   
    
  




    header("location: A_updatebook.php");














?>