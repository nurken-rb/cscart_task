<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:20
  from '/var/www/cscart/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecee01268d1_83160421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f317baeda0640ef952db1aa8e200183592e5a6' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/tags/hooks/pages/search_form.post.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecee01268d1_83160421 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }
}
