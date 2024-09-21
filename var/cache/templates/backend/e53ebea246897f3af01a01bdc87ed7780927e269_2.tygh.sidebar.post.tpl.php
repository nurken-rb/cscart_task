<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:20
  from '/var/www/cscart/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecee014d0a0_02258829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53ebea246897f3af01a01bdc87ed7780927e269' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/addons/blog/hooks/pages/sidebar.post.tpl',
      1 => 1723122725,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eecee014d0a0_02258829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),));
if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
