<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecece840948_84567545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d84936e38cd68b59e6a32d88b382f9ce1f51a5' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/help_center/hooks/menu/top_bar_right.pre.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_66eecece840948_84567545 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <div class="top-bar__btn-wrapper dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }
}
}
