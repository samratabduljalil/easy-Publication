<!DOCTYPE html>
<html lang="en">

<head>

    <style>
    </style>

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
    <section id="header">
        <a href="index.php"><img src="./img/logo.png" class="logo" alt="" width="250px"></a>

        <div class="search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>

        <div>
            <ul id="navbar">
                <li><a href="account.php"></i></a></li>
            

            </ul>
        </div>

    


    </section>
    <!-- Navber extra -->
  
    <?php 
  require_once('connection.php');



$a=$_GET['id'];

$sql="SELECT * FROM book WHERE book_id='$a'";
  $books=$con->query($sql);
  if($books->num_rows >0){
  while($book=$books->fetch_assoc()){

 
  ?>
<br>
    <!-- product Details -->
    <div class="product-details-1">
        
    </div>

    <!-- <img src="./img/Books_images/Product/product-1.png" alt="" class="menu-icon" onclick="menutoggle()" /> -->


    <!-- Single Products Detail -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-4">
            <img src="bookcover/<?php echo $book["b_image"]?>" alt="" width="200px" />
                <h2>Name: <?php echo $book["Title"]?></h2>

                <h4>Price: <?php echo $book["Price"]?>৳</h4>
                <h4>Publisher: <?php echo $book["publisher_name"]?></h4>
                

                

                <a href="cart_insert.php?id=<?php echo $book['book_id']?>"><button type="button"  class="btn btn-outline-success btn-lg">Add to cart</button></a>
          
                <h3>Product Details</h3>
                <br />
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nemo
                    nam magnam rerum sunt explicabo! Distinctio ipsam doloremque nostrum
                    ipsum?
                </p>
            </div>
            <div class="col-4">
            <embed type="application/pdf" src="preview/<?php echo $book['preview']?>" width="400" height="300">
            <h4>Book Preview</h4>
            </div>



            
        </div>
    </div>

    <?php }} ?>
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