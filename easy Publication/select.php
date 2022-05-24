<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /* Account Page */

        .account-page {
            padding: 50px 0;
            background: #cce7d0;
        }

        .form-container {
            background: #fff;
            width: 300px;
            height: 400px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-container span {
            font-weight: bold;
            padding: 0 10px;
            color: #555;
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }

        .form-btn {
            display: inline-block;
        }

        .form-container form {
            max-width: 300px;
            padding: 0 20px;
            position: absolute;
            top: 130px;
            transition: transform 1s;
        }

        form input {
            width: 100%;
            height: 30px;
            margin: 10px 0;
            padding: 0 10px;
            border: 1px solid #ccc;
        }

        form .btn {
            width: 100%;
            border: none;
            cursor: pointer;
            margin: 10px;
        }

        form .btn:focus {
            outline: none;
        }

        #LoginForm {
            left: -300px;
        }

        #RegForm {
            left: -300px;
            left: 0;
        }

        form a {
            font-size: 12px;
        }

        #indicator {
            width: 100px;
            border: none;
            background: #D82148;
            height: 3px;
            margin-top: 8px;
            transform: translateX(100px);
            transition: transform 1s;
        }
    </style>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
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
                <li><a href="account.html"></i></a></li>
                
                

            </ul>
        </div>
    </section>
   

    <!-- Account Page -->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="form-container">
                        <p><h1>Login/signIn</h></p>
<form>
                    <a href="LoginUser.php"> <button type="button" class="btn btn-primary">User</button></a>
                    <a href="LoginPublisher.php"><button type="button" class="btn btn-secondary">Publisher</button></a>
                    <a href="Pr_log.php"><button type="button" class="btn btn-success">Prenting press</button></a>
                    <a href="A_Log.php"><button type="button" class="btn btn-danger">Admin</button></a>

    </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- footer -->


    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-1">
                    <img src="./img/logo.png" alt="" width="250px">
                    <p>Our motivation is to create an easy and hassle
                        free System for publishing industry. </p>
                    <div>Also making sure provide better content.</div>
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


    <!-- js for toggle form  -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var indicator = document.getElementById("indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
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