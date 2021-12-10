<?php /* Smarty version Smarty-3.1.19, created on 2021-12-10 06:54:05
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184823374461b33fdd72d436-71064508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548271642c0123635978f40ba56bec49be30fad6' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1638955611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184823374461b33fdd72d436-71064508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b33fdd731f44_27918884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b33fdd731f44_27918884')) {function content_61b33fdd731f44_27918884($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
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
            	<div class="navbar align-self-center d-flex" style="margin-bottom: 0;">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>
		</div>
	</nav>
<?php }?><?php }} ?>
