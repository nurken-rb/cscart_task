<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:48:48
  from '/var/www/cscart/design/backend/templates/addons/onboarding_guide/steps/setup_shipping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecec0baed82_29780612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae80ce705fa3fe30db0c0ce616d0a1fbe63837c2' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/onboarding_guide/steps/setup_shipping.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecec0baed82_29780612 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.configure_shippings_description','onboarding_guide.configure_shippings_label','onboarding_guide.configure_shippings'));
?>
<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings_description");?>
</span>
</div>

<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings_label");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2 og-step-complete">
    <a href="<?php echo htmlspecialchars((string) fn_url("shippings.manage"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.configure_shippings");?>
</a>
</div>
<?php }
}
