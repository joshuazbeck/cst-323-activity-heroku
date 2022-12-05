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


Route::get('/', [\App\Http\Controllers\CarController::class, 'list']);
Route::get('/edit/{car}', [\App\Http\Controllers\CarController::class, 'edit']);
Route::get('/{car}', [\App\Http\Controllers\CarController::class, 'view']);
Route::get('/car/add', [\App\Http\Controllers\CarController::class, 'add']);
Route::post('/addcar', [\App\Http\Controllers\CarController::class, 'store']);
Route::get('/update/{id}', [\App\Http\Controllers\CarController::class, 'update']);
Route::get('/delete/{id}', [\App\Http\Controllers\CarController::class, 'delete']);

