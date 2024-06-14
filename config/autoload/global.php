<?php


return [
   'db' => [
        'driver' => 'Pdo',
        'dsn'    => 'mysql:dbname=book-laminas;host=localhost',
        'username' => 'root', // Sesuaikan dengan username MySQL di MAMP Anda
        'password' => 'root', // Sesuaikan dengan password MySQL di MAMP Anda
        'driver_options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],
    'service_manager' => [
        'factories' => [
            Laminas\Db\Adapter\AdapterInterface::class => Laminas\Db\Adapter\AdapterServiceFactory::class,
        ],
    ],
    'modules' => [
        'Laminas\\Router',
        'Laminas\\Db',
        'Book',
    ],
];
