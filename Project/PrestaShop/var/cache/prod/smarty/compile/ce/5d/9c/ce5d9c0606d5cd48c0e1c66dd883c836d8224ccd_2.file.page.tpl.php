<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:37
  from '/var/www/html/themes/classic/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2349358609_38169519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce5d9c0606d5cd48c0e1c66dd883c836d8224ccd' => 
    array (
      0 => '/var/www/html/themes/classic/templates/cms/page.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb2349358609_38169519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58681443665cb23493556f7_97226810', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200056449565cb2349356432_89575843', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_58681443665cb23493556f7_97226810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_58681443665cb23493556f7_97226810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_28841558665cb2349356aa0_33135805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_141965127865cb23493575f1_01591423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_178790345565cb2349357d21_10845132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_200056449565cb2349356432_89575843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_200056449565cb2349356432_89575843',
  ),
  'cms_content' => 
  array (
    0 => 'Block_28841558665cb2349356aa0_33135805',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_141965127865cb23493575f1_01591423',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_178790345565cb2349357d21_10845132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28841558665cb2349356aa0_33135805', 'cms_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141965127865cb23493575f1_01591423', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178790345565cb2349357d21_10845132', 'hook_cms_print_button', $this->tplIndex);
?>


  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
