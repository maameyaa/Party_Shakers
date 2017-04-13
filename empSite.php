	    <!-- Employee Home Page
	         Benedicta Amo Bempah
             53532016
	         eCommerce Group Project -->

	    <!DOCTYPE html>
	    <html lang="en">

	    <head>

	    <title> Party Shakers </title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
        <link href="css/custom.css" rel="stylesheet">

	    <style>
	            .mySlides {display:none}
	    </style>

	    </head>

	  <body>

	    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="empSite.php" class="btn btn-success btn-sm" data-animate-hover="shake">Employee Site</a>  <a href="">What is your goal today!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="disclaimer.html">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>
          <form method="post" action="Login.php">
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Employee login</h4>
                    </div>
                    <div class="modal-body">
                        <center><div id="divStatus" class="status"></div></center>
                        
                            <div class="form-group">
                                <input name="eusername" type="text" class="form-control" id="email-modal" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary" onclick="login_modal()"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        

                    </div>
                </div>
            </div>
        </div>
</form>
    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="empSite.html" data-animate-hover="bounce"></a>
                    <img src="img/favicon.png" alt="logo" class="hidden-xs" style="width:65px">
                    <img src="img/favicon.png" alt="logo" class="visible-xs"><span class="sr-only">Party Shakers Employees</span>

            </div>
            <!--/.navbar-header -->


        
      <h2 class="w3-center">PartyShakers Employees</h2>
      <p>Party Shakers is what it is because of You! Thank you for all your hardwork.
      </p>

    <div class="w3-content w3-section" style="max-width:800px">
      <img class="mySlides" src="img/slides/thank-you.jpg" style="width:80%">
      <img class="mySlides" src="img/slides/party_slide7.jpg" style="width:80%">
      <img class="mySlides" src="img/slides/party_slide2.png" style="width:80%">
    </div>
       
       <!--* Including scripts for styling* -->
    	<script src="js/empSlides.js"></script>



<!--Footer Area -->

 <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
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
                        </div>

			      <div class="col-md-3 col-sm-6">
						<h4>Where to find us</h4>
							<p><strong>Party Shakers Ltd.</strong>
			                     <br>Ashesi University College
			                  	 <br>Berekuso
			                     <br>PMB CT3<br>
			                     <strong>Ghana</strong>
			                </p>
			      </div>

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
                        </div>
                    </div>

<!--End section of footer bar -->
			
			<!-- Later footer on Copyright info -->
            <div id="copyright">
                <div class="container">
                    <div class="col-md-6">
                        <p class="pull-left"> © 2017 Party Shakers.</p>

                    </div>
                    <div class="col-md-6">
                        <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                             <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                        </p>
                    </div>
                </div>
            </div>
</div>
            <!-- *** COPYRIGHT END *** -->

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








