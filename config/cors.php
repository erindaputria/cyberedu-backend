<?php

// config/cors.php
return [
    /*
     |--------------------------------------------------------------------------
     | Cross-Origin Resource Sharing (CORS) Configuration
     |--------------------------------------------------------------------------
     |
     | Here you may configure your settings for cross-origin resource sharing
     | or "CORS". This determines which domains are allowed to access your
     | application via HTTP requests from a web browser.
     |
     | IMPORTANT: For a React frontend running on localhost:3000 and Laravel
     | backend on 127.0.0.1:8000, these are considered DIFFERENT origins.
     |
     */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Pastikan ini mencakup path API Anda
                                               // 'api/*' akan mencakup '/api/forum-statistics'

    'allowed_methods' => ['*'], // Izinkan semua metode HTTP (GET, POST, PUT, DELETE, dll.)

    'allowed_origins' => [
        'http://localhost:5173', // React dengan Vite biasanya di port 5173
    'http://127.0.0.1:5173', // fallback untuk akses via IP
    ],

    'allowed_origins_patterns' => [], // Biarkan kosong

    'allowed_headers' => ['*'], // Izinkan semua header

    'exposed_headers' => [],

    'max_age' => 0, // Cache preflight requests for 0 seconds

    'supports_credentials' => false, // Set ke true jika Anda menggunakan otentikasi berbasis cookie/session (Sanctum)
];
