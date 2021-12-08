<?php /*%%SmartyHeaderCode:6730812661a86a3fe01714-02119801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '855d866c58c57f1b80afac6f82e2d4520c4187d6' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blocksearch/blocksearch-top.tpl',
      1 => 1638426897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6730812661a86a3fe01714-02119801',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61a8b6ed9a86c5_02921963',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61a8b6ed9a86c5_02921963')) {function content_61a8b6ed9a86c5_02921963($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/prestashop2/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
