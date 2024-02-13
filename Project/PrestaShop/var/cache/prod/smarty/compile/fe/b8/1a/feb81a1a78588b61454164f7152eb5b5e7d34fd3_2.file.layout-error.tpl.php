<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:39
  from '/var/www/html/themes/classic/templates/layouts/layout-error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb234bcdbd34_20689553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb81a1a78588b61454164f7152eb5b5e7d34fd3' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
  ),
),false)) {
function content_65cb234bcdbd34_20689553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142660838365cb234bcd88d9_96309359', 'head_seo');
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107806903065cb234bcd9cb6_68591288', 'head_icons');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121065468565cb234bcdaf48_99938528', 'stylesheets');
?>


  </head>

  <body>

    <div id="layout-error">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85472775565cb234bcdb947_81294275', 'content');
?>

    </div>

  </body>

</html>
<?php }
/* {block 'head_seo_title'} */
class Block_160031414765cb234bcd8ce6_02452214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_181500673665cb234bcd91f9_59655352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_35540676565cb234bcd9627_11246411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_142660838365cb234bcd88d9_96309359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_142660838365cb234bcd88d9_96309359',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_160031414765cb234bcd8ce6_02452214',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_181500673665cb234bcd91f9_59655352',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_35540676565cb234bcd9627_11246411',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160031414765cb234bcd8ce6_02452214', 'head_seo_title', $this->tplIndex);
?>
</title>
      <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181500673665cb234bcd91f9_59655352', 'head_seo_description', $this->tplIndex);
?>
">
      <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35540676565cb234bcd9627_11246411', 'head_seo_keywords', $this->tplIndex);
?>
">
    <?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_icons'} */
class Block_107806903065cb234bcd9cb6_68591288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_107806903065cb234bcd9cb6_68591288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
   <?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_121065468565cb234bcdaf48_99938528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_121065468565cb234bcdaf48_99938528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>
    <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'content'} */
class Block_85472775565cb234bcdb947_81294275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_85472775565cb234bcdb947_81294275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Hello world! This is HTML5 Boilerplate.</p>
      <?php
}
}
/* {/block 'content'} */
}
