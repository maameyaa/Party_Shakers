<?php
/* Smarty version 3.1.30, created on 2017-04-29 20:31:19
  from "C:\xampp\htdocs\ecommerce\PartyShakers\Version4\partyshakers\templates\category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5904dbf73d68c5_18105201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525e603318d68d8b0ef225005de36eab6ae066e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\category.tpl',
      1 => 1493489363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5904dbf73d68c5_18105201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '22825904dbf725ff49_97055018';
?>
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
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
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">
                                <!-- /.text -->
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                                <div class='col-md-4 col-sm-6'>
                                    <div class='product'>
                                        <div class='flip-container'>
                                        <div class='flipper'>
                                            <div class='front'>
                                                <a href='index.php?cmd=8&pno=<?php echo $_smarty_tpl->tpl_vars['item']->value['pno'];?>
'>
                                                    <img src=<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
  alt='' class='img-responsive'>
                                                </a>
                                            </div>
                                            <div class='back'>
                                                <a href='index.php?cmd=8&pno=<?php echo $_smarty_tpl->tpl_vars['item']->value['pno'];?>
'>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt='' class='img-responsive'>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                <a href='index.php?cmd=8&pno=<?php echo $_smarty_tpl->tpl_vars['item']->value['pno'];?>
' class='invisible'>
                                    <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
' alt='' class='img-responsive'>
                                </a>
                                    <div class='text'>
                                        <h3>
                                        <a href='index.php?cmd=8&pno=<?php echo $_smarty_tpl->tpl_vars['item']->value['pno'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['pname'];?>
 </a></h3>
                                        <p class='price'> ¢ <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</p>
                                        <p class='buttons'>
                                        <a href='index.php?cmd=8&pno=' class='btn btn-default'>View detail</a>
                                        
                                        <a data-toggle='modal' data-target='#add-modal' data-pname = '<?php echo $_smarty_tpl->tpl_vars['item']->value['pname'];?>
' data-price = '<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
' data-pno = '<?php echo $_smarty_tpl->tpl_vars['item']->value['pno'];?>
'class='btn btn-primary'><i class='fa fa-shopping-cart' ></i>Add to cart</a>

                                        </p>
                                    </div>
                                </div>
                             </div>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                </div>
                            <!-- /.product -->
                    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="Add" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="Login"> <p class="text-center">Confirm</h4>
                                    
                                </div>
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
                                            <button class="btn btn-primary" href="basket.php" name="viewcart"><i class="fa fa-sign-in"></i>View Cart</button>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                  <!-- /.products -->


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
