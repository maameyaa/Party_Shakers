 {include file="header.tpl"}

    <div id="all">
        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li>{$category}</li>

                        <li>{items.name}</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="category.php?category=Decorations">Decorations</a>
                                </li>
                                <li>
                                    <a href="category.php?category=Costume">Costumes</a>
                                </li>
                                <li>
                                    <a href="category.php?category=Food">Food & Drinks</a>
                                </li>
                                <li>
                                    <a href="category.php?category=Utensils">Tableware</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">

                                <img src= <?php echo "{$row['image']}" ?> alt="" class="img-responsive">
                            </div>

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php echo "{$row['pname']}" ?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a>
                                </p>
                                <p class="price">¢<?php echo "{$row['price']}" ?></p>

                                <p class="text-center buttons">
                                   <?php echo "<a  href='additem.php?cno=$cno&pno={$row['pno']}&qty=1' data-toggle='modal' data-target='#add-modal' class='btn btn-primary'><i class='fa fa-shopping-cart' ></i>Add to cart</a>"?>
                                    <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>


                            </div>
                        </div>
                        
                         <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="Add" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="Login"> <p class="text-center">One Item Added To Cart</h4>
                                </div>
                                <div class="modal-body">
                                        <p class="text-center">
                                            <button class="btn btn-primary" href="basket.php" name="login"><i class="fa fa-sign-in"></i>View Cart</button>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p><?php echo "{$row['description']}" ?></p>

                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


     

 {include file="footer.tpl"} 