<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:19
  from '/var/www/html/admin/themes/default/template/controllers/payment/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2337d38d52_54211524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b44dcf655f8babafd1865dae100829d97ace37' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/payment/helpers/view/view.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb2337d38d52_54211524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133026647565cb2337d37534_43209899', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_133026647565cb2337d37534_43209899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_133026647565cb2337d37534_43209899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['shop_context']->value) {?>
		<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have more than one shop and must select one to configure payment.','d'=>'Admin.Payment.Notification'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['modules_list']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
	<?php }
}
}
/* {/block "override_tpl"} */
}
