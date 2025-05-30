<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumStatisticsController;
use App\Http\Controllers\ForumController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/user', [AuthController::class, 'getUser']);
Route::get('/forum-statistics', [ForumStatisticController::class, 'getStatistics']);
Route::get('/forum', [ForumController::class, 'index']);
