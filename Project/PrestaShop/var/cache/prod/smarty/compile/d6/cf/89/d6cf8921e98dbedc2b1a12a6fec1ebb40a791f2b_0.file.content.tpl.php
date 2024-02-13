<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:20
  from '/var/www/html/admin/themes/default/template/controllers/shop/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb23384f70b0_35208288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6cf8921e98dbedc2b1a12a6fec1ebb40a791f2b' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb23384f70b0_35208288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
