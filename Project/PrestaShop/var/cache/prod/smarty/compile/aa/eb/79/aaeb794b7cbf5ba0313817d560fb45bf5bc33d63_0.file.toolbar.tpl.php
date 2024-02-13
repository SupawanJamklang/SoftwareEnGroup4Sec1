<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:29
  from '/var/www/html/admin/themes/default/template/toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb2341434619_82433060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaeb794b7cbf5ba0313817d560fb45bf5bc33d63' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/toolbar.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb2341434619_82433060 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_toolbar" class="toolbar-placeholder">
	<div class="toolbarBox <?php if ($_smarty_tpl->tpl_vars['toolbar_scroll']->value) {?>toolbarHead<?php }?>">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54783882565cb23414288b6_67958819', 'toolbarBox');
?>

		<div class="pageTitle">
			<h3><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90113880865cb2341431de6_62362852', 'pageTitle');
?>

			</h3>
		</div>
	</div>
</div>
<?php }
/* {block 'formSubmit'} */
class Block_106386014265cb234142fd64_13233918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							btn_save.click(function() {
								// Vars
								var btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');

								// Avoid double click
								if (submited)
									return false;
								submited = true;

								//add hidden input to emulate submit button click when posting the form -> field name posted
								btn_submit.before('<input type="hidden" name="'+btn_submit.attr("name")+'" value="1" />');

								$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit();
								return false;
							});

							if (btn_save_and_stay)
							{
								btn_save_and_stay.click(function() {
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
/* {block 'toolbarBox'} */
class Block_54783882565cb23414288b6_67958819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbarBox' => 
  array (
    0 => 'Block_54783882565cb23414288b6_67958819',
  ),
  'formSubmit' => 
  array (
    0 => 'Block_106386014265cb234142fd64_13233918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
					<li>
						<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="toolbar_btn<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['target'])) && $_smarty_tpl->tpl_vars['btn']->value['target']) {?> _blank<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href']))) {?> href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
							<span class="process-icon-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}
if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>"></span>
							<div<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['force_desc'])) && $_smarty_tpl->tpl_vars['btn']->value['force_desc'] == true) {?> class="locked"<?php }?>><?php echo $_smarty_tpl->tpl_vars['btn']->value['desc'];?>
</div>
						</a>
						<?php if ($_smarty_tpl->tpl_vars['k']->value == 'modules-list') {?>
							<div id="modules_list_container" style="display:none">
							<div style="float:right;margin:5px">
								<a href="#" onclick="$('#modules_list_container').slideUp();return false;"><img alt="X" src="../img/admin/close.png" /></a>
							</div>
							<div id="modules_list_loader"><img src="../img/loader.gif" alt="" border="0" /></div>
							<div id="modules_list_container_tab_modal" style="display:none;"></div>
							</div>
						<?php }?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>

			<?php echo '<script'; ?>
 type="text/javascript">
			//<![CDATA[
				var submited = false
				var modules_list_loaded = false;
				$(function() {
					//get reference on save link
					btn_save = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_toolbar span[class~="process-icon-save"]').parent();

					//get reference on form submit button
					btn_submit = $('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn');

					if (btn_save.length > 0 && btn_submit.length > 0)
					{
						//get reference on save and stay link
						btn_save_and_stay = $('span[class~="process-icon-save-and-stay"]').parent();

						//get reference on current save link label
						lbl_save = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save div');

						//override save link label with submit button value
						if (btn_submit.val().length > 0)
							lbl_save.html(btn_submit.attr("value"));

						if (btn_save_and_stay.length > 0)
						{
							//get reference on current save link label
							lbl_save_and_stay = $('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save-and-stay div');

							//override save and stay link label with submit button value
							if (btn_submit.val().length > 0 && lbl_save_and_stay && !lbl_save_and_stay.hasClass('locked'))
								lbl_save_and_stay.html(btn_submit.val() + " <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and stay'),$_smarty_tpl ) );?>
 ");
						}

						//hide standard submit button
						btn_submit.hide();
						//bind enter key press to validate form
						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').keypress(function (e) {
							if (e.which == 13 && e.target.localName != 'textarea' && !e.target.hasClass('tagify'))
								$('#desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-save').click();
						});
						//submit the form
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106386014265cb234142fd64_13233918', 'formSubmit', $this->tplIndex);
?>

					}
					<?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_open']->value)) && $_smarty_tpl->tpl_vars['tab_modules_open']->value) {?>
						$('#modules_list_container').slideDown();
						openModulesList();
					<?php }?>
				});
				<?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)) && $_smarty_tpl->tpl_vars['tab_modules_list']->value) {?>
					$('.process-icon-modules-list').parent('a').unbind().bind('click', function (){
						$('#modules_list_container').slideDown();
						openModulesList();
					});
				<?php }?>
			//]]>
			<?php echo '</script'; ?>
>
		<?php
}
}
/* {/block 'toolbarBox'} */
/* {block 'pageTitle'} */
class Block_90113880865cb2341431de6_62362852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_90113880865cb2341431de6_62362852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<span id="current_obj" style="font-weight: normal;">
					<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['title']->value, 'item', false, 'key', 'title', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_title']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_title']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_title']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_title']->value['total'];
?>
														<span class="breadcrumb item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 "><?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['item']->value);?>

								<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_title']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_title']->value['last'] : null)) {?>
									<img alt="&gt;" style="margin-right:5px" src="../img/admin/separator_breadcrumb.png" />
								<?php }?>
							</span>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						&nbsp;
					<?php }?>
				</span>
				<?php
}
}
/* {/block 'pageTitle'} */
}
