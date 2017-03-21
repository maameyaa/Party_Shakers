<?php
/* Smarty version 3.1.30, created on 2017-02-10 16:09:27
  from "C:\xampp\htdocs\ecommerce\smarty-3.1.30\demo\templates\new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589dd7a7106414_07149263',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '263eb19131a4f894885e63742a9b78f812a45c96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\smarty-3.1.30\\demo\\templates\\new.tpl',
      1 => 1486739365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589dd7a7106414_07149263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18403589dd7a6f1f8e9_10178321';
?>

 </!DOCTYPE html>
 <html>
 <head>
 	<title>Hello</title>
 </head>
 <body>
 
 <p>Name: <?php echo '/*%%SmartyNocache:18403589dd7a6f1f8e9_10178321%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:18403589dd7a6f1f8e9_10178321%%*/';?>
</p>

 <!-- <?php
$__section_outer_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_outer']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer'] : false;
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_0_total != 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] = $__section_outer_0_iteration;
?>
        <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null) / 2)) {?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

        <?php } else { ?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 * <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

        <?php }?>
        <?php }} else {
 ?>
        none
 <?php
}
if ($__section_outer_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = $__section_outer_0_saved;
}
?> -->


 <?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
        phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['phone'];?>

        <br>

            fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['fax'];?>

        <br>

            cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cell'];?>

        <br>
    <?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>


 </body>
 </html><?php }
}
