<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:13
  from '/var/www/html/admin/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2331b10691_32712276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32de393aaf5feafffb54a8ebed42af46a39d366a' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/attributes_groups/helpers/form/form.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb2331b10691_32712276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152832611865cb2331b0f1d5_30943693', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_152832611865cb2331b0f1d5_30943693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_152832611865cb2331b0f1d5_30943693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'public_name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeGroupForm",'id_attribute_group'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
