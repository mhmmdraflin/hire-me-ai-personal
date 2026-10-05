<?php

// 1. Memuat autoloader dari Composer
require __DIR__.'/../vendor/autoload.php';

// 2. Memuat aplikasi Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// 3. Mengatur penyimpanan Vercel (karena Vercel hanya mengizinkan tulis di /tmp)
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

// Memastikan driver session adalah cookie untuk serverless
putenv('SESSION_DRIVER=cookie');
$_ENV['SESSION_DRIVER'] = 'cookie';
$_SERVER['SESSION_DRIVER'] = 'cookie';

// 4. Jalankan aplikasi ke browser pengguna
if (method_exists($app, 'handleRequest')) {
    // Penanganan untuk Laravel versi 11 ke atas
    $request = Illuminate\Http\Request::capture();
    $app->handleRequest($request);
} else {
    // Penanganan untuk Laravel versi 10 ke bawah
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle($request = Illuminate\Http\Request::capture());
    $response->send();
    $kernel->terminate($request, $response);
}
