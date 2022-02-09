<?php
return [
    'table_name' => 'test',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS =0; DROP TABLE IF EXISTS `test`; SET FOREIGN_KEY_CHECKS = 1;",

    'scheme' => "CREATE TABLE IF NOT EXISTS `test` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(80) NOT NULL,
        `age`   int(11) NOT NULL,
        `created_at` timestamp NOT NULL,
        `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted_at` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",

'seeder' => [
    'type' => 'array',
    'data' => array(
        [
            'name'       => 'Tapal',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'Cake',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1
        ],

        [
            'name'       => 'Pistachio',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1
        ]
    ),
],
];


