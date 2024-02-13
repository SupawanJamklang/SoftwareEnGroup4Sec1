<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:34
  from '/var/www/html/themes/classic/templates/catalog/_partials/subcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2346322333_96264184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6965b080e55b762e1c5922bf220610dd4e816096' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/subcategories.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb2346322333_96264184 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
  <?php if (((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) && $_smarty_tpl->tpl_vars['display_subcategories']->value == 1) || !(isset($_smarty_tpl->tpl_vars['display_subcategories']->value))) {?>
    <div id="subcategories" class="card card-block">
      <h2 class="subcategory-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories','d'=>'Shop.Theme.Category'),$_smarty_tpl ) );?>
</h2>

      <ul class="subcategories-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
          <li>
            <div class="subcategory-image">
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
                <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'])) {?>
                  <picture>
                    <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                    <img
                      class="img-fluid"
                      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                      loading="lazy"
                      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['width'], ENT_QUOTES, 'UTF-8');?>
"
                      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['image']['large']['height'], ENT_QUOTES, 'UTF-8');?>
"/>
                  </picture>
                <?php }?>
              </a>
            </div>

            <h5>
              <a class="subcategory-name" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subcategory']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

              </a>
            </h5>
            <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
              <div class="cat_desc"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subcategory']->value['description'], ENT_QUOTES);?>
</div>
            <?php }?>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php }
}
}
}
