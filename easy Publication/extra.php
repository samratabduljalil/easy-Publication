<p>Our motivation is to create an easy and hassle
                        free System for publishing industry. </p>
                    <div>Also making sure provide better content.</div>






                    -------
                    <section id="product1" class="section-p1">
        <h2>Kids Book</h2>
        <p>Ages 4-8 , 8-12, 12-17</p>
        <div class="pro-container">
        <?php 
  require_once('connection.php');

  $sql="SELECT * FROM `book` where catagory='Kids'";
  $books=$con->query($sql);
  while($book=$books->fetch_assoc()){

  ?>


       
            <div class="pro">
                <img src="<?php echo $book["b_image"]?>" alt="">
                <div class="des">
                    <h5><?php echo $book["Title"]?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $book["Price"]?></h4>
                </div>
                <a href="product_details_1.html"><i class="fa-solid fa-cart-plus cart"></i></a>
               
            </div>
            <?php }?>

    </section>


















    <?php

$sql="SELECT * FROM `block` WHERE press_id='{$_SESSION["id"]}'";
$products=$con->query($sql);
if($products->num_rows <0){
?>  


<?php}?>














<?php

$sql="SELECT * FROM `block` WHERE press_id='{$_SESSION["id"]}'";
$products=$con->query($sql);
if($products->num_rows <0){
?>
                    <div class="alert alert-success" role="alert">
                         You are Blocked from website .please contact Admin.

                    </div>
                    
                    
                    
                    <?php}?> 