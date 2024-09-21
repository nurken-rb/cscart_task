<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:32
  from '/var/www/cscart/design/themes/responsive/templates/blocks/products/products_scroller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eeceecd8d818_34780320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a367cfa5f4be14ad4710804f060603d5ad5934' => 
    array (
      0 => '/var/www/cscart/design/themes/responsive/templates/blocks/products/products_scroller.tpl',
      1 => 1726925990,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
    'tygh:blocks/list_templates/simple_list.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
),false)) {
function content_66eeceecd8d818_34780320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == "Y" && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"));
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_hide_price', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_hide_price', true);
}?>

<?php $_smarty_tpl->_assignInScope('show_old_price', true);?>

<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_prefixVariable4;
$_smarty_tpl->_assignInScope('block', $_tmp_array);
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_desktop', $_smarty_tpl->tpl_vars['item_quantity']->value);
$_smarty_tpl->_assignInScope('item_quantity_mobile', 1);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-2);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-1);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ty-scroller-list__item ty-scroller__item">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('obj_id', "scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
            <div class="ty-scroller-list__img-block">
                <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'no_ids'=>true,'lazy_load'=>true), 0, true);
$_smarty_tpl->assign('object_img', ob_get_clean());
?>
                <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == "Y" && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == "Y") {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
?>
                <?php }?>
            </div>
            <div class="ty-scroller-list__description">
                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0, true);
?>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == "Y" && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"));
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price'] == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('_hide_price', false);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_hide_price', true);
}?>

<?php $_smarty_tpl->_assignInScope('show_old_price', true);?>

<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_prefixVariable5;
$_smarty_tpl->_assignInScope('block', $_tmp_array);
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_desktop', $_smarty_tpl->tpl_vars['item_quantity']->value);
$_smarty_tpl->_assignInScope('item_quantity_mobile', 1);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-2);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-1);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ty-scroller-list__item ty-scroller__item">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('obj_id', "scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
            <div class="ty-scroller-list__img-block">
                <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'no_ids'=>true,'lazy_load'=>true), 0, true);
$_smarty_tpl->assign('object_img', ob_get_clean());
?>
                <a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == "Y" && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == "Y") {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
?>
                <?php }?>
            </div>
            <div class="ty-scroller-list__description">
                <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0, true);
?>
            </div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0, true);
?>

<?php }
}
}
