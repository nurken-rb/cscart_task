<?php

/**
 * @param $product_data
 * @param $product_id
 * @param $lang_code
 * @param $create
 * @return void
 */
function fn_price_changes_log_update_product_post($product_data, $product_id, $lang_code, $create)
{
    $old_data = db_get_row('SELECT price, list_price FROM ?:products WHERE product_id = ?i', $product_id);

    if ($old_data['price'] != $product_data['price']) {
        fn_price_changes_log_log_change($product_id, 'Цена товара', $old_data['price'], $product_data['price'], 'прямое обновление товара');
    }

    if ($old_data['list_price'] != $product_data['list_price']) {
        fn_price_changes_log_log_change($product_id, 'Рекомендованная цена товара', $old_data['list_price'], $product_data['list_price'], 'прямое обновление товара');
    }
}

/**
 * Log price change
 *
 * @param $product_id
 * @param $price_type
 * @param $old_price
 * @param $new_price
 * @param $change_channel
 * @return void
 */
function fn_price_changes_log_log_change($product_id, $price_type, $old_price, $new_price, $change_channel)
{
    $user_id = Tygh::$app['session']['auth']['user_id'];
    db_query('INSERT INTO ?:price_changes_log (product_id, price_type, old_price, new_price, changed_by, change_channel, timestamp) VALUES (?i, ?s, ?d, ?d, ?i, ?s, ?i)', $product_id, $price_type, $old_price, $new_price, $user_id, $change_channel, time());
}