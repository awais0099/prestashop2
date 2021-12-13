<?php /* Smarty version Smarty-3.1.19, created on 2021-12-13 08:55:34
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89492189661b750d6e9b7d4-83855556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684eaa44a55e5cdd3980180ea43fa4c0eb83e11e' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blockcontact/nav.tpl',
      1 => 1639121135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89492189661b750d6e9b7d4-83855556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'is_logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b750d6ea4968_26914715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b750d6ea4968_26914715')) {function content_61b750d6ea4968_26914715($_smarty_tpl) {?>



<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<div class="flex-fill" style="color: white;" class="<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> 	is_logged<?php }?>">
		<i class="fa fa-envelope mx-2"></i>
		<?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontact'),$_smarty_tpl);?>
 
		<a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com"><?php echo 'info@company.com';?>
</a>

		<i class="fa fa-phone mx-2"></i>
        <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340"><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</a>
	</div>

	
<?php }?>




<div <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a class="text-white px-4 text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>

	</a>
	
</div>

<?php }} ?>
