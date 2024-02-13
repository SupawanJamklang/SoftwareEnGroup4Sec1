<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:21
  from '/var/www/html/admin/themes/default/template/controllers/stats/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2339815aa6_80099786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a0947bb03ac4657c95454cb14d1f75622093bd' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../form_date_range_picker.tpl' => 1,
  ),
),false)) {
function content_65cb2339815aa6_80099786 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="statsContainer" class="col-md-9">
	<?php $_smarty_tpl->_subTemplateRender("file:../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
