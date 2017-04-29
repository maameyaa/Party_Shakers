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
        Party Shakers
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">


    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/respond.min.js"></script>
    
     <script type="text/javascript">
        
        
        function login_modal(){
                var email =$('#email-modal').val();
                var password =$('#password-modal').val();
                var ajaxPageUrl="userajax.php?cmd=1&email="+email+"&password="+password;
                
                $.ajax(ajaxPageUrl, {literal}
                       {async:true, complete:logincomplete});
                       {/literal} 
        
            }
        
        

            function logincomplete(xhr,status){

                if(status!="success"){

                     $('#divStatus').html("Error while logging in");

                     return;        
                }

                    
                    var obj=$.parseJSON(xhr.responseText);
                    console.log(obj.result);

                    if(obj.result==0){
                        
                        $('#divStatus').html("Wrong Username or Password");
                        return;

                    }

                    else{
                        
                        window.location.href ="index.php?cmd=1"
                     }
            }
    </script>
    
    
    <link rel="shortcut icon" href="favicon.png">
    


</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="index.php?cmd=3" data-animate-hover="shake" >Party Shakers</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    {if isset($name) }
                    <li ><div><a href="#" data-toggle="modal" data-target="#logout-modal">{$name}</a></div>
                     {else} 
                     <li ><div><a href="#" data-toggle="modal" data-target="#login-modal">login</a></div>
                     {/if} 
                    </li>
                    <li><a href="index.php?cmd=2">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- logout modal -->
        <div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">

                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Leaving so soon?</h4>
                    </div>

                    <p class="text-center">
                        <a class="btn btn-primary" href="index.php?cmd=6" name="logout"><i class="fa fa-sign-in"></i>Log out</a>
                    </p>

                </div>
            </div>
        </div>

        <!-- login modal -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <div id="divStatus"></div>
        
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary" onclick="login_modal()" name="login"><i class="fa fa-sign-in"></i>Log in</button>
                            </p>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                        <p><center><a href="#" data-toggle="modal" data-target="#login-modal">Employee Login</a></center></p>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="" alt="" class="hidden-xs">
                    <img src="" alt="" class="visible-xs"><span class="sr-only">Party Shakers - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="index.php?cmd=7">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php?cmd=3">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                 <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5><a href="index.php?cmd=5&category=Decorations">Decorations</a></h5>
                                            <ul>
                                                <li>Balloons
                                                </li>
                                                <li>Confetti
                                                </li>
                                                <li>Streamers
                                                </li>
                                                <li>Accessories
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5><a href="index.php?cmd=5&category=Food">Food</a></h5>
                                            <ul>
                                                <li>Chips
                                                </li>
                                                <li>Drinks
                                                </li>
                                                <li>Candy
                                                </li>
                                                <li>Biscuits
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5><a href="index.php?cmd=5&category=Utensils">Utensils</a></h5>
                                            <ul>
                                                <li>Plates
                                                </li>
                                                <li>Cups
                                                </li>
                                                <li>Cutlery
                                                </li>
                                                <li>Napkins
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5><a href="index.php?cmd=5&category=Costume">Costumes</a></h5>
                                            <ul>
                                                <li>Children
                                                </li>
                                                <li>Women
                                                </li>
                                                <li>Men
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                           <ul>
                                                <li><a href="register.html">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.html">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.html">Order history detail</a>
                                                </li>
                                                <li><a href="customer-wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="customer-account.html">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="index.php?cmd=7" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->