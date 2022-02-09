<?php

return [
    'table_name' => 'products',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `products`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `products` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `description` TEXT,
        `price` decimal(6,2),
        `stock` int(11),
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
                'name'          => 'Plush Cow',
                'image'         => 'plushcow.jpg',
                'price'         => 23.99,
                'stock'         => 150,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 2,
                'name'          => 'Plush Tiger',
                'image'         => 'tiger.jpg',
                'price'         => 21.99,
                'stock'         => 100,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 3,
                'name'          => 'Plush Elephant',
                'image'         => 'plushelephant.jpg',
                'price'         => 17.99,
                'stock'         => 120,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 4,
                'name'          => 'Sloth Blanket',
                'image'         => 'slothblanket.jpg',
                'price'         => 32.99,
                'stock'         => 170,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 5,
                'name'          => 'First Keys',
                'image'         => 'teethingkeys.jpg',
                'price'         => 11.99,
                'stock'         => 150,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 6,
                'name'          => 'Pooh Blanket',
                'image'         => 'poohblanket.jpg',
                'price'         => 27.99,
                'stock'         => 100,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 7,
                'name'          => 'Soft white Pooh Blanket',
                'image'         => 'whitepoohblanket.jpeg',
                'price'         => 28.99,
                'stock'         => 120,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 8,
                'name'          => 'Your Babies First Puzzle',
                'image'         => 'lionpuzzle.jpeg',
                'price'         => 23.99,
                'stock'         => 130,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 9,
                'name'          => 'Animal Puzzle Mat',
                'image'         => 'puzzlemat.jpg',
                'price'         => 27.99,
                'stock'         => 120,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 10,
                'name'          => 'Teddybear',
                'image'         => 'teddybear.jpg',
                'price'         => 24.99,
                'stock'         => 100,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 11,
                'name'          => 'Red Teddybear',
                'image'         => 'redteddy.jpg',
                'price'         => 25.99,
                'stock'         => 120,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ],

            [
                'id'            => 12,
                'name'          => 'Corgi',
                'image'         => 'corgi.jpeg',
                'price'         => 24.99,
                'stock'         => 20,
                'created_at'    => date('Y-m-d H:i:s'),
                'created_by'    => 2,
            ]
        ),
    ]
];





