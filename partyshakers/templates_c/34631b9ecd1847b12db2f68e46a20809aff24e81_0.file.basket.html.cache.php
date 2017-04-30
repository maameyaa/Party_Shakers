<?php
/* Smarty version 3.1.30, created on 2017-04-30 01:42:18
  from "C:\xampp\htdocs\ecommerce\PartyShakers\Version4\partyshakers\templates\basket.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590524da294f97_03041564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34631b9ecd1847b12db2f68e46a20809aff24e81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\PartyShakers\\Version4\\partyshakers\\templates\\basket.html',
      1 => 1493509334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_590524da294f97_03041564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '86590524da103e75_57539980';
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
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">
                            <h1>Shopping cart</h1>
                           
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th >Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Total Amount</th>
                                            <th>Remove Item</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody> 
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartitems']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>      
                                        <tr>
                                            <th><?php $_smarty_tpl->_assignInScope('itemsincart', $_smarty_tpl->tpl_vars['itemsincart']->value+1);
?> <?php echo $_smarty_tpl->tpl_vars['itemsincart']->value;?>
</th>
                                            <p hidden> <input type= 'number' id ="tableid" value = <?php echo $_smarty_tpl->tpl_vars['itemsincart']->value;?>
 > </p>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pname'];?>
</td>
                                            <td><input type='number' value= <?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
 onclick= "subtotal()" ></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                                            <td class='subtotal'></td>
                                            <td><a  onclick = "deleteitem('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')" ><i class='fa fa-trash-o'></i></a></td> 
                                        </tr>
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2"></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                         <p class="text-muted">You currently have <?php echo $_smarty_tpl->tpl_vars['itemsincart']->value;?>
 item(s) in your cart.</p>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.html" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                    
                                    <a href='addorder.php'  class='btn btn-primary'>Place Order <i class='fa fa-chevron-right'></i>                                        
                                    </a>
                                </div>
                            </div>

                    </div>
                    <!-- /.box -->

                    </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th></th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>



                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                    <button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

                    </span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

   <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<?php }
}
