<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:02
  from '/var/www/cscart/design/backend/templates/views/sitemap/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eecece688b60_17084887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5814462749ffc56cdac1fa6e9e6f8a185cff5a35' => 
    array (
      0 => '/var/www/cscart/design/backend/templates/views/sitemap/manage.tpl',
      1 => 1723122726,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/object_group.tpl' => 1,
    'tygh:views/sitemap/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66eecece688b60_17084887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items','new_site_map_section','add_site_map_section','add_site_map_section','sitemap'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="sitemap_form">

<div class="items-container cm-sortable" data-ca-sortable-table="sitemap_sections" data-ca-sortable-id-name="section_id" id="manage_sitemap_list">
<?php if ($_smarty_tpl->tpl_vars['sitemap_sections']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemap_sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['section']->value['section_id'],'text'=>$_smarty_tpl->tpl_vars['section']->value['section'],'href'=>"sitemap.update?section_id=".((string)$_smarty_tpl->tpl_vars['section']->value['section_id']),'href_delete'=>"sitemap.delete_section?section_id=".((string)$_smarty_tpl->tpl_vars['section']->value['section_id']),'table'=>"sitemap_sections",'object_id_name'=>"section_id",'delete_target_id'=>"manage_sitemap_list",'status'=>$_smarty_tpl->tpl_vars['section']->value['status'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['section']->value['section_id']),'no_table'=>true,'is_view_link'=>false,'header_text'=>$_smarty_tpl->tpl_vars['section']->value['section'],'draggable'=>true), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
<!--manage_sitemap_list--></div>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/sitemap/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section'=>array()), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_site_map_section",'text'=>$_smarty_tpl->__("new_site_map_section"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("add_site_map_section"),'link_text'=>$_smarty_tpl->__("add_site_map_section"),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary nav__actions-btn-primary"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("sitemap"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true), 0, false);
}
}
