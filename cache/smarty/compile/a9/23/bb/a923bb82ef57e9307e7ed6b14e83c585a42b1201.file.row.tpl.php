<?php /* Smarty version Smarty-3.1.19, created on 2021-12-10 01:26:23
         compiled from "/var/www/html/prestashop2/admin140y59nsj/themes/default/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29630476861b2f30f13b475-55373969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a923bb82ef57e9307e7ed6b14e83c585a42b1201' => 
    array (
      0 => '/var/www/html/prestashop2/admin140y59nsj/themes/default/template/helpers/kpi/row.tpl',
      1 => 1556624532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29630476861b2f30f13b475-55373969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b2f30f1421b7_55539787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b2f30f1421b7_55539787')) {function content_61b2f30f1421b7_55539787($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis(true);"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<div class="row">
		<?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
				</div>
				<div class="row">
			<?php }?>
			<div class="col-sm-6 col-lg-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
		<?php } ?>
	</div>
</div>
<?php }} ?>
