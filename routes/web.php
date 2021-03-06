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

use App\Http\Controllers\admin\Pemerintah;
use App\Http\Controllers\admin\DataDesa;
use App\Http\Controllers\admin\Profile;
use App\Http\Controllers\admin\Berita;
use App\Http\Controllers\admin\Gamas;
use App\Http\Controllers\admin\Produk;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

//Route client or user
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}/{slug}', [HomeController::class, 'detailBerita']);
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
Route::post('/komentar', [HomeController::class, 'store_comment']);
Route::get('/gamas/detail/{id}', [HomeController::class, 'gamas_detail']);
Route::get('/produk/info/{id}', [HomeController::class, 'produk_detail']);
Route::post('/sendVote', [HomeController::class, 'sendVote']);
// 


//Routing admin 
Route::get('/admin/profile', [Profile::class, 'profile'])->name('daftarPro');
Route::get('/admin/editprofile/{id}', [Profile::class, 'form_edit_profile']);
Route::post('/admin/updateprofile', [Profile::class, 'updateProfile']);
Route::post('/admin/uploadImage', [Profile::class, 'uploadImage'])->name('admin.update');
Route::get('/admin/sejarah', [Profile::class, 'sejarah'])->name('daftar_Sejarah');
Route::get('/admin/editSejarah/{id}', [Profile::class, 'form_edit_sejarah']);
Route::post('/admin/updateSejarah', [Profile::class, 'updateSejarah']);
Route::get('/admin/visimisi', [Pemerintah::class, 'visimisi'])->name('dataVisiMisi');
Route::get('/admin/editVisiMisi', [Pemerintah::class, 'editVisimisi']);
Route::post('/admin/updateVisi', [Pemerintah::class, 'updateVisMisi']);
Route::get('/admin/pemerintah', [Pemerintah::class, 'pemerintah']);
Route::post('/admin/pemerintah', [Pemerintah::class, 'updatePemerintah']);
Route::get('/admin/pemerintah/{id}', [Pemerintah::class, 'form_pemerintah']);

//administratif
Route::get('/admin/administratif', [DataDesa::class, 'administratif']);
Route::get('/admin/administratif/edit/{id}', [DataDesa::class, 'edit_administratif']);
Route::get('/admin/administratif/add', [DataDesa::class, 'add_administratif']);
Route::post('/admin/administratif/add', [DataDesa::class, 'store_administratif']);
Route::get('/admin/administratif/del/{id}', [DataDesa::class, 'del_administratif']);
Route::post('/admin/administratif/update', [DataDesa::class, 'update_administratif']);

//pendidikan 
Route::get('/admin/pendidikan', [DataDesa::class, 'pendidikan']);
Route::get('/admin/pendidikan/add', [DataDesa::class, 'add_pendidikan']);
Route::post('/admin/pendidikan/add', [DataDesa::class, 'store_pendidikan']);
Route::get('/admin/pendidikan/edit/{id}', [DataDesa::class, 'edit_pendidikan']);
Route::get('/admin/pendidikan/del/{id}', [DataDesa::class, 'del_pendidikan']);
Route::post('/admin/pendidikan/update', [DataDesa::class, 'update_pendidikan']);

//jenis kelamin
Route::get('/admin/jk', [DataDesa::class, 'jenis_kelamin']);
Route::get('/admin/jk/add', [DataDesa::class, 'add_jenis_kelamin']);
Route::post('/admin/jk/add', [DataDesa::class, 'store_jenis_kelamin']);
Route::get('/admin/jk/edit/{id}', [DataDesa::class, 'edit_jk']);
Route::post('/admin/jk/update', [DataDesa::class, 'update_edit_jk']);
Route::get('/admin/jk/del/{id}', [DataDesa::class, 'del_jk']);


//jenis kelamin
Route::get('/admin/umur', [DataDesa::class, 'umur']);
Route::get('/admin/umur/add', [DataDesa::class, 'add_umur']);
Route::post('/admin/umur/add', [DataDesa::class, 'store_umur']);
Route::get('/admin/umur/edit/{id}', [DataDesa::class, 'edit_umur']);
Route::post('/admin/umur/update', [DataDesa::class, 'update_edit_umur']);
Route::get('/admin/umur/del/{id}', [DataDesa::class, 'del_umur']);


//berita
Route::get('/admin/berita', [Berita::class, 'index']);
Route::get('/admin/create_berita', [Berita::class, 'create_berita']);
Route::post('/admin/create_berita', [Berita::class, 'store_berita']);
Route::get('/admin/berita/del/{id}', [Berita::class, 'del_berita']);
Route::get('/admin/berita/edit/{id}', [Berita::class, 'form_edit']);
Route::post('/admin/update_berita', [Berita::class, 'update_berita']);

//Lembaga Masyarakat 
Route::get('/admin/gamas', [Gamas::class, 'index']);
Route::get('/admin/gamas/add', [Gamas::class, 'add']);
Route::post('/admin/gamas/add', [Gamas::class, 'store']);
Route::get('/admin/gamas/edit/{id}', [Gamas::class, 'edit']);
Route::post('/admin/gamas/update', [Gamas::class, 'update']);
Route::get('/admin/gamas/del/{id}', [Gamas::class, 'del']);


//Produk Desa
Route::get('/admin/produk', [Produk::class, 'index']);
Route::get('/admin/produk/add', [Produk::class, 'add']);
Route::post('/admin/produk/add', [Produk::class, 'store']);
Route::get('/admin/produk/edit/{id}', [Produk::class, 'edit']);
Route::post('/admin/produk/update', [Produk::class, 'update']);
Route::get('/admin/produk/del/{id}', [Produk::class, 'del']);
Route::get('/admin/produk/del_gallery/{id}', [Produk::class, 'del_gallery']);
