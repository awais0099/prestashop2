<?php /* Smarty version Smarty-3.1.19, created on 2021-12-10 06:54:05
         compiled from "/var/www/html/prestashop2/themes/zayshop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133611912361b33fddab35c5-99952071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d31766f4018ea57ab4f5bcff02cc19ce91a3b11' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/footer.tpl',
      1 => 1638964593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133611912361b33fddab35c5-99952071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b33fddabb8d8_17383228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b33fddabb8d8_17383228')) {function content_61b33fddabb8d8_17383228($_smarty_tpl) {?>

<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
				

			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer original -->
					
				<!-- #footer -->

				<footer class="bg-dark" id="tempaltemo_footer">
					<div class="container">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					</div>
					<div class='w-100 bg-black py-3'>
						<div class="container">
							<div class="row pt-2">
								<div class="col-12">
									<p class="text-left text-light">
	                            		Copyright &copy; 2021 Company Name
	                            		| Designed by <a rel="sponsored" href="https://	templatemo.com" target="_blank">TemplateMo</a>
                        			</p>
								</div>
							</div>
						</div>
					</div> <!--what is this 1-->
				</footer><!--what is footer-->

			<?php }?>
		
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html>


<?php }} ?>
