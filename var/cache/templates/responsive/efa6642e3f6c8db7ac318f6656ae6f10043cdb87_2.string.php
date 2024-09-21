<?php
/* Smarty version 4.3.0, created on 2024-09-21 06:49:35
  from 'efa6642e3f6c8db7ac318f6656ae6f10043cdb87' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66eeceef238ea7_07451136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66eeceef238ea7_07451136 (Smarty_Internal_Template $_smarty_tpl) {
?>
                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">About your order</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist'] && $_smarty_tpl->tpl_vars['addons']->value['wishlist']['status'] == 'A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }
}
