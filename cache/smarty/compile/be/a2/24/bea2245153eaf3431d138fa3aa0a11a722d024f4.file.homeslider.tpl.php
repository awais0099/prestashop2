<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 08:51:36
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/homeslider/homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34080664461b209e8e02bd8-09275208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bea2245153eaf3431d138fa3aa0a11a722d024f4' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/homeslider/homeslider.tpl',
      1 => 1638943265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34080664461b209e8e02bd8-09275208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b209e8e18fe2_99649551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b209e8e18fe2_99649551')) {function content_61b209e8e18fe2_99649551($_smarty_tpl) {?>




<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
<!-- Module HomeSlider -->
    <?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)) {?>
		<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
			<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0])&&isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1])) {?><?php $_smarty_tpl->_capture_stack[0][] = array('height', null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?>
			<ol class="carousel-indicators">
	            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
	            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
	            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        	</ol>
			<div class="carousel-inner" <?php if (isset(Smarty::$_smarty_vars['capture']['height'])&&Smarty::$_smarty_vars['capture']['height']) {?> style="max-height:<?php echo Smarty::$_smarty_vars['capture']['height'];?>
px;"<?php }?>>
				<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
						<div class="carousel-item active">
			                <div class="container">
			                    <div class="row p-5">
			                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
			                            <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."homeslider/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['size'])&&$_smarty_tpl->tpl_vars['slide']->value['size']) {?> <?php echo $_smarty_tpl->tpl_vars['slide']->value['size'];?>
<?php } else { ?> width="100%" height="100%"<?php }?> alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
			                        </div>
			                        <div class="col-lg-6 mb-0 d-flex align-items-center">
			                            <div class="text-align-left align-self-center">
			                                <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
			                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
			                                <p>
			                                    <?php if (isset($_smarty_tpl->tpl_vars['slide']->value['description'])&&trim($_smarty_tpl->tpl_vars['slide']->value['description'])!='') {?>
														<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

												<?php }?>
			                                </p>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
					<?php }?>
				<?php } ?>
			</div>
			<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            	<i class="fas fa-chevron-left"></i>
        	</a>
        	<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            	<i class="fas fa-chevron-right"></i>
        	</a>
		</div>
	</div>
	<?php }?>
<!-- /Module HomeSlider -->
<?php }?>


<?php }} ?>
