<?php /* Smarty version Smarty-3.1.19, created on 2021-12-12 23:40:18
         compiled from "/var/www/html/prestashop2/modules/ps_metrics//views/templates/hook/HookDashboardZoneTwo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22810843861b6ceb2086738-06774058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3d806e385e3a58d0a0cece9b234b30603f55eec' => 
    array (
      0 => '/var/www/html/prestashop2/modules/ps_metrics//views/templates/hook/HookDashboardZoneTwo.tpl',
      1 => 1638345969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22810843861b6ceb2086738-06774058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pathMetricsApp' => 0,
    'pathVendorMetrics' => 0,
    'pathMetricsAssets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b6ceb208e550_10262722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b6ceb208e550_10262722')) {function content_61b6ceb208e550_10262722($_smarty_tpl) {?>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathMetricsApp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel=preload as=script>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathVendorMetrics']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" rel=preload as=script>

<div id="app"></div>

<link rel="stylesheet" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathMetricsAssets']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<script type="module" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathMetricsApp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<script type="module" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pathVendorMetrics']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></script>
<?php }} ?>
