<?php /* Smarty version Smarty-3.1.19, created on 2021-12-08 08:29:52
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blockmyaccountfooter/blockmyaccountfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105220736661b0b350bb75d9-92625770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c015fd250ada403f227ed8d9365c3ae11f353fe' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1638881905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105220736661b0b350bb75d9-92625770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b0b350bed415_91521633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b0b350bed415_91521633')) {function content_61b0b350bed415_91521633($_smarty_tpl) {?>

<!-- Block myaccount module original -->

<!-- /Block myaccount module -->

<div class="col-md-4 pt-5">
	<h2 class="h2 text-light border-bottom pb-3 border-light">
		
		Further Info
	</h2>
	<ul class="list-unstyled text-light footer-link-list">
		<li>
			<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow">
				<?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>

			</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
			<li>
				<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow">
					<?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>

				</a>
			</li>
		<?php }?>
		<li>
			<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow">
				<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>

			</a>
		</li>
		<li>
			<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manage my personal information','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
			<li>
				<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow">
				<?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>

				</a>
			</li>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        	<li>
        		<a class="text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
" rel="nofollow">
        			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>

        		</a>
        	</li>
        <?php }?>
	</ul>
</div>
</div>
<?php }} ?>
