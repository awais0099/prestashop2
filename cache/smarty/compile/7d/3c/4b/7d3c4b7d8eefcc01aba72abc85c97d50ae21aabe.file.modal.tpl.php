<?php /* Smarty version Smarty-3.1.19, created on 2021-12-06 02:13:10
         compiled from "/var/www/html/prestashop2/admin140y59nsj/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88669515661adb80661fce1-41295060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3c4b7d8eefcc01aba72abc85c97d50ae21aabe' => 
    array (
      0 => '/var/www/html/prestashop2/admin140y59nsj/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1556624532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88669515661adb80661fce1-41295060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61adb8066216b2_99543548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61adb8066216b2_99543548')) {function content_61adb8066216b2_99543548($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>