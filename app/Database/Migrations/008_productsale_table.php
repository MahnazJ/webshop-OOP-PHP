<?php

return [
    'table_name' => 'productsale',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `productsale`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `productsale` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `description` TEXT,
        `price` decimal(6,2),
        `stock` int(11),
        `color` varchar(120),
        `created_at` timestamp NOT NULL,
        `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted_at` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `products` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `products` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `products` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'id'            => 1,
                'name'          => 'Musical Toy',
                'image'         => 'musicaltoy.jpg',
                'price'         => 17.99,
                'stock'         => 150,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'id'            => 2,
                'name'          => 'Swiss Cheese',
                'image'         => 'cheese.jpg',
                'price'         => 12.99,
                'stock'         => 150,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'id'            => 3,
                'name'          => 'Colorful Toy',
                'image'         => 'colourfultoy.jpg',
                'price'         => 7.99,
                'stock'         => 150,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
            [
                'id'            => 4,
                'name'          => 'Cauliflower',
                'image'         => 'cauliflower.jpg',
                'price'         => 15.99,
                'stock'         => 150,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],
           

        ),
    ]
];

