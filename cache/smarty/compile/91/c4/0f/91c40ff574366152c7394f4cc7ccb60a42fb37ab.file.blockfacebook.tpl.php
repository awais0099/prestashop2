<?php /* Smarty version Smarty-3.1.19, created on 2021-12-13 08:55:29
         compiled from "/var/www/html/prestashop2/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71739739861b750d1c6a977-77453874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c40ff574366152c7394f4cc7ccb60a42fb37ab' => 
    array (
      0 => '/var/www/html/prestashop2/modules/blockfacebook/blockfacebook.tpl',
      1 => 1638964329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71739739861b750d1c6a977-77453874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b750d1c6dec8_29090652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b750d1c6dec8_29090652')) {function content_61b750d1c6dec8_29090652($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
