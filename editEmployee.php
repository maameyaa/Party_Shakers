    <!-- Employee Page
         Benedicta Amo Bempah
         eCommerce Group Project -->

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
         _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="admin.php" class="btn btn-success btn-sm" data-animate-hover="shake"> Home </a>  <a href="#">You are the core of PartyShakers :) !</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
<!--                     <li><a href="employeePage.php" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li> -->
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="employeePage.php">Employee Page</a>
                    </li>
                    <li><a href="admin.php">Admin Page</a>
                    </li>
                    <li><a href="disclaimer.html">Disclaimer</a>
                    </li>
                     </ul>
   
            </div>
        </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/favicon.png" alt="logo" class="hidden-xs" style="width:65px ">
                    <img src="img/favicon.png" alt="logo" class="visible-xs" style="width:65px"><span class="sr-only">Party Shakers - Employees</span>
                </a>


                <?php

                include_once('Employee.php');

                $edit = '';

                if(isset($_GET['edit'])){

                    $edit = $_GET['edit'];

                    //$editEmp = "SELECT * FROM employees WHERE eno ='$edit'";

                    // $checking = mysqli_query($editEmp);

                    // $result = mysqli_fetch_assoc($checking);

                    $tracking = new Employee();

                        $change = $tracking->getEmp($edit);
                       
                       $row = $tracking->fetch($change);
                       
                }
                    //var_dump(array('row'=>$row));
                    if(isset($_POST['addition'])){

                    $edit = $_POST['edit'];
                    $firstname = $_POST['efirstname'];
                    $lastname = $_POST['elastname'];
                    $region = $_POST['region'];
                    $hiredate = $_POST['hiredate'];
                    $birthdate = $_POST['birthdate'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];


                     $result = new Employee();

                     $result->amendEmployee($edit, $firstname,$lastname,$region,$hiredate, $birthdate, $phone,$email, $gender);
                     header('Location: admin.php');
                }

                ?>


<div style="margin-top:7%">
                <form method="post" action="editEmployee.php">
                    <h2 class="form-title text-center" id="Login">Edit Employee</h2>
                    
                    <div class="body">
                        <center><div id="divStatus" class="status"></div></center>
                        
                            <div class="form-group">
                                <h5 class="form-title"> Employee Firstname</h5>
                                <input name="efirstname" type="text" class="form-control" id="email-modal" value="<?php echo $row['efirstname'];?>">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Lastname</h5>
                                <input name="elastname" type="text" class="form-control" id="password-modal" value="<?php echo $row['elastname'];?>">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Region</h5>
                                <input name="region" type="text" class="form-control" id="email-modal" value="<?php echo $row['region'];?> ">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Hire Date</h5>
                                <input name="hiredate" type="text" class="form-control" id="password-modal" value="<?php echo $row['hiredate'];?> ">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Birth Date</h5>
                                <input name="birthdate" type="text" class="form-control" id="email-modal" value="<?php echo $row['birthdate'];?>">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Phone</h5>
                                <input name="phone" type="text" class="form-control" id="password-modal" value="<?php echo $row['phone'];?> ">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Email</h5>
                                <input name="email" type="text" class="form-control" id="email-modal" value="<?php echo $row['email'];?> ">
                            </div>
                            <div class="form-group">
                            <h5 class="form-title"> Employee Gender</h5>
                                <input name="gender" type="text" class="form-control" id="password-modal" value="<?php echo $row['gender'];?>">
                            </div>

                            <input hidden type="text" name= "edit" value="<?php echo $edit; ?>">

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary" id="addition" name="addition"><i class="fa fa-sign-in"></i> Employee Edited </button>
                         </p>
</form>
</div>





                        <!--* Including scripts for styling* -->
        <script src="js/empSlides.js"></script>

    </body>


            <!-- *** FOOTER ***
     _________________________________________________________ -->
            <div id="footer" data-animate="fadeInUp">
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
     _________________________________________________________ -->
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



        </div>
        <!-- /#all -->


        

        <!-- *** SCRIPTS TO INCLUDE ***
     _________________________________________________________ -->
        <script src="js/empSlides.js"></script>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/bootstrap-hover-dropdown.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/front.js"></script>

<?php var_dump($_POST); ?>
    </body>

    </html>