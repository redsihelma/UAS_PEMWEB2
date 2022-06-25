<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\KendaraanController;

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

Route::get('/', [KendaraanController::class, 'index']);
Route::get('/read', [KendaraanController::class, 'read']);
Route::get('/create', [KendaraanController::class, 'create']);
Route::get('/store', [KendaraanController::class, 'store']);
Route::get('/show/{id}', [KendaraanController::class, 'show']);
Route::get('/update/{id}', [KendaraanController::class, 'update']);
Route::get('/destroy/{id}', [KendaraanController::class, 'destroy']);