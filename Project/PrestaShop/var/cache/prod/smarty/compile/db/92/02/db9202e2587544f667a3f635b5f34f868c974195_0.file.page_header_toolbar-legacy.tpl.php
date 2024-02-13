<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:19
  from '/var/www/html/admin/themes/default/template/controllers/modules/page_header_toolbar-legacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb23370a69c6_20393412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db9202e2587544f667a3f635b5f34f868c974195' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/page_header_toolbar-legacy.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb23370a69c6_20393412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22282769165cb233705c032_82402445', 'pageTitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61594931165cb233705c924_18188528', 'toolbarBox');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page_header_toolbar.tpl");
}
/* {block 'pageTitle'} */
class Block_22282769165cb233705c032_82402445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_22282769165cb233705c032_82402445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="page-title">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of modules'),$_smarty_tpl ) );?>

</h2>
<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'toolbarBox'} */
class Block_61594931165cb233705c924_18188528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbarBox' => 
  array (
    0 => 'Block_61594931165cb233705c924_18188528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
			<?php if ((isset($_smarty_tpl->tpl_vars['upgrade_available']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['upgrade_available']->value)) {?>
			<?php $_smarty_tpl->_assignInScope('modules', '');?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrade_available']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php $_smarty_tpl->_assignInScope('modules', ($_smarty_tpl->tpl_vars['modules']->value).($_smarty_tpl->tpl_vars['module']->value['name']).('|'));?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_smarty_tpl->_assignInScope('modules', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( $_smarty_tpl->tpl_vars['modules']->value,0,-1 )));?>
			<li>
				<a id="desc-module-update-all" class="toolbar_btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;updateAll=1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update all'),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update all'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php } else { ?>
			<li>
				<a id="desc-module-check-and-update-all" class="toolbar_btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;check=1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check for update'),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check for update'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['add_permission']->value == '1' && ($_smarty_tpl->tpl_vars['context_mode']->value != Context::MODE_HOST)) {?>
			<li>
				<a id="desc-module-new" class="toolbar_btn anchor" href="#" onclick="$('#module_install').slideToggle();" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
">
					<i class="process-icon-new"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php } else { ?>
			<li>
				<a id="desc-module-new" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules',true,array(),array('addnewmodule'=>1));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
">
					<i class="process-icon-new"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['help_link']->value))) {?>
			<li>
				<a class="toolbar_btn  btn-help" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['help_link']->value ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
">
					<i class="process-icon-help"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
		</ul>
	</div>
</div>
<?php
}
}
/* {/block 'toolbarBox'} */
}
