<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:39
  from '/var/www/html/themes/classic/templates/errors/410.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb234b5069a0_68192457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70035c14bdd6ca74432219c8c8802097705b688d' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/410.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_65cb234b5069a0_68192457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207564594665cb234b504060_88021224', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125535354265cb234b504735_11480460', 'page_title');
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157608995965cb234b505d94_33177844', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "breadcrumb"} */
class Block_207564594665cb234b504060_88021224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_207564594665cb234b504060_88021224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block 'page_title'} */
class Block_125535354265cb234b504735_11480460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_125535354265cb234b504735_11480460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_157608995965cb234b505d94_33177844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_157608995965cb234b505d94_33177844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
