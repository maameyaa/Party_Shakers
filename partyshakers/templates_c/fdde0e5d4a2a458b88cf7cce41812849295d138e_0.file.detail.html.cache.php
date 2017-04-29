<?php
/* Smarty version 3.1.30, created on 2017-04-30 01:32:08
  from "C:\xampp\htdocs\ecommerce\PartyShakers\Version4\partyshakers\templates\detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59052278912a39_71023120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdde0e5d4a2a458b88cf7cce41812849295d138e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\detail.html',
      1 => 1493508707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_59052278912a39_71023120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32660590522788260d3_50903136';
?>
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div id="all">
        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><?php echo $_smarty_tpl->tpl_vars['itemcategory']->value;?>
</li>



                        <li><?php echo $_smarty_tpl->tpl_vars['itemname']->value;?>
</li>
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
                                    <a href="index.php?cmd=5&category=Decorations">Decorations</a>
                                </li>
                                <li>
                                    <a href="index.php?cmd=5&category=Costume">Costumes</a>
                                </li>
                                <li>
                                    <a href="index.php?cmd=5&category=Food">Food & Drinks</a>
                                </li>
                                <li>
                                    <a href="index.php?cmd=5&category=Utensils">Tableware</a>
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

                                <img src= '<?php echo $_smarty_tpl->tpl_vars['itemimage']->value;?>
' alt="" class="img-responsive">
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
                                <h1 class="text-center"><<?php echo $_smarty_tpl->tpl_vars['itemname']->value;?>
></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a>
                                </p>
                                <p class="price">¢<?php echo $_smarty_tpl->tpl_vars['itemprice']->value;?>
</p>

                                <p class="text-center buttons">
                                     <a data-toggle='modal' data-target='#add-modal' data-pname = '<?php echo $_smarty_tpl->tpl_vars['itemname']->value;?>
' data-price = '<?php echo $_smarty_tpl->tpl_vars['itemprice']->value;?>
' data-pno = '<?php echo $_smarty_tpl->tpl_vars['itempno']->value;?>
'class='btn btn-primary'><i class='fa fa-shopping-cart' ></i>Add to cart</a>
                                

                                 <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>


                            </div>
                        </div>
                    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="Add" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="Login"> <p class="text-center">Confirm</h4>
                                    
                                </div>
                                <?php if (!$_smarty_tpl->tpl_vars['name']->value) {?>

                                        <center><p>Plese log in to add an item. Thanks!</p></center>
                                <?php } else { ?>
                                <div class="modal-body">
                                    <div >
                                        <input style ="border: none;" name="pno" id ="pno" hidden>
                                 
                                          <div> Product: <input style ="border: none;" name="pname" id ="name" > </div>
                            
                                         <div>Price : <input style = "border: none;" name="price" id ="price" > </div>

                                         <div>  Quantity : <input type= 'number'  min="1" max="20"  placeholder='0' id ="qty" > </div>
                                    </div>

                                    <br></br>

                                    <!-- <div id="divStatus"></div> -->


                                        <p class="text-center">
                                            <button  onclick = "addtocart()" class="btn btn-primary" href="basket.php" name="addtocart"><i class="fa fa-sign-in"></i>Add to Cart</button>

                                            <a class="btn btn-primary" name="viewcart" href="index.php?cmd=7"><i class="fa fa-sign-in"></i>View Cart</a>
                                        </p>  
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['itemdescription']->value;?>
</p>

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


     

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
