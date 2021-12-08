<?php /* Smarty version Smarty-3.1.19, created on 2021-12-08 08:29:52
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206399585261b0b350bffab4-42674545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df6bdecefbc2dcf00b442398aa4ca434fb6c40b2' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blocksocial/blocksocial.tpl',
      1 => 1638877068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206399585261b0b350bffab4-42674545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
    'vimeo_url' => 0,
    'instagram_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b0b350c26186_58857685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b0b350c26186_58857685')) {function content_61b0b350c26186_58857685($_smarty_tpl) {?>



<div class="row text-light mb-4">
    <div class="col-12 mb-3">
        <div class="w-100 my-3 border-top border-light"></div>
    </div>
	<div class="col-auto me-auto">
		<ul class="list-inline text-left footer-icons">
			<?php if (isset($_smarty_tpl->tpl_vars['facebook_url']->value)&&$_smarty_tpl->tpl_vars['facebook_url']->value!='') {?>
				<li class="list-inline-item border border-light rounded-circle text-center">
					<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						
						<i class="fab fa-facebook-f fa-lg fa-fw"></i>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['twitter_url']->value)&&$_smarty_tpl->tpl_vars['twitter_url']->value!='') {?>
				<li class="list-inline-item border border-light rounded-circle text-center">
					<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						
						<i class="fab fa-instagram fa-lg fa-fw"></i>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['rss_url']->value)&&$_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
				<li class="list-inline-item border border-light rounded-circle text-center">
					<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						
						<i class="fab fa-instagram fa-lg fa-fw"></i>
					</a>
				</li>
			<?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['youtube_url']->value)&&$_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-instagram fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['google_plus_url']->value)&&$_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" rel="publisher">
	        			
	        			<i class="fab fa-instagram fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['pinterest_url']->value)&&$_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-instagram fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['vimeo_url']->value)&&$_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-instagram fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['instagram_url']->value)&&$_smarty_tpl->tpl_vars['instagram_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-success text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-instagram fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
		</ul>
	    
	</div>

<?php }} ?>
