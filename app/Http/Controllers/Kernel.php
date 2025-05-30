<?php

// app/Http/Kernel.php

protected $middlewareGroups = [
    'web' => [
        // ...
    ],

    'api' => [
        \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        \Illuminate\Http\Middleware\HandleCors::class, // <-- PASTIKAN INI ADA DI SINI
    ],
];