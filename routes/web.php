<?php

use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('siswa/home');
});


Route::get('/home', [siswaController::class, 'daftarSiswa']);
Route::get('/tambah', [siswaController::class, 'tambahSiswa']);
Route::post('/home', [siswaController::class, 'tambahData']);