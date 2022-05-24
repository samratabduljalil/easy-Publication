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
<?php
session_start(); ?>
<body>
    <section id="header">
        <a href="index.php"><img src="./img/logo.png" class="logo" alt="" width="250px"></a>

        <div class="search">
            <div class="ui icon input">
                <input class="prompt" type="text" Id="Search" placeholder="Search">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>

        <div>
            <ul id="navbar">
                <li><a href="Logout.php">About</i></a></li>

                <?php
                    
                    if(isset($_SESSION["table"])){
                    $d=$_SESSION["table"];
                   
                     if(!strcmp($d,'publisher')){
                        
                        
                         ?>
                       
                       <li><a href="P_dashboard.php">Publisher(<?php echo $_SESSION['username']?> )</i></a></li>
                         <?php 
                     }else if (!strcmp($d,'customer')){
                        ?>
                        
                         <li><a href="C_dashboard.php">Customer(<?php echo $_SESSION['username']?>)</a></li>

                         <?php 
                     }else if (!strcmp($d,'admin')){
                        ?>
                        

                        <li><a href="A_dashboard.php">Admin(<?php echo $_SESSION['username']?>)</a></li>
                        <?php 
                     }else if (!strcmp($d,'printing_press')){
                        ?>

                     

                     <li><a href="Pr_dashboard.php">Printing press(<?php echo $_SESSION['username']?>)</a></li>
                     <?php 

                     }} else{
                         ?>
                      <li><a href="select.php">Account</a></li>

                            <?php 

                     }
                         ?>
 

                <li><a href="cart.php"><i class="fa-solid fa-cart-plus"></i> Cart<span class="badge badge-pill badge-danger"><?php if(isset($_SESSION["cart"])){ echo $_SESSION['cart'];}else echo "0"?></span></a></li>
                

            </ul>
        </div>

        <!-- <select>
            <option> Sort by: Date</option>
            <option> Sort by: New Arrival</option>
            <option> Sort by: Low Price</option>
            <option> Sort by: High Price</option>
        </select> -->


    </section>
    <!-- Navber extra -->
    <section id="nav-progress-bar">

        <select>
            <option> Sort by: Date</option>
            <option> Sort by: New Arrival</option>
            <option> Sort by: Low Price</option>
            <option> Sort by: High Price</option>
        </select>

    </section>

  
<!--carousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\book cursol\Hnet.com-image.jpg" class="d-block w-100"  >
      <div class="carousel-caption d-none d-md-block">
      <h3 class="text-danger">Write Your Book With US</h3>
       
      </div>
    </div>

   
    <div class="carousel-item">
      <img src="img\book cursol\Hnet.com-image (2).jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
      <h3 class="text-success">Share Your Thought With Us</h3>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\book cursol\Hnet.com-image (1).jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
      <h3 class="text-warning">Buy Your Favourite Book From Us</h3>
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



       <!-- search Section -->
       <section id="product4" class="section-p4">
        

        </section>


  
 <!-- search Section -->

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
                <img src="bookcover/<?php echo $book["b_image"]?>" alt="">
                <div class="des">
                    <h5><?php echo $book["Title"]?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $book["Price"]?>৳</h4>
                </div>
                <a href="product_details_1.php?id=<?php echo $book["book_id"]?>"><i class="fa-solid fa-cart-plus cart"></i></a>
               
            </div>
            <?php }?>

    </section>



    <!-- Journal section -->

    <section id="product1" class="section-p1">
        <h2>Journal</h2>
        <p>Daily Notepad Diary with Lined Page</p>

        <div class="pro-container">
        <?php 
  require_once('connection.php');

  $sql="SELECT * FROM `book`where catagory='Journal' ";
  $books=$con->query($sql);
  while($book=$books->fetch_assoc()){

  ?>


       
            <div class="pro">
                <img src="bookcover/<?php echo $book["b_image"]?>" alt="">
                <div class="des">
                    <h5><?php echo $book["Title"]?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $book["Price"]?> ৳</h4>
                </div>
                <a href="product_details_1.php?id=<?php echo $book["book_id"]?>"><i class="fa-solid fa-cart-plus cart"></i></a>
               
            </div>
            <?php }?>

    </section>

    <!-- CS BOOKS SECTION -->

    <section id="product1" class="section-p1">
        <h2>Computer Science</h2>
        <p>Books of computer science</p>
        <div class="pro-container">
        <?php 
  require_once('connection.php');

  $sql="SELECT * FROM `book` where catagory='Computer Science'";
  $books=$con->query($sql);
  while($book=$books->fetch_assoc()){

  ?>


       
            <div class="pro">
                <img src="bookcover/<?php echo $book["b_image"]?>" alt="">
                <div class="des">
                    <h5><?php echo $book["Title"]?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $book["Price"]?> ৳</h4>
                </div>
                <a href="product_details_1.php?id=<?php echo $book["book_id"]?>"><i class="fa-solid fa-cart-plus cart"></i></a>
               
            </div>
            <?php }?>
    </section>
  
    <!-- Scroll Btn -->
    <div class="scroll-btn">
        <i class="fas fa-arrow-circle-up"></i>
    </div>
  
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-1">
                    <img src="./img/logo.png" alt="" width="250px">
                   
                </div>

                <div class="col-2">
                    <h3> Useful Links</h3>
                    <ul>
                        <li> <a href="#"> Join as Author</a></li>
                        <li> <a href="#"> Join as Affiliate</a></li>
                        <li> <a href="#"> Return Policy</a></li>

                    </ul>
                </div>

                <div class="col-3">
                    <h3>Follow Us</h3>
                    <ul>
                        <li> <a href="#"> Instagram</a></li>
                        <li> <a href="#"> Twitter</a></li>
                        <li> <a href="#"> YouTube</a></li>

                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"> Ⓒ Copyright 2022 - Easy Publication ltd.</p>
        </div>
    </div>

    <!-- Scroll JS code -->
    <script type="text/javascript" src="jquery.js"></script>

    <script src="scroll.js">
        const scrollBtn = document.querySelector('.scroll-btn');


        window.addEventListener('scroll', () => {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollBtn.style.display = 'block';
            }
            else {
                scrollBtn.style.display = 'none';
            }
        })
        scrollBtn.addEventListener('click', () => {
            window.scroll({
                top: 0,
                behavior: "smooth"
            })
        })


    </script>

    <script>

  // Live Search
  $("#Search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#product4").html(data);
         }
       });
     });



         </script>
         

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/625c31d87b967b11798b1fbb/1g0s25dvo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>