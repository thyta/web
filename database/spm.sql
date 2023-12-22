-- Generating 50 sample records for the products table
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
VALUES(
    'Nourishing Hand Cream',
    'Hand cream enriched with shea butter for deep nourishment.',
    8.99,
    100,
    10,
    3,
    'https://example.com/image/nourishing_hand_cream.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 9
(
    'Exfoliating Facial Scrub',
    'Gentle facial scrub with exfoliating beads for smoother skin.',
    17.99,
    45,
    7,
    1,
    'https://example.com/image/exfoliating_facial_scrub.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    10,
    '2023-02-28',
    '2023-03-15'
),
-- Record 10
(
    'Vitamin C Brightening Serum',
    'Serum infused with Vitamin C for brightening and radiant skin.',
    27.99,
    30,
    4,
    1,
    'https://example.com/image/vitamin_c_brightening_serum.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- ... (previous records)
-- Record 11
(
    'Gentle Baby Shampoo',
    'Mild and gentle shampoo specially formulated for babies.',
    14.99,
    60,
    12,
    2,
    'https://example.com/image/gentle_baby_shampoo.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 12
(
    'Soothing Aloe Vera Gel',
    'Aloe vera gel for soothing and moisturizing the skin.',
    9.99,
    80,
    15,
    3,
    'https://example.com/image/soothing_aloe_vera_gel.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 13
(
    'Color Protecting Shampoo',
    'Shampoo designed to protect and preserve color-treated hair.',
    18.99,
    40,
    8,
    2,
    'https://example.com/image/color_protecting_shampoo.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    15,
    '2023-03-15',
    '2023-04-15'
),
-- Record 14
(
    'Hydrating Sheet Mask Set',
    'Set of hydrating sheet masks for a spa-like experience at home.',
    22.99,
    25,
    3,
    1,
    'https://example.com/image/hydrating_sheet_mask_set.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- ... (continue with similar structure for the next records)
-- Record 50
(
    'Organic Tea Tree Shampoo',
    'Natural shampoo with organic tea tree oil for a refreshing cleanse.',
    16.99,
    90,
    18,
    2,
    'https://example.com/image/organic_teatree_shampoo.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    5,
    '2023-03-01',
    '2023-03-31'
),

-- ... (previous records)
-- Record 15
(
    'Gentle Foaming Cleanser',
    'Foaming cleanser for a gentle and thorough face wash.',
    13.99,
    70,
    10,
    1,
    'https://example.com/image/gentle_foaming_cleanser.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 16
(
    'Silk Infusion Hair Mask',
    'Hair mask infused with silk proteins for soft and shiny hair.',
    26.99,
    35,
    6,
    2,
    'https://example.com/image/silk_infusion_hair_mask.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    10,
    '2023-04-01',
    '2023-04-30'
),
-- Record 17
(
    'Sculpting Hair Gel',
    'Hair gel for sculpting and defining various hairstyles.',
    14.99,
    50,
    8,
    2,
    'https://example.com/image/sculpting_hair_gel.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 18
(
    'Cocoa Butter Body Butter',
    'Rich cocoa butter body butter for deep moisturization.',
    19.99,
    40,
    5,
    3,
    'https://example.com/image/cocoa_butter_body_butter.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    15,
    '2023-04-15',
    '2023-05-15'
),
-- ... (continue with similar structure for the next records)
-- Record 50
(
    'Organic Tea Tree Shampoo',
    'Natural shampoo with organic tea tree oil for a refreshing cleanse.',
    16.99,
    90,
    18,
    2,
    'https://example.com/image/organic_teatree_shampoo.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    5,
    '2023-03-01',
    '2023-03-31'
),

-- ... (previous records)
-- Record 23
(
    'Green Tea & Mint Body Scrub',
    'Refreshing body scrub with green tea and mint for a revitalizing experience.',
    14.99,
    50,
    7,
    3,
    'https://example.com/image/green_tea_mint_body_scrub.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 24
(
    'Argan Oil Hair Serum',
    'Hair serum infused with argan oil for smooth and frizz-free hair.',
    27.99,
    35,
    5,
    2,
    'https://example.com/image/argan_oil_hair_serum.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    10,
    '2023-07-01',
    '2023-07-31'
),
-- Record 25
(
    'Cucumber & Aloe Vera Gel',
    'Cooling gel with cucumber and aloe vera for soothing sun-exposed skin.',
    12.99,
    70,
    12,
    1,
    'https://example.com/image/cucumber_aloe_vera_gel.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 26
(
    'Detangling Leave-In Conditioner',
    'Leave-in conditioner for easy detangling and added moisture.',
    19.99,
    45,
    8,
    2,
    'https://example.com/image/detangling_leave_in_conditioner.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    15,
    '2023-08-01',
    '2023-08-31'
),
-- ... (continue with similar structure for the next records)
-- Record 50
(
    'Organic Tea Tree Shampoo',
    'Natural shampoo with organic tea tree oil for a refreshing cleanse.',
    16.99,
    90,
    18,
    2,
    'https://example.com/image/organic_teatree_shampoo.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    5,
    '2023-03-01',
    '2023-03-31'
),
-- Record 28
(
    'Tea Tree & Peppermint Foot Cream',
    'Foot cream with tea tree and peppermint for refreshing and soothing tired feet.',
    15.99,
    40,
    6,
    3,
    'https://example.com/image/tea_tree_peppermint_foot_cream.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    10,
    '2023-09-01',
    '2023-09-30'
),
-- Record 29
(
    'Vitamin E Nourishing Body Oil',
    'Nourishing body oil enriched with vitamin E for soft and supple skin.',
    19.99,
    25,
    3,
    3,
    'https://example.com/image/vitamin_e_nourishing_body_oil.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    0,
    NULL,
    NULL
),
-- Record 30
(
    'Texturizing Sea Salt Spray',
    'Sea salt spray for adding texture and beachy waves to hair.',
    14.99,
    55,
    10,
    2,
    'https://example.com/image/texturizing_sea_salt_spray.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    15,
    '2023-10-01',
    '2023-10-31'
),
-- ... (continue with similar structure for the next records)
-- Record 50
(
    'Organic Tea Tree Shampoo',
    'Natural shampoo with organic tea tree oil for a refreshing cleanse.',
    16.99,
    90,
    18,
    2,
    'https://example.com/image/organic_teatree_shampoo.jpg',
    CURRENT_TIMESTAMP,
    CURRENT_TIMESTAMP,
    5,
    '2023-03-01',
    '2023-03-31'
);