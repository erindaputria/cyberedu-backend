<?php

use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->json(['message' => 'Not Found. This is API backend only.'], 404);
});
