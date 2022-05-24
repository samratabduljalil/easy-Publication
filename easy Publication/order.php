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

    <div class="ui tablet computer only padded grid">
        <div class="ui inverted borderless top fixed fluid menu">
            <a class="header item">Easy Publications</a>
            <div class="right menu">
                <div class="item">
                    <div class="ui small input"><input placeholder="Search..." /></div>
                </div>
                <a class="item">
                    <i class="icon home"></i>
                    Home
                </a>
                <a class="item">
                    <i class="icon user"></i>
                    Profile
                </a>
                <a class="item active green">
                    <i class="icon chart bar"></i>
                    Dashboard
                </a>
                <a class="item">
                    <i class="icon question circle"></i>
                    Help
                </a>
                <a class="item">
                    <i class="icon copy"></i>
                    About
                </a>
            </div>
        </div>
    </div>

    <div class="ui padded grid">
        <div class="three wide tablet only three wide computer only column" id="sidebar">
            <div class="ui vertical borderless fluid text menu">

                <div class="ui container center aligned">
                    <div class="padded">
                        <img src="../img/default-pfp.jpg" alt="" class="ui centered circular small image">
                        <h3 class="ui row header">Username</h3>
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <a class="item" href="dashboard.html"><i class="icon clipboard outline"></i>Overview</a>
                <a class="item active" href="order.html"><i class="icon cart"></i>Orders</a>
                <a class="item" href="payment.html"><i class="icon dollar sign"></i> Payments</a>
                <a class="item"><i class="icon exchange"></i> Royalties Estimator</a>

                <div class="ui hidden divider"></div>

                <a class="item" href="booklist.html"><i class="icon book"></i> Your Books</a>
                <a class="item"><i class="icon user"></i> Your Profile</a>
                <a class="item"><i class="icon cogs"></i> Your Settings</a>
                <a class="item"><i class="icon certificate"></i> Publish New Book</a>

                <div class="ui hidden divider"></div>

                <a class="item"><i class="icon bar chart"></i> Dashboard</a>
            </div>
        </div>

        <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated column" id="content">
            <!-- MAIN CONTENT -->
            <div class="ui thirteen wide padded column">
                <div class="ui padded grid">
                    <div class="ui column">

                        <h2 class="ui huge dividing header">
                            Orders
                        </h2>

                        <br>

                        <div class="ui segment">

                            <table class="ui green table">
                                <thead>

                                    <th>Order Number</th>
                                    <th>Book Bought</th>
                                    <th>Delivery Status</th>
                                    <th>Order Date</th>
                                    <th>Delivery Adress</th>

                                </thead>

                                <tr>
                                    <td>9248375</td>
                                    <td>Children's Coloring Book</td>
                                    <td class="error">Cancelled</td>
                                    <td>12-10-2021</td>
                                    <td>Dhanmondi, Dhaka</td>

                                </tr>

                                <tr>
                                    <td>48967248</td>
                                    <td>Machine Learning with TF</td>
                                    <td class="positive">Delivered</td>
                                    <td>12-10-2021</td>
                                    <td>Jamtala, Sylhet</td>

                                </tr>

                                <tr>
                                    <td>9248375</td>
                                    <td>Guide to C++</td>
                                    <td class="positive">Delivered</td>
                                    <td>12-10-2021</td>
                                    <td>Badda, Dhaka</td>

                                </tr>

                                <tr>
                                    <td>9248375</td>
                                    <td>Children's Coloring Book</td>
                                    <td class="warning">Pending</td>
                                    <td>12-1-2022</td>
                                    <td>Times Square, NY</td>

                                </tr>
                            </table>
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