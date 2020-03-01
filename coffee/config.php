<?php

return [
    'database' => [
        'name' => 'sacostysdy_cafe_manager',
        'charset' => 'utf8',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1:3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    ]
]

?>