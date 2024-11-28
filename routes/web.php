<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransOrderController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// [/] Digunakan sebgagai default route
// Method Get : untuk melihat
// Method Push : Mengirim data dari form (insert, update)
// Put : Mengirim data dari form (update)
// Delete : Mengirim data dari form untuik dihapus

// Default route
// Route::get('/', function () {
//     return view('kalkulator.index');
// });
route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::post('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

//grouping routes
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('paket', ServiceController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('trans_order', TransOrderController::class);
});
Route::get('latihan',  [LearnController::class, 'index']);
Route::get('edit/{id}',  [LearnController::class, 'edit']);
Route::get('hapus/{id}',  [LearnController::class, 'delete']);

Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::get('tambah', [KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang', [KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali', [KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi', [KalkulatorController::class, 'bagi'])->name('bagi');


Route::post('store-tambah', [KalkulatorController::class, 'storeTambah'])->name('store-tambah');

Route::post('store-kurang', [KalkulatorController::class, 'storeKurang'])->name('store-kurang');

Route::post('store-kali', [KalkulatorController::class, 'storeKali'])->name('store-kali');

Route::post('store-bagi', [KalkulatorController::class, 'storeBagi'])->name('store-bagi');

route::resource('user', UsersController::class);

Route::get('delete/{id}', [UsersController::class, 'delete'])->name('delete');
