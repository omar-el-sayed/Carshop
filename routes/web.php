<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarShopController;
use App\Http\Controllers\ItemsController;
;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'App\Http\Controllers\CarShopController@index');
// Route::get('/carshop', [CarShopController::class, 'index']);
// Route::get('/carshop/create', [CarShopController::class, 'create']);
Route::get('/items', [ItemsController::class, 'index']);


Route::resource('carshop', CarShopController::class);
