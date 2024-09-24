<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

if ($mode == 'manage') {
    $price_changes = db_get_array('SELECT * FROM ?:price_changes_log ORDER BY timestamp DESC');
    Tygh::$app['view']->assign('price_changes', $price_changes);
}