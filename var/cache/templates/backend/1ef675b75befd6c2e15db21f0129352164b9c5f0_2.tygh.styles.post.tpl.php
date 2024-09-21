<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:01
  from '/var/www/cscart/design/backend/templates/addons/advanced_import/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eececdde2253_86791689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef675b75befd6c2e15db21f0129352164b9c5f0' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/advanced_import/hooks/index/styles.post.tpl',
      1 => 1723122725,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eececdde2253_86791689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/advanced_import/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/advanced_import/read_more.less"),$_smarty_tpl);
}
}
