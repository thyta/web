USE web;

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