<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 02:11:16
         compiled from "/var/www/html/prestashop2/themes/zayshop/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177665105961b1ac14f14c76-37937912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42c55e7f913f5067791e35a6b81db8c28ebe0db6' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/store_infos.tpl',
      1 => 1638426897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177665105961b1ac14f14c76-37937912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b1ac14f1bba7_96532838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b1ac14f1bba7_96532838')) {function content_61b1ac14f1bba7_96532838($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
