<?php /* Smarty version Smarty-3.1.19, created on 2021-12-10 06:54:05
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17421875061b33fdd9835c7-85319260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df6bdecefbc2dcf00b442398aa4ca434fb6c40b2' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blocksocial/blocksocial.tpl',
      1 => 1639045334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17421875061b33fdd9835c7-85319260',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b33fdd998964_06039209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b33fdd998964_06039209')) {function content_61b33fdd998964_06039209($_smarty_tpl) {?>



<div class="row text-light" style="">
	    <div class="col-12 mb-3">
	        <div class="w-100 my-3 border-top border-light"></div>
	    </div>
	<div class="col-auto me-auto" style="">
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
						
						<i class="fab fa-twitter fa-lg fa-fw"></i>
					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['rss_url']->value)&&$_smarty_tpl->tpl_vars['rss_url']->value!='') {?>
				<li class="list-inline-item border border-light rounded-circle text-center">
					<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						
						<i class="fas fa-rss fa-lg fa-fw"></i>
					</a>
				</li>
			<?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['youtube_url']->value)&&$_smarty_tpl->tpl_vars['youtube_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-youtube fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['google_plus_url']->value)&&$_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" rel="publisher">
	        			
	        			<i class="fab fa-google-plus fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['pinterest_url']->value)&&$_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-pinterest-p fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
	        <?php if (isset($_smarty_tpl->tpl_vars['vimeo_url']->value)&&$_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?>
	        	<li class="list-inline-item border border-light rounded-circle text-center">
	        		<a class="text-decoration-none" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	        			
	        			<i class="fab fa-vimeo-v fa-lg fa-fw"></i>
	        		</a>
	        	</li>
	        <?php }?>
		</ul>
	    
	</div>
	<?php }} ?>
