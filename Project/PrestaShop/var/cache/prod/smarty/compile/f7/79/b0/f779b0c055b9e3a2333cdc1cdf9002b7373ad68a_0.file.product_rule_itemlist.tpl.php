<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:15
  from '/var/www/html/admin/themes/default/template/controllers/cart_rules/product_rule_itemlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2333b4c470_13932259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f779b0c055b9e3a2333cdc1cdf9002b7373ad68a' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/cart_rules/product_rule_itemlist.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb2333b4c470_13932259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12 bootstrap">
	<div class="col-lg-6">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselected','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		<select multiple size="20" id="product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_1">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_rule_itemlist']->value['unselected'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['id'] ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<div class="clearfix">&nbsp;</div>
		<a id="product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_add" class="btn btn-default btn-block" >
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

			<i class="icon-arrow-right"></i>
		</a>
	</div>
	<div class="col-lg-6">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		<select multiple size="20" name="product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
[]" id="product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_2" class="product_rule_toselect" >
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_rule_itemlist']->value['selected'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['id'] ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<div class="clearfix">&nbsp;</div>
		<a id="product_rule_select_<?php echo $_smarty_tpl->tpl_vars['product_rule_group_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['product_rule_id']->value;?>
_remove" class="btn btn-default btn-block" >
			<i class="icon-arrow-left"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

		</a>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$('#product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_remove').click(function() { removeCartRuleOption(this); updateProductRuleShortDescription(this); });
	$('#product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_add').click(function() { addCartRuleOption(this); updateProductRuleShortDescription(this); });
	$(document).ready(function() { updateProductRuleShortDescription($('#product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_add')); });
<?php echo '</script'; ?>
>
<?php }
}
