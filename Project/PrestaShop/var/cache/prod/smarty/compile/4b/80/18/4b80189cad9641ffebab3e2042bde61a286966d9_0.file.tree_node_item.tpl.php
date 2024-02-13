<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:27
  from '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb233f8987d1_28771029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b80189cad9641ffebab3e2042bde61a286966d9' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb233f8987d1_28771029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
