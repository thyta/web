USE web;

INSERT INTO user_types (type_name) VALUES
('admin'),
('user');

-- INSERT INTO users (username, password, full_name, tel, email, type_id) VALUES
-- ('admin', 'admin', 'Thy Anh Tran', '123-456-7890', 'tathy@gm.com', 1), -- 'admin' type
-- ('daniis', 'password', 'Daniis Axelor', '987-654-3210', 'da@gm.com', 2); -- 'user' type


-- SELECT u.id, u.username, u.full_name, u.tel, u.email, ut.type_name
-- FROM users u
-- JOIN user_types ut ON u.type_id = ut.type_id;
