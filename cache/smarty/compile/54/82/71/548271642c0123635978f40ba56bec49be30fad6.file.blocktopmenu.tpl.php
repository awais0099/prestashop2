<?php /* Smarty version Smarty-3.1.19, created on 2021-12-13 08:55:34
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62597105661b750d63b86f2-06290381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548271642c0123635978f40ba56bec49be30fad6' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1639372374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62597105661b750d63b86f2-06290381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b750d63bc581_13900909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b750d63bc581_13900909')) {function content_61b750d63bc581_13900909($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu original -->
	
	<!--/ Menu -->


	<nav class="navbar navbar-expand-lg navbar-light " id="templatemo_nav_sectop">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<div class="container d-flex justify-content-between align-items-center">
			<a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Zay
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            	<span class="navbar-toggler-icon"></span>
            </button>

            <div id="templatemo_main_nav" class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between">
            	<div class="flex-fill">
            		<ul class="nav navbar-nav d-flex justify-content-between">
						<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

					</ul>
            	</div>
            	

     
<?php }?><?php }} ?>
