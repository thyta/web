USE web;
-- BẢNG LIÊN HỆ CỦA BIN, ĐỪNG ĐỤNG DÔ T CHẶT TAY
CREATE TABLE IF NOT EXISTS `contacts` (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    contact_name VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    contact_phone VARCHAR(20) NOT NULL,
    contact_email VARCHAR(255) NOT NULL,
    question TEXT COLLATE utf8_unicode_ci NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_phone`, `contact_email`, `question`) VALUES
-- thông tin
COMMIT;