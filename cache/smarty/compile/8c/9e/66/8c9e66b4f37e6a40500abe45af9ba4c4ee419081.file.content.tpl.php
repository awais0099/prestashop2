<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 06:26:33
         compiled from "/var/www/html/prestashop2/admin140y59nsj/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23689312961b1e7e93d97c3-21899868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '23689312961b1e7e93d97c3-21899868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b1e7e93db9a2_36090369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b1e7e93db9a2_36090369')) {function content_61b1e7e93db9a2_36090369($_smarty_tpl) {?>
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
