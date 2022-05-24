<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Semantic UI CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

    <title>Dashboard</title>
    <style type="text/css">
        body {
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: grayscale;
        }

        #sidebar {
            position: fixed;
            height: 100vh;
            background-color: #f5f5f5;
            padding-top: 68px;
            padding-left: 0;
            padding-right: 0;
        }

        #sidebar .ui.menu>a.item {
            padding: 10px 20px;
            line-height: 20px;
            color: #2c6d00;
            border-radius: 0 !important;
            margin-top: 0;
            margin-bottom: 0;
        }

        #sidebar .ui.menu>a.item.active {
            background-color: #42b733;
            color: white;
            border: none !important;
        }

        #sidebar .ui.menu>a.item:hover {
            background-color: #eee;
            color: #237c32;
        }

        #content {
            padding-top: 56px;
            padding-left: 20px;
            padding-right: 20px;
        }

        #content h1 {
            font-size: 36px;
        }

        #content .ui.dividing.header {
            width: 100%;
        }

        .ui.centered.small.circular.image {
            margin-top: 14px;
            margin-bottom: 14px;
        }

        .ui.borderless.menu {
            box-shadow: none;
            flex-wrap: wrap;
            border: none;
            padding-left: 0;
            padding-right: 0;
        }

        .ui.mobile.only.grid .ui.menu .ui.vertical.menu {
            display: none;
        }
    </style>
</head>

<body id="root">

<?php 
require_once('connection.php');
session_start();


if(isset($_SESSION["username"])){


}else{
    session_unset();
    session_destroy();

 

    
 
 
     if(isset($_GET['L_email'] )){
  

     $a= $_GET['L_email'];
     $b=$_GET['L_Password'];

     $sql="SELECT * FROM admin WHERE  a_email='$a' and a_password='$b'";
      $Admins=$con->query($sql);
      if($Admins->num_rows >0){
      while($Admin=$Admins->fetch_assoc()){
        SESSION_start();
    
        $_SESSION["username"] = $Admin['a_name'];

      
        $_SESSION["id"] = $Admin['admin_id'];
       
        $_SESSION["phone"] = $Admin['a_phone'];
        $_SESSION["email"] = $Admin['a_email'];
        $_SESSION["image"] = $Admin['a_image'];
  
  
  
        $_SESSION["table"]="admin";
    
     
        

      

       }}
       else{
          SESSION_start();
    
          $_SESSION["NotLogin"] ="Wrong User Name or Password";

        header("location: LoginPublisher.php");
     
       }
      }}

    ?>
    <?php 
  require_once('connection.php');

  $sql="SELECT * FROM `admin` where admin_id='{$_SESSION['id']}'";
  $books=$con->query($sql);
while($book=$books->fetch_assoc()){
$s=$book['pay'];


if($s!=1){
    $sql="INSERT INTO `payment_admin`(`Admin_id`,`total`, `withdro`, `available`) VALUES ('{$_SESSION['id']}','0','0','0')";
  $books=$con->query($sql);

  $sql="UPDATE `admin` SET `pay`='1' WHERE admin_id='{$_SESSION['id']}'";
  $books=$con->query($sql);

   

}
  }

  ?>





    <div class="ui tablet computer only padded grid">
        <div class="ui inverted borderless top fixed fluid menu">
            <a class="header item"href="index.php">Easy Publications</a>
           
            </div>
        </div>
    </div>

    <div class="ui padded grid">
        <div class="three wide tablet only three wide computer only column" id="sidebar">
            <div class="ui vertical borderless fluid text menu">

                <div class="ui container center aligned">
                    <div class="padded">
                        <img src="<?php echo $_SESSION["image"]?>" alt="" class="ui centered circular small image">
                        <h3 class="ui row header"><?php echo $_SESSION["username"]?></h3>
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <a class="item active" href="P_dashboard.php"><i class="icon clipboard outline"></i> Profile</a>
              
                <a class="item" href="A_review.php"><i class="icon clipboard outline"></i> Review book</a>
                <a class="item" href="A_report_r.php"><i class="icon clipboard outline"></i> Review report </a>
                <a class="item" href="A_updatebook.php"><i class="icon clipboard outline"></i> Update book Details </a>

                <div class="ui hidden divider"></div>

        
               
               


              <a class="item"href="Logout.php"><i class="icon bar chart"></i> Logout</a>
            </div>
        </div>

        <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated column" id="content">
            <!-- MAIN CONTENT -->
            <div class="ui thirteen wide padded column">
                <div class="ui padded grid">
                    <div class="ui column">

                        <h2 class="ui huge dividing header">
                            MY Profile
                        </h2>

                        <br>

                      

                        <div class="ui segment">

                           <h1>Name: <?php echo $_SESSION["username"]?></h1>
                           <h1>Email: <?php echo  $_SESSION["email"]?></h1>
                           <h1>Phone Number: <?php echo $_SESSION["phone"]?></h1>
                         

 

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".ui.toggle.button").click(function () {
                $(".mobile.only.grid .ui.vertical.menu").toggle(100);
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