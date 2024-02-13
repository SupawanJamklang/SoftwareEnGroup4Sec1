<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:27
  from '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb233f382e46_81909884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b595ba4f3b6aa5d1973c18594de0c8fb473426ce' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb233f382e46_81909884 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }
}
