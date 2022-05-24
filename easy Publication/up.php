
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <title>Easy Publication</title>
</head>

<body>

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





$sql="INSERT INTO `book_review`( `Title`, `catagory`, `publisher_id`, `b_image`, `Price`,  `filelink`,preview) VALUES ('{$_POST['title']}','{$_POST['catagory']}','$a','$fileName2','{$_POST['price']}','$fileName1','$fileName3')";
$run=$con->query($sql);

if($run){
    move_uploaded_file($fileTmpName1,$path1);
    move_uploaded_file($fileTmpName2,$path2);
    move_uploaded_file($fileTmpName3,$path3);
    echo '<img src="img\a02a384b26ef2eb43b001177e656dc2e.gif"';


   echo '<img src="img\719dd913765711.56277de0efec9.gif" class="rounded mx-auto d-block" alt="...">';

    echo '<h1 class="text-center">Your book successfully Uploaded  </h1>';
    echo '<h1 class="text-center">Now you are redirecting to Dashboard......... </h1>';


    
    header('Refresh: 3; URL=http://www.samratabduljalil.com/easy%20Publication/P_dashboard.php');

}
else{
    echo "error";
}







?>

</body>