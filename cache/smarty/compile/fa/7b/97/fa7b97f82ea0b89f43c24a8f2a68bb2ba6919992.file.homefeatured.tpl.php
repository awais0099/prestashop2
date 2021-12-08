<?php /* Smarty version Smarty-3.1.19, created on 2021-12-06 02:13:13
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126165024361adb8097c6940-42336534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7b97f82ea0b89f43c24a8f2a68bb2ba6919992' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/homefeatured/homefeatured.tpl',
      1 => 1638426897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126165024361adb8097c6940-42336534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61adb8097cb853_25785089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61adb8097cb853_25785089')) {function content_61adb8097cb853_25785089($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
