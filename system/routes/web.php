<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminProdukController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('template', function () {
    return view('template.base');
});

Route::get('index', function () {
    return view('index');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('detailproduk', function () {
    return view('detailproduk');
});


//admin
Route::get('AdminBeranda', [HomeController::class, 'showAdminBeranda']);
Route::get('AdminKategori', [HomeController::class, 'showAdminKategori']);
Route::get('AdminPromo', [HomeController::class, 'showAdminPromo']);
Route::get('AdminPelanggan', [HomeController::class, 'showAdminPelanggan']);
Route::get('AdminSuplier', [HomeController::class, 'showAdminSuplier']);
Route::get('login', [AuthController::class, 'showlogin']);
Route::get('AdminBase', function () {
    return view('AdminBase');
});


Route::get('AdminProduk', [AdminProdukController::class, 'index']);
Route::get('AdminProduk/create', [AdminProdukController::class, 'create']);
Route::post('AdminProduk', [AdminProdukController::class, 'store']);
Route::get('AdminProduk/{produk}', [AdminProdukController::class, 'show']);
Route::get('AdminProduk/{produk}/edit', [AdminProdukController::class, 'edit']);
Route::Put('AdminProduk/{produk}', [AdminProdukController::class, 'update']);
Route::delete('AdminProduk/{produk}', [AdminProdukController::class, 'destroy']);
