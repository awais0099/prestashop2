<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 01:34:03
         compiled from "/var/www/html/prestashop2/modules/homefeatured/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38106364761b1a35b078607-58043005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85a7fea781f5c8d5e6bed124106d6556b2a57349' => 
    array (
      0 => '/var/www/html/prestashop2/modules/homefeatured/views/templates/hook/tab.tpl',
      1 => 1639031497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38106364761b1a35b078607-58043005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b1a35b07aaa1_12842603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b1a35b07aaa1_12842603')) {function content_61b1a35b07aaa1_12842603($_smarty_tpl) {?>





<div class="col-12 col-md-4 p-5 mt-3">

  
    <a data-toggle="tab" href="#homefeatured" class="homefeatured">
    	<img src="./themes/zayshop/img/category_img_02.jpg" class="rounded-circle img-fluid border">
  	</a>
    <h5 class="text-center mt-3 mb-3">
    	<?php echo smartyTranslate(array('s'=>'Shoes','mod'=>'homefeatured'),$_smarty_tpl);?>

    </h5>
    <p class="text-center">
    	<a class="btn btn-success">
    		<?php echo smartyTranslate(array('s'=>'Go Shop','mod'=>'homefeatured'),$_smarty_tpl);?>

    	</a>
    </p>
</div><?php }} ?>
