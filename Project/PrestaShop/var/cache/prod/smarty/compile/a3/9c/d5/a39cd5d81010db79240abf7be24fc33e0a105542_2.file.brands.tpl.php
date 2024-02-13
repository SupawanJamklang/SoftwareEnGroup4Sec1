<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:31
  from '/var/www/html/themes/classic/templates/catalog/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb23430a7dd2_14389020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a39cd5d81010db79240abf7be24fc33e0a105542' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/brands.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_65cb23430a7dd2_14389020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103791346865cb2343036cb3_79685633', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_header'} */
class Block_189235672065cb23430375f4_30580599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
    <?php
}
}
/* {/block 'brand_header'} */
/* {block 'brand_miniature'} */
class Block_77918677665cb2343065b76_99785352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_103791346865cb2343036cb3_79685633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103791346865cb2343036cb3_79685633',
  ),
  'brand_header' => 
  array (
    0 => 'Block_189235672065cb23430375f4_30580599',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_77918677665cb2343065b76_99785352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189235672065cb23430375f4_30580599', 'brand_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77918677665cb2343065b76_99785352', 'brand_miniature', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
