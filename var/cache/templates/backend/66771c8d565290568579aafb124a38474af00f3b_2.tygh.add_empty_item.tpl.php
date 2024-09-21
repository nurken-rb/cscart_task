<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/buttons/add_empty_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecece741fe9_69055109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66771c8d565290568579aafb124a38474af00f3b' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecece741fe9_69055109 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="btn btn-add" name="add" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add");?>
</a>&nbsp;<?php }
}
