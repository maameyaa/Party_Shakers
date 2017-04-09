<!-- 
    Employee Page
    Benedicta Amo Bempah
    eCommerce Group Project 
-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Obaju e-commerce template">
        <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
        <meta name="keywords" content="">

        <title>
            Party Shakers Employee Site
        </title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

        <!-- styles -->
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/sidebar.css" rel="stylesheet">

        <!-- theme stylesheet -->
        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- your stylesheet with modifications -->
        <link href="css/custom.css" rel="stylesheet">

        <script src="js/respond.min.js"></script>

        <link rel="shortcut icon" href="favicon.png">

        <style>
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
        </style>
    </head>

    <body>
        <!-- *** TOPBAR ***
        ___________________________________________________________________________________________________-->
        <div id="top" style="margin-bottom:5%">
            <div class="container">
                <div class="col-md-6 offer" data-animate="fadeInDown">
                    <a href="index.html" data-animate-hover="bounce" style="margin:0">
                        <img src="img/favicon.png" alt="logo" class="hidden-xs" style="width:65px ">
                        <img src="img/favicon.png" alt="logo" class="visible-xs" style="width:65px"><span class="sr-only">Party Shakers - Employees</span>
                    </a>
                    <a href="#">Every customer must be served :) !</a>
                </div>
                <div class="col-md-6" data-animate="fadeInDown">
                    <ul class="menu" style="padding-top:4%">
                        <!--<li><a href="employeePage.php" data-toggle="modal" data-target="#login-modal">Login</a></li> -->
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="employeePage.php">Customer Orders</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <center><div id="divStatus" class="status"></div></center>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary" onclick="login_modal()"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted">
                            <a href="register.html">
                                <strong>Register now</strong>
                            </a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!
                        </p>
                        <p><center><a href="employee_login.php" >Employee Login</a></center></p>
                    </div>
                </div>
            </div>
    </div>
        <!-- *** TOP BAR END *** -->

        <!-- *** NAVBAR ***
        _________________________________________________________ -->

        

<!--         <br>

        <! Side Bar Navigation begins -->
 <!--        <div id="mySidenav" class="sidenav" style="margin-bottom:10%">
          <!<a href="#" id="about">About</a> -->
        <!--   <a href="items_report.php" id="blog">Item Reports</a>
          <a href="#" id="projects">Customer Details</a>
          <a href="#" id="contact">Something</a>
        </div>  -->

        <!-- *** SEARCH BAR ***
        _______________________________________________________________________________________-->
        <div class="container">
            <form method="post" action="admin.php">
                <div class="input-group">
                    <input type="text" name="searchtext" class="form-control">
                    <span class="input-group-btn">
                        <button name="search" class="btn btn-default" type="submit">Search!</button>
                    </span>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
         <!--  <h2>Employee Site</h2> -->
          <p>Party Shakers is what it is because of You! Thank you for all the hardwork.</p>
        </div>

        <div class="col-md-12" id="customer-orders">
            <div class="box">
                <h1>Orders</h1>

                <p class="lead">Customer Orders as follows:</p>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Item name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include_once("orders.php");

                            $part="";
                            $obj="";
                            if (isset ($_REQUEST['text'])){
                                $text = $_REQUEST['text'];
                                $obj = new orders();
                                $part = $obj -> getOdetails($text);
                            }
                            else{
                                echo "Unavailable";
                            }

                            if ($part==false){
                                echo "Error";
                                exit();
                            }
                            else{
                                $row = $obj ->fetch();
                                // echo $row;
                                echo "<br>".$_REQUEST['fn']." ".$_REQUEST['ln']."<br>";
                            
                                while ($row!=false){
                                    echo "
                                        <tr>
                                            <th>{$row["pname"]}</th>
                                            <td>{$row["price"]}</td>
                                            <td>{$row["category"]}</td>
                                            <td>{$row["qty"]}</td>

                                        </tr>";
                                    $row = $obj ->fetch();
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>

<!--     <div class="w3-content w3-display-container" style="max-width:800px">
      <img class="mySlides" src="img/slides/1.jpg" style="width:100%">
      <img class="mySlides" src="img/slides/2.jpg" style="width:100%">
      <img class="mySlides" src="img/slides/3.jpg" style="width:100%">

    </div>
 -->        
        <!-- *** FOOTER ***
        _______________________________________________________________________________________________________-->
        <div id="footer" data-animate="fadeInUp" style="margin-top:40%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.html">About us</a>
                            </li>
                            <li><a href="text.html">Terms and conditions</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="contact.html">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.html">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>


                        <ul>
                            <li><a href="category.html">Decorations</a>
                            </li>
                            <li><a href="category.html">Food</a>
                            </li>
                            <li><a href="category.html">Costumes</a>
                            </li>
                            <li><a href="category.html">Utensils</a>
                            </li>

                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Party Shakers Ltd.</strong>
                            <br>Ashesi University College
                            <br>Berekuso
                            <br>PMB CT3
                            <br>
                            <strong>Ghana</strong>
                        </p>

                        <a href="contact.html">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Recieve updates on our deals and new offers</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Subscribe!</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->
        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
        _______________________________________________________________________________________________________-->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Party Shakers.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->
        <!-- /#all -->

        <!-- *** SCRIPTS TO INCLUDE ***
        _______________________________________________________________________________________________________-->
        <script src="js/empSlides.js"></script>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/bootstrap-hover-dropdown.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/front.js"></script>
    </body>
</html>