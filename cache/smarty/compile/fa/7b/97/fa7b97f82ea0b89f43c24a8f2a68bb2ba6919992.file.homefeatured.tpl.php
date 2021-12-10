<?php /* Smarty version Smarty-3.1.19, created on 2021-12-10 06:54:05
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71770432861b33fdd7fad77-91446280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7b97f82ea0b89f43c24a8f2a68bb2ba6919992' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/homefeatured/homefeatured.tpl',
      1 => 1639132508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71770432861b33fdd7fad77-91446280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b33fdd7ff1f9_21650510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b33fdd7ff1f9_21650510')) {function content_61b33fdd7ff1f9_21650510($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<div class="container py-5">
		<div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
                <p>
                    Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

	</div>
</section>
</div>
	
<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
