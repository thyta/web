`-- USE web;

INSERT INTO
    user_types (type_name)
VALUES
    ('admin'),
    ('user');

-- Thêm dữ liệu vào bảng order_statuses
INSERT INTO
    order_statuses (status_name)
VALUES
    ('Chờ'),
    ('Xác nhận'),
    ('Huỷ');

-- Thêm dữ liệu vào bảng payment
INSERT INTO
    payment_methods (payment_name)
VALUES
    ('COD'),
    ('MOMO'),
    ('Bank');

INSERT INTO
    `categories` (`category_id`, `category_name`)
VALUES
    (1, 'Chăm sóc da'),
    (2, 'Chăm sóc tóc'),
    (3, 'Combo sản phẩm'),
    (4, 'Dưỡng môi'),
    (5, 'Tắm và dưỡng thể');

INSERT INTO
    `coupons` (
        `coupon_id`,
        `coupon_code`,
        `discount_percentage`,
        `start_date`,
        `end_date`,
        `created_at`,
        `updated_at`
    )
VALUES
    (
        1,
        'COUPON10',
        '10.00',
        '2023-01-01',
        '2023-12-31',
        '2023-12-28 16:31:07',
        '2023-12-28 16:31:07'
    ),
    (
        2,
        'SUMMER20',
        '20.00',
        '2023-06-01',
        '2023-08-31',
        '2023-12-28 16:31:08',
        '2023-12-28 16:31:08'
    ),
    (
        3,
        'SPRING15',
        '15.50',
        '2023-03-15',
        '2023-04-15',
        '2023-12-28 16:31:08',
        '2023-12-28 16:31:08'
    );

INSERT INTO
    `orders` (
        `order_id`,
        `user_id`,
        `total_price`,
        `order_date`,
        `address_order`,
        `status_id`,
        `payment_id`
    )
VALUES
    (
        '658da2f00aa52',
        10,
        '843655.50',
        '2023-12-28 16:31:44',
        'Tỉnh Tiền Giang - Huyện Chợ Gạo - Xã An Thạnh Thủy - số 42',
        1,
        2
    );

INSERT INTO
    `order_items` (
        `order_id`,
        `product_id`,
        `quantity`,
        `total_amount`
    )
VALUES
    ('658da2f00aa52', 53, 1, '0.00'),
    ('658da2f00aa52', 1, 1, '145000.00'),
    ('658da2f00aa52', 3, 1, '295000.00'),
    ('658da2f00aa52', 4, 3, '497250.00');

INSERT INTO
    `users` (
        `id`,
        `phone`,
        `password`,
        `full_name`,
        `email`,
        `type_id`
    )
VALUES
    (
        1,
        '0987814172',
        '$2y$10$rGnYG5uR1zjPdNcaO8cm5uq32R2AHAwcK9olzTsj/yW7NMPlky/8e',
        'Tran Anh Thy',
        'anhthy18072003.tran@gmail.com',
        1
    );`