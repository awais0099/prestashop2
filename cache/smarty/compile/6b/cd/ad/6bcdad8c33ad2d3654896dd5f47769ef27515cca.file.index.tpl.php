<?php /* Smarty version Smarty-3.1.19, created on 2021-12-10 06:54:05
         compiled from "/var/www/html/prestashop2/themes/zayshop/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158605290961b33fdd9f6956-74235848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bcdad8c33ad2d3654896dd5f47769ef27515cca' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/index.tpl',
      1 => 1639137228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158605290961b33fdd9f6956-74235848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b33fdd9ff3f8_66246596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b33fdd9ff3f8_66246596')) {function content_61b33fdd9ff3f8_66246596($_smarty_tpl) {?>
</div> <!-- end homeslider-->
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
    	<section>
    		<div class="row text-center pt-3">
	            <div class="col-lg-6 m-auto">
	                <h1 class="h1">Categories of The Month</h1>
	                <p>
	                	<?php echo smartyTranslate(array('s'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
	                    deserunt mollit anim id est laborum",'mod'=>''),$_smarty_tpl);?>

	                </p>
	            </div>
        	</div>
        	<div class="row">
        		
		        <ul id="home-page-tabs" class="nav nav-tabs clearfix" style="border: 1px solid red;">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

				</ul>	
				
        	</div>
    	</section>
    	
		
	<?php }?>

	<div class="tab-content" style="border: 4px solid black;overflow: hidden;">
		<section>
			
		</section>
		<section class="bg-light">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

	
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	
<?php }?>
<?php }} ?>
