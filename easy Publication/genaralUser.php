<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dropbtn {
            width: 100%;
            text-align: left;

            background-color: inherit;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            width: 100%;
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: grey;
        }
    </style>




    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>
    <section id="dashboard">
        <div class="container">
            <div class="dash-main">
                <div class="dash-left">
                    <div class="dash-left-content">
                        <div class="profile">
                            <img src="img/avter.png" alt="img">
                        </div>
                        <div class="profile-content">
                            <div class="text-name">
                                <p>md murad hossain</p>
                            </div>
                        </div>
                        <div class="profile-content">

                            <button class="dropbtn">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Home
                            </button>


                        </div>
                        <div class="profile-content">



                            <button class="dropbtn">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Forms
                            </button>



                        </div>
                        <div class="profile-content">



                            <button class="dropbtn">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                ui element
                            </button>

                        </div>

                        <div class="profile-content">

                            <button class="dropbtn">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                tables
                            </button>
                        </div>

                    </div>
                </div>
                <div class="dash-right">
                    <div class="dash-right-content">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo.png" class="logo" alt="" width="250px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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