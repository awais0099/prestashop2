<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 01:37:41
         compiled from "/var/www/html/prestashop2/admin140y59nsj/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82967934961b1a43572bfa7-24690444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '885bd16f028e018b2395f8606f5ece8c2384696d' => 
    array (
      0 => '/var/www/html/prestashop2/admin140y59nsj/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1556624532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82967934961b1a43572bfa7-24690444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b1a43572ea88_50924663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b1a43572ea88_50924663')) {function content_61b1a43572ea88_50924663($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
