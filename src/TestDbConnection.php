<?php

// Load autoloader dari composer
require_once __DIR__ . '/../vendor/autoload.php';

use Laminas\Db\Adapter\Adapter;

// Ambil konfigurasi dari aplikasi Laminas
$config = require __DIR__ . '/../config/autoload/global.php';

try {
    // Buat adapter database
    $adapter = new Adapter($config['db']);

    // Coba melakukan koneksi
    $connection = $adapter->getDriver()->getConnection();
    $connection->connect();

    echo "Koneksi database berhasil!\n";
} catch (\Exception $e) {
    echo "Koneksi database gagal: " . $e->getMessage() . "\n";
}
