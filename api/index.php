<?php
// Paksa respon menjadi JSON agar tidak butuh 'view'
$_SERVER['HTTP_ACCEPT'] = 'application/json';

try {
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';

    // --- TAMBAHAN UNTUK VERCEL ---
    $storagePath = '/tmp/storage';
    $directories = [
        $storagePath . '/framework/views',
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/logs',
    ];

    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    $app->useStoragePath($storagePath);
    // -----------------------------

    $app->handleRequest(Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    echo "<pre>";
    echo "<h1>INI ERROR ASLINYA:</h1>";
    echo "Pesan Error: " . $e->getMessage() . "<br><br>";
    echo "Lokasi File: " . $e->getFile() . "<br>";
    echo "Baris ke-: " . $e->getLine();
    echo "</pre>";
}
