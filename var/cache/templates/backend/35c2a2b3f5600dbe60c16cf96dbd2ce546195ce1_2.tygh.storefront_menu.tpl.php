<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/components/menu/storefront_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecece832cd6_03038581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c2a2b3f5600dbe60c16cf96dbd2ce546195ce1' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/components/menu/storefront_menu.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecece832cd6_03038581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
$_smarty_tpl->_assignInScope('storefront_status_icon', '');
$_smarty_tpl->_assignInScope('storefront_url', '');
if (fn_allowed_for("ULTIMATE")) {
if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-lock");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-unlock-alt");
}
$_smarty_tpl->_assignInScope('storefront_url', "companies.manage");
}
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {
if ($_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-lock");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['have_closed_storefronts']) {
$_smarty_tpl->_assignInScope('storefront_status_icon', "icon-unlock-alt");
}
$_smarty_tpl->_assignInScope('storefront_url', "storefronts.manage");
}
if ($_smarty_tpl->tpl_vars['storefront_status_icon']->value && fn_check_view_permissions($_smarty_tpl->tpl_vars['storefront_url']->value,"GET")) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['storefront_url']->value), ENT_QUOTES, 'UTF-8');?>
" class="top-bar__btn mobile-hidden"><span class="top-bar__btn-inner storefront-menu__btn-inner"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['storefront_status_icon']->value)." dropdown-menu__icon"),$_smarty_tpl);?>
</span></a><?php }
}
}
