<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:48:48
  from '/var/www/cscart/design/backend/templates/common/previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecec0b37131_63495982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627eb28513e54a64a61771ba9aaeaa090840256a' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/common/previewer.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecec0b37131_63495982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
