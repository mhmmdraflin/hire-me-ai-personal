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
    echo "=== BONGKAR AKAR MASALAH VERCEL ===\n\n";
    
    $error = $e;
    $urutan = 1;
    
    while ($error !== null) {
        echo "💥 LAPISAN ERROR KE-" . $urutan . "\n";
        echo "Pesan : " . $error->getMessage() . "\n";
        echo "File  : " . $error->getFile() . "\n";
        echo "Baris : " . $error->getLine() . "\n";
        echo "--------------------------------------------------\n\n";
        
        // Gali error sebelumnya (akar masalah)
        $error = $error->getPrevious();
        $urutan++;
    }
    
    echo "</pre>";
}
