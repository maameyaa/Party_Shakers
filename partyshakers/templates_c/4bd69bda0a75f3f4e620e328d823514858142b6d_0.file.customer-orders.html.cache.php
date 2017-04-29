<?php
/* Smarty version 3.1.30, created on 2017-03-28 11:51:35
  from "C:\xampp\htdocs\ecommerce\Version2\partyshakers\templates\customer-orders.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da3227a047c1_50264689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bd69bda0a75f3f4e620e328d823514858142b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\Version2\\partyshakers\\templates\\customer-orders.html',
      1 => 1490687456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58da3227a047c1_50264689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '67180515958da32279b8691_00657642';
?>
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--
<?php echo '<script'; ?>
 type="text/javascript">
    
    ondevice start(){
        
        if (sessionStorage.cno==0){
         return;   
        }
        else{
              
                var cno =sessionStorage.cno;    
            
                alert("orders avail");
                       }
            }
<?php echo '</script'; ?>
>
-->


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>My orders</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-orders.html"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="customer-wishlist.html"><i class="fa fa-heart"></i> My wishlist</a>
                                </li>
                                <li>
                                    <a href="customer-account.html"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>My orders</h1>

                        <p class="lead">Your orders on one place.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>
                        

                        <?php if ($_smarty_tpl->tpl_vars['cno']->value == 0) {?>
                         No orders yet ! Shop some more!
                        
                        <?php } else { ?>
                        <?php $_smarty_tpl->assign('output',$_smarty_tpl->tpl_vars['orders']->value->getorders($_smarty_tpl->tpl_vars['cno']->value));?>

                       

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    

                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['output']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['value']->value['cno'];?>
</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['orderdate'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
</td>
                                        <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['value']->value['status'];?>
</span>
                                        </td>
                                        <td><a href="customer-order.html" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                              </tr>
                                </tbody>
                            </table>
                        </div>  <?php }?>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
