<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:35
  from '/var/www/cscart/design/themes/responsive/templates/addons/newsletters/blocks/static_templates/subscribe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eeceef1c0010_96655102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebacd39ea3335fde9a57c9da23091c2aaf91a8fc' => 
    array (
      0 => '/var/www/cscart/design/themes/responsive/templates/addons/newsletters/blocks/static_templates/subscribe.tpl',
      1 => 1726926525,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
  ),
),false)) {
function content_66eeceef1c0010_96655102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('stay_connected','email','enter_email','go','stay_connected','email','enter_email','go'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['newsletters']) {?>
<div class="ty-footer-form-block ty-footer-form-block--responsive">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="subscribe_form" class="cm-processing-personal-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="newsletter_format" value="2" />

        <h3 class="ty-footer-form-block__title"><?php echo $_smarty_tpl->__("stay_connected");?>
</h3>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"newsletters:email_subscription_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <div class="ty-footer-form-block__form-container">
            <div class="ty-footer-form-block__form ty-control-group ty-input-append cm-block-add-subscribe">
                <label class="cm-required cm-email hidden" for="subscr_email<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" name="subscribe_email" id="subscr_email<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" size="20" value="<?php echo $_smarty_tpl->__("enter_email");?>
" class="cm-hint ty-input-text" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"newsletters.add_subscriber",'alt'=>$_smarty_tpl->__("go")), 0, false);
?>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"newsletters"), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/blocks/static_templates/subscribe.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/blocks/static_templates/subscribe.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['newsletters']) {?>
<div class="ty-footer-form-block ty-footer-form-block--responsive">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="subscribe_form" class="cm-processing-personal-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="newsletter_format" value="2" />

        <h3 class="ty-footer-form-block__title"><?php echo $_smarty_tpl->__("stay_connected");?>
</h3>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"newsletters:email_subscription_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <div class="ty-footer-form-block__form-container">
            <div class="ty-footer-form-block__form ty-control-group ty-input-append cm-block-add-subscribe">
                <label class="cm-required cm-email hidden" for="subscr_email<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" name="subscribe_email" id="subscr_email<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" size="20" value="<?php echo $_smarty_tpl->__("enter_email");?>
" class="cm-hint ty-input-text" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"newsletters.add_subscriber",'alt'=>$_smarty_tpl->__("go")), 0, true);
?>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"newsletters"), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>
</div>
<?php }
}
}
}
