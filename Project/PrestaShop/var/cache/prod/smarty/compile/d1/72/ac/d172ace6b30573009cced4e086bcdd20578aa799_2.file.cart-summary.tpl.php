<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:36
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb234804af42_51553209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd172ace6b30573009cced4e086bcdd20578aa799' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
function content_65cb234804af42_51553209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127186241065cb2348048529_23856352', 'hook_checkout_summary_top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197350349865cb2348048f75_37774329', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37246816265cb2348049787_99810993', 'cart_summary_subtotals');
?>

  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81721827465cb2348049f25_74713315', 'cart_summary_totals');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54012257865cb234804a8a0_79259673', 'cart_summary_voucher');
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
class Block_127186241065cb2348048529_23856352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
    0 => 'Block_127186241065cb2348048529_23856352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
class Block_197350349865cb2348048f75_37774329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_197350349865cb2348048f75_37774329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_37246816265cb2348049787_99810993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_37246816265cb2348049787_99810993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_totals'} */
class Block_81721827465cb2348049f25_74713315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_81721827465cb2348049f25_74713315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_summary_voucher'} */
class Block_54012257865cb234804a8a0_79259673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_54012257865cb234804a8a0_79259673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
}
