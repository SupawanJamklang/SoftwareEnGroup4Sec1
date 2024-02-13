<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:23
  from '/var/www/html/admin/themes/default/template/footer_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb233b9a5ab5_61462643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb45f8b1a052924c1f9bdf2324dcc0d6cc1db74' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/footer_toolbar.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb233b9a5ab5_61462643 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
<div class="panel-footer" id="toolbar-footer">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['k']->value != 'modules-list' && $_smarty_tpl->tpl_vars['k']->value != 'save' && $_smarty_tpl->tpl_vars['k']->value != 'save-and-stay') {?>
      <a
        id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>"
        class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['target'])) && $_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?> desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>"
        href="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['href'],'html','UTF-8' ));
} else { ?>#<?php }?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>
      >
        <i class="process-icon-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}
if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>"></i>
        <span <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['force_desc'])) && $_smarty_tpl->tpl_vars['btn']->value['force_desc'] == true) {?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
</span>
      </a>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <div class="pull-right hidden-xs desktop-buttons">
    <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']))) {?>
      <a
        id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass'];
} else { ?>save-and-stay<?php }?>"
        class="btn btn-info<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['target'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['target']) {?> _blank<?php }?> desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass'];
} else { ?>save-and-stay<?php }?>"
        href="<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['href']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['href'],'html','UTF-8' ));
} else { ?>#<?php }?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['js'];?>
"<?php }?>
      >
        <span <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['force_desc'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['force_desc'] == true) {?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['desc'];?>
</span>
      </a>
    <?php }?>
    <a
      id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass'];
} else { ?>save<?php }?>"
      class="btn btn-info<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['target'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['target']) {?> _blank<?php }?> desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass'];
} else { ?>save<?php }?>"
      href="<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['href']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['href'],'html','UTF-8' ));
} else { ?>#<?php }?>"
      <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['js'];?>
"<?php }?>
    >
      <span <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['force_desc'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['force_desc'] == true) {?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['desc'];?>
</span>
    </a>
  </div>

  <div class="btn-group dropup pull-right visible-xs mobile-buttons">
    <a
      id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass'];
} else { ?>save<?php }?>"
      class="btn btn-info<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['target'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['target']) {?> _blank<?php }?> desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['imgclass'];
} else { ?>save<?php }?>"
      href="<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['href']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['href'],'html','UTF-8' ));
} else { ?>#<?php }?>"
      <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['js'];?>
"<?php }?>
    >
      <span <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['force_desc'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['force_desc'] == true) {?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save']['desc'];?>
</span>
    </a>
    <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']))) {?>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="caret"></span>
      <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle dropdown','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</span>
    </button>
    <ul class="dropdown-menu">
      <li>
        <a
          id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass'];
} else { ?>save-and-stay<?php }?>"
          class="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['imgclass'];
} else { ?>save-and-stay<?php }?>"
          <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['target'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['target']) {?>target="_blank"<?php }?>
          href="<?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['href']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['href'],'html','UTF-8' ));
} else { ?>#<?php }?>"
        >
          <span <?php if ((isset($_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['force_desc'])) && $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['force_desc'] == true) {?> class="locked" <?php }?>>
              <?php echo $_smarty_tpl->tpl_vars['toolbar_btn']->value['save-and-stay']['desc'];?>

          </span>
        </a>
      </li>
    </ul>
    <?php }?>
  </div>

	<?php echo '<script'; ?>
 type="text/javascript">
	//<![CDATA[
		var submited = false

		//get reference on save link
		btn_save = $('.desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save');

		//get reference on form submit button
		btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');

		if (btn_save.length > 0 && btn_submit.length > 0) {
			// Get reference on save and stay link
			btn_save_and_stay = $('.desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay');

			//get reference on current save link label
			lbl_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save');

			//override save link label with submit button value
			if (btn_submit.html().length > 0)
				lbl_save.find('span').html(btn_submit.html());

			if (btn_save_and_stay.length > 0) {
				//get reference on current save link label
				lbl_save_and_stay = $('.desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay');

				//override save and stay link label with submit button value
				if (btn_submit.html().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked'))
					lbl_save_and_stay.find('span').html(btn_submit.html() + " <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and stay','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
 ");
			}

			//hide standard submit button
			btn_submit.hide();
			//bind enter key press to validate form
			$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').find('input').keypress(function (e) {
				if (e.which == 13 && e.target.localName != 'textarea' && !$(e.target).parent().hasClass('tagify-container'))
					$('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
			});
			//submit the form
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6547338065cb233b9a4120_34812192', 'formSubmit');
?>

		}
	//]]>
	<?php echo '</script'; ?>
>
</div>
<?php }
}
/* {block 'formSubmit'} */
class Block_6547338065cb233b9a4120_34812192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'formSubmit' => 
  array (
    0 => 'Block_6547338065cb233b9a4120_34812192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				btn_save.on('click', function() {
					// Avoid double click
					if (submited)
						return false;
					submited = true;

					if ($(this).attr('href').replace('#', '').replace(/\s/g, '') != '')
						return true;

					//add hidden input to emulate submit button click when posting the form -> field name posted
					btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');

					$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
					return false;
				});

				if (btn_save_and_stay) {
					btn_save_and_stay.on('click', function() {
						if ($(this).attr('href').replace('#', '').replace(/\s/g, '') != '')
							return true;

						//add hidden input to emulate submit button click when posting the form -> field name posted
						btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'AndStay" value="1" />');

						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
						return false;
					});
				}
			<?php
}
}
/* {/block 'formSubmit'} */
}
