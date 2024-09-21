<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecece7d9589_58312864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322436f86fdf29158f6bc77993cee06f04052197' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecece7d9589_58312864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
?>

<?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['controller'] === 'reviews' && ($_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'manage' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts'] !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['runtime']->value['mode'] === 'update')) {?>
    <?php $_smarty_tpl->_assignInScope('select_storefront', false ,false ,2);
}
}
}
