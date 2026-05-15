<?php

if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
}
// Pastikan folder storage dan cache ada di /tmp (satu-satunya tempat writable di Vercel)
$storagePath = '/tmp/storage/bootstrap/cache';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0755, true);
}

// Set environment variable untuk storage path
putenv("VIEW_COMPILED_PATH=/tmp/storage/framework/views");
putenv("DATA_CACHE_PATH=/tmp/storage/framework/cache");

require __DIR__ . '/../public/index.php';