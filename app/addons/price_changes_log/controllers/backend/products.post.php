<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update') {
        $product_id = $_REQUEST['product_id'];
        $price_changes = db_get_array('SELECT * FROM ?:price_changes_log WHERE product_id = ?i ORDER BY timestamp DESC', $product_id);
        Tygh::$app['view']->assign('price_changes', $price_changes);
    }
}