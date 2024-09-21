<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/buttons/remove_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecece7490a5_38680159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a77edf2023f06080fb6ecd33739092afa5b0df' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/buttons/remove_item.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecece7490a5_38680159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
    <button type="button"
            class="btn cm-opacity <?php if ($_smarty_tpl->tpl_vars['only_delete']->value == "Y") {?> hidden<?php }?>"
            name="remove"
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("remove");?>
"
    >
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

    </button>
<?php }?>

<button type="button"
        name="remove_hidden"
        id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="btn <?php if (!$_smarty_tpl->tpl_vars['simple']->value && $_smarty_tpl->tpl_vars['only_delete']->value != "Y") {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');
}?>"
        title="<?php echo $_smarty_tpl->__("remove");?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

</button>
<?php }
}
