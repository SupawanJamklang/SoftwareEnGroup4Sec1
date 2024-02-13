<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:14
  from '/var/www/html/admin/themes/default/template/controllers/carrier_wizard/logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb23326daf43_09396749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71125d92d1115cc57edacff87e8558915837fd95' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/carrier_wizard/logo.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb23326daf43_09396749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="carrier_logo_block" class="panel">
	<div class="panel-heading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logo','d'=>'Admin.Global'),$_smarty_tpl ) );?>

		<div class="panel-heading-action">
			<a id="carrier_logo_remove" class="btn btn-default" <?php if (!$_smarty_tpl->tpl_vars['carrier_logo']->value) {?>style="display:none"<?php }?> href="javascript:removeCarrierLogo();">
				<i class="icon-trash"></i>
			</a>
		</div>
	</div>
	<img id="carrier_logo_img" src="<?php if ($_smarty_tpl->tpl_vars['carrier_logo']->value) {
echo $_smarty_tpl->tpl_vars['carrier_logo']->value;
} else { ?>../img/admin/carrier-default.jpg<?php }?>" class="img-thumbnail" alt=""/>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	var carrier_translation_undefined = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'undefined','js'=>1,'d'=>'Admin.Shipping.Help'),$_smarty_tpl ) );?>
';

	function removeCarrierLogo()
	{
		if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to delete the logo?','js'=>1,'d'=>'Admin.Shipping.Notification'),$_smarty_tpl ) );?>
'))
		{
			$('#carrier_logo_img').attr('src', '../img/admin/carrier-default.jpg');
			$('#logo').val('null');
			$('#carrier_logo_remove').hide();
		}
	}

	function uploadCarrierLogo() {
		$.ajaxFileUpload({
			url: 'index.php?ajax=1&controller=AdminCarrierWizard&token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
&action=uploadLogo',
			secureuri: false,
			fileElementId: 'carrier_logo_input',
			dataType: 'xml',
			success: function (data, status) {
				data = data.getElementsByTagName('return')[0];
				var message = data.getAttribute("message");
				if (data.getAttribute("result") == "success")
				{
					$('#carrier_logo_img').attr('src', message);
					$('#logo').val(message);
					$('#carrier_logo_remove').show();
				}
				else
					alert(message);
			}
		});
	}
<?php echo '</script'; ?>
>
<?php }
}
