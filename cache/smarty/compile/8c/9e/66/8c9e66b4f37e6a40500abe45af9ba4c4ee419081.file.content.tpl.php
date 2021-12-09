<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 01:43:08
         compiled from "/var/www/html/prestashop2/admin140y59nsj/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163180585461b1a57cdf27f9-21704468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9e66b4f37e6a40500abe45af9ba4c4ee419081' => 
    array (
      0 => '/var/www/html/prestashop2/admin140y59nsj/themes/default/template/content.tpl',
      1 => 1556624532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163180585461b1a57cdf27f9-21704468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b1a57cdf4d55_47307393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b1a57cdf4d55_47307393')) {function content_61b1a57cdf4d55_47307393($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
