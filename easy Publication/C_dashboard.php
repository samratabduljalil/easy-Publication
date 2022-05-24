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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
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

     $sql="SELECT * FROM `customer` WHERE  c_email='$a' and c_password='$b'";
      $Admins=$con->query($sql);
      if($Admins->num_rows >0){
      while($Admin=$Admins->fetch_assoc()){
        SESSION_start();
    
        $_SESSION["username"] = $Admin['c_name'];
  
        
        $_SESSION["id"] = $Admin['Customer_id'];
        
        $_SESSION["district"] = $Admin['district'];
        $_SESSION["street"] = $Admin['street'];
        $_SESSION["upazila"] = $Admin['upazila'];
        $_SESSION["phone"] = $Admin['c_phone'];
        $_SESSION["email"] = $Admin['c_email'];
        $_SESSION["image"] = $Admin['c_image'];
        $_SESSION['s']=0;
        $_SESSION['update']=0;
  
        $_SESSION["table"]="customer";
      $d=0;
        $sql="SELECT * FROM `cart` WHERE customer_id='{$_SESSION["id"]}'";
        $rs=$con->query($sql);
        $d=0;
        while($r=$rs->fetch_assoc()){
      
      
      $d+=1;
      
        }
        $_SESSION['cart']=$d;


      

       }}
       else{
          SESSION_start();
    
          $_SESSION["NotLogin"] ="Wrong User Name or Password";

        header("location: LoginUser.php");
     
       }}
      }?>








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
                        <img src="Profile/<?php echo $_SESSION["image"]?>" alt="" class="ui centered circular small image">
                        <h3 class="ui row header"><?php echo $_SESSION["username"]?></h3>
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <a class="item active" href="C_dashboard.php"><i class="icon clipboard outline"></i>Profile</a>
                <a class="item" href="C_order.php"><i class="icon cart"></i>Orders</a>
                <a class="item" href="C_report.php"><i class="icon dollar sign"></i> Report</a>
                <a class="item " href="C_edit.php"><i class="icon clipboard outline"></i>Edit Profile</a>

                <div class="ui hidden divider"></div>

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
                        <?php if($_SESSION['update']==1){ ?>
                        <div class="alert alert-success" role="alert">
                         Profile update sucessfully

                        </div>
                        
                           <?php $_SESSION['update']=0;}?> 








                        <br>

                      

                        <div class="ui segment">

                           <h1>Name: <?php echo $_SESSION["username"]?></h1>
                           <h1>Email: <?php echo  $_SESSION["email"]?></h1>
                           <h1>Phone Number: <?php echo $_SESSION["phone"]?></h1>
                           <h1>Address: <?php echo $_SESSION["street"]?>, <?php echo $_SESSION["upazila"]?>, <?php echo $_SESSION["district"]?>.</h1>

 

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