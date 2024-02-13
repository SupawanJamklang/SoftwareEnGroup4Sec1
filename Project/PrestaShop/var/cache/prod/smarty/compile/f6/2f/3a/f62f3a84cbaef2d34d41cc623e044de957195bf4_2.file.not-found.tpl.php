<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:39
  from '/var/www/html/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb234b7eb604_56447080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62f3a84cbaef2d34d41cc623e044de957195bf4' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/not-found.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb234b7eb604_56447080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9000977065cb234b7e88f7_68731226', 'page_content');
?>

</section>
<?php }
/* {block "error_content"} */
class Block_127482853665cb234b7e8eb0_39713016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

      <?php } else { ?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page could not be found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to search our catalog, you may find what you are looking for!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
class Block_29007952165cb234b7ea532_68837179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_181038262965cb234b7eadc7_16607549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_9000977065cb234b7e88f7_68731226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_9000977065cb234b7e88f7_68731226',
  ),
  'error_content' => 
  array (
    0 => 'Block_127482853665cb234b7e8eb0_39713016',
  ),
  'search' => 
  array (
    0 => 'Block_29007952165cb234b7ea532_68837179',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_181038262965cb234b7eadc7_16607549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127482853665cb234b7e8eb0_39713016', "error_content", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29007952165cb234b7ea532_68837179', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181038262965cb234b7eadc7_16607549', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
