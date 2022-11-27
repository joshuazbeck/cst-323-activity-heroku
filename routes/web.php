<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [\App\Http\Controllers\ViewCarController::class, 'show']);
Route::get('/edit/{car}', [\App\Http\Controllers\EditCarController::class, 'show']);
Route::get('/{car}', [\App\Http\Controllers\DisplayCarController::class, 'show']);
Route::get('/add', [\App\Http\Controllers\AddCarController::class, 'show']);

