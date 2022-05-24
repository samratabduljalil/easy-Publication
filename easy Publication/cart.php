<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /* Cart Items Details */
        .cart-page {
            margin: 30px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #fff;
            background: #D82148;
            font-weight: normal;
        }

        td {
            padding: 10px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td a {
            color: #D82148;
            font-size: 12px;
        }

        td img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #D82148;
            width: 100%;
            max-width: 400px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }
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
                

            </ul>
        </div>
    </section>



    <!-- Cart Items Details -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php 
  require_once('connection.php');
session_start();
$d=0;

  $sql="SELECT * FROM `cart` WHERE customer_id='{$_SESSION["id"]}'";
  $rs=$con->query($sql);
  
  while($r=$rs->fetch_assoc()){

$a=$r['product_id'];


$sql="SELECT * FROM book WHERE book_id='$a'";
  $books=$con->query($sql);
  if($books->num_rows >0){
  while($book=$books->fetch_assoc()){

 
  ?>


            <tr>
                <td>
                    <div class="cart-info">
                        <img src="bookcover/<?php echo $book["b_image"]?>" alt="" />
                        <div>
                            <p><?php echo $book["Title"]?></p>
                            <small>Price: <?php echo $book["Price"]?></small>
                            <br />
                            <a class="btn btn-danger" href="C_delete_product.php?id=<?php echo $book["book_id"]?>" role="button">Remove</a>
                        </div>
                    </div>
                </td>

                
                <td><a class="btn btn-danger" href="C_minus_book.php?id=<?php echo $book["book_id"]?>" role="button">-</a><input type="nunber" value="<?php echo $ri=$r['item']?>" /><a class="btn btn-dark" href="C_Update_book.php?id=<?php echo $book["book_id"]?>" role="button">+</a></td>
                <td><?php echo  $k=$book["Price"]*$ri; $d=$d+$k;?></td>
            </tr>
           
            <?php }}} ?> 

        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td><?php echo $d?> ৳</td>
                </tr>
                <tr>
                    <td>Tax (2%)</td>
                    <td><?php echo $e=$d*.02?> ৳</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo $f=$e+$d?> ৳</td>
                </tr>

                <tr>
                    <td></td>
                    <td><!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Check Out
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h3><p>Total <?php echo $f=$e+$d?>৳     </p><h3>
      </div>
      <div class="modal-footer">
      <a href="online.php?price=<?php echo $f=$e+$d?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Online Pay</button></a>
        <a href="Order_deta.php"><button type="button"  class="btn btn-primary">Cash On Delivary</button></a>

  
      </div>
    </div>
  </div>
</div></td>
                </tr>
            </table>
       
        </div>
    </div>






    <!-- footer -->


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



    <!-- JS for Toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
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