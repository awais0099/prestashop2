<?php /* Smarty version Smarty-3.1.19, created on 2021-12-09 01:43:16
         compiled from "/var/www/html/prestashop2/themes/zayshop/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108482811261b1a5841e3495-98835463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc369661a20bfc6b3049c2eebba011add2cb616' => 
    array (
      0 => '/var/www/html/prestashop2/themes/zayshop/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1638945156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108482811261b1a5841e3495-98835463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61b1a584210393_96520882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61b1a584210393_96520882')) {function content_61b1a584210393_96520882($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/var/www/html/prestashop2/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos ** original-->

<!-- /MODULE Block contact infos -->

<div class="row">
    <div class="col-md-4 pt-5">
        
        <h2 class="h2 text-success border-bottom pb-3 border-light logo">
            
            Zay Shop
        </h2>
        <ul class="list-unstyled text-light footer-link-list">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
                <li>
                    <i class="icon-map-marker"></i>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
                <li>
                    <i class="icon-phone"></i>
                    <?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
                    <a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
                <li>
                    <i class="icon-envelope-alt"></i>
                    <?php echo smartyTranslate(array('s'=>'','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
                    <a href="#">
                        <?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>

                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
<?php }} ?>
