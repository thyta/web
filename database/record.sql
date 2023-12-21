USE web;

INSERT INTO
    user_types (type_name)
VALUES
    ('admin'),
    ('user');

-- INSERT INTO users (username, password, full_name, tel, email, type_id) VALUES
-- ('admin', 'admin', 'Thy Anh Tran', '123-456-7890', 'tathy@gm.com', 1), -- 'admin' type
-- ('daniis', 'password', 'Daniis Axelor', '987-654-3210', 'da@gm.com', 2); -- 'user' type
-- SELECT u.id, u.username, u.full_name, u.tel, u.email, ut.type_name
-- FROM users u
-- JOIN user_types ut ON u.type_id = ut.type_id;
INSERT INTO
    categories (category_name)
VALUES
    ('Chăm sóc da'),
    ('Chăm sóc tóc'),
    ('Tắm và dưỡng thể'),
    ('Dưỡng môi'),
    ('Combo sản phẩm');

INSERT INTO
    products (
        product_name,
        description,
        price,
        stock_quantity,
        sold_quantity,
        category_id,
        imgLink,
        created_at,
        updated_at,
        discount_percentage,
        discount_start_date,
        discount_end_date
    )
VALUES
    (
        'Kem ủ tóc bưởi Cocoon giúp giảm gãy rụng và làm mềm tóc 200ml',
        'Kem ủ tóc với tinh dầu bưởi truyền thống Việt Nam, Vitamin B5 và Xylishine™ giúp giảm gãy rụng, cung cấp độ ẩm, mang lại sự mềm mại và chắc khoẻ cho sợi tóc.

Công dụng:

• Giải pháp giảm gãy rụng tóc
• Làm mềm sợi tóc, giúp tóc suôn mượt vào nếp
• Tăng cường sự chắc khỏe lâu dài của mái tóc

Thành phần chính:
• Tinh dầu vỏ bưởi nguyên chất: Chứa hàm lượng limonene rất cao giúp giảm tình trạng rụng tóc, giúp hạn chế tình trạng gàu.
• Vitamin B5 (Panthenol): Cung cấp độ ẩm cho tóc, ngăn ngừa hư tổn, làm dày tóc và cải thiện độ bóng khỏe của mái tóc.
• Xylishine: Được chiết xuất từ các loại đường tự nhiên từ gỗ và từ tảo nâu Pelvetia Canaliculata giúp cấp ẩm, phục hồi và tăng cường độ bóng của tóc. 

Lý tưởng cho:
• Tóc dễ gãy rụng
• Tóc chậm phát triển
• Tóc yếu

Cách sử dụng:
Sau khi gội, lấy một lượng sản phẩm vừa đủ và mát-xa đều lên thân tóc, ủ trên tóc từ 5-10 phút, sau đó xả sạch lại với nước. Sử dụng ít nhất 2 lần/tuần để có kết quả tốt nhất.

Lượng dùng:
Một lượng vừa đủ để thoa lên toàn bộ tóc.

Kết cấu:
Kết cấu dạng kem đặc.

Mùi hương:
Mùi tinh dầu bưởi thanh mát.

Lưu ý:

Chỉ sử dụng ngoài da, đậy kín sau khi sử dụng.

Ưu điểm:
Không Sulfate
Không Paraben
Không chứa cồn
Không dầu khoáng

Thành phần chi tiết:
Aqua/Water, Cetyl Alcohol, Glyceryl Stearate, Cetearyl Alcohol, Synthetic Beeswax, Behentrimonium Chloride, Ceteareth-20, Ceteareth-12, Glycerin, Cyclopentasiloxane, Caprylic/Capric Triglyceride, Citrus Grandis Peel Oil, Butyrospermum Parkii Butter, Panthenol, Cocos Nucifera Oil, Epilobium Angustifolium Flower/Leaf/Stem Extract, Triticum Vulgare Seed Extract, Thymus Vulgaris Extract, Pelvetia Canaliculata Extract, Glycereth-26, Sodium Pca, Sodium Lactate, Arginine, Aspartic Acid, Pca, Glycine, Alanine, Serine, Valine, Proline, Threonine, Isoleucine, Histidine, Phenylalanine, Xylitylglucoside, Anhydroxylitol, Maltitol, Xylitol, Calcium Pantothenate, Pyridoxine Hcl, Dimethicone, Dimethiconol, Bis-(Isostearoyl/Oleoyl Isopropyl) Dimonium Methosulfate, Citrus Aurantium Dulcis Peel Oil, Tocopherol, Mentha Piperita Oil, Cetyl Palmitate, Polyquaternium-10, Dipropylene Glycol, Propylene Glycol, Hydroxyethylcellulose, Guar Hydroxypropyltrimonium Chloride, Amodimethicone, Laureth-23, Laureth-4, Polyglyceryl-3 Caprate, Silicone Quaternium-22, Cocamidopropyl Betaine, Caramel, Parfum, Cetylpyridinium Chloride, Trisodium Ethylenediamine Disuccinate, Ethylhexylglycerin, Phenoxyethanol, Sodium Hydroxide
',
        215.00,
        100,
        -- Initial stock quantity
        3900,
        -- Initial sold quantity
        1,
        -- Assuming category_id 1 for "Chăm sóc tóc"
        'https://down-vn.img.susercontent.com/file/vn-11134207-7qukw-lf9m1pifttg75e',
        CURRENT_TIMESTAMP,
        CURRENT_TIMESTAMP,
        0,
        -- Initial discount percentage
        '2023-01-01',
        -- Replace with your desired start date
        '2023-12-31' -- Replace with your desired end date
    );

-- Inserting a sample coupon
INSERT INTO
    coupons (
        coupon_code,
        discount_percentage,
        start_date,
        end_date
    )
VALUES
    (
        'SAMPLECODE123',
        10.00,
        -- 10% discount
        '2023-01-01',
        -- Replace with your desired start date
        '2023-12-31' -- Replace with your desired end date
    );

-- Inserting another sample coupon
INSERT INTO
    coupons (
        coupon_code,
        discount_percentage,
        start_date,
        end_date
    )
VALUES
    (
        'DISCOUNT50',
        50.00,
        -- 50% discount
        '2023-06-01',
        -- Replace with your desired start date
        '2023-06-30' -- Replace with your desired end date
    );