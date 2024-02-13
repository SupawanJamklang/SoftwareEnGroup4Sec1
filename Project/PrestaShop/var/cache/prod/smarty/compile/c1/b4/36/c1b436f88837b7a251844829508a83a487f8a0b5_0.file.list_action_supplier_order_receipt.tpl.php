<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:25
  from '/var/www/html/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb233d891f00_25179357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1b436f88837b7a251844829508a83a487f8a0b5' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb233d891f00_25179357 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
">
	<i class="icon-truck"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
