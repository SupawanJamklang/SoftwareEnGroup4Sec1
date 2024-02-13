<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:39
  from '/var/www/html/themes/classic/templates/errors/forbidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb234b61a347_79581676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aebe34c3913cd9dd4bf8c05d1029187916754cd0' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/forbidden.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb234b61a347_79581676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120683409665cb234b617143_05455195', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_79372168465cb234b617e43_13147499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_159480149665cb234b617bc8_49030472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79372168465cb234b617e43_13147499', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_32916861565cb234b6174f8_40278148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
      <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159480149665cb234b617bc8_49030472', 'page_header', $this->tplIndex);
?>

    </header>
  <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_108417922965cb234b618c58_00736643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You are not allowed to access this page.",'d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_193663068065cb234b6189d8_58472886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108417922965cb234b618c58_00736643', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_20593691165cb234b619cd9_14696048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_120683409665cb234b617143_05455195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_120683409665cb234b617143_05455195',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_32916861565cb234b6174f8_40278148',
  ),
  'page_header' => 
  array (
    0 => 'Block_159480149665cb234b617bc8_49030472',
  ),
  'page_title' => 
  array (
    0 => 'Block_79372168465cb234b617e43_13147499',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_193663068065cb234b6189d8_58472886',
  ),
  'page_content' => 
  array (
    0 => 'Block_108417922965cb234b618c58_00736643',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_20593691165cb234b619cd9_14696048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32916861565cb234b6174f8_40278148', 'page_header_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193663068065cb234b6189d8_58472886', 'page_content_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20593691165cb234b619cd9_14696048', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
