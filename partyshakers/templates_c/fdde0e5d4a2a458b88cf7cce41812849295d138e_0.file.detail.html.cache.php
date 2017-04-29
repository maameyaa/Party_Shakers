<?php
/* Smarty version 3.1.30, created on 2017-04-29 19:11:09
  from "C:\xampp\htdocs\ecommerce\PartyShakers\Version4\partyshakers\templates\detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904c92d14c540_45838268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdde0e5d4a2a458b88cf7cce41812849295d138e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\detail.html',
      1 => 1493485846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5904c92d14c540_45838268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '118835904c92d032be3_83332009';
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
                        <li><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</li>

                      

                        <li><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
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

                                <img src= <?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
echo "<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
" <?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
 alt="" class="img-responsive">
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
                                <h1 class="text-center"><?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
echo "<?php echo $_smarty_tpl->tpl_vars['row']->value['pname'];?>
" <?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
</h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a>
                                </p>
                                <p class="price">¢<?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
echo "<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
" <?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
</p>

                                <p class="text-center buttons">
                                   <?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
echo "<a  href='additem.php?cno=$cno&pno=<?php echo $_smarty_tpl->tpl_vars['row']->value['pno'];?>
&qty=1' data-toggle='modal' data-target='#add-modal' class='btn btn-primary'><i class='fa fa-shopping-cart' ></i>Add to cart</a>"<?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>

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
                            <p><?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
echo "<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
" <?php echo '/*%%SmartyNocache:118835904c92d032be3_83332009%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:118835904c92d032be3_83332009%%*/';?>
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
