<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:32
  from '/var/www/cscart/design/themes/responsive/templates/blocks/list_templates/simple_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eeceecec0af4_92488100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7bee1500625b494403f6bdcedba0fd766193846' => 
    array (
      0 => '/var/www/cscart/design/themes/responsive/templates/blocks/list_templates/simple_list.tpl',
      1 => 1726925990,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
  ),
),false)) {
function content_66eeceecec0af4_92488100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/cscart/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
    <div class="ty-simple-list clearfix">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

            <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?><strong><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>

            <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


            <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

            <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>


            <?php if (!$_smarty_tpl->tpl_vars['hide_price']->value) {?>
                <div class="ty-simple-list__price clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['show_old_price']->value || $_smarty_tpl->tpl_vars['show_clean_price']->value || $_smarty_tpl->tpl_vars['show_list_discount']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);?>
&nbsp;<?php }?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                    <?php if ($_smarty_tpl->tpl_vars['show_old_price']->value || $_smarty_tpl->tpl_vars['show_clean_price']->value || $_smarty_tpl->tpl_vars['show_list_discount']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                        
                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                    <?php }?>
                </div>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
}?>
            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


            <?php if ($_smarty_tpl->tpl_vars['show_features']->value || $_smarty_tpl->tpl_vars['show_descr']->value) {?>
                <div class="ty-simple-list__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div>
                <div class="ty-simple-list__descr"><?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

            
            <?php if (!$_smarty_tpl->tpl_vars['hide_qty']->value) {?>
                <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>

            <?php }?>

            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
            
            <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>


            <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


            <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
            <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                <div class="ty-simple-list__buttons">
                    <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                    <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/simple_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/simple_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value) {?>
    <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <div class="ty-simple-list clearfix">
        <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>

            <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?><strong><?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
.&nbsp;</strong><?php }?>

            <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


            <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
            <?php $_smarty_tpl->_assignInScope('sku', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['sku']->value);?>

            <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>


            <?php if (!$_smarty_tpl->tpl_vars['hide_price']->value) {?>
                <div class="ty-simple-list__price clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['show_old_price']->value || $_smarty_tpl->tpl_vars['show_clean_price']->value || $_smarty_tpl->tpl_vars['show_list_discount']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);?>
&nbsp;<?php }?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                    <?php if ($_smarty_tpl->tpl_vars['show_old_price']->value || $_smarty_tpl->tpl_vars['show_clean_price']->value || $_smarty_tpl->tpl_vars['show_list_discount']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>

                        
                        <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                    <?php }?>
                </div>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);
}?>
            <?php $_smarty_tpl->_assignInScope('product_amount', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_amount']->value);?>


            <?php if ($_smarty_tpl->tpl_vars['show_features']->value || $_smarty_tpl->tpl_vars['show_descr']->value) {?>
                <div class="ty-simple-list__feature"><?php $_smarty_tpl->_assignInScope('product_features', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_features']->value);?>
</div>
                <div class="ty-simple-list__descr"><?php $_smarty_tpl->_assignInScope('prod_descr', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['prod_descr']->value);?>
</div>
            <?php }?>

            <?php $_smarty_tpl->_assignInScope('product_options', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value);?>

            
            <?php if (!$_smarty_tpl->tpl_vars['hide_qty']->value) {?>
                <?php $_smarty_tpl->_assignInScope('qty', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['qty']->value);?>

            <?php }?>

            <?php $_smarty_tpl->_assignInScope('advanced_options', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['advanced_options']->value);?>

            <?php if ($_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
            
            <?php $_smarty_tpl->_assignInScope('min_qty', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['min_qty']->value);?>


            <?php $_smarty_tpl->_assignInScope('product_edp', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_edp']->value);?>


            <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
}?>
            <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                <div class="ty-simple-list__buttons">
                    <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>


                    <?php $_smarty_tpl->_assignInScope('list_buttons', "list_buttons_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_buttons']->value);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['capture_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php }
}
}
}
