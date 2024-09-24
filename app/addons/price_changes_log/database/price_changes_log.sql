CREATE TABLE IF NOT EXISTS cscart_price_changes_log (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    price_type ENUM('product_price', 'recommended_price', 'bulk_discounts') NOT NULL,
    old_price DECIMAL(12, 2) NOT NULL,
    new_price DECIMAL(12, 2) NOT NULL,
    changed_by INT NOT NULL,
    change_channel ENUM('direct_update', 'import', 'bulk_update', 'list_update', 'global_update') NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (product_id),
    INDEX (changed_by)
)