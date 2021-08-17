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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [HomeController::class, 'detailBerita']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/sejarah', [HomeController::class, 'sejarah']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/pemerintah', [HomeController::class, 'pemerintah']);
Route::get('/pkk', [HomeController::class, 'pkk']);
Route::get('/karangtaruna', [HomeController::class, 'karangtaruna']);
Route::get('/wilayah', [HomeController::class, 'wilayah']);
Route::get('/pendidikan', [HomeController::class, 'pendidikan']);
Route::get('/jk', [HomeController::class, 'jk']);
Route::get('/kelumur', [HomeController::class, 'kelumur']);
