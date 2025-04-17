<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::get('/users', [ApiController::class, 'users']);
Route::get('/partners', [ApiController::class, 'partners']);
Route::get('/activities', [ApiController::class, 'activities']);