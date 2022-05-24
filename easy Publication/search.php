<?php

$search_value = $_POST["search"];

require_once('connection.php');

$sql = "SELECT * FROM book WHERE Title LIKE '%{$search_value}%' or catagory LIKE '%{$search_value}%'or publisher_name LIKE '%{$search_value}%'";
$books=$con->query($sql);
$output = "";
if(mysqli_num_rows($books) > 0 ){

    $output = '<section id="product1" class="section-p1">
    <h2>Search Result</h2>
    

    <div class="pro-container">';


 
              while($row = mysqli_fetch_assoc($books)){
                $output .= "<div class='pro'>
                <img src='bookcover/{$row["b_image"]}' >
                <div class='des'>
                    <h5>{$row["Title"]}</h5>
                    <div class='star'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                    </div>
                    <h4> {$row['Price']} ৳</h4>
                </div>
                <a href='product_details_1.php?id={$row['book_id']}'><i class='fa-solid fa-cart-plus cart'></i></a>
               
            </div>";
              }
    $output .= "</section>";

  

    echo $output;
}else{
    echo "<br><br><br><br><p><h1 class='text-danger text-center'>---------------------------------No Record Found.--------------------------------</h1></p><br><br><br><br>";
}

?>
