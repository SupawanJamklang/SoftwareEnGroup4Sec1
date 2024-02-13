<?php
/* Smarty version 4.3.4, created on 2024-02-13 09:07:21
  from '/var/www/html/admin/themes/default/template/controllers/shop_group/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb233910b8e7_67680596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def8561f4bb4f426098b275d38082aad63f92c57' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/shop_group/helpers/form/form.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb233910b8e7_67680596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210849986065cb233910aeb1_20554013', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_210849986065cb233910aeb1_20554013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_210849986065cb233910aeb1_20554013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	function toggleShareOrders() {

		var disabled_customer = ($('#share_customer_on').prop('checked')) ? false : true;
		var disabled_stock = ($('#share_stock_on').prop('checked')) ? false : true;

		if (disabled_customer || disabled_stock)
		{
			$("input[name=share_order]").each(function(i) {
	            $(this).attr('disabled', true);
	        });

			$('#share_order_off').attr('checked', true);
		}
		else
		{
			$('input[name=share_order]').attr('disabled', false);
		}
	}

	$(document).ready(function() {
		if (!$("input[name=share_order]").prop('disabled'))
		{
			toggleShareOrders();
			$('input[name=share_customer]').click(function()
			{
				toggleShareOrders();
			});
			$('input[name=share_stock]').click(function()
			{
				toggleShareOrders();
			});
		}

		$('#useImportData').click(function() {
			$('#importList').slideToggle('slow');
		});
	});

<?php
}
}
/* {/block 'script'} */
}
