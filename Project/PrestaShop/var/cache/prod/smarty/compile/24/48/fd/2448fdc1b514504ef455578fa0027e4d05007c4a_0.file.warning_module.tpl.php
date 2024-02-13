<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:19
  from '/var/www/html/admin/themes/default/template/controllers/modules/warning_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb23378fd616_21653041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2448fdc1b514504ef455578fa0027e4d05007c4a' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb23378fd616_21653041 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }
}
