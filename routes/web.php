<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Berita', [BeritaController::class, 'index']);
Route::get('/Berita/{id}', [BeritaController::class, 'detail']);
