<?php /* Smarty version Smarty-3.1.19, created on 2021-12-08 01:45:25
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62114461261adb8099424e9-79175393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684eaa44a55e5cdd3980180ea43fa4c0eb83e11e' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blockcontact/nav.tpl',
      1 => 1638945921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62114461261adb8099424e9-79175393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61adb80994b867_60564221',
  'variables' => 
  array (
    'telnumber' => 0,
    'is_logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61adb80994b867_60564221')) {function content_61adb80994b867_60564221($_smarty_tpl) {?>



<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<div style="color: white;" class="<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> 	is_logged<?php }?>">
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
	<a class="text-light" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontact'),$_smarty_tpl);?>

	</a>
	<a class="text-light" href="https://fb.com/templatemo" target="_blank">
		<i class="fab fa-facebook-f fa-sm fa-fw me-2"></i>
	</a>

	
    <a class="text-light" href="https://www.instagram.com/" target="_blank">
    	<i class="fab fa-instagram fa-sm fa-fw me-2"></i>
    </a>
    <a class="text-light" href="https://twitter.com/" target="_blank">
    	<i class="fab fa-twitter fa-sm fa-fw me-2"></i>
    </a>
    <a class="text-light" href="https://www.linkedin.com/" target="_blank">
    	<i class="fab fa-linkedin fa-sm fa-fw"></i>
    </a>
</div>

<?php }} ?>
