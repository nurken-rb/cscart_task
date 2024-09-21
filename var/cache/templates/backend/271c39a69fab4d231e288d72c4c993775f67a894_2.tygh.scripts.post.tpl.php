<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/addons/hybrid_auth/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eececea85938_51204785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '271c39a69fab4d231e288d72c4c993775f67a894' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/hybrid_auth/hooks/index/scripts.post.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eececea85938_51204785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/hybrid_auth/func.js"),$_smarty_tpl);
}
}
