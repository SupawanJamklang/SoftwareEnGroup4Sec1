<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:18
  from '/var/www/html/admin/themes/default/template/controllers/modules/filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb23367de335_57517800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce157671c12be746e4ac72b160cbeaeeee77cd3' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/filters.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb23367de335_57517800 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--start filter module-->
<form method="post" class="form-inline">
  <div class="row">
    <div class="col-lg-8">
      <div class="form-group">
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter by'),$_smarty_tpl ) );?>
</label>
        <select name="module_install" id="module_install_filter" class="form-control <?php if ((isset($_smarty_tpl->tpl_vars['showInstalledModules']->value)) && $_smarty_tpl->tpl_vars['showInstalledModules']->value && $_smarty_tpl->tpl_vars['showInstalledModules']->value != 'installedUninstalled') {?>active<?php }?>">
          <option value="installedUninstalled" <?php if ($_smarty_tpl->tpl_vars['showInstalledModules']->value == 'installedUninstalled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installed & Not Installed'),$_smarty_tpl ) );?>
</option>
          <option value="installed" <?php if ($_smarty_tpl->tpl_vars['showInstalledModules']->value == 'installed') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installed Modules'),$_smarty_tpl ) );?>
</option>
          <option value="uninstalled" <?php if ($_smarty_tpl->tpl_vars['showInstalledModules']->value == 'uninstalled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules Not Installed '),$_smarty_tpl ) );?>
</option>
        </select>
      </div>

      <div class="form-group">
        <select name="module_status" id="module_status_filter" class="form-control <?php if ((isset($_smarty_tpl->tpl_vars['showEnabledModules']->value)) && $_smarty_tpl->tpl_vars['showEnabledModules']->value && $_smarty_tpl->tpl_vars['showEnabledModules']->value != 'enabledDisabled') {?>active<?php }?>">
          <option value="enabledDisabled" <?php if ($_smarty_tpl->tpl_vars['showEnabledModules']->value == 'enabledDisabled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled & Disabled'),$_smarty_tpl ) );?>
</option>
          <option value="enabled" <?php if ($_smarty_tpl->tpl_vars['showEnabledModules']->value == 'enabled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled Modules'),$_smarty_tpl ) );?>
</option>
          <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['showEnabledModules']->value == 'disabled') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled Modules'),$_smarty_tpl ) );?>
</option>
        </select>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authors'),$_smarty_tpl ) );?>
</label>
        <select class="filter <?php if ((isset($_smarty_tpl->tpl_vars['showTypeModules']->value)) && $_smarty_tpl->tpl_vars['showTypeModules']->value && $_smarty_tpl->tpl_vars['showTypeModules']->value != 'allModules') {?>active<?php }?>" name="module_type" id="module_type_filter">
          <option value="allModules" <?php if ($_smarty_tpl->tpl_vars['showTypeModules']->value == 'allModules') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All authors'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_modules_authors']->value, 'status', false, 'module_author');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_author']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
            <option value="authorModules[<?php echo $_smarty_tpl->tpl_vars['module_author']->value;?>
]" <?php if ($_smarty_tpl->tpl_vars['status']->value == "selected") {?>selected<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_author']->value,20,'...' ));?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
    </div>
  </div>
</form>
<!--end filter module-->
<?php }
}
